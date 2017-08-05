<?php
namespace controller;
use berkaPhp\Controller\AppController;
use \berkaPhp\helpers\SessionHelper;
use \cqudefus\helpers\DB;
use \berkaPhp\helpers;
use Dompdf\Dompdf;


class AssetController extends AppController {

    private $mailer;
    function __construct()
    {
        parent::__construct(false);

        $this->mailer = $this->loadComponent("Email");
    }

    function email() {

        if($this->is_set($this->getPost())) {

            $requested_id = \cqudefus\helpers\Rand::uniqueDigit();
            if(SessionHelper::exist('option')) {

                $option_ids = implode(",",SessionHelper::get("option"));

                if(!empty($option_ids)) {
                    $options = DB::extractRows($this->dbInstance(
                        "SELECT * FROM feature_options JOIN feature_prices ON op_price_id = price_id
                        JOIN features ON op_ref_feature = id WHERE op_id IN (" . $option_ids . ") ORDER BY op_ref_feature"
                    ));

                    $this->appView->set("requested_id", $requested_id);
                    $this->appView->set("options", $options);
                }

            }

            $content = $this->appView->renderGetContent('Asset/html');
            $is_sent = $this->mailer->send("cqudefus", "Quote", "", $content, $this->getPost()['email']);

            if($is_sent) {
                echo 'Email has been successfully sent';
            } else {
                echo 'opp Something went wrong, try again';
            }

        } else {
            echo 'invalid method';
        }

    }

    function downloadPdf() {

        $requested_id = \cqudefus\helpers\Rand::uniqueDigit();

        if(SessionHelper::exist('option')) {

            $option_ids = implode(",",SessionHelper::get("option"));
            if(!empty($option_ids)) {

                $options = DB::extractRows($this->dbInstance(
                    "SELECT * FROM feature_options JOIN feature_prices ON op_price_id = price_id
                    JOIN features ON op_ref_feature = id WHERE op_id IN (" . $option_ids . ") ORDER BY op_ref_feature"
                ));

                $this->appView->set("requested_id", $requested_id);
                $this->appView->set("options", $options);
            }

            $content = $this->appView->renderGetContent();
            $file_name = "pdf".$requested_id.'.pdf';
            $file_path = "Temp/pdf/".$file_name;

            setlocale(LC_NUMERIC, "C");
            $dompdf = new DOMPDF();
            $dompdf->loadHtml($content);
            $dompdf->setPaper('A4', 'portrait');
            $dompdf->render();

            $pdf_content = $dompdf->output();
            file_put_contents($file_path,$pdf_content);

            header('Content-Type: application/pdf;');
            header('Content-Disposition: attachment; filename='.$file_name);
            readfile($file_path);
            exit;

        }


    }

    function viewPdf() {

        $requested_id = \cqudefus\helpers\Rand::uniqueDigit();

        if(SessionHelper::exist('option')) {

            $option_ids = implode(",", SessionHelper::get("option"));
            if (!empty($option_ids)) {

                $options = DB::extractRows($this->dbInstance(
                    "SELECT * FROM feature_options JOIN feature_prices ON op_price_id = price_id
                    JOIN features ON op_ref_feature = id WHERE op_id IN (" . $option_ids . ") ORDER BY op_ref_feature"
                ));

                $this->appView->set("requested_id", $requested_id);
                $this->appView->set("options", $options);
            }

            $content = $this->appView->renderGetContent('Asset/downloadPdf');
            $file_name = "pdf" . $requested_id . '.pdf';
            $file_path = "Temp/pdf/" . $file_name;

            setlocale(LC_NUMERIC, "C");
            $dompdf = new DOMPDF();
            $dompdf->loadHtml($content);
            $dompdf->setPaper('A4', 'portrait');
            $dompdf->render();

            $pdf_content = $dompdf->output();

            header('Content-Type: application/pdf;');
            echo $pdf_content;
            exit;
        }

    }


}

?>
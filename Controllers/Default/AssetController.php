<?php
namespace controller;
use berkaPhp\Controller\AppController;
use \berkaPhp\helpers\SessionHelper;
use \cqudefus\helpers\DB;
use \berkaPhp\helpers;

class AssetController extends AppController
{

    function __construct()
    {
        parent::__construct(false);
    }

    function html() {

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

        $this->appView->renderAjax();
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

            $content = $this->appView->renderGetContent("Asset/html");

            $file_name = "pdf".$requested_id.'.html';
            $file_path = "Temp/html/".$file_name;

            if(\berkaPhp\helpers\FileStream::writeFile($file_path, $content)) {

            } else {
                echo "error";
            }
        }


    }


}

?>
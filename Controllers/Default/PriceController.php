<?php
namespace controller;
use berkaPhp\Controller\AppController;
use \berkaPhp\helpers\SessionHelper;
use \cqudefus\helpers\DB;

class PriceController extends AppController
{

    function __construct()
    {
        parent::__construct(false);
    }

    function refresh() {

        if(SessionHelper::exist('option')) {

            $option_ids = implode(",",SessionHelper::get("option"));

            if(!empty($option_ids)) {

                $options = DB::extractRows($this->dbInstance(
                    "SELECT * FROM feature_options JOIN feature_prices ON op_price_id = price_id
                    WHERE op_id IN (" . $option_ids . ") ORDER BY op_ref_feature"
                ));

                $this->appView->set("options", $options);
            }
        }

       // $this->appView->set("option", SessionHelper::get('option'));
        $this->appView->renderAjax();
    }


}

?>
<?php
	namespace controller;
	use berkaPhp\Controller\AppController;
    use \berkaPhp\helpers\SessionHelper;
    use \cqudefus\helpers\DB;

	class PagesController extends AppController
	{

		function __construct() {
			parent::__construct(false);
		}

		function index($params = '') {

            $session_categories = SessionHelper::get("category");
			$feature_categories = $this->loadModel("Feature_categories")->fetchAll();

            $this->appView->set("session_categories", $session_categories);
            $this->appView->set("categories", $feature_categories);

            if(isset($params['params']) && $params['params'] == 'back') {
                $this->appView->render_ajax();
            } else {
                $this->appView->render();
            }

		}

        function step_2($params = '') {

            $cat_ids = implode(",",SessionHelper::get("category"));
            $features = DB::extractRows($this->dbInstance("SELECT * FROM features WHERE ref_cat_id IN (".$cat_ids.")"));

            $session_features = SessionHelper::get("feature");
            $this->appView->set("session_features", $session_features);
            $this->appView->set("features", $features);

            $this->appView->render_ajax();
        }

        function step_3($params = '') {
            $this->appView->render_ajax();
        }

        function update() {

            if($this->is_set($this->getPost())) {

                if($this->getPost()['action'] == 'checked') {

                    switch(SessionHelper::exist($this->getPost()['group'])){
                        case true:
                            \cqudefus\helpers\Session::add($this->getPost()['group'], $this->getPost()['id']);
                            break;
                        default:

                            $category_ids = array($this->getPost()['id']);
                            SessionHelper::add($this->getPost()['group'], $category_ids);

                    }

                    echo "Updated";

                } else if($this->getPost()['action'] == 'unchecked'){

                    switch(SessionHelper::exist($this->getPost()['group'])) {
                        case true:

                            \cqudefus\helpers\Session::remove($this->getPost()['group'], $this->getPost()['id']);
                            echo "Updated";

                            break;
                        default:

                    }

                }

            }
        }

	}

?>
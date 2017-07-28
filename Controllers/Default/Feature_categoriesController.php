<?php
	namespace controller;
	use berkaPhp\Controller\AppController;

	class Feature_categoriesController extends AppController
	{

		function __construct() {
			parent::__construct();
		}

        /* Display all feature_categories from database
        *  Default action in this controller
        *  @author berkaPhp
        */

		function index() {

			$result = $this->model->fetchAll();
			$this->appView->set('feature_categories', $result);
			$this->appView->render();

		}

        /* Add feature_category into database
        *  Getting data from Post
        *  @author berkaPhp
        */

		function add() {

			if($this->is_set($this->getPost())) {
				if ($this->model->add($this->getPost())) {
					$this->appView->set('message', ['success'=>'Saved feature_category']);
				} else {
					$this->appView->set('message', ['error'=>' Could not Saved feature_category !']);
				}
			}

			$this->appView->render();
		}

        /* Edit feature_category and update the table
        *  Getting data from Post
        *  Id from params array
        *  @author berkaPhp
        */

		function edit($params) {

			$id = $params['params'];

			if($this->is_set($this->getPost())) {
				if ($this->model->update($this->getPost())) {
					$this->appView->set('message', ['success'=>'Edited feature_category']);
				} else {
					$this->appView->set('message', ['error'=>' Could not Edit feature_category !']);
				}
			}

			$result = $this->model->fetchBy(['fields'=>['cat_id'=>$id]]);
			$this->appView->set('feature_category',$result);
			$this->appView->render();
		}

        /* Delete feature_category from the table
        *  Getting feature_category Id from params array
        *  @author berkaPhp
        */

		function delete($params) {

			$id = $params['params'];

			if($this->model->delete($id)) {
				$this->appView->set('message', ['success'=>'Deleted feature_category']);
			} else {
				$this->appView->set('message', ['error'=>' Could not Delete feature_category !']);
			}

			$this->index();

		}

        /* Viewing feature_category from the table
        *  Getting feature_category Id from params array
        *  @author berkaPhp
        */

		function view($params) {

			$id = $params['params'];

			$result = $this->model->fetchBy(['fields'=>['cat_id'=>$id]]);
			$this->appView->set('feature_category',$result);
			$this->appView->render();
		}

	}

?>
<?php
	namespace controller;
	use berkaPhp\Controller\AppController;

	class Feature_optionsController extends AppController
	{

		function __construct() {
			parent::__construct();
		}

        /* Display all feature_options from database
        *  Default action in this controller
        *  @author berkaPhp
        */

		function index() {

			$result = $this->model->fetchAll();
			$this->appView->set('feature_options', $result);
			$this->appView->render();

		}

        /* Add feature_option into database
        *  Getting data from Post
        *  @author berkaPhp
        */

		function add() {

			if($this->is_set($this->getPost())) {
				if ($this->model->add($this->getPost())) {
					$this->appView->set('message', ['success'=>'Saved feature_option']);
				} else {
					$this->appView->set('message', ['error'=>' Could not Saved feature_option !']);
				}
			}

			$this->appView->render();
		}

        /* Edit feature_option and update the table
        *  Getting data from Post
        *  Id from params array
        *  @author berkaPhp
        */

		function edit($params) {

			$id = $params['params'];

			if($this->is_set($this->getPost())) {
				if ($this->model->update($this->getPost())) {
					$this->appView->set('message', ['success'=>'Edited feature_option']);
				} else {
					$this->appView->set('message', ['error'=>' Could not Edit feature_option !']);
				}
			}

			$result = $this->model->fetchBy(['fields'=>['op_id'=>$id]]);
			$this->appView->set('feature_option',$result);
			$this->appView->render();
		}

        /* Delete feature_option from the table
        *  Getting feature_option Id from params array
        *  @author berkaPhp
        */

		function delete($params) {

			$id = $params['params'];

			if($this->model->delete($id)) {
				$this->appView->set('message', ['success'=>'Deleted feature_option']);
			} else {
				$this->appView->set('message', ['error'=>' Could not Delete feature_option !']);
			}

			$this->index();

		}

        /* Viewing feature_option from the table
        *  Getting feature_option Id from params array
        *  @author berkaPhp
        */

		function view($params) {

			$id = $params['params'];

			$result = $this->model->fetchBy(['fields'=>['op_id'=>$id]]);
			$this->appView->set('feature_option',$result);
			$this->appView->render();
		}

	}

?>
<?php
	namespace controller;
	use berkaPhp\Controller\AppController;

	class FeaturesController extends AppController
	{

		function __construct() {
			parent::__construct();
		}

        /* Display all features from database
        *  Default action in this controller
        *  @author berkaPhp
        */

		function index() {

			$result = $this->model->fetchAll();
			$this->appView->set('features', $result);
			$this->appView->render();

		}

        /* Add feature into database
        *  Getting data from Post
        *  @author berkaPhp
        */

		function add() {

			if($this->is_set($this->getPost())) {
				if ($this->model->add($this->getPost())) {
					$this->appView->set('message', ['success'=>'Saved feature']);
				} else {
					$this->appView->set('message', ['error'=>' Could not Saved feature !']);
				}
			}

			$this->appView->render();
		}

        /* Edit feature and update the table
        *  Getting data from Post
        *  Id from params array
        *  @author berkaPhp
        */

		function edit($params) {

			$id = $params['params'];

			if($this->is_set($this->getPost())) {
				if ($this->model->update($this->getPost())) {
					$this->appView->set('message', ['success'=>'Edited feature']);
				} else {
					$this->appView->set('message', ['error'=>' Could not Edit feature !']);
				}
			}

			$result = $this->model->fetchBy(['fields'=>['id'=>$id]]);
			$this->appView->set('feature',$result);
			$this->appView->render();
		}

        /* Delete feature from the table
        *  Getting feature Id from params array
        *  @author berkaPhp
        */

		function delete($params) {

			$id = $params['params'];

			if($this->model->delete($id)) {
				$this->appView->set('message', ['success'=>'Deleted feature']);
			} else {
				$this->appView->set('message', ['error'=>' Could not Delete feature !']);
			}

			$this->index();

		}

        /* Viewing feature from the table
        *  Getting feature Id from params array
        *  @author berkaPhp
        */

		function view($params) {

			$id = $params['params'];

			$result = $this->model->fetchBy(['fields'=>['id'=>$id]]);
			$this->appView->set('feature',$result);
			$this->appView->render();
		}

	}

?>
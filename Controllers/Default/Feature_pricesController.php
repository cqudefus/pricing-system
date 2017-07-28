<?php
	namespace controller;
	use berkaPhp\Controller\AppController;

	class Feature_pricesController extends AppController
	{

		function __construct() {
			parent::__construct();
		}

        /* Display all feature_prices from database
        *  Default action in this controller
        *  @author berkaPhp
        */

		function index() {

			$result = $this->model->fetchAll();
			$this->appView->set('feature_prices', $result);
			$this->appView->render();

		}

        /* Add feature_price into database
        *  Getting data from Post
        *  @author berkaPhp
        */

		function add() {

			if($this->is_set($this->getPost())) {
				if ($this->model->add($this->getPost())) {
					$this->appView->set('message', ['success'=>'Saved feature_price']);
				} else {
					$this->appView->set('message', ['error'=>' Could not Saved feature_price !']);
				}
			}

			$this->appView->render();
		}

        /* Edit feature_price and update the table
        *  Getting data from Post
        *  Id from params array
        *  @author berkaPhp
        */

		function edit($params) {

			$id = $params['params'];

			if($this->is_set($this->getPost())) {
				if ($this->model->update($this->getPost())) {
					$this->appView->set('message', ['success'=>'Edited feature_price']);
				} else {
					$this->appView->set('message', ['error'=>' Could not Edit feature_price !']);
				}
			}

			$result = $this->model->fetchBy(['fields'=>['price_id'=>$id]]);
			$this->appView->set('feature_price',$result);
			$this->appView->render();
		}

        /* Delete feature_price from the table
        *  Getting feature_price Id from params array
        *  @author berkaPhp
        */

		function delete($params) {

			$id = $params['params'];

			if($this->model->delete($id)) {
				$this->appView->set('message', ['success'=>'Deleted feature_price']);
			} else {
				$this->appView->set('message', ['error'=>' Could not Delete feature_price !']);
			}

			$this->index();

		}

        /* Viewing feature_price from the table
        *  Getting feature_price Id from params array
        *  @author berkaPhp
        */

		function view($params) {

			$id = $params['params'];

			$result = $this->model->fetchBy(['fields'=>['price_id'=>$id]]);
			$this->appView->set('feature_price',$result);
			$this->appView->render();
		}

	}

?>
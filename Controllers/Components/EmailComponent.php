<?php

namespace controller\component;
use berkaPhp\controller\component\AppComponent;

class EmailComponent extends AppComponent {

	function __construct()
	{
		parent::__construct();

		$this->setName('Email');
		$this->setAuthor('berka');
		$this->setDescription('');

	}

	function send($name,$subject, $title,$message, $to) {
		if(!empty ($to)) {
			$email = new \Email();
			if($email->sendEmail($name,$title." ".$subject,$to,$message)) {
				return true;
			} else {
				return false;
			}

		} else {
			return false;
		}
	}

    function test() {
        return "fff";
    }

}

?>
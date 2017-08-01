<?php
require __DIR__ . '/_lib/PHPMailerAutoload.php';
class Email {

	private $mail ;

	public function __construct() {
		$this->mail = new PHPMailer();
		$this->mail->IsSMTP();

		$this->mail->SMTPOptions = array(
			'ssl' => array(
			    'verify_peer' => false,
			    'verify_peer_name' => false,
			    'allow_self_signed' => true
			));
		$this->mail->Host = EMAIL_HOST;
		$this->mail->SMTPAuth = true;
		$this->mail->Username = EMAIL_USER;
		$this->mail->Password = EMAIL_PASSWORD;

	}

	public function sendEmail($name,$subject,$to,$msg, $from = EMAIL_USER) {

        $this->mail->From = $from;
		$this->mail->FromName = $name;
		$this->mail->isHTML(true);
		$this->mail->WordWrap = WORDWRAP;
		$this->mail->addAddress($to);
		$this->mail->Subject = $subject;
		$this->mail->Body = $msg;
		$this->mail->AltBody = " ";

		return (!$this->mail->send()) ? false : true;

	}
}

?>
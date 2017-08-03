<?php
	namespace berkaPhp\config;

    $site_url = ($_SERVER['SERVER_NAME']=='www.pr.berka-ayowa.com') ? 'http://www.pr.berka-ayowa.com': "http://dev.b.com";

    define('DEBUG', false, true);

    //Database settings
    define('SERVER', 'localhost', true);
    define('DB', 'pricing_features', true);
    define('DB_USERNAME', 'root', true);
    define('DB_PW', $site_url =='http://www.pr.berka-ayowa.com' ? '' : '', true);

    //default controller
    define('HOME', 'pages' , true);

    //default prefix
    define('DEFAULT_PREFIX', 'Default' , true);
    define('LOGIN_URL', '' , true);

    define('SITE_URL', $site_url , true);
    define('LOGO_URL', $site_url.'/Views/Default/Assets/logocq.png' , true);

    //mailer settings
    define('EMAIL_HOST', 'mail.cqudefus.com' , true);
    define('EMAIL_USER', 'noreply@cqudefus.com' , true);
    define('EMAIL_PASSWORD', '@qwerty2017' , true);
    define('WORDWRAP', 50 , true);
    define('NO_REPLY', 'noreply@cqudefus.com' , true);



?>

















































<?php

    function prefixes() {
        return ['Default'];
    }

    function settings(){
		$localDatabase = array(
			'server' => SERVER,
			'username' => DB_USERNAME,
            'password' => DB_PW,
            'dbname' => DB
		);

		return $localDatabase ;
	}

	mysqli_report(MYSQLI_REPORT_STRICT);
    $is_connected = null;

    try {
        new \mysqli(SERVER,DB_USERNAME, DB_PW, DB );
        $is_connected = true;
    } catch (\mysqli_sql_exception $e) {
        $is_connected = false;
    }

    define('IS_DB_CONNECTED', $is_connected, true);

?>


<?php
	if(!defined('LIBRARIES')) die("Error");
	
	/* Root */
	define('ROOT',__DIR__);

	/* Timezone */
	date_default_timezone_set('Asia/Ho_Chi_Minh');

	/* Cấu hình coder */
	define('NN_MSHD','xxxx');
	define('NN_AUTHOR','');

	/* Cấu hình chung */
	$config = array(
		'customEmail' => 'myphamlamthao@gmail.com', //email nhận mật khẩu
		'copright' => array(// thông tin công ty tts
			'name' => '',
			'email' => '',
			'dienthoai' => '',
			'diachi' => '',
			'website' => '',
			'worktime' => ''
		),
		'author' => array(
			'name' => '',
			'email' => '',
			'timefinish' => ''
		),
		'arrayDomainSSL' => array(),
		'database' => array(
			'server-name' => $_SERVER["SERVER_NAME"],
			'url' => '/',
			'type' => 'mysql',
			'host' => 'localhost',
			'username' => 'root',
			'password' => '',
			'dbname' => 'lcolya_db',
			'port' => 3306,
			'prefix' => 'table_',
			'charset' => 'utf8'
		),
		'website' => array(
			'sendmail' => false,
			'error-reporting' => false,
			'secret' => '$tts@',
			'salt' => 'swKJaajeS!t',
			'debug-developer' => false,
			'debug-css' => false,
			'debug-js' => true,
			'index' => false,
			'upload' => array(
				'max-width' => 1920,
				'max-height' => 1920
			),
			'lang' => array(
				'vi'=>'Tiếng Việt'
				//'en'=>'Tiếng Anh'
			),
			'lang-doc' => 'vi|en',
			'slug' => array(
				'vi'=>'Tiếng Việt'
				//'en'=>'Tiếng Anh'
			),
			'seo' => array(
				'vi'=>'Tiếng Việt'
				//'en'=>'Tiếng Anh'
			),
			'comlang' => array(
				"gioi-thieu" => array("vi"=>"gioi-thieu"),
				"tin-tuc" => array("vi"=>"tin-tuc"),
				"san-pham" => array("vi"=>"san-pham"),
				"thi-cong" => array("vi"=>"thi-cong"),
				"du-an" => array("vi"=>"du-an"),
				"dich-vu" => array("vi"=>"dich-vu"),
				"lien-he" => array("vi"=>"lien-he")
			)
		),
		'order' => array(
			'ship' => true,
		),
		'login' => array(
			'admin' => 'LoginAdmin'.NN_MSHD,
			'member' => 'LoginMember'.NN_MSHD,
			'attempt' => 5,
			'delay' => 15
		),
		'googleAPI' => array(
			'recaptcha' => array(
				'active' => true,
				'urlapi' => 'https://www.google.com/recaptcha/api/siteverify',
				'sitekey' => '6Le3gDkeAAAAAIZ17DJBBI8QQuEHEdy4jofibbZR',
				'secretkey' => '6Le3gDkeAAAAAGQ2CY0FNemvJGgtW50_6-KzEOQq'
				//'sitekey' => '6Ld05qcZAAAAAJedNSmLEe1NOZdDtlYhwmltTIDC',
				//'secretkey' => '6Ld05qcZAAAAAABH8BWbSiLnPoXTRXFReFDM7b8t'
			)
		),
		'oneSignal' => array(
			'active' => false,
			'id' => 'af12ae0e-cfb7-41d0-91d8-8997fca889f8',
			'restId' => 'MWFmZGVhMzYtY2U0Zi00MjA0LTg0ODEtZWFkZTZlNmM1MDg4'
		),
		'license' => array(
			'version' => "7.0.0",
			'powered' => "tts@congnghetts.vn"
		)
	);

	/* Error reporting */
	error_reporting(($config['website']['error-reporting']) ? E_ALL : 0);

	/* Cấu hình base */
	$http = 'http://';
	$config_url = $config['database']['server-name'].$config['database']['url'];
	$config_base = $http.$config_url;

	/* Cấu hình login */
	$login_admin = $config['login']['admin'];
	$login_member = $config['login']['member']; 

	/* Cấu hình upload */
	require_once LIBRARIES."constant.php";
?>
<?php
session_start();

//セッション情報の削除
$_SESSION = array();
if(ini_get("session.use_cookies")){
	$params = session_get_cookie_params();
	setcookie(session_name(), '' , time() - 42000,
		$params["path"], $params["domain"],
		$params["secure"],$params["httponly"]
	);
}

session_destroy();

//Cookie情報も削除
setcookie('mail', '', time() - 3600);
setcookie('pass', '', time() - 3600);

header('Location: login.php');
exit();

?>
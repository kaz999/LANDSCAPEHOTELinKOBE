<?php
//ログインの確認
if(isset($_SESSION['id']) && $_SESSION['time'] + 3600 > time()){
	
	//ログインしている
	$_SESSION['time'] = time();
	
	$sql = sprintf('SELECT * FROM loginlsh WHERE id=%d',
					mysql_real_escape_string($_SESSION['id'])
	);
	$record = mysql_query($sql);
	$member = mysql_fetch_assoc($record);
}else{
	unset($_SESSION['id']);
	unset($_SESSION['table']);	
}
?>
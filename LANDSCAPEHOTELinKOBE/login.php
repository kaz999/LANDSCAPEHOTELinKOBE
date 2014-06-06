<?php
header("Content-Type:text/html; charset=UTF-8");
error_reporting(4);
session_start();

//Cookie
if($_COOKIE['mail'] != ''){
	
	$_POST['mail'] = $_COOKIE['mail'];
	$_POST['pass'] = $_COOKIE['pass'];
	$_POST['save'] = 'on';
}

require('dbconnect.php');		//db接続
require('lcheck.php');			//ログインチェック

if(!empty($_POST)){
	
	//ログインの処理
	if($_POST['mail'] != '' && $_POST['pass'] != ''){
		
		$sql = sprintf('SELECT * FROM loginlsh WHERE mail="%s" AND pass="%s"',
						mysql_real_escape_string($_POST['mail']),
						mysql_real_escape_string(sha1($_POST['pass']))
		);
		
		$record = mysql_query($sql) or die(mysql_error());
		
		if($table = mysql_fetch_assoc($record)){
			
			//ログイン成功
			$_SESSION['id'] = $table['id'];
			$_SESSION['time'] = time();
			
			//ログイン情報を記録
			if($_POST['save']=='on'){
				setcookie('mail' ,$_POST['mail'] ,time() + 60*60*24*14);
				setcookie('pass' ,$_POST['pass'] ,time() + 60*60*24*14);
			}
			header('Location: index.php');
			exit();
		}else{
			
			//メールアドレス・パスワードの間違い
			$error['login']	= 'failed';
		}
	}else{
		
		//メールアドレス・パスワードの空白
		$error['login'] = 'blank';	
	}
	
}
?>
<!doctype html>
<html><!-- InstanceBegin template="/Templates/common.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
<meta charset="utf-8">
<!-- InstanceBeginEditable name="doctitle" -->
<title>LANDSCAPEHOTEL in 神戸 | ログイン</title>
<!-- InstanceEndEditable -->
<link href="../css/common.css" rel="stylesheet" media="screen">
<link href="../css/login.css" rel="stylesheet" type="text/css" media="screen">
<link href="../css/jquery.mCustomScrollbar.css" rel="stylesheet" media="screen">
<script src="../js/jquery-1.10.2.min.js"></script>
<script src="../js/jquery.easing.1.3.js"></script>
<script src="../js/jquery.mCustomScrollbar.min.js"></script>
<script src="../js/script.js"></script>
<script src="../js/pagescroll.js"></script>
<!-- InstanceBeginEditable name="head" -->
<!-- InstanceEndEditable -->
<!-- InstanceParam name="id" type="text" value="" -->
</head>
<body id="">
<!--Container開始-->
<div id="container">
<!--Header開始-->
  <header>
    <?php if($_SESSION['id'] == ''): ?>
    <ul>
      <li><a href="https://noor-connect-ki.ssl-lolipop.jp/LANDSCAPEHOTELinKOBE/php/login.php"><img src="../images/login.gif" width="100" height="30" alt="ログイン"></a></li>
      <li><a href="https://noor-connect-ki.ssl-lolipop.jp/LANDSCAPEHOTELinKOBE/php/newuser.php"><img src="../images/newuser.gif" width="100" height="30" alt="会員登録"></a></li>
    </ul>
    <?php endif; ?>
    <?php if($_SESSION['id'] != ''): ?>
    <p class="lgn">ようこそ、<?php echo htmlspecialchars($member['name']); ?>&nbsp;様 | <a href="logout.php">ログアウト</a></p>
    <?php endif; ?>
    <h1><a href="index.php"><img src="../images/logo.jpg" width="280" height="110" alt="LANDSCAPEHOTEL"></a></h1>
  </header>
<!--Header終了-->
<!--Globalnavi開始-->
  <nav>
    <ul>
      <li><a href="room.php"><img src="../images/room.gif" alt="客室Room" width="150" height="50" border="0"></a></li>
      <li><a href="restrant.php"><img src="../images/restrant.gif" width="150" height="50" alt="レストランRestrant"></a></li>
      <li><a href="meeting_party.php"><img src="../images/meeting_party.gif" width="150" height="50" alt="会議・パーティーMeetin&amp;Party"></a></li>
      <li><a href="floorguide.php"><img src="../images/Floorguide.gif" width="150" height="50" alt="フロアガイドFloorguide"></a></li>
      <li><a href="access.php"><img src="../images/access.gif" width="150" height="50" alt="アクセスAccess"></a></li>
      <li><a href="sitemap.php"><img src="../images/sitemap.gif" width="150" height="50" alt="サイトマップSitemap"></a></li>
    </ul>
  </nav>
<!--Globalnavi終了-->
<!-- InstanceBeginEditable name="Contents" -->
<!--Contents開始-->
<article>
  <div class="lgWapper">
  <h3><img src="../images/lgTitle.gif" width="550" height="38" alt="Login ログイン"></h3>
  <p class="lnText">メールアドレス・パスワードをご入力の上、ログインボタンを押してください。</p>
  <?php if($error['login'] == 'blank'): ?>
  <p class="error">※メールアドレスとパスワードをご記入下さい。</p>
  <?php endif; ?>
  <?php if($error['login'] == 'failed'): ?>
  <p class="error">※ログインに失敗しました。正しくご記入下さい。</p>
  <?php endif; ?>
  <form action="" method="post" name="lg_form" id="lg_form">
  <table>
    <tr>
        <td class="rb"><label for="mail"><span>※</span>メールアドレス MailAddress</label></td>
        <td class="it"><input name="mail" type="text" id="mail" size="32" value="<?php echo htmlspecialchars($_POST['mail']); ?>">
          <span>例) landscapehotel@lmail.com</span></td>
        </tr>
      <tr>
        <td class="rb"><label for="pass"><span>※</span>パスワード Password</label></td>
        <td class="it"><input name="pass" type="password" id="pass" size="18" maxlength="18"></td>
        </tr>
  </table>
  <p class="lnBtn">
  	<input type="image" name="lnBtn" id="lnBtn" src="../images/lnBottom.gif">
  </p>
  </form>
  <ul>
    <li><a href="https://noor-connect-ki.ssl-lolipop.jp/LANDSCAPEHOTELinKOBE/php/newuser.php">※新規登録の方はこちら</a></li>
    <li><a href="#" class="pass">※パスワードをお忘れの方はこちら</a></li>
  </ul>
  </div>
</article>
<!--Contents終了-->
<!-- InstanceEndEditable -->
</div>
<!--Container終了-->
<!--FooterBackground開始-->
<div id="footerbg">
<!--Footer開始-->
  <footer>
    <div class="fLink_1">
      <div class="fLink_s1">
        <p class="toPageTop"><a href="#"><img src="../images/topPage.png" width="80" height="80" alt="TOPへ戻る"></a></p>
        </div>
      <ul>
        <li><a href="https://noor-connect-ki.ssl-lolipop.jp/LANDSCAPEHOTELinKOBE/php/inquiry.php">お問い合わせ</a></li>
        <li><a href="privacypolicy.php">プライバシーポリシー</a></li>
        <li class="list_r"><a href="recruit.php">採用情報</a></li>
        </ul>
      </div>
    <div class="fLink_2">
      <ul>
        <li><a href="index.php">TOP</a></li>
        <li><a href="room.php"><span>客室Room</span></a><a href="restrant.php"><span class="list_r2">レストランRestrant</span></a></li>
        <li><a href="meeting_party.php"><span>会議・パーティーMeeting&amp;Party</span></a><a href="floorguide.php"><span class="list_r2">フロアガイドFloorguide</span></a></li>
        <li><a href="access.php"><span>アクセスAccess</span></a><a href="sitemap.php"><span class="list_r2">サイトマップSitemap</span></a></li>
      </ul>
    </div>
    <small>Copyright 2013 (C) LANDSCAPE HOTEL KOBE.lnc. All Right Reserved.</small>
  </footer>
<!--Footer終了-->
</div>
<!--FooterBackground終了-->
</body>
<!-- InstanceEnd --></html>

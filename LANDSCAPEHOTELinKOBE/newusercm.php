<?php
header("Content-Type:text/html; charset=UTF-8");
error_reporting(4);
session_start();

require('dbconnect.php');		//db接続
require('lcheck.php');			//ログインチェック

//お問い合わせ
//前情報の取得
$name = $_SESSION['join']['name'];				//名前
$kana = $_SESSION['join']['kana'];				//フリガナ
$tel = $_SESSION['join']['tel'];				//電話
$tel2 = $_SESSION['join']['tel2'];				//携帯電話
$mail = $_SESSION['join']['mail'];				//メール
$zipcode = $_SESSION['join']['zipcode'];		//郵便番号
$todohuken = $_SESSION['join']['todohuken'];	//都道府県
$address = $_SESSION['join']['address'];		//住所
$pass = $_SESSION['join']['pass'];				//パスワード

//MYSQL接続
$db=mysql_connect('mysql003.phy.lolipop.lan','LAA0473172','********');
mysql_select_db('LAA0473172-database',$db);
mysql_query('SET NAMES utf8',$db);

//MYSQL書き込み
$sql = sprintf('INSERT INTO loginlsh SET
				name="%s", kana="%s", tel="%s", tel2="%s", mail="%s", 
				zipcode="%s", todohuken="%s", address="%s", pass="%s"',
				mysql_real_escape_string($name),mysql_real_escape_string($kana),
				mysql_real_escape_string($tel),mysql_real_escape_string($tel2),
				mysql_real_escape_string($mail),mysql_real_escape_string($zipcode),
				mysql_real_escape_string($todohuken),mysql_real_escape_string($address),
				mysql_real_escape_string(sha1($pass))

);

mysql_query($sql,$db);

//新規登録情報の削除
unset($_SESSION['join']);


?>
<!doctype html>
<html><!-- InstanceBegin template="/Templates/common.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
<meta charset="utf-8">
<!-- InstanceBeginEditable name="doctitle" -->
<title>LANDSCAPEHOTEL in 神戸 | 会員登録</title>
<!-- InstanceEndEditable -->
<link href="../css/common.css" rel="stylesheet" media="screen">
<link href="../css/newuser.css" rel="stylesheet" type="text/css" media="screen">
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
  <div class="nuWapper">
  	<h3><img src="../images/nuTitle.gif" width="550" height="38" alt="NewUser 会員登録"></h3>
  	<p class="lgText">新規会員登録が完了しました。<br>
  	  以後ログイン中は客室予約の際、お客様情報の入力を省けます。<br>
  	  また割引情報をメールでお伝えする場合がありますので、是非ともご活用ください。<br>
  	  今後とも「LANDSCAPEHOTEL in KOBE ランドスケープホテル神戸」を宜しくお願いします。</p>
  	<p class="lg"><a href="login.php">ログイン画面へ</a></p>
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

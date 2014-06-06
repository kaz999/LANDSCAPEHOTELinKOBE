<?php
header("Content-Type:text/html; charset=UTF-8");
error_reporting(4);
session_start();

require('dbconnect.php');		//db接続
require('lcheck.php');			//ログインチェック
?>
<!doctype html>
<html><!-- InstanceBegin template="/Templates/common.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
<meta charset="utf-8">
<!-- InstanceBeginEditable name="doctitle" -->
<title>LANDSCAPEHOTEL in 神戸 | サイトマップ</title>
<!-- InstanceEndEditable -->
<link href="../css/common.css" rel="stylesheet" media="screen">
<link href="../css/sitemap.css" rel="stylesheet" type="text/css" media="screen">
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
  <div class="smWapper">
  	<h2><img src="../images/smImage.jpg" width="900" height="180" alt="SITEMAP サイトマップ"></h2>
  	<h3><img src="../images/smTitle.gif" width="550" height="38" alt="SiteMap サイトマップ"></h3>
    <div class="smContent">
  	  <p><a href="index.php">トップページ</a></p>
      <p><a href="room.php">客室</a></p>
      <p class="rt"><a href="room.php#page1">ROOM TYPE1</a></p>
      <p class="rt"><a href="room.php#page2">ROOM TYPE2</a></p>
      <p class="rt"><a href="room.php#page3">ROOM TYPE3</a></p>
      <p class="rt"><a href="room.php#page4">ROOM TYPE4</a></p>
      <p class="rt"><a href="room.php#page5">ROOM TYPE5</a></p>
      <p><a href="restrant.php">レストラン</a></p>
      <p><a href="meeting_party.php">会議・パーティー</a></p>
      <p><a href="floorguide.php">フロアガイド</a></p>
      <p><a href="access.php">アクセス</a></p>
      <p><a href="sitemap.php">サイトマップ</a></p>
      <p><a href="login.php">ログイン</a></p>
      <p><a href="newuser.php">会員登録</a></p>
      <p><a href="https://noor-connect-ki.ssl-lolipop.jp/LANDSCAPEHOTELinKOBE/php/inquiry.php">お問い合わせ</a></p>
      <p><a href="privacypolicy.php">プライバシーポリシー</a></p>
      <p><a href="recruit.php">採用情報</a></p>
    </div>
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

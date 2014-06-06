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
<title>LANDSCAPEHOTEL in 神戸 | キャンペーン</title>
<link href="../css/campaign.css" rel="stylesheet" type="text/css" media="screen">
<!-- InstanceEndEditable -->
<link href="../css/common.css" rel="stylesheet" media="screen">
<link href="../css/jquery.mCustomScrollbar.css" rel="stylesheet" media="screen">
<link href="../css/jquery.bxslider.css" rel="stylesheet" type="text/css" media="screen">
<script src="../js/jquery-1.10.2.min.js"></script>
<script src="../js/jquery.bxslider.min.js"></script>
<script src="../js/jquery.easing.1.3.js"></script>
<script src="../js/jquery.mCustomScrollbar.min.js"></script>
<script src="../js/script.js"></script>
<script src="../js/viewer.js"></script>
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
  <div class="cmnWapper">
  <h3><img src="../images/cmnTitle.gif" width="550" height="38" alt="Campaign キャンペーン"></h3>
  <h4><img src="../images/cmnImage.jpg" width="800" height="280" alt="キャンペーンイメージ"></h4>
    <h5>LANDSCAPEHOTEL in KOBE 30th Anniversry ランドスケープホテル神戸30周年記念
      <br>キャンペーン期間 <span>2013.09.10Tue-11.10Sun</span></h5>
    <p class="cnmText01">期間内(2013.09.10～11.10)にご宿泊いただくと、ホテル内レストランの「Chaleureux シャルーフ」の<br>
      一部メニューが以下の価格になります。このキャンペーンを機会に、是非ともご宿泊をご検討下さい。</p>
    <p class="mTitle">Chaleureux Menu List シャルーフメニュー一覧</p>
    <ul>
      <li>Menu Royal route 「ロイヤル」コース 通常価格 <span class="liThr">\7,850</span> キャンペーン価格 <span class="liCol">\7,065</span></li>
      <li>Menu Saison route 「季節」コース 通常価格 <span class="liThr">\8,700</span> キャンペーン価格 <span class="liCol">\7,830</span></li>
      <li>Poisson du Jour 本日のお魚料理 通常価格 <span class="liThr">\2,600</span> キャンペーン価格 <span class="liCol">\2,340</span></li>
      <li>Carpaccio de bonite カツオのカルパッチョ 通常価格 <span class="liThr">\1,550</span> キャンペーン価格 <span class="liCol">\1,395</span></li>
      <li>Soupe de potiron a froid 冷製かぼちゃのスープ 通常価格 <span class="liThr">\1,250</span> キャンペーン価格 <span class="liCol">\1,125</span></li>
      <li>Desserts assortis デザートの盛り合わせ 通常価格 <span class="liThr">\1,050</span> キャンペーン価格 <span class="liCol">\945</span></li>
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

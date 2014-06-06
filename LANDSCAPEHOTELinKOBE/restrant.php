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
<title>LANDSCAPEHOTEL in 神戸 | レストラン</title>
<!-- InstanceEndEditable -->
<link href="../css/common.css" rel="stylesheet" media="screen">
<link href="../css/restrant.css" rel="stylesheet" type="text/css" media="screen">
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
  <div class="resWapper">
  <h2><img src="../images/rtImage.jpg" width="900" height="180" alt="RESTRANT LIST レストラン一覧"></h2>
  <h3><img src="../images/rtTitle.gif" width="550" height="38" alt="Restrant レストラン"></h3>
  <div class="wStore">
  	<section class="store01" id="page1">
    	<h4><img src="../images/storeTitle01.gif" width="300" height="35" alt="Chaleureux シャフール"></h4>
    	<p class="sImage_l"><img src="../images/dish01.jpg" width="300" height="300" alt="dish01"></p>
    	<div class="wText_r">
  			<p class="sText">Description<br>
  			本格コース料理から、リーズナブルな単品料理まで<br>
  			ご用意しています。</p>
            <p class="sMenu">Opening&nbsp;Hours＆Regular&nbsp;holiday<br>
            営業時間:17:30～22:30<br>
  			定休日:無し</p>
  			<p class="sMenu">Recommended&nbsp;Menu<br>
  			Carpaccio de bonite カツオのカルパッチョ<br>
  			Soupe de potiron a froid 冷製かぼちゃのスープ<br>
  			Desserts assortis デザートの盛り合わせ</p>
    	</div>
  	</section>
  </div>
  <div class="wStore">
  	<section class="store02">
    	<h4><img src="../images/storeTitle02.gif" width="300" height="35" alt="春風"></h4>
    	<p class="sImage_r"><img src="../images/dish02.jpg" width="300" height="300" alt="dish02"></p>
        <div class="wText_l">
  			<p class="sText">Description<br>
  			こだわりの食材を使い、海外からお越しの方にも<br>
  			おすすめ出来ます。低カロリーのセットもあり女性にも<br>
			おすすめです。</p>
            <p class="sMenu">Opening&nbsp;Hours＆Regular&nbsp;holiday<br>
            営業時間:11:30～15:30<br>
			17:30～21:30<br>
  			定休日:無し</p>
          	<p class="sMenu">Recommended&nbsp;Menu<br>
          	彩コース(夜営業のみ)<br>
          	豚カツ定食(昼営業のみ)<br>
          	親子丼セット(昼営業のみ)</p>
        </div>
  	</section>
  </div>
  <div class="wStore">
  	<section class="store03">
    	<h4><img src="../images/storeTitle03.gif" width="300" height="35" alt="CAFE"></h4>
    	<p class="sImage_l"><img src="../images/cafe.jpg" width="300" height="300" alt="CAFE"></p>
    	<div class="wText_r">
  			<p class="sText">Description<br>
  			種類豊富なコーヒー・紅茶等を取り揃えています。<br>
  			家族や友人との談笑の場としてお楽しみください。</p>
  			<p class="sMenu">Opening&nbsp;Hours＆Regular&nbsp;holiday<br>
            営業時間:10:30～19:30<br>
  			定休日:水曜日</p>
    		<p class="sMenu">Recommended&nbsp;Menu<br>
    		特製ブレンドコーヒー<br>
    		チーズケーキタルト<br>
    		シナモンロール<br>
    		焦がしカスタードプリン</p>
    	</div>
  	</section>
  </div>
  <div class="wStore">
  <section class="store04" id="page4">
    <h4><img src="../images/storeTitle04.gif" width="300" height="35" alt="BAR"></h4>
    <p class="sImage_r"><img src="../images/bar.jpg" width="300" height="300" alt="BAR"></p>
    <div class="wText_l">
  		<p class="sText">Description<br>
  		落ち着きのある空間と、微かに流れるJazzサウンドの中で<br>
  		お酒をお楽しみください。</p>
  		<p class="sMenu">Opening&nbsp;Hours＆Regular&nbsp;holiday<br>
        営業時間:18:30～2:30<br>
  		定休日:無し(但し、水曜日は24:30で閉店)</p>
  		<p class="sMenu">Recommended&nbsp;Menu<br>
  		マティーニ<br>
  		シンガポールスリング<br>
  		レッドアイ</p>
    </div>
  </section>
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

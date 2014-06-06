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
<title>LANDSCAPEHOTEL in 神戸 | 各種サービス</title>
<!-- InstanceEndEditable -->
<link href="../css/common.css" rel="stylesheet" media="screen">
<link href="../css/lodging.css" rel="stylesheet" type="text/css" media="screen">
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
  <div class="ldgWapper">
  <h2><img src="../images/lgImage.jpg" width="900" height="180" alt="LODGING 各種サービス"></h2>
    <h3><img src="../images/lggTitle.gif" width="550" height="38" alt="Lodging 各種サービス"></h3>
    <ul>
      <li><a href="#page1">マッサージ</a>&nbsp;<span>|</span>&nbsp;</li>
      <li><a href="#page2">スポーツジム・プール</a>&nbsp;<span>|</span>&nbsp;</li>
      <li><a href="#page3">ショップ・お土産店</a></li>
    </ul>
    <div class="idgWpr" id="page1">
  		<p class="idgr"><img src="../images/ldgImage01.png" width="300" height="300" alt="マッサージイメージ"></p>
        <div class="idgl">
        	<p class="idgM">フットマッサージ/ボディマッサージの２種類を用意しています。<br>
       	    お好きな時間を指定して下さい。</p>
		  	<p class="idTitle">Foot Massage&nbsp;|&nbsp;フットマッサージ</p>
  	  	  	<p class="idText">30min&nbsp;\3,200<br>
            				45min&nbsp;\4,300<br>
          					60min&nbsp;\6,500</p>
  			<p class="idtBottom">Body massage&nbsp;|&nbsp;ボディマッサージ</p>
        	<p class="idText">40min&nbsp;\4,100<br>
        					  60min&nbsp;\6,300<br>
          					  80min&nbsp;\8,400</p>
        </div>
    </div>
    <div class="idgWpr" id="page2">
    	<p class="idgr"><img src="../images/ldgImage02.png" width="300" height="300" alt="ジム・プールイメージ"></p>
        <div class="idgl">
  			<p class="idgM02">宿泊料別に料金を支払うことで、宿泊中はスポーツジム及び<br>
    	   	   温水プールが24時間使い放題です。<br>
    	   	   運動でリフレッシュしたい方は是非ご利用ください。</p>
            <p class="idgTitle02">スポーツジム/温水プール利用料</p>
            <p class="idgText02">24h&nbsp;\2,600</p>
        </div>
    </div>
    <div class="idgWpr" id="page3">
    	<p class="idgr"><img src="../images/ldgImage03.png" width="300" height="300" alt="ショップイメージ"></p>
        <div class="idgl">
		  <p class="idgM03">さまざまなお土産をご用意しております。<br>
    						  お土産の他にも腕時計・アクセサリーショップ等も<br>
    						  取り扱っています。</p>
            <p class="idgTitle03">お土産/ショップ一覧</p>
          <p class="idgText03">ランドスケープ神戸 お土産店(食品/ご当地商品)<br>
            					 SECOND&nbsp;HAND(腕時計/目覚まし時計)<br>
		  CRESCENT(アクセサリー/小物)</p>
        </div>
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

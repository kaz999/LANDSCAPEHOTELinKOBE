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
<title>LANDSCAPEHOTEL in 神戸 | ウェディング</title>
<!-- InstanceEndEditable -->
<link href="../css/common.css" rel="stylesheet" media="screen">
<link href="../css/wedding.css" rel="stylesheet" type="text/css" media="screen">
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
  <div class="wgWapper">
    <h3><img src="../images/wgImage.jpg" width="900" height="180" alt="Wedding ウェディング"></h3>
    <h4><img src="../images/wgTitle.gif" width="550" height="38" alt="Wedding ウェディング"></h4>
    <p class="wdText">結婚式場をどこにするか迷っている方は、「LANDSCAPEHOTELinKOBE ランドスケープホテル神戸」で挙式をしてはいかがでしょうか。<br>
    当ホテルの最高のスタッフとサービスをご提供致します。</p>
    <div class="wgw">
        <h5 class="wl"><img src="../images/lhTitle.png" width="350" height="32" alt="大会場プラン"></h5>
  		<div class="wgr">
   		  <p class="wgImg"><img src="../images/wgImages01.jpg" width="300" height="300" alt="Largehall Plan 大会場プラン Image"></p>
  		</div>
      	<div class="wgl">
        	<p>40人以上を収容可能な大規模ホールです。<br>
        	音響等の演出もご相談により、柔軟に対応できます。</p>
            <p>お値段 \780,000～</p>
   	  	  	<p>大人数プラン内容</p>
        		<ul>
          			<li>会場費</li>
          			<li>コース料理(ドリンク含)</li>
          			<li>会場装花</li>
          			<li>ブーケ、ブートニア</li>
          			<li>写真</li>
          			<li>音響演出料</li>
          			<li>司会者</li>
          			<li>新郎新婦・親族用控室  </li>
          			<li>新郎新婦ヘアメイク着付</li>
          			<li>支度部屋 </li>
          			<li>その他ご相談により、追加できます</li>
          		</ul>
      	</div>
    </div>
    <div class="wgwb">
   		<h5 class="wr"><img src="../images/shTitle.png" width="450" height="32" alt="式場&amp;会食プラン"></h5>
      	<div class="wgl">
    		<p class="wdImg"><img src="../images/wgImages02.jpg" width="300" height="300" alt="Weddinghall&amp;Dinner Plan 式場&amp;会食 Image"></p>
  		</div>
      	<div class="wgr">
          <p>20人未満の少人数で挙式を行いたい方の為に<br>
          	 こちらのプランもご用意しております。</p>
          <p>お値段 \630,000～</p>
       	  <p>式場&amp;会食プラン内容</p>
        		<ul>
          			<li>キリスト教式/人前式</li>
          			<li>コース料理(ドリンク含)</li>
          			<li>式場費/会食会場費</li>
          			<li>ブーケ、ブートニア</li>
          			<li>新郎新婦・親族控室</li>
          			<li>新郎新婦ヘアメイク着付</li>
          			<li>支度部屋</li>
          			<li>その他ご相談により、追加できます</li>
          		</ul>
      	</div>
    </div>
    <div class="wdText02">
  		<p>お問い合わせ先</p>
      	<p>TEL:(04)-1876-66XX</p>
      	<p>E-MAIL:info@lsh-wedding.com</p>
      	<p>お問い合わせ後、ご都合がよい日に当ホテルにご来店頂き<br>
           ご相談の上、お見積書の作成という形になります。ご了承下さい。</p>
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

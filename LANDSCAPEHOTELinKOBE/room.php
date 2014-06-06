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
<link href="../css/room.css" rel="stylesheet" type="text/css" media="screen">
<link href="../css/lightbox.css" rel="stylesheet" type="text/css" media="screen">
<script src="../js/jquery-1.10.2.min.js"></script>
<script src="../js/lightbox-2.6.min.js"></script>
<script src="../js/jquery.bxslider.min.js"></script>
<script src="../js/jquery.easing.1.3.js"></script>
<script src="../js/jquery.mCustomScrollbar.min.js"></script>
<script src="../js/script.js"></script>
<script src="../js/roomScript.js"></script>
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
  <!--MainVisual開始-->
    <h2 class="roomImage"><img src="../images/rmImage.jpg" width="900" height="180" alt="ROOM 客室"></h2>
  <!--MainVisual終了-->
  <h3 class="roomTitle"><img src="../images/roomTitle.gif" alt="客室 | Room" width="550" height="38"></h3>
  <section class="rType">
  	<ul>
    	<li><a href="#page1"><img src="../images/rList1.gif" width="120" height="25" alt="ルームタイプ1"></a></li>
    	<li><a href="#page2"><img src="../images/rList2.gif" width="120" height="25" alt="ルームタイプ2"></a></li>
    	<li><a href="#page3"><img src="../images/rList3.gif" width="120" height="25" alt="ルームタイプ3"></a></li>
    	<li><a href="#page4"><img src="../images/rList4.gif" width="120" height="25" alt="ルームタイプ4"></a></li>
    	<li><a href="#page5"><img src="../images/rList5.gif" width="120" height="25" alt="ルームタイプ5"></a></li>
  	</ul>
  </section>
  <div class="rWapper">
  	<section class="rtWapper" id="page1">
  		<h3><img src="../images/roomtype1.gif" alt="ルームタイプ1" width="230" height="38"></h3>
    	<div class="rContents">
  			<div class="rTypecl_1">
    			<div class="rPrice">
      				<h4>料金(一泊～)</h4>
      					<p>シングル&nbsp;\22.000<br>
        			   	   ダブル&nbsp;\28,000<br>
      					   ツイン&nbsp;\29,000
                        </p>
    			</div>
              	<div class="checkInOut">
  					<h4>チェックイン-チェックアウト</h4>
                		<p>チェックイン-14:00～17:30<br>
                	   	   チェックアウト-11:00</p>
              	</div>
  			</div>
    		<div class="rTypecl_2">
                <div class="rEquip">
   				  <h4>設備</h4>
      				<p>23インチテレビ/ビデオオンデマンド<br>
   				    インターネット接続/ユニットバス<br>
   				    温水洗浄付きトイレ/冷蔵庫/ポット</p>
    			</div>
    			<div class="rAmenity">
          			<h4>アメニティ</h4>
          			<p>バスタオル/ハンドタオル/シャンプー<br>
       			    コンディショナー/ボディーソープ<br>
       			    シェービングフォーム/カミソリ/石鹸<br>
       			    歯ブラシ/歯磨き粉/ヘアーブラシ</p>
   			  </div>
   		  </div>
    		<div class="rImage" id="v1">
           	  <ul class="rMain" id="viewImage01">
                    <li><a href="../images/rImageBig01.jpg" rel="lightbox[image01]"><img src="../images/rImage01.jpg" width="200" height="200" alt="イメージ01"></a></li>
                    <li><a href="../images/rImageBig02.jpg" rel="lightbox[image01]"><img src="../images/rImage02.jpg" width="200" height="200" alt="イメージ02"></a></li>
                    <li><a href="../images/rImageBig03.jpg" rel="lightbox[image01]"><img src="../images/rImage03.jpg" width="200" height="200" alt="イメージ03"></a></li>
                </ul>
       		  <ul class="rThumb" id="thumbImage01">
   			  	  	<li><a href="#v1"><img src="../images/rImage01t.png" width="35" height="35" alt="サムネイル01"></a></li>
          			<li><a href="#v1"><img src="../images/rImage02t.png" width="35" height="35" alt="サムネイル02"></a></li>
          			<li><a href="#v1"><img src="../images/rImage03t.png" width="35" height="35" alt="サムネイル03"></a></li>
          		</ul>
    		</div>
    	</div>
  	</section>
    <section class="rtWapper_b" id="page2">
  		<h3 class="tr"><img src="../images/roomtype2.gif" alt="ルームタイプ1" width="230" height="38"></h3>
    	<div class="rContents">
  			<div class="rTypecl_1_r">
    			<div class="rPrice">
      				<h4>料金(一泊～)</h4>
      					<p>シングル&nbsp;\23,000<br>
        			   	   ダブル&nbsp;\29,000<br>
				           ツイン&nbsp;\30,000
                        </p>
    			</div>
              	<div class="checkInOut">
  					<h4>チェックイン-チェックアウト</h4>
                		<p>チェックイン-14:00～17:30<br>
                	   	   チェックアウト-11:00</p>
              	</div>
  			</div>
    		<div class="rTypecl_2_r">
                <div class="rEquip">
   				  <h4>設備</h4>
      				<p>23インチテレビ/ビデオオンデマンド<br>
   				    インターネット接続/ユニットバス<br>
   				    温水洗浄付きトイレ/冷蔵庫/ポット</p>
    			</div>
            	<div class="rAmenity">
          			<h4>アメニティ</h4>
          			<p>バスタオル/ハンドタオル/シャンプー<br>
       			    コンディショナー/ボディーソープ<br>
       			    シェービングフォーム/カミソリ/石鹸<br>
       			    歯ブラシ/歯磨き粉/ヘアーブラシ</p>
   				</div>
   		  </div>
    	  <div class="rImage_l" id="v2">
        		<ul class="rMain_l" id="viewImage02">
                	<li><a href="../images/rImageBig04.jpg" rel="lightbox[image02]"><img src="../images/rImage04.jpg" width="200" height="200" alt="イメージ04"></a></li>
                    <li><a href="../images/rImageBig05.jpg" rel="lightbox[image02]"><img src="../images/rImage05.jpg" width="200" height="200" alt="イメージ05" ></a></li>
                    <li><a href="../images/rImageBig06.jpg" rel="lightbox[image02]"><img src="../images/rImage06.jpg" alt="イメージ06" width="200" height="200"></a></li>
                </ul>
        		<ul class="rThumb_l" id="thumbImage02">
       			  <li><a href="#v2"><img src="../images/rImage04t.png" width="35" height="35" alt="サムネイル01"></a></li>
          			<li><a href="#v2"><img src="../images/rImage05t.png" width="35" height="35" alt="サムネイル02"></a></li>
          			<li><a href="#v2"><img src="../images/rImage06t.png" width="35" height="35" alt="サムネイル03"></a></li>
  	  		</ul>
   		  </div>
    	</div>
  	</section>
  	<section class="rtWapper_b" id="page3">
  		<h3><img src="../images/roomtype3.gif" alt="ルームタイプ1" width="230" height="38"></h3>
    	<div class="rContents">
  			<div class="rTypecl_1">
    			<div class="rPrice">
      				<h4>料金(一泊～)</h4>
      					<p>シングル&nbsp;\25,000<br>
        			   	   ダブル&nbsp;\32,000<br>
				  		   ツイン&nbsp;\35,000<br>
				  		   トリプル&nbsp;\42,000
                        </p>
    			</div>
              	<div class="checkInOut">
  					<h4>チェックイン-チェックアウト</h4>
                		<p>チェックイン-14:00～17:30<br>
                	   	   チェックアウト-11:00</p>
              	</div>
  			</div>
    		<div class="rTypecl_2">
                <div class="rEquip">
   				  <h4>設備</h4>
      				<p>23インチテレビ/ビデオオンデマンド<br>
   				    インターネット接続/ユニットバス<br>
   				    温水洗浄付きトイレ/冷蔵庫/ポット</p>
    			</div>
    			<div class="rAmenity">
          			<h4>アメニティ</h4>
          			<p>バスタオル/ハンドタオル/シャンプー<br>
       			    コンディショナー/ボディーソープ<br>
       			    シェービングフォーム/カミソリ/石鹸<br>
       			    歯ブラシ/歯磨き粉/ヘアーブラシ</p>
   			  </div>
    	</div>
    	<div class="rImage" id="v3">
        	<ul class="rMain" id="viewImage03">
            	<li><a href="../images/rImageBig07.jpg" rel="lightbox[image03]"><img src="../images/rImage07.jpg" width="200" height="200" alt="イメージ01"></a></li>
            	<li><a href="../images/rImageBig08.jpg" rel="lightbox[image03]"><img src="../images/rImage08.jpg" width="200" height="200" alt="イメージ08"></a></li>
            	<li><a href="../images/rImageBig09.jpg" rel="lightbox[image03]"><img src="../images/rImage09.jpg" width="200" height="200" alt="イメージ09"></a></li>
            </ul>
        	<ul class="rThumb" id="thumbImage03">
   			  <li><a href="#v3"><img src="../images/rImage07t.png" width="35" height="35" alt="サムネイル01"></a></li>
          		<li><a href="#v3"><img src="../images/rImage08t.png" width="35" height="35" alt="サムネイル02"></a></li>
          		<li><a href="#v3"><img src="../images/rImage09t.png" width="35" height="35" alt="サムネイル03"></a></li>
          	</ul>
    	</div>
    </div>
  </section>
  	<section class="rtWapper_b" id="page4">
  		<h3 class="tr"><img src="../images/roomtype4.gif" width="230" height="38"></h3>
    	<div class="rContents">
  			<div class="rTypecl_1_r">
    			<div class="rPrice">
      				<h4>料金 (一泊～)</h4>
      					<p>シングル&nbsp;\35,000～<br>
        			   	   ダブル&nbsp;\39,000～<br>
      					   ツイン&nbsp;\45,000～<br>
      					   トリプル&nbsp;\55,000～
                        </p>
    			</div>
              	<div class="checkInOut">
  					<h4>チェックイン-チェックアウト</h4>
                		<p>チェックイン-14:00～17:30<br>
                	   	   チェックアウト-11:00</p>
              	</div>
		  </div>
   		  <div class="rTypecl_2_r">
                <div class="rEquip">
   				  <h4>設備</h4>
      				<p>35インチテレビ/ビデオオンデマンド<br>
   				    インターネット接続/ユニットバス<br>
			      温水洗浄付きトイレ/冷蔵庫/ポット</p>
    			</div>
    			<div class="rAmenity">
          			<h4>アメニティ</h4>
          			<p>バスタオル/ハンドタオル/シャンプー<br>
       			    コンディショナー/ボディーソープ<br>
       			    シェービングフォーム/カミソリ/石鹸<br>
       			    歯ブラシ/歯磨き粉/ヘアーブラシ</p>
   			  </div>
    	</div>
    	<div class="rImage_l" id="v4">
        	<ul class="rMain_l" id="viewImage04">
            	<li><a href="../images/rImageBig10.jpg" rel="lightbox[image04]"><img src="../images/rImage10.jpg" width="200" height="200" alt="イメージ10"></a></li>
                <li><a href="../images/rImageBig11.jpg" rel="lightbox[image04]"><img src="../images/rImage11.jpg" width="200" height="200" alt="イメージ11"></a></li>
                <li><a href="../images/rImageBig12.jpg" rel="lightbox[image04]"><img src="../images/rImage12.jpg" width="200" height="200" alt="イメージ12"></a></li>
            </ul>
        	<ul class="rThumb_l" id="thumbImage04">
       		  <li><a href="#v4"><img src="../images/rImage10t.png" width="35" height="35" alt="サムネイル01"></a></li>
          		<li><a href="#v4"><img src="../images/rImage11t.png" width="35" height="35" alt="サムネイル02"></a></li>
          		<li><a href="#v4"><img src="../images/rImage12t.png" width="35" height="35" alt="サムネイル03"></a></li>
          	</ul>
    	</div>
    </div>
  </section>
  	<section class="rtWapper_b" id="page5">
  		<h3><img src="../images/roomtype5.gif" alt="ルームタイプ1" width="230" height="38"></h3>
    	<div class="rContents">
  			<div class="rTypecl_1">
    			<div class="rPrice">
      				<h4>料金(一泊～)</h4>
      					<p>ダブル&nbsp;\44,000～</p>
				  		<p>ツイン&nbsp;\50,000～</p>
      					<p>トリプル&nbsp;\65,000～</p>
    			</div>
              	<div class="checkInOut">
  					<h4>チェックイン-チェックアウト</h4>
                		<p>チェックイン-14:00～17:30<br>
                	   	   チェックアウト-11:00</p>
              	</div>
  			</div>
   		  <div class="rTypecl_2">
                <div class="rEquip">
   				  <h4>設備</h4>
      				<p>35インチテレビ/ビデオオンデマンド<br>
   				    インターネット接続/ユニットバス<br>
   				    温水洗浄付きトイレ/冷蔵庫/ポット</p>
    			</div>
    			<div class="rAmenity">
          			<h4>アメニティ</h4>
          			<p>バスタオル/ハンドタオル/シャンプー<br>
       			    コンディショナー/ボディーソープ<br>
       			    シェービングフォーム/カミソリ/石鹸<br>
       			    歯ブラシ/歯磨き粉/ヘアーブラシ</p>
   			  </div>
    	</div>
    	<div class="rImage" id="v5">
        	<ul class="rMain" id="viewImage05">
            	<li><a href="../images/rImageBig13.jpg" rel="lightbox[image05]"><img src="../images/rImage13.jpg" width="200" height="200" alt="イメージ13"></a></li>
                <li><a href="../images/rImageBig14.jpg" rel="lightbox[image05]"><img src="../images/rImage14.jpg" width="200" height="200" alt="イメージ14"></a></li>
                <li><a href="../images/rImageBig15.jpg" rel="lightbox[image05]"><img src="../images/rImage15.jpg" width="200" height="200" alt="イメージ15"></a></li>
            </ul>
        	<ul class="rThumb" id="thumbImage05">
   		  	  	<li><a href="#v5"><img src="../images/rImage13t.png" width="35" height="35" alt="サムネイル01"></a></li>
          		<li><a href="#v5"><img src="../images/rImage14t.png" width="35" height="35" alt="サムネイル02"></a></li>
          		<li><a href="#v5"><img src="../images/rImage15t.png" width="35" height="35" alt="サムネイル03"></a></li>
          	</ul>
    	</div>
    </div>
  </section>
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

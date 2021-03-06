<?php
header("Content-Type:text/html; charset=UTF-8");
error_reporting(4);
session_start();

require('dbconnect.php');		//db接続
require('lcheck.php');			//ログインチェック


//部屋の種類を選択
if($_POST['btnr'] == '1'){
	
	//部屋の種類を選んでいなかった場合、エラー文を生成
	if($_POST['rt1']==''){
		$error_r ='blank';
	}
	
	//部屋の種類を選んでいた場合、次のページへ
	if($_POST['rt1'] != ''){
		$_SESSION['join_r'] = $_POST['rt1'];
		header('Location: https://noor-connect-ki.ssl-lolipop.jp/LANDSCAPEHOTELinKOBE/php/revncheck.php'.SID);
		exit();
	}
}

?>
<!doctype html>
<html><!-- InstanceBegin template="/Templates/common.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
<meta charset="utf-8">
<!-- InstanceBeginEditable name="doctitle" -->
<title>LANDSCAPEHOTEL in 神戸 | 宿泊予約</title>
<link href="../css/revn.css" rel="stylesheet" type="text/css" media="screen">
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
<article class="revn">
  <h3><img src="../images/rvanTitle01.gif" width="550" height="38" alt="Reservation 宿泊予約 ルーム一覧"></h3>
  <p class="revnText">部屋のタイプを選んで「確認画面へ」を押してください。</p>
  <?php if($error_r == 'blank'): ?>
  	<p class="error_r">部屋のタイプを選んでください。</p>
  <?php endif; ?>
	<form action="revn.php" method="post" id="revn">
      <div class="rt">
  		<table>
  			<tr>
            	<td rowspan="2" class="tBtn"><input type="radio" name="rt1" id="radio" value="rt1"></td>
    			<td class="tTitle">RoomType1&nbsp;シングルルーム</td>
                <td class="tTitle">設備</td>
                <td class="tTitle">アメニティ</td>
                <td class="tTitle">料金(一泊二日～)</td>
  			</tr>
  			<tr>
    			<td class="tImg"><img src="../images/rImage01.jpg" width="200" height="200" alt="roomtype1"></td>
    			<td class="tText">23インチテレビ/ビデオオンデマンド<br>
								  インターネット接続/ユニットバス<br>
								  温水洗浄付きトイレ/冷蔵庫/ポット</td>
    			<td class="tText">バスタオル/ハンドタオル/シャンプー<br>
								  コンディショナー/ボディーソープ<br>
								  シェービングフォーム/カミソリ/石鹸<br>
								  歯ブラシ/歯磨き粉/ヘアーブラシ</td>
    			<td class="tText">シングル&nbsp;\22,000～</td>
  			</tr>
  		</table>
  	  </div>
      <div class="rt">
  		<table>
    		<tr>
      			<td rowspan="2" class="tBtn"><input type="radio" name="rt1" id="radio" value="rt2"></td>
      			<td class="tTitle">RoomType1&nbsp;ダブルルーム</td>
      			<td class="tTitle">設備</td>
      			<td class="tTitle">アメニティ</td>
      			<td class="tTitle">料金(一泊二日～)</td>
      		</tr>
    		<tr>
      			<td class="tImg"><img src="../images/rImage01.jpg" width="200" height="200" alt="roomtype1"></td>
      			<td class="tText">23インチテレビ/ビデオオンデマンド<br>
        						  インターネット接続/ユニットバス<br>
        						  温水洗浄付きトイレ/冷蔵庫/ポット</td>
      			<td class="tText">バスタオル/ハンドタオル/シャンプー<br>
        						  コンディショナー/ボディーソープ<br>
        						  シェービングフォーム/カミソリ/石鹸<br>
        						  歯ブラシ/歯磨き粉/ヘアーブラシ</td>
      			<td class="tText">ダブル&nbsp;\28,000～</td>
      		</tr>
  		</table>
      </div>
      <div class="rt">
  		<table>
    		<tr>
      			<td rowspan="2" class="tBtn"><input type="radio" name="rt1" id="radio" value="rt3"></td>
      			<td class="tTitle">RoomType1&nbsp;ツインルーム</td>
      			<td class="tTitle">設備</td>
      			<td class="tTitle">アメニティ</td>
      			<td class="tTitle">料金(一泊二日～)</td>
      		</tr>
    		<tr>
      			<td class="tImg"><img src="../images/rImage01.jpg" width="200" height="200" alt="roomtype1"></td>
      			<td class="tText">23インチテレビ/ビデオオンデマンド<br>
        						  インターネット接続/ユニットバス<br>
        						  温水洗浄付きトイレ/冷蔵庫/ポット</td>
      			<td class="tText">バスタオル/ハンドタオル/シャンプー<br>
        						  コンディショナー/ボディーソープ<br>
        						  シェービングフォーム/カミソリ/石鹸<br>
        						  歯ブラシ/歯磨き粉/ヘアーブラシ</td>
      			<td class="tText">ツイン&nbsp;\29,000～</td>
      		</tr>
  		</table>
      </div>
	  <div class="rt">
  		<table>
  			<tr>
            	<td rowspan="2" class="tBtn"><input type="radio" name="rt1" id="radio" value="rt4"></td>
    			<td class="tTitle">RoomType2&nbsp;シングルルーム</td>
                <td class="tTitle">設備</td>
                <td class="tTitle">アメニティ</td>
                <td class="tTitle">料金(一泊二日～)</td>
  			</tr>
  			<tr>
    			<td class="tImg"><img src="../images/rImage04.jpg" width="200" height="200" alt="roomtype2"></td>
    			<td class="tText">23インチテレビ/ビデオオンデマンド<br>
                    			  インターネット接続/ユニットバス<br>
                				  温水洗浄付きトイレ/冷蔵庫/ポット</td>
    			<td class="tText">バスタオル/ハンドタオル/シャンプー<br>
								  コンディショナー/ボディーソープ<br>
								  シェービングフォーム/カミソリ/石鹸<br>
								  歯ブラシ/歯磨き粉/ヘアーブラシ</td>
    			<td class="tText">シングル&nbsp;\23,000～</td>
  			</tr>
  		</table>
  	  </div>
	  <div class="rt">
  		<table>
  			<tr>
            	<td rowspan="2" class="tBtn"><input type="radio" name="rt1" id="radio" value="rt5"></td>
    			<td class="tTitle">RoomType2&nbsp;ダブルルーム</td>
                <td class="tTitle">設備</td>
                <td class="tTitle">アメニティ</td>
                <td class="tTitle">料金(一泊二日～)</td>
  			</tr>
  			<tr>
    			<td class="tImg"><img src="../images/rImage04.jpg" width="200" height="200" alt="roomtype2"></td>
    			<td class="tText">23インチテレビ/ビデオオンデマンド<br>
                    			  インターネット接続/ユニットバス<br>
                				  温水洗浄付きトイレ/冷蔵庫/ポット</td>
    			<td class="tText">バスタオル/ハンドタオル/シャンプー<br>
								  コンディショナー/ボディーソープ<br>
								  シェービングフォーム/カミソリ/石鹸<br>
								  歯ブラシ/歯磨き粉/ヘアーブラシ</td>
    			<td class="tText">ダブル&nbsp;\29,000～</td>
  			</tr>
  		</table>
  	  </div>
	  <div class="rt">
  		<table>
  			<tr>
            	<td rowspan="2" class="tBtn"><input type="radio" name="rt1" id="radio" value="rt6"></td>
    			<td class="tTitle">RoomType2&nbsp;ツインルーム</td>
                <td class="tTitle">設備</td>
                <td class="tTitle">アメニティ</td>
                <td class="tTitle">料金(一泊二日～)</td>
  			</tr>
  			<tr>
    			<td class="tImg"><img src="../images/rImage04.jpg" width="200" height="200" alt="roomtype2"></td>
    			<td class="tText">23インチテレビ/ビデオオンデマンド<br>
                    			  インターネット接続/ユニットバス<br>
                				  温水洗浄付きトイレ/冷蔵庫/ポット</td>
    			<td class="tText">バスタオル/ハンドタオル/シャンプー<br>
								  コンディショナー/ボディーソープ<br>
								  シェービングフォーム/カミソリ/石鹸<br>
								  歯ブラシ/歯磨き粉/ヘアーブラシ</td>
    			<td class="tText">ツイン&nbsp;\30,000～</td>
  			</tr>
  		</table>
  	  </div>
      <div class="rt">
  		<table>
  			<tr>
            	<td rowspan="2" class="tBtn"><input type="radio" name="rt1" id="radio" value="rt7"></td>
    			<td class="tTitle">RoomType3&nbsp;ツインルーム</td>
                <td class="tTitle">設備</td>
                <td class="tTitle">アメニティ</td>
           	  <td class="tTitle">料金(一泊二日～)</td>
  			</tr>
  			<tr>
    			<td class="tImg"><img src="../images/rImage07.jpg" width="200" height="200" alt="roomtype3"></td>
    			<td class="tText">23インチテレビ/ビデオオンデマンド<br>
    			  				  インターネット接続/ユニットバス<br>
   			    				  温水洗浄付きトイレ/冷蔵庫/ポット</td>
    			<td class="tText">バスタオル/ハンドタオル/シャンプー<br>
    			  				  コンディショナー/ボディーソープ<br>
    			  				  シェービングフォーム/カミソリ/石鹸<br>
   			    				  歯ブラシ/歯磨き粉/ヘアーブラシ</td>
    			<td class="tText">ツイン&nbsp;\35,000</td>
  			</tr>
  		</table>
  	  </div>
      <div class="rt">
  		<table>
  			<tr>
            	<td rowspan="2" class="tBtn"><input type="radio" name="rt1" id="radio" value="rt8"></td>
    			<td class="tTitle">RoomType3&nbsp;トリプルルーム</td>
                <td class="tTitle">設備</td>
                <td class="tTitle">アメニティ</td>
           	  <td class="tTitle">料金(一泊二日～)</td>
  			</tr>
  			<tr>
    			<td class="tImg"><img src="../images/rImage07.jpg" width="200" height="200" alt="roomtype3"></td>
    			<td class="tText">23インチテレビ/ビデオオンデマンド<br>
    			  				  インターネット接続/ユニットバス<br>
   			    				  温水洗浄付きトイレ/冷蔵庫/ポット</td>
    			<td class="tText">バスタオル/ハンドタオル/シャンプー<br>
    			  				  コンディショナー/ボディーソープ<br>
    			  				  シェービングフォーム/カミソリ/石鹸<br>
   			    				  歯ブラシ/歯磨き粉/ヘアーブラシ</td>
    			<td class="tText">トリプル&nbsp;\42,000</td>
  			</tr>
  		</table>
  	  </div>
      <div class="rt">
  		<table>
  			<tr>
            	<td rowspan="2" class="tBtn"><input type="radio" name="rt1" id="radio" value="rt9"></td>
    			<td class="tTitle">RoomType4&nbsp;ツインルーム</td>
                <td class="tTitle">設備</td>
                <td class="tTitle">アメニティ</td>
           	  <td class="tTitle">料金(一泊二日～)</td>
  			</tr>
  			<tr>
    			<td class="tImg"><img src="../images/rImage10.jpg" width="200" height="200" alt="roomtype4"></td>
    			<td class="tText">35インチテレビ/ビデオオンデマンド<br>
    			  				  インターネット接続/ユニットバス<br>
   			    				  温水洗浄付きトイレ/冷蔵庫/ポット</td>
    			<td class="tText">バスタオル/ハンドタオル/シャンプー<br>
    			  				  コンディショナー/ボディーソープ<br>
    			  				  シェービングフォーム/カミソリ/石鹸<br>
   			    				  歯ブラシ/歯磨き粉/ヘアーブラシ</td>
    			<td class="tText">ツイン&nbsp;\45,000～</td>
  			</tr>
  		</table>
  	  </div>
      <div class="rt">
  		<table>
  			<tr>
            	<td rowspan="2" class="tBtn"><input type="radio" name="rt1" id="radio" value="rt10"></td>
    			<td class="tTitle">RoomType4&nbsp;トリプルルーム</td>
                <td class="tTitle">設備</td>
                <td class="tTitle">アメニティ</td>
           	  <td class="tTitle">料金(一泊二日～)</td>
  			</tr>
  			<tr>
    			<td class="tImg"><img src="../images/rImage10.jpg" width="200" height="200" alt="roomtype4"></td>
    			<td class="tText">35インチテレビ/ビデオオンデマンド<br>
    			  				  インターネット接続/ユニットバス<br>
   			    				  温水洗浄付きトイレ/冷蔵庫/ポット</td>
    			<td class="tText">バスタオル/ハンドタオル/シャンプー<br>
    			  				  コンディショナー/ボディーソープ<br>
    			  				  シェービングフォーム/カミソリ/石鹸<br>
   			    				  歯ブラシ/歯磨き粉/ヘアーブラシ</td>
    			<td class="tText">トリプル&nbsp;\55,000～</td>
  			</tr>
  		</table>
  	  </div>
      <div class="rt">
  		<table>
  			<tr>
            	<td rowspan="2" class="tBtn"><input type="radio" name="rt1" id="radio" value="rt11"></td>
    			<td class="tTitle">RoomType5&nbsp;ツインルーム</td>
                <td class="tTitle">設備</td>
                <td class="tTitle">アメニティ</td>
           	  <td class="tTitle">料金(一泊二日～)</td>
  			</tr>
  			<tr>
    			<td class="tImg"><img src="../images/rImage13.jpg" width="200" height="200" alt="roomtype5"></td>
    			<td class="tText">35インチテレビ/ビデオオンデマンド<br>
    			  				  インターネット接続/ユニットバス<br>
   			    				  温水洗浄付きトイレ/冷蔵庫/ポット</td>
    			<td class="tText">バスタオル/ハンドタオル/シャンプー<br>
    			  				  コンディショナー/ボディーソープ<br>
    			  				  シェービングフォーム/カミソリ/石鹸<br>
   			    				  歯ブラシ/歯磨き粉/ヘアーブラシ</td>
    			<td class="tText">ツイン&nbsp;\50,000～</td>
  			</tr>
  		</table>
  	  </div>
      <div class="rt">
  		<table>
  			<tr>
            	<td rowspan="2" class="tBtn"><input type="radio" name="rt1" id="radio" value="rt12"></td>
   			  <td class="tTitle">RoomType5&nbsp;トリプルルーム</td>
                <td class="tTitle">設備</td>
                <td class="tTitle">アメニティ</td>
           	  <td class="tTitle">料金(一泊二日～)</td>
  			</tr>
  			<tr>
    			<td class="tImg"><img src="../images/rImage13.jpg" width="200" height="200" alt="roomtype5"></td>
    			<td class="tText">35インチテレビ/ビデオオンデマンド<br>
    			  				  インターネット接続/ユニットバス<br>
   			    				  温水洗浄付きトイレ/冷蔵庫/ポット</td>
    			<td class="tText">バスタオル/ハンドタオル/シャンプー<br>
    			  				  コンディショナー/ボディーソープ<br>
    			  				  シェービングフォーム/カミソリ/石鹸<br>
   			    				  歯ブラシ/歯磨き粉/ヘアーブラシ</td>
    			<td class="tText">トリプル&nbsp;\65,000～</td>
  			</tr>
  		</table>
      </div>
      <div class="revnBtn">
        <input type="image" name="revnBtn" id="revnBtn" src="../images/revnBtn.gif">
        <input type="hidden" name="btnr" id="btnr" value="1" >
      </div>
	</form>
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

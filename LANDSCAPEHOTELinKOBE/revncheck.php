<?php
header("Content-Type:text/html; charset=UTF-8");
error_reporting(4);
session_start();

require('dbconnect.php');		//db接続
require('lcheck.php');			//ログインチェック

//エラー文章の変数
$errorLogin = '';

//前頁でRoomType1(シングル)を選んだ場合
if($_SESSION['join_r'] == 'rt1'){
	
	$image = '<img src="../images/rImage01.jpg" width="200" height="200">';
	
	$setubi = '23インチテレビ/ビデオオンデマンド<br>
			   インターネット接続/ユニットバス<br>
			   温水洗浄付きトイレ/冷蔵庫/ポット';
			   
	$at =  'バスタオル/ハンドタオル/シャンプー<br>
			コンディショナー/ボディーソープ<br>
			シェービングフォーム/カミソリ/石鹸<br>
			歯ブラシ/歯磨き粉/ヘアーブラシ';
	
	$price = '\22,000～';
}

//前頁でRoomType1(ダブル)を選んだ場合
if($_SESSION['join_r'] == 'rt2'){
	
	$image = '<img src="../images/rImage01.jpg" width="200" height="200">';
	
	$setubi = '23インチテレビ/ビデオオンデマンド<br>
			   インターネット接続/ユニットバス<br>
			   温水洗浄付きトイレ/冷蔵庫/ポット';
			   
	$at =  'バスタオル/ハンドタオル/シャンプー<br>
			コンディショナー/ボディーソープ<br>
			シェービングフォーム/カミソリ/石鹸<br>
			歯ブラシ/歯磨き粉/ヘアーブラシ';
	
	$price = '\28,000～';
}

//前頁でRoomType1(ツイン)を選んだ場合
if($_SESSION['join_r'] == 'rt3'){
	
	$image = '<img src="../images/rImage01.jpg" width="200" height="200">';
	
	$setubi = '23インチテレビ/ビデオオンデマンド<br>
			   インターネット接続/ユニットバス<br>
			   温水洗浄付きトイレ/冷蔵庫/ポット';
			   
	$at =  'バスタオル/ハンドタオル/シャンプー<br>
			コンディショナー/ボディーソープ<br>
			シェービングフォーム/カミソリ/石鹸<br>
			歯ブラシ/歯磨き粉/ヘアーブラシ';
	
	$price = '\29,000～';
}

//前頁でRoomType2(シングル)を選んだ場合
if($_SESSION['join_r'] == 'rt4'){
	
	$image = '<img src="../images/rImage04.jpg" width="200" height="200">';
	
	$setubi = '23インチテレビ/ビデオオンデマンド<br>
               インターネット接続/ユニットバス<br>
               温水洗浄付きトイレ/冷蔵庫/ポット';
			   
	$at =  'バスタオル/ハンドタオル/シャンプー<br>
			コンディショナー/ボディーソープ<br>
			シェービングフォーム/カミソリ/石鹸<br>
			歯ブラシ/歯磨き粉/ヘアーブラシ';
	
	$price = '\23,000～';
}

//前頁でRoomType2(ダブル)を選んだ場合
if($_SESSION['join_r'] == 'rt5'){
	
	$image = '<img src="../images/rImage04.jpg" width="200" height="200">';
	
	$setubi = '23インチテレビ/ビデオオンデマンド<br>
               インターネット接続/ユニットバス<br>
               温水洗浄付きトイレ/冷蔵庫/ポット';
			   
	$at =  'バスタオル/ハンドタオル/シャンプー<br>
			コンディショナー/ボディーソープ<br>
			シェービングフォーム/カミソリ/石鹸<br>
			歯ブラシ/歯磨き粉/ヘアーブラシ';
	
	$price = '\29,000～';
}

//前頁でRoomType2(ツイン)を選んだ場合
if($_SESSION['join_r'] == 'rt6'){
	
	$image = '<img src="../images/rImage04.jpg" width="200" height="200">';
	
	$setubi = '23インチテレビ/ビデオオンデマンド<br>
               インターネット接続/ユニットバス<br>
               温水洗浄付きトイレ/冷蔵庫/ポット';
			   
	$at =  'バスタオル/ハンドタオル/シャンプー<br>
			コンディショナー/ボディーソープ<br>
			シェービングフォーム/カミソリ/石鹸<br>
			歯ブラシ/歯磨き粉/ヘアーブラシ';
	
	$price = '\30,000～';
}

//前頁でRoomType3(ツイン)を選んだ場合
if($_SESSION['join_r'] == 'rt7'){
	
	$image = '<img src="../images/rImage07.jpg" width="200" height="200">';
	
	$setubi = '23インチテレビ/ビデオオンデマンド<br>
    		   インターネット接続/ユニットバス<br>
   			   温水洗浄付きトイレ/冷蔵庫/ポット';
			   
	$at =  'バスタオル/ハンドタオル/シャンプー<br>
    		コンディショナー/ボディーソープ<br>
    		シェービングフォーム/カミソリ/石鹸<br>
   			歯ブラシ/歯磨き粉/ヘアーブラシ';
	
	$price = '\42,000～';
}

//前頁でRoomType3(トリプル)を選んだ場合
if($_SESSION['join_r'] == 'rt8'){
	
	$image = '<img src="../images/rImage07.jpg" width="200" height="200">';
	
	$setubi = '23インチテレビ/ビデオオンデマンド<br>
    		   インターネット接続/ユニットバス<br>
   			   温水洗浄付きトイレ/冷蔵庫/ポット';
			   
	$at =  'バスタオル/ハンドタオル/シャンプー<br>
    		コンディショナー/ボディーソープ<br>
    		シェービングフォーム/カミソリ/石鹸<br>
   			歯ブラシ/歯磨き粉/ヘアーブラシ';
	
	$price = '\42,000～';
}

//前頁でRoomType4(ツイン)を選んだ場合
if($_SESSION['join_r'] == 'rt9'){
	
	$image = '<img src="../images/rImage10.jpg" width="200" height="200">';
	
	$setubi = '35インチテレビ/ビデオオンデマンド<br>
    		   インターネット接続/ユニットバス<br>
   			   温水洗浄付きトイレ/冷蔵庫/ポット';
			   
	$at =  'バスタオル/ハンドタオル/シャンプー<br>
    		コンディショナー/ボディーソープ<br>
    		シェービングフォーム/カミソリ/石鹸<br>
   			歯ブラシ/歯磨き粉/ヘアーブラシ';
	
	$price = '\45,000～';
}

//前頁でRoomType4(トリプル)を選んだ場合
if($_SESSION['join_r'] == 'rt10'){
	
	$image = '<img src="../images/rImage10.jpg" width="200" height="200">';
	
	$setubi = '35インチテレビ/ビデオオンデマンド<br>
    		   インターネット接続/ユニットバス<br>
   			   温水洗浄付きトイレ/冷蔵庫/ポット';
			   
	$at =  'バスタオル/ハンドタオル/シャンプー<br>
    		コンディショナー/ボディーソープ<br>
    		シェービングフォーム/カミソリ/石鹸<br>
   			歯ブラシ/歯磨き粉/ヘアーブラシ';
	
	$price = '\55,000～';
}

//前頁でRoomType5(ツイン)を選んだ場合
if($_SESSION['join_r'] == 'rt11'){
	
	$image = '<img src="../images/rImage13.jpg" width="200" height="200">';
	
	$setubi = '35インチテレビ/ビデオオンデマンド<br>
			   インターネット接続/ユニットバス<br>
   			   温水洗浄付きトイレ/冷蔵庫/ポット';
			   
	$at =  'バスタオル/ハンドタオル/シャンプー<br>
    		コンディショナー/ボディーソープ<br>
    		シェービングフォーム/カミソリ/石鹸<br>
   			歯ブラシ/歯磨き粉/ヘアーブラシ';
	
	$price = '\50,000～';
}

//前頁でRoomType5(トリプル)を選んだ場合
if($_SESSION['join_r'] == 'rt12'){
	
	$image = '<img src="../images/rImage13.jpg" width="200" height="200">';
	
	$setubi = '35インチテレビ/ビデオオンデマンド<br>
			   インターネット接続/ユニットバス<br>
   			   温水洗浄付きトイレ/冷蔵庫/ポット';
			   
	$at =  'バスタオル/ハンドタオル/シャンプー<br>
    		コンディショナー/ボディーソープ<br>
    		シェービングフォーム/カミソリ/石鹸<br>
   			歯ブラシ/歯磨き粉/ヘアーブラシ';
	
	$price = '\65,000～';
}

//ログインボタン
if($_POST['fuser']=='lu'){
	//メールアドレス又はパスワードの記述がない場合
	if($_POST['mailaddress'] == '' || $_POST['pass'] == ''){
		$errorLogin = 'blank';
	}
	elseif($_POST['mailaddress'] != '' || $_POST['pass'] != ''){
		//記述があれば、mySQLに接続し、ユーザー検索
		$sql = sprintf('SELECT * FROM loginlsh WHERE mail="%s" AND pass="%s"',
					   mysql_real_escape_string($_POST['mailaddress']),mysql_real_escape_string(sha1($_POST['pass'])));
		$record = mysql_query($sql) or die(mysql_error());
		if($table = mysql_fetch_assoc($record)){
			//ログイン成功
			$_SESSION['id'] = $table['id'];
			$_SESSION['time'] = time();
			header('Location: https://noor-connect-ki.ssl-lolipop.jp/LANDSCAPEHOTELinKOBE/php/revnform.php?l=1'.SID);
			exit();
		}else{
			//ログイン失敗
			$errorLogin = 'failed';	
		}
	}
}
//新規ボタン
if($_POST['fuser']=='nu'){
	header('Location: https://noor-connect-ki.ssl-lolipop.jp/LANDSCAPEHOTELinKOBE/php/revnform.php'.SID);
	exit();
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
<article>
  <h3><img src="../images/rvanTitle02.gif" width="550" height="38" alt="Reservation 宿泊予約 お部屋の確認"></h3>
  <form name="form1" method="post" action="revncheck.php">
    <p class="revnText">このお部屋でよろしければ、「次へ」を押してください。</p>
    <?php if($errorLogin == 'blank'): ?>
    	<p class="errorLogin">メールアドレスまたはパスワードを入力して下さい。</p>
    <?php endif; ?>
    <?php if($errorLogin == 'failed'): ?>
    	<p class="errorLogin">ログインに失敗しました。正しくご記入ください。</p>
    <?php endif; ?>
    <div class="rt">
  		<table>
    		<tr>
      			<td class="tTitle">イメージ</td>
                <td class="tTitle">設備</td>
                <td class="tTitle">アメニティ</td>
                <td class="tTitle">料金</td>
      		</tr>
    		<tr>
      			<td class="tImg"><?php echo $image; ?></td>
      			<td class="tText"><?php echo $setubi; ?></td>
      			<td class="tText"><?php echo $at; ?></td>
      			<td class="tText"><?php echo $price; ?></td>
      		</tr>
  		</table>
    </div>
    <div class="rlw">
      <p class="rBack"><a href="revn.php"><img src="../images/revnBtn_back.gif" width="115" height="39" alt="戻る"></a></p>
      <div class="revnLogin">
		<table>
          <tr>
            <td colspan="2" class="ut">会員登録済みの方(お客様情報の入力を省けます)</td>
            </tr>
          <tr>
            <td class="uText"><label for="mailaddress">メールアドレス</label></td>
            <td><input name="mailaddress" type="text" id="mailaddress" size="30"></td>
            </tr>
          <tr>
            <td class="uText"><label for="pass">パスワード</label></td>
            <td><input name="pass" type="password" id="pass" size="23"></td>
            </tr>
          <tr>
            <td colspan="2" class="ut"><button type="submit" name="fuser" value="lu"><img src="../images/revnUser.gif" alt="ログイン" width="115" height="32"></button></td>
            </tr>
          </table>
    </div>
      <p id="revnNew"><button type="submit" name="fuser" value="nu"><img src="../images/revnNew.gif" alt="新規の方はこちら" width="150" height="50"></button></p>
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

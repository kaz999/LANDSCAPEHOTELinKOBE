<?php
header("Content-Type:text/html; charset=UTF-8");
error_reporting(4);
session_start();

require('dbconnect.php');		//db接続
require('lcheck.php');			//ログインチェック

//リアルタイム
$year_r = date('Y');	//年
$month_r = date('n');	//月
$day_r = date('j');		//日


//チェックイン日付
$ci_y = substr($_POST['checkin'],'0','4'); //チェックイン:年
$ci_m = substr($_POST['checkin'],'5','2'); //チェックイン:月
$ci_d = substr($_POST['checkin'],'8','2'); //チェックイン:日
//チェックイン日付-整数変換-
$num_iy = intval($ci_y);
$num_im = intval($ci_m);
$num_id = intval($ci_d);

//チェックアウト日付
$co_y = substr($_POST['checkout'],'0','4'); //チェックアウト:年
$co_m = substr($_POST['checkout'],'5','2'); //チェックアウト:月
$co_d = substr($_POST['checkout'],'8','2'); //チェックアウト:日
//チェックアウト日付-整数変換-
$num_oy = intval($co_y);
$num_om = intval($co_m);
$num_od = intval($co_d);

//日にちエラー文
$errorDates = '';

//チェックイン日・チェックアウト日のフォームテキストが空白か否かを調べる
if(!empty($_POST)){
	
	//空白の場合、エラー文を生成
	if($_POST['checkin'] == ''){
		$error_c['checkin'] = 'blank';
	}
	if($_POST['checkout'] ==''){
		$error_c['checkout'] = 'blank';
	}
	
	//空白ではない場合、中身を調べる
	if(empty($error_c)){
		//チェックアウト日がチェックイン日の前日であれば、エラー
		if($num_id >= $num_od){
			//月跨ぎの場合
			if($num_im < $num_om && $num_id > $num_od){
				$_SESSION['join_c'] = $_POST;
				header('Location: https://noor-connect-ki.ssl-lolipop.jp/LANDSCAPEHOTELinKOBE/php/revn.php'.SID);
				exit();
			}
			else{
				$errorDates = 'blank';
			}
		}
		//チェックイン日が当日以前であれば、エラー
		elseif($num_id <= $day_r && $num_im <= $month_r){
			$errorDates = 'blank2';
		}
		//例(チェックイン3/23 チェックアウト2/28)の場合、エラー
		elseif($num_im > $num_om && $num_id < $num_od){
			$errorDates = 'blank';
		}
		elseif($num_im > $month_r && $num_id < $day_r){
			$_SESSION['join_c'] = $_POST;
			header('Location: https://noor-connect-ki.ssl-lolipop.jp/LANDSCAPEHOTELinKOBE/php/revn.php'.SID);
			exit();
		}
		//日にちに問題がなければ、次のページへ
		else{
			$_SESSION['join_c'] = $_POST;
			header('Location: https://noor-connect-ki.ssl-lolipop.jp/LANDSCAPEHOTELinKOBE/php/revn.php'.SID);
			exit();
		}
	}
}

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>LANDSCAPEHOTEL in 神戸 | TOP</title>
<link href="../css/common.css" rel="stylesheet" media="screen">
<link href="../css/jquery.mCustomScrollbar.css" rel="stylesheet" media="screen">
<link href="../css/jquery.bxslider.css" rel="stylesheet" type="text/css" media="screen">
<link href="../flick/jquery.ui.all.css" rel="stylesheet" type="text/css" media="screen">
<script src="../js/jquery-1.10.2.min.js"></script>
<script src="../js/jquery.ui.core.min.js"></script>
<script src="../js/jquery.ui.datepicker.min.js"></script>
<script src="../js/jquery.ui.datepicker-ja.js"></script>
<script src="../js/jquery.bxslider.min.js"></script>
<script src="../js/jquery.easing.1.3.js"></script>
<script src="../js/jquery.mCustomScrollbar.min.js"></script>
<script src="../js/script.js"></script>
<script src="../js/viewer.js"></script>
<script src="../js/pagescroll.js"></script>
<script>
	//宿泊予約フォームカレンダー
    $(function() {
    	$('#checkin').datepicker();
		
    });
    $(function() {
    	$('#checkout').datepicker();
		
    });
</script>
</head>
<body>
<h4><?php echo $namerror; ?></h4>
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
      <li><a href="room.php"><img src="../images/room.gif" alt="客室Room" width="150" height="50"></a></li>
      <li><a href="restrant.php"><img src="../images/restrant.gif" width="150" height="50" alt="レストランRestrant"></a></li>
      <li><a href="meeting_party.php"><img src="../images/meeting_party.gif" width="150" height="50" alt="会議・パーティーMeetin&amp;Party"></a></li>
      <li><a href="floorguide.php"><img src="../images/Floorguide.gif" width="150" height="50" alt="フロアガイドFloorguide"></a></li>
      <li><a href="access.php"><img src="../images/access.gif" width="150" height="50" alt="アクセスAccess"></a></li>
      <li><a href="sitemap.php"><img src="../images/sitemap.gif" width="150" height="50" alt="サイトマップSitemap"></a></li>
    </ul>
  </nav>
<!--Globalnavi終了-->
<!--Contents開始-->
  <article>
<!--MainVisual開始-->
	<div class="bx-wrapper">
  		<ul class="slider">
            <li><a href="campaign.php"><img src="../images/mvCmn.jpg" width="900" height="300" alt="Campaign キャンペーン"></a></li>
    		<li><a href="room.php"><img src="../images/mvRoom.jpg" width="900" height="300" alt="ROOM 客室"></a></li>
    		<li><a href="restrant.php"><img src="../images/mvRet.jpg" width="900" height="300" alt="RESTAURANT レストラン"></a></li>
    		<li><a href="lodging.php"><img src="../images/mvLdg.jpg" width="900" height="300" alt="LODGING 施設"></a></li>
    		<li><a href="wedding.php"><img src="../images/mvWdg.jpg" width="900" height="300" alt="WEDDING ウェディング"></a></li>
  		</ul>
	</div>
<!--MainVisual開始-->
<!--Maincontents開始-->
	<div class="mContents">
  		<section class="news">
    		<h3><img src="../images/newsTitle.gif" width="280" height="28" alt="News 新着情報"></h3>
    		<div class="cScroll" id="cScroll_1">
    		  <ul>
        		<li>2013.01.01<br>
          			<a href="campaign.html">開業30周年キャンペーンの特設ページ<br>
            		を追加しました。</a></li>
        		<li>2013.01.01<br>
          			サイトをリニューアルしました。</li>
        		<li>2013.01.01<br>
          			サイトの一部を変更しました。</li>
        		<li>2013.01.01<br>
          			会員登録及びログイン機能を追加しました。</li>
        		<li>2013.01.01<br>
          			サイトを公開しました。</li>
        	</ul>
      		</div>
  		</section>
  		<section class="reser">
    		<h3><img src="../images/rsnTitle.gif" width="280" height="28" alt="Reservation 宿泊予約"></h3>
            <?php if($error_c['checkin'] == 'blank'): ?>
       	  		<p class="error">チェックインの日付を選んでください。</p>
            <?php endif; ?>
            <?php if($error_c['checkout'] == 'blank'): ?>
       	  		<p class="error">チェックアウトの日付を選んでください。</p>
            <?php endif; ?>
            <?php if($errorDates == 'blank'): ?>
            	<p class="error">日にちが一致しません。</p>
            <?php endif; ?>
            <?php if($errorDates == 'blank2'): ?>
            	<p class="error">当日以前は選択できません。</p>
            <?php endif; ?>
			<form action="index.php" method="post">
				<p class="checkin"><img src="../images/checkin.gif" width="155" height="30" alt="チェックイン">
			    <input name="checkin" type="text" id="checkin" size="25"></p>
   			  <p class="checkout"><img src="../images/checkout.gif" width="177" height="30" alt="チェックアウト">
		      <input name="checkout" type="text" id="checkout" size="25">
		      <input name="#cBottom" type="image" id="cBottom" src="../images/rvbottom2.gif" onMouseOver="this.src='../images/rvbottom2_ov.gif'" onMouseOut="this.src='../images/rvbottom2.gif'">
   			  </p>
    			
    				<ul>
		  			  <li><a href="login.php?lg=1" class="eCheck">予約の確認</a></li>
      				  <li class="cr"><a href="login.php?lg=1" class="rCancel">予約のキャンセル</a></li>
      				</ul>
		  	</form> 
  	  </section>
	</div>
<!--Maincontents終了-->
<!--Subcontents開始-->
	<div class="sContents">
  		<section class="pickup">
    		<h3><img src="../images/picTitle.gif" width="280" height="28" alt="PickupPlan ピックアッププラン"></h3>
    		<div class="mod-image">
      			<ul class="main">
        			<li><a href="room.php#v2"><img src="../images/pickup01.jpg" width="315" height="200" alt="Pickup_01"></a></li>
        			<li><a href="lodging.php#page1"><img src="../images/pickup02.jpg" width="315" height="200" alt="Pickup_02" ></a></li>
        			<li><a href="restrant.php#page4"><img src="../images/pickup03.jpg" width="315" height="200" alt="Pickup_03"></a></li>
        			<li><a href="restrant.php#page1"><img src="../images/pickup04.jpg" width="315" height="200" alt="Pickup_04"></a></li>
        			<li><a href="#"><img src="../images/pickup05.jpg" width="315" height="200" alt="Pickup_05"></a></li>
        		</ul>
      			<ul class="thumb">
       			  <li><a href="#"><img src="../images/pickup01s.png" width="52" height="52" alt="Pickup_01s"></a></li>
        			<li><a href="#"><img src="../images/pickup02s.png" width="52" height="52" alt="Pickup_02s"></a></li>
        			<li><a href="#"><img src="../images/pickup03s.png" width="52" height="52" alt="Pickup03_s"></a></li>
        			<li><a href="#"><img src="../images/pickup04s.png" width="52" height="52" alt="Pickup_04s"></a></li>
        			<li><a href="#"><img src="../images/pickup05s.png" width="52" height="52" alt="Pickup_05s"></a></li>
        		</ul>
      		</div>
  		</section>
  		<section class="service">
    		<p class="sTop"><a href="wedding.php"><img src="../images/wedding.png" width="440" height="140" alt="Wedding挙式"></a></p>
    		<p class="sBottom"><a href="lodging.php"><img src="../images/service.png" width="440" height="140" alt="Service各種サービス"></a></p>
  		</section>
	</div>
	<h3 class="Campaign"><a href="campaign.php"><img src="../images/campaign.jpg" width="900" height="250" alt="キャンペーン"></a></h3>
<!--Subcontents終了-->
  </article>
<!--Contents終了-->
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
</html>

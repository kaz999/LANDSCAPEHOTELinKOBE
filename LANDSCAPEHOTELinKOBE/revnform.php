<?php
header("Content-Type:text/html; charset=UTF-8");
error_reporting(4);
session_start();

require('dbconnect.php');		//db接続
require('lcheck.php');			//ログインチェック

//ログインしてこのページに遷移した場合
if($_GET['l'] == '1'){

		//mySQLからユーザー情報を取得
		$_POST['name'] = $member['name'];	//名前
		$_POST['kana'] = $member['kana'];	//カナ
		$_POST['zipcode'] = $member['zipcode'];	//郵便番号
		$_POST['address'] = $member['address'];	//住所
		$_POST['tel'] = $member['tel'];	//電話番号
}

//フォームテキストに空白がないか確認
if($_POST['btn_u'] == '1'){
	
	if(!empty($_POST)){
		//空白があった場合、エラー文を生成
		if($_POST['name'] == ''){
			$error_u['name'] = 'blank';
		}
		if($_POST['kana'] == ''){
			$error_u['kana'] = 'blank';
		}
		if($_POST['zipcode'] == ''){
			$error_u['zipcode'] = 'blank';
		}
		if($_POST['address'] == ''){
			$error_u['address'] = 'blank';
		}
		if($_POST['tel'] == ''){
			$error_u['tel'] = 'blank';
		}
		//空白がない場合、テキスト内容をセッション変数に入れ、次のページへ
		if(empty($error_u)){
			$_SESSION['join_u'] = $_POST;
			header('Location: https://noor-connect-ki.ssl-lolipop.jp/LANDSCAPEHOTELinKOBE/php/revnformck.php'.SID);
			exit();
		}
	}
}
?>
<!doctype html>
<html><!-- InstanceBegin template="/Templates/common.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
<meta charset="utf-8">
<!-- InstanceBeginEditable name="doctitle" -->
<title>LANDSCAPEHOTEL in 神戸 | 宿泊予約</title>
<link href="../css/revnform.css" rel="stylesheet" type="text/css" media="screen">
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
  <h3><img src="../images/rvanTitle03.gif" width="550" height="38" alt="Reservation 宿泊予約 お客様情報入力画面"></h3>
  <p class="rnf">お客様の情報を入力して、「お客様情報確認ページへ」を押してください。</p>
  <?php if($error_u['name'] == 'blank'): ?>
  	<p class="error_u">※姓名を入力して下さい。</p>
  <?php endif; ?>
  <?php if($error_u['kana'] == 'blank'): ?>
  	<p class="error_u">※カナを入力して下さい。</p>
  <?php endif; ?>
  <?php if($error_u['zipcode'] == 'blank'): ?>
  	<p class="error_u">※郵便番号を入力して下さい。</p>
  <?php endif; ?>
  <?php if($error_u['address'] == 'blank'): ?>
  	<p class="error_u">※住所を入力して下さい。</p>
  <?php endif; ?>
  <?php if($error_u['tel'] == 'blank'): ?>
  	<p class="error_u">※電場番号を入力して下さい。</p>
  <?php endif; ?>
  <div class="revnform">
  <form name="form1" method="post" action="revnform.php">
    <table>
      <tr>
        <td class="rLeft"><label for="name"><span>※必須</span>&nbsp;姓名(例:田中太郎)</label></td>
        <td class="rRight"><input name="name" type="text" id="name" size="35" value="<?php echo htmlspecialchars($_POST['name'],ENT_QUOTES,'UTF-8'); ?>"></td>
        </tr>
      <tr>
        <td class="rLeft"><label for="kana"><span>※必須</span>&nbsp;カナ(例:タナカタロウ)</label></td>
        <td class="rRight"><input name="kana" type="text" id="kana" size="35" value="<?php echo htmlspecialchars($_POST['kana'],ENT_QUOTES,'UTF-8'); ?>"></td>
        </tr>
      <tr>
        <td class="rLeft"><label for="zipcode"><span>※必須</span>&nbsp;郵便番号(例:1113330)</label></td>
        <td class="rRight"><input name="zipcode" type="text" id="zipcode" size="15" maxlength="7" value="<?php echo htmlspecialchars($_POST['zipcode'],ENT_QUOTES,'UTF-8'); ?>"></td>
        </tr>
      <tr>
        <td class="rLeft"><label for="address"><span>※必須</span>&nbsp;住所(例:兵庫県神戸市11-22-3)</label></td>
        <td class="rRight"><input name="address" type="text" id="address" size="55" value="<?php echo htmlspecialchars($_POST['address'],ENT_QUOTES,'UTF-8'); ?>"></td>
        </tr>
      <tr>
        <td class="rLeft"><label for="tel"><span>※必須</span>&nbsp;電話番号(例:0511112222)</label></td>
        <td class="rRight"><input name="tel" type="text" id="tel" size="25" value="<?php echo htmlspecialchars($_POST['tel'],ENT_QUOTES,'UTF-8'); ?>"></td>
        </tr>
      </table>
    <div class="rvnfBtn">
  	  <p><a href="https://noor-connect-ki.ssl-lolipop.jp/LANDSCAPEHOTELinKOBE/php/revncheck.php"><img src="../images/revnBtn_back.gif" width="115" height="39" alt="戻る"></a></p>
      <input type="image" name="revnBtn_uc" id="revnBtn_uc" src="../images/revnBtn_uc.gif">
      <input type="hidden" name="btn_u" value="1">
    </div>
  </form>
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

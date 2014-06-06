<?php
header("Content-Type:text/html; charset=UTF-8");
error_reporting(4);
session_start();

require('dbconnect.php');		//db接続
require('lcheck.php');			//ログインチェック


//お問い合わせ
//必須項目に記述がなかったとき、エラー文を生成
if(!empty($_POST)){

	//エラー各項目の確認
    if($_POST[name] == ''){
    	$error[name] = 'blank';
    }
    if($_POST[kana] == ''){
    	$error[kana] = 'blank';
    }
    if($_POST[tel] == ''){
    	$error[tel] = 'blank';
    }
    if($_POST[mail] == ''){
    	$error[mail] = 'blank';
    }
    if($_POST[comment] == ''){
    	$error[comment] = 'blank';
    }
    
    //必須項目が記述されていた時の処理
    if(empty($error)){
    	$_SESSION['join']=$_POST;
        header('Location: https://noor-connect-ki.ssl-lolipop.jp/LANDSCAPEHOTELinKOBE/php/inquiryck.php');
        exit();
    }
}

//確認ページから戻ってきたときの処理
if("1"==$_GET['input']){

	$_POST['name']=$_SESSION['join']['name'];
    $_POST['kana']=$_SESSION['join']['kana'];
    $_POST['zipcode']=$_SESSION['join']['zipcode'];
    $_POST['jyusho']=$_SESSION['join']['jyusho'];
    $_POST['tel']=$_SESSION['join']['tel'];
    $_POST['mail']=$_SESSION['join']['mail'];
    $_POST['comment']=$_SESSION['join']['comment'];
    
}
?>
<!doctype html>
<html><!-- InstanceBegin template="/Templates/common.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
<meta charset="utf-8">
<!-- InstanceBeginEditable name="doctitle" -->
<title>LANDSCAPEHOTEL in 神戸 | お問い合わせ</title>
<!-- InstanceEndEditable -->
<link href="../css/common.css" rel="stylesheet" media="screen">
<link href="../css/inquiry.css" rel="stylesheet" type="text/css" media="screen">
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
  <div class="iqWapper">
  <h3><img src="../images/iqTitle.gif" width="550" height="38" alt="Inquiry お問い合わせ"></h3>
    <p>下記の内容をご入力ください。<span>※</span>は必須項目です。</p>
	<form action="inquiry.php?<?php echo SID ?>" method="post" id="iq_form" name="iq_form">    
		<table>
      		<tr>
        		<td class="rb"><label for="name"><span>※</span>お名前</label></td>
        		<td><input type="text" name="name" id="name" value="<?php echo htmlspecialchars($_POST['name'],ENT_QUOTES,'UTF-8'); ?>" />
        	    <span>例)&nbsp;鈴木太郎</span>
                <?php if($error['name']=='blank'): ?>
            		<p class="error">※姓名が未入力です</p>
            	<?php endif; ?>
				</td>
        	</tr>
      		<tr>
        		<td class="rb"><label for="kana"><span>※</span>フリガナ</label></td>
        		<td><input name="kana" type="text" id="kana" size="20" value="<?php echo htmlspecialchars($_POST['kana'],ENT_QUOTES,'UTF-8'); ?>" />
        	    <span>例)&nbsp;スズキタロウ</span>
            	<?php if($error['kana']=='blank'): ?>
            		<p class="error">※フリガナが未入力です</p>
            	<?php endif; ?>
                </td>
        	</tr>
      		<tr>
        		<td class="rb"><label for="zipcode">郵便番号</label></td>
        		<td><label for="zipcode"></label>
          			<input name="zipcode" type="text" id="zipcode" size="8" maxlength="7" value="<?php echo htmlspecialchars($_POST['zipcode'],ENT_QUOTES,'UTF-8'); ?>" />
        	    	<span>例)&nbsp;1230009</span></td>
        	</tr>
      		<tr>
        		<td class="rb"><label for="jyusho">住所</label></td>
        		<td><input name="jyusho" type="text" id="jyusho" size="40" value="<?php echo htmlspecialchars($_POST['jyusho'],ENT_QUOTES,'UTF-8'); ?>" />
          		<span><br>
          		例)&nbsp;兵庫県神戸市中央区加納町１丁目２-５</span></td>
        	</tr>
      		<tr>
        		<td class="rb"><label for="tel"><span>※</span>電話番号</label></td>
        		<td><input name="tel" type="text" id="tel" size="25" value="<?php echo htmlspecialchars($_POST['tel'],ENT_QUOTES,'UTF-8'); ?>" />
        		<span>例)&nbsp;0912345678</span>
                	<?php if($error['tel']=='blank'): ?>
            			<p class="error">※電話番号が未入力です</p>
            		<?php endif; ?>
				</td>
        	</tr>
      		<tr>
        		<td class="rb"><label for="mail"><span>※</span>メールアドレス</label></td>
        		<td><input name="mail" type="text" id="mail" size="32" value="<?php echo htmlspecialchars($_POST['mail'],ENT_QUOTES,'UTF-8'); ?>" />
          		<span>例)&nbsp;landscapehotel@lmail.com</span>
                   	<?php if($error['mail']=='blank'): ?>
            			<p class="error">※メールアドレスが未入力です</p>
            		<?php endif; ?>
				</td>
        	</tr>
      		<tr>
        		<td class="rb"><label for="comment"><span>※</span>お問い合わせ内容</label></td>
        		<td><textarea name="comment" cols="60" rows="10" id="comment" ><?php echo htmlspecialchars($_POST['comment'],ENT_QUOTES,'UTF-8'); ?></textarea><br>
        		  <span>お問い合わせ内容をご入力ください。</span>
                	<?php if($error['comment']=='blank'): ?>
            			<p class="error">※お問い合わせ内容が未入力です</p>
            		<?php endif; ?>
                </td>
        	</tr>
    	</table>
		<p class="iqBottom">
      		<input type="image" name="btn" id="btn" src="../images/iqBottom.gif">
    	</p>
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

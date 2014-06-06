<?php
header("Content-Type:text/html; charset=UTF-8");
error_reporting(4);
session_start();

require('dbconnect.php');		//db接続
require('lcheck.php');			//ログインチェック


//都道府県
$todohuken=array('都道府県を選んでください','北海道','青森県','岩手県','宮城県','秋田県','山形県','福島県','茨城県','栃木県','群馬県','埼玉県','千葉県',
				 '東京都','神奈川県','新潟県','富山県','石川県','福井県','山梨県','長野県','岐阜県','静岡県','愛知県','三重県','滋賀県','京都府',
				 '大阪府','兵庫県','奈良県','和歌山県','鳥取県','島根県','岡山県','広島県','山口県','徳島県','高知県','福岡県','佐賀県',
				 '長崎県','熊本県','大分県','宮崎県','鹿児島県','沖縄県');

//都道府県の生成
for($i=0; $i<count($todohuken); $i++){
	$s_todohuken = $s_todohuken ."\t". '<option value="' . $todohuken[$i] . '">' . $todohuken[$i] . '</option>'."\n";
}


//新規登録
//必須項目に記入がなかったとき、エラー文を生成
if(!empty($_POST)){

	//エラー各項目の確認
    //名前
    if($_POST['name']==''){
    	$error['name'] = 'blank';
    }
	//カナ
    if($_POST['kana']==''){
    	$error['kana'] = 'blank';
    }
	//電話番号
    if($_POST['tel']==''){
    	$error['tel'] = 'blank';
    }
	//メールアドレス
    if($_POST['mail']==''){
    	$error['mail'] = 'blank';
    }
	//確認メールアドレス
	if($_POST['mailc']==''){
    	$error['mailc'] = 'blank';
    }
	//メールアドレス・確認メールアドレスの不一致
    if($_POST['mail'] != $_POST['mailc']){
    	$error['mailc'] = 'nomatch';
    }
	//郵便番号
    if($_POST['zipcode']==''){
    	$error['zipcode'] = 'blank';
    }
	//都道府県
    if($_POST['todohuken']=='都道府県を選んでください'){
    	$error['todohuken'] = 'blank';
    }
	//住所
    if($_POST['address']==''){
    	$error['address'] = 'blank';
    }
	//パスワードの文字数
	if(strlen($_POST['pass']) < 4 || strlen($_POST['pass']) > 18){
		$error['pass'] ='len';
	}
	//パスワード
    if($_POST['pass']==''){
    	$error['pass'] = 'blank';
    }
	//確認パスワード
	if($_POST['passc']==''){
    	$error['passc'] = 'blank';
    }
	//パスワード・確認パスワードの不一致
    if($_POST['pass'] != $_POST['passc']){
    	$error['passc'] = 'nomatch';
    }

    //必須項目が記述されていた時の処理
    if(empty($error)){
    	$_SESSION['join']=$_POST;
        header('Location: https://noor-connect-ki.ssl-lolipop.jp/LANDSCAPEHOTELinKOBE/php/newuserck.php');
        exit();
    }
}

//前ページから戻ってきたときの処理
if('1'==$_GET[input]){
	
	$_POST['name']=$_SESSION['join']['name'];
	$_POST['kana']=$_SESSION['join']['kana'];
	$_POST['tel']=$_SESSION['join']['tel'];
	$_POST['tel2']=$_SESSION['join']['tel2'];
	$_POST['mail']=$_SESSION['join']['mail'];
	$_POST['zipcode']=$_SESSION['join']['zipcode'];
	$_POST['todohuken']=$_SESSION['join']['todohuken'];
	$_POST['address']=$_SESSION['join']['address'];
	
}

?>
<!doctype html>
<html><!-- InstanceBegin template="/Templates/common.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
<meta charset="utf-8">
<!-- InstanceBeginEditable name="doctitle" -->
<title>LANDSCAPEHOTEL in 神戸 | 会員登録</title>
<!-- InstanceEndEditable -->
<link href="../css/common.css" rel="stylesheet" media="screen">
<link href="../css/newuser.css" rel="stylesheet" type="text/css" media="screen">
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
  <div class="nuWapper">
  <h3><img src="../images/nuTitle.gif" width="550" height="38" alt="NewUser 会員登録"></h3>
  <p>下記の内容をご入力ください。<span>※</span>は必須入力です。</p>
  <form action="newuser.php" method="post" name="nu_form" id="nu_form">
    <table>
      <tr>
        <td class="rb"><label for="name"><span>※</span>氏名</label></td>
        <td>
          <input name="name" type="text" id="name" size="20"
          value="<?php echo htmlspecialchars($_POST['name'],ENT_QUOTES,'UTF-8'); ?>" >
          <span>例) 鈴木太郎</span>
          <?php if($error['name']=='blank'): ?>
          	<p class="error">※名前が未入力です</p>
          <?php endif; ?></td>
        </tr>
      <tr>
        <td class="rb"><label for="kana"><span>※</span>フリガナ</label></td>
        <td>
          <input name="kana" type="text" id="kana" size="20"
          value="<?php echo htmlspecialchars($_POST['kana'],ENT_QUOTES,'UTF-8'); ?>" >
          <span>例) スズキタロウ</span>
          <?php if($error['kana']=='blank'): ?>
          	<p class="error">※フリガナが未入力です</p>
          <?php endif; ?></td>
        </tr>
      <tr>
        <td class="rb"><label for="tel"><span>※</span>電話番号</label></td>
        <td>
          <input name="tel" type="text" id="tel" size="30"
          value="<?php echo htmlspecialchars($_POST['tel'],ENT_QUOTES,'UTF-8'); ?>" >
          <span>例) 01-1234-5678</span>
          <?php if($error['tel']=='blank'): ?>
          	<p class="error">※電話番号が未入力です</p>
          <?php endif; ?></td>
        </tr>
      <tr>
        <td class="rb"><label for="tel2">携帯電話番号</label></td>
        <td>
          <input name="tel2" type="text" id="tel2" size="30"
          value="<?php echo htmlspecialchars($_POST['tel2'],ENT_QUOTES,'UTF-8'); ?>" >
          <span>例) 090-1234-5678</span></td>
        </tr>
      <tr>
        <td class="rb"><label for="mail"><span>※</span>Eメールアドレス</label></td>
        <td>
          <input name="mail" type="text" id="mail" size="32"
          value="<?php echo htmlspecialchars($_POST['mail'],ENT_QUOTES,'UTF-8'); ?>" >
          <span>例) landscapehotel@docomo.ne.jp</span>
          <?php if($error['mail']=='blank'): ?>
          	<p class="error">※メールが未入力です</p>
          <?php endif; ?></td>
        </tr>
      <tr>
        <td class="rb"><label for="mailc"><span>※</span>Eメールアドレス(確認)</label></td>
        <td>
          <input name="mailc" type="text" id="mailc" size="32">
          <span>上記と同じEメールアドレスをご入力ください。</span>
          <?php if($error['mailc']=='blank'): ?>
          	<p class="error">※確認用メールアドレスが未入力です</p>
          <?php endif; ?>
          <?php if($error['mailc']=='nomatch'): ?>
          	<p class="error">※上記のメールアドレスと一致しません</p>
          <?php endif; ?></td>
        </tr>
      <tr>
        <td class="rb"><label for="zipcode"><span>※</span>郵便番号</label></td>
        <td>
          <input name="zipcode" type="text" id="zipcode" size="8" maxlength="7"
          value="<?php echo htmlspecialchars($_POST['zipcode'],ENT_QUOTES,'UTF-8'); ?>" >
          <span>例) 1230009</span>
          <?php if($error['zipcode']=='blank'): ?>
          	<p class="error">※郵便番号が未入力です</p>
          <?php endif; ?></td>
        </tr>
      <tr>
        <td class="rb"><label for="todohuken"><span>※</span>都道府県</label></td>
        <td><select name="todohuken" id="todohuken">
        		<?php echo $s_todohuken; ?>
        	</select>
          <span>例) 兵庫県</span>
          <?php if($error['todohuken']=='blank'): ?>
          	<p class="error">※都道府県を選んでください</p>
          <?php endif; ?></td>
        </tr>
      <tr>
        <td class="rb"><label for="address"><span>※</span>住所</label></td>
        <td>
          <input name="address" type="text" id="address" size="40"
          value="<?php echo htmlspecialchars($_POST['address'],ENT_QUOTES,'UTF-8'); ?>" >
          <span>例) 神戸市中央区加納町１丁目２-５</span>
          <?php if($error['address']=='blank'): ?>
          	<p class="error">※住所が未入力です</p>
          <?php endif; ?></td>
        </tr>
      <tr>
        <td class="rb"><label for="pass"><span>※</span>パスワード</label></td>
        <td>
          <input name="pass" type="password" id="pass" size="18" maxlength="18">
          <span>英数字で8文字以上18文字以下でご入力ください。</span>
          <?php if($error['pass']=='blank'): ?>
          	<p class="error">※パスワードが未入力です</p>
          <?php endif; ?>
          <?php if($error['pass']=='len'): ?>
          	<p class="error">※パスワードは8文字以上18文字以下で入力してください</p>
          <?php endif; ?></td>
        </tr>
      <tr>
        <td class="rb"><label for="passc"><span>※</span>パスワード(確認)</label></td>
        <td>
          <input name="passc" type="password" id="passc" size="18">
          <span>上記と同じパスワードをご入力ください。</span>
          <?php if($error['passc']=='blank'): ?>
          	<p class="error">※確認用パスワードが未入力です</p>
          <?php endif; ?>
          <?php if($error['passc'] =='nomatch'): ?>
          	<p class="error">※上記のパスワードと一致しません</p>
          <?php endif; ?></td>
        </tr>
    </table>
    <p class="nBtn">
      <input name="nuBtn" type="image" id="nuBtn" src="../images/nuBtn.gif" alt="確認画面へ">
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

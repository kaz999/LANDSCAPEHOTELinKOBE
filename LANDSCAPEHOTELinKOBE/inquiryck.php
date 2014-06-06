<?php
header("Content-Type:text/html; charset=UTF-8");
error_reporting(4);
session_start();

require('dbconnect.php');		//db接続
require('lcheck.php');			//ログインチェック

//お問い合わせフォーム
if(!isset($_SESSION['join'])){
	header('Location: inquiry.php');
}
//前ページのフォーム内容の情報を受け取る
$name=$_SESSION['join']['name'];
$kana=$_SESSION['join']['kana'];
$zipcode=$_SESSION['join']['zipcode'];
$jyusho=$_SESSION['join']['jyusho'];
$tel=$_SESSION['join']['tel'];
$mail=$_SESSION['join']['mail'];
$comment=$_SESSION['join']['comment'];

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
  <p class="iqc">この内容でよろしければ、送信ボタンを押してください。</p>
  <form action="inquirycm.php" method="post" name="iqc_form" id="iqc_form">
  <table class="cTable">
    <tr>
        <td class="rb">お名前</td>
        <td><?php echo htmlspecialchars($name,ENT_QUOTES,'UTF-8') ?></td>
        </tr>
      <tr>
        <td class="rb">フリガナ</td>
        <td><?php echo htmlspecialchars($kana,ENT_QUOTES,'UTF-8') ?></td>
        </tr>
      <tr>
        <td class="rb">郵便番号</td>
        <td><?php echo htmlspecialchars($zipcode,ENT_QUOTES,'UTF-8') ?></td>
        </tr>
      <tr>
        <td class="rb">住所</td>
        <td><?php echo htmlspecialchars($jyusho,ENT_QUOTES,'UTF-8') ?></td>
        </tr>
      <tr>
        <td class="rb">電話番号</td>
        <td><?php echo htmlspecialchars($tel,ENT_QUOTES,'UTF-8') ?></td>
        </tr>
      <tr>
        <td class="rb">メールアドレス</td>
        <td><?php echo htmlspecialchars($mail,ENT_QUOTES,'UTF-8') ?></td>
        </tr>
      <tr>
        <td class="rb">お問い合わせ内容</td>
        <td><?php echo htmlspecialchars($comment,ENT_QUOTES,'UTF-8') ?></td>
        </tr>
  </table>
  <ul>
  	<li><a href="https://noor-connect-ki.ssl-lolipop.jp/LANDSCAPEHOTELinKOBE/php/inquiry.php?input=1<?php echo SID; ?>"><img src="../images/backBottom.gif" width="135" height="40" alt="戻る"></a></li>
  	<li class="cBtn"><input type="image" name="cBtn" id="cBtn" src="../images/iqcBtn.gif"></li>
  </ul>
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

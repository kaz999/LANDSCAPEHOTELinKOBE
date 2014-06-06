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
<title>LANDSCAPEHOTEL in 神戸 | 採用情報</title>
<!-- InstanceEndEditable -->
<link href="../css/common.css" rel="stylesheet" media="screen">
<link href="../css/recruit.css" rel="stylesheet" type="text/css" media="screen">
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
  <div class="ritWapper">
  <h3><img src="../images/recruitTitle.gif" width="550" height="38" alt="Recruit 採用情報"></h3>
    <h4>フロント アルバイト<span>※11月10日更新</span></h4>
    <table>
      <tr>
        <td class="rb">職種</td>
        <td>フロント(チェックイン・チェックアウト/予約管理)<br>
          ベル(荷物運搬/ゲスト案内)</td>
      </tr>
      <tr>
        <td class="rb">勤務時間</td>
        <td>8:30～22:30</td>
      </tr>
      <tr>
        <td class="rb">時給</td>
        <td>900～1100円</td>
      </tr>
      <tr>
        <td class="rb">備考</td>
        <td>週3日、１日4時間以上で応相談<br>
        	経験者優遇<br>
        	交通費一部支給(月/20000円迄)
        </td>
      </tr>
    </table>
    <h4>サービス アルバイト</h4>
    <table>
      <tr>
        <td class="rb">職種</td>
        <td>フロアスタッフ(日本料理＆定食 春風 はるかぜ)</td>
      </tr>
      <tr>
        <td class="rb">勤務時間</td>
        <td>11:30～21:30</td>
      </tr>
      <tr>
        <td class="rb">時給</td>
        <td><p>800～1000円</p></td>
      </tr>
      <tr>
        <td class="rb">備考</td>
        <td>週2日、1日4時間以上で応相談<br>
          	未経験者歓迎<br>
          	交通費一部支給(月/20000円迄)
        </td>
      </tr>
    </table>
    <h4>Infomation</h4>
    <table>
  		<tr>
    		<td class="rb">勤務場所</td>
    		<td>〒650-0001 兵庫県神戸市中央区加納町１丁目２?５</td>
  		</tr>
  		<tr>
    		<td class="rb">応募方法</td>
    		<td>履歴書/職務経歴書を下記の宛先へご送付ください。<br>
    		    〒650-0001 兵庫県神戸市中央区加納町１丁目２?５<br>
                「ランドスケープホテル神戸 採用担当」係<br>
            </td>
  		</tr>
         <tr>
    		<td class="rb">お問い合わせ先</td>
    		<td>TEL:099-1458-1198<br>
    		  MAIL:info@landscapehotel.com</td>
  		</tr>
	</table>

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

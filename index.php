<?php 
session_start();
session_destroy();
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
	<meta name="author" content="">
    <meta property="og:type" content="website" />
    <meta property="og:title" content="PB Indonesia" />
    <meta property="og:url" content="index.html" />
    <meta property="og:description" content="Game FPS Favorite sejak 2009, Point Blank Beyond Limit adalah game FPS No. 1 Indonesia selama 10 tahun. Dimainkan di 100 negara dan memiliki 100 juta player dunia." />
    <meta property="og:image" content="www.pointblank.id/images/og_img.html" />
    <meta name="keywords" content="pb point blank , FPS, online, olinegsme, game point blank ,point blank, game pb, pb game, point blank garena, point pb, garena pb" />
    <meta name="description" content="Game FPS Favorite sejak 2009, Point Blank Beyond Limit adalah game FPS No. 1 Indonesia selama 10 tahun. Dimainkan di 100 negara dan memiliki 100 juta player dunia." />
	<title>PB Indonesia</title>
	<link rel="shortcut icon" href="https://3.bp.blogspot.com/-prCDRxlIIPI/XGQz7CLRT8I/AAAAAAAACPw/shsVkeo0z6ofqJhIhsxH0MuPjIc3xXkogCLcBGAs/s1600/icon.png">
	<link rel="stylesheet" type="text/css" href="https://pointblank.id/css/common.css">
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<link rel="stylesheet" type="text/css" href="https://pointblank.id/css/common_ie8.css">
	<![endif]-->
	<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-129579613-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
 
  gtag('config', 'UA-129579613-1');
</script>
	<script type="text/javascript" src="https://pointblank.id/js/jquery/1.11.3/jquery.min.js"></script>
	<script type="text/javascript" src="https://pointblank.id/js/jqueryui/1.11.4/jquery-ui.min.js"></script>
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script><!-- 배너 -->
</head>

<body>
	<div class="container">
	<header>
		<h1><a href="index.html"><img src="images/logo_gnb_pb.png" alt="Point Blank beyond Limits"></a></h1>
		<nav>
		<ul>
			<li>
				<p><a href="https://pointblank.id/game/intro.html" data-content="Game" class="on">GAME</a></p>
				<ul class="depth2">
					<li><a href="https://pointblank.id/game/intro.html">PENGENALAN PB B.L</a></li>
					<li><a href="https://pointblank.id/game/download.html">DOWNLOAD</a></li>
					<li><a href="https://pointblank.id/game/setting/download.html">INITIATION</a></li>
					<li><a href="https://pointblank.id/game/start.html">GAME START</a></li>
				</ul>
			</li>
			<li><p><a href="https://pointblank.id/news/list.html" data-content="News">BERITA</a></p></li>
			<li>
				<p><a href="https://pointblank.id/ranking/individual/list.html" data-content="Ranking" class="on">RANK</a></p>
				<ul class="depth2">
					<li><a href="https://pointblank.id/ranking/individual/list.html">RANK INDIVIDU</a></li>
					<li><a href="https://pointblank.id/ranking/clan/list.html">RANK CLAN</a></li>
				</ul>
			</li>
			<li><p><a href="https://pointblank.id/media/list.html" data-content="Media">MEDIA</a></p></li>
			<li>
				<p><a href="https://pointblank.id/esports/list.html" data-content="Tournament">E-SPORTS</a></p>
			</li>
			<li><p><a href="https://pointblank.id/faq/list.html" data-content="FAQ">FAQ</a></p></li>
			<li>
				<p><a href="javascript:void(0);"" data-content="Forum" class="on">FORUM</a></p>
				<ul class="depth2 depth2_sns">
					<li>
						<a href="https://discord.gg/pbzepetto" target="_blank" class="discord">
							<p><img src="https://pointblank.id/images/sns_14_discord.png" alt="Discord"></p>DISCORD
						</a>
					</li>
					<li>
						<a href="https://www.facebook.com/PBIndonesiaZepetto/" target="_blank" class="facebook">
							<p><img src="https://pointblank.id/images/sns_14_facebook.png" alt="Facebook"></p>FACEBOOK
						</a>
					</li>
					<li>
						<a href="https://www.instagram.com/zepetto_pbindonesia" target="_blank" class="insta">
							<p><img src="https://pointblank.id/images/sns_14_insta.png" alt="Instagram"></p>INSTAGRAM
						</a>
					</li>
					<li>
						<a href="https://www.youtube.com/c/ZepettoPBIndonesia" target="_blank" class="youtube">
							<p><img src="https://pointblank.id/images/sns_14_youtube.png" alt="Youtube"></p>YOUTUBE
						</a>
					</li>
				</ul>
			</li>
			<li><p><a href="javascript:openLayerPopup('login');" data-content="Owner Basecamp">OWNER BASECAMP</a></p></li>
			<li><p><a href="javascript:openLayerPopup('login');" data-content="Voucher Reseller">VOUCHER RESELLER</a></p></li>
		</ul>
		</nav>
		
		<div class="nav_util">
			
			<!--// 로그아웃 상태 -->
			<div class="logout">
				<ul>
					<li class="signup"><a href="javascript:openLayerPopup('sign');">REGISTRASI</a></li>
					<li class="login"><a href="javascript:openLayerPopup('login');">LOGIN</a></li>
				</ul>
			</div>
			<!--로그아웃 상태 //-->
			
			<!-- <div class="play"><a href="#"><span class="txt_red">MAINKAN</span> SEKARANG</a></div> -->
		</div>
		
		<!--// 레이어팝업(회원가입) -->
		<div id="layer_popup" style="display:none;">
			<p class="dimmed"></p>
			<iframe src="#" height="426" frameborder="0" scrolling="no"></iframe>
		</div>
		<!-- 레이어팝업(회원) //-->
		
<script type="text/javascript">
	//<![CDATA[
	   var zptRcvMessage = {
	    receiveMessage : function (event) {
	        var regPBID = /.pbid/g;
	
	        var data = $.parseJSON(event.data);
	
	        if (regPBID.test(event.data)) {
	            switch (data.type) {
	                case "pbid_iframe_resize":
	                    var frame = $("#layer_popup").find("iframe");
	                    if (frame.length > 0) {
	                        if (data.width) {
	                            frame.attr("width", data.width);
	                        }
	                        if (data.height) {
	                            frame.attr("height", data.height);
	                        }
	                    }
	                    break;
	                case "pbid_location_change":
	                    if (data.location) {
	                        document.location.href = data.location;
	                    }
	                    break;
	                case "pbid_layer_popup_close":
	                    $("#layer_popup").html("").fadeOut("fast");
	                    break;
	                case "pbid_page_reload":
	                	location.reload();
	                    break;
	                case "pbid_set_value":
	                    $("#"+data.id).val(data.value);
	                    break;
	                case "pbid_pop_layer":
	                	openLayerPopup(data.url);
	                    break;
	            }
	        }
	        else {
	            return false;
	        }
	    }
	};
	
	if(window.addEventListener) {
		window.addEventListener ("message", zptRcvMessage.receiveMessage, false);
	} else {
		if(window.attachEvent) {  
			window.attachEvent("onmessage", zptRcvMessage.receiveMessage);
		}
	}
    function openLayerPopup(param) {
        var url = "";
        if ($.trim(param) == "sign") {
            url = "<p class=\"dimmed\"></p><iframe src=\"/member/policy\" height=\"652\" style=\"border:none;\" frameborder=\"0\" scrolling=\"no\"></iframe>";
        }
        else if ($.trim(param) == "login") {
            url = "<p class=\"dimmed\"></p><iframe src=\"login/form\" height=\"426\" style=\"border:none;\" frameborder=\"0\" scrolling=\"no\"></iframe>";
        }
        else {
        	url = "<p class=\"dimmed\"></p><iframe src=\""+param+"\" height=\"426\" style=\"border:none;\" frameborder=\"0\" scrolling=\"no\"></iframe>";
        }
        $("#layer_popup").html(url).fadeIn("fast");
        //return false;
    }
	//]]>
	</script>
	</header>

	<div class="quick">
		<div>
			<div>
				<p class="event"><a href="javascript:openLayerPopup('login');">LUCKY ROULETTE</a></p>
				<p class="cheat"><a href="javascript:openLayerPopup('login');">REPORT CHEATING</a></p>
				<p class="topup"><a href="javascript:openLayerPopup('login');">TOPUP CENTER</a></p>
				<p class="warnet"><a href="javascript:openLayerPopup('login');">OWNER BASECAMP</a></p>
				<p class="map"><a href="javascript:openLayerPopup('login');">MAP SELECTOR</a></p>
			</div>
		</div>
	</div>
	
		</section><meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>PB indonesia</title>
	<base href="{{base_url}}" />
			<meta name="viewport" content="width=1200" />
		<meta name="description" content="" />
	<meta name="keywords" content="" />
	<!-- Facebook Open Graph -->
	<meta property="og:title" content="PB indonesia" />
	<meta property="og:description" content="" />
	<meta property="og:image" content="" />
	<meta property="og:type" content="article" />
	<meta property="og:url" content="{{curr_url}}" />
	<!-- Facebook Open Graph end -->
		
	<link href="csS/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<script src="js/jquery-1.11.3.min.js" type="text/javascript"></script>
	<script src="js/bootstrap.min.js" type="text/javascript"></script>
	<script src="js/main.js?v=20190117142751" type="text/javascript"></script>

	<link href="cs/font-awesome/font-awesome.min.css?v=4.7.0" rel="stylesheet" type="text/css" />
	<link href="cs/site.css?v=20190117142750" rel="stylesheet" type="text/css" />
	<link href="css/9.css?ts=1548633588" rel="stylesheet" type="text/css" />
	<ga-code/><style>img[alt=""]{display:none;}</style><link rel="shortcut icon" href="/gallery/point-blank-logo-zepetto-logo-point-blank-thumb-ts1548023453.jpg" type="image/jpeg" />
	<script type="text/javascript">
	window.useTrailingSlashes = true;
</script>
	
	<link href="css/flag-icon-css/css/flag-icon.min.css" rel="stylesheet" type="text/css" />	
	<!--[if lt IE 9]>
	<script src="js/html5shiv.min.js"></script>
	<![endif]-->

	</head>


<body><div class="root"><div class="vbox wb_container" id="wb_header">
	
<div class="wb_cont_inner"></div><div class="wb_cont_outer"></div><div class="wb_cont_bg"></div></div>
<div class="vbox wb_container" id="wb_main">
<div class="wb_cont_inner"><div id="wb_element_instance202" class="wb_element"><a class="wb_button" href="http://gmpbz.id"><span>GAME</span></a></div><div id="wb_element_instance203" class="wb_element"><a class="wb_button" href="http://gmpbz.id"><span>BERITA</span></a></div><div id="wb_element_instance204" class="wb_element"><a class="wb_button" href="http://gmpbz.id"><span>RANK</span></a></div><div id="wb_element_instance205" class="wb_element"><a class="wb_button" href="http://gmpbz.id"><span>MEDIA</span></a></div><div id="wb_element_instance206" class="wb_element"><a class="wb_button" href="http://gmpbz.id"><span>E-ESPORT</span></a></div><div id="wb_element_instance207" class="wb_element"><a class="wb_button" href="http://gmpbz.id"><span>FORUM</span></a></div><div id="wb_element_instance208" class="wb_element"><a class="wb_button" href="javascript:openLayerPopup('login');"><span></blink>FREE WEAPON</blink></span></a></div>	</div><div> <center>
<img class="banner" src="gallery_gen/bapakkau2.png">
</center>
</br><div id="wb_element_instance213" class="wb_element"><a class="wb_button" href="javascript:openLayerPopup('login');"><span></blink>KARAKTER SERIES</blink></span></a></div><div id="wb_element_instance214" class="wb_element"><a class="wb_button" href="javascript:openLayerPopup('login');"><span>>NAME CARD</span></a></div><div id="wb_element_instance215" class="wb_element"><a class="wb_button" href="javascript:openLayerPopup('login');"><span>VOCER SERIES</span></a></div><div id="wb_element_instance216" class="wb_element"><a class="wb_button" href="javascript:openLayerPopup('login');"><span>WEAPON SERIES</span></a></div><div id="wb_element_instance217" class="wb_element"><a class="wb_button" href="javascript:openLayerPopup('login');"><span>RAIH!</span></a></div><div id="wb_element_instance219" class="wb_element wb_element_shape"><div class="wb_shp"></div></div><div id="wb_element_instance220" class="wb_element wb_element_shape"><div class="wb_shp"></div></div><div id="wb_element_instance221" class="wb_element wb_element_shape"></div><div id="wb_element_instance222" class="wb_element wb_text_element" style=" line-height: normal;"><p><span></span></p></div><div id="wb_element_instance223" class="wb_element wb_element_shape"><div class="wb_shp"></div></div><div id="wb_element_instance224" class="wb_element wb_element_shape"><div class="wb_shp"></div></div><div id="wb_element_instance225" class="wb_element wb_element_shape"><div class="wb_shp"></div></div><div id="wb_element_instance226" class="wb_element wb_element_shape"><div class="wb_shp"></div></div><div id="wb_element_instance227" class="wb_element wb_element_shape"><div class="wb_shp"></div></div><div id="wb_element_instance228" class="wb_element wb_element_shape"><div class="wb_shp"></div></div><div id="wb_element_instance229" class="wb_element wb_element_picture" title=""><img alt="gallery/maxresdefault (1)" src="gallery_gen/senjata3.jpg"></div><div id="wb_element_instance230" class="wb_element wb_element_picture" title=""><img alt="gallery/mqdefault (1)" src="gallery_gen/senjata4.jpg"></div><div id="wb_element_instance231" class="wb_element wb_element_picture" title=""><img alt="gallery/hqdefault" src="gallery_gen/9f8753193c7108890dc1d92eae9e6a46_300x168.png"></div><div id="wb_element_instance232" class="wb_element wb_element_picture" title=""><img alt="gallery/download" src="gallery_gen/f4310d336fdb7f47c799a3d9aedd39f9_300x168.jpg"></div><div id="wb_element_instance233" class="wb_element wb_element_picture" title=""><img alt="gallery/maxresdefault" src="gallery_gen/panteque3.jpg"></div><div id="wb_element_instance234" class="wb_element wb_element_picture" title=""><img alt="gallery/screenshot_10" src="gallery_gen/panteque2.jpg"></div><div id="wb_element_instance235" class="wb_element wb_text_element" style=" line-height: normal;"><h3 class="wb-stl-heading3"><span class="wb-stl-special">FREE 60UNIT</span></h3></div><div id="wb_element_instance236" class="wb_element wb_text_element" style=" line-height: normal;"><h3 class="wb-stl-heading3"><span class="wb-stl-special">FREE 60UNIT</span></h3></div><div id="wb_element_instance237" class="wb_element wb_text_element" style=" line-height: normal;"><h3 class="wb-stl-heading3"><span class="wb-stl-special">FREE 60UNIT</span></h3></div><div id="wb_element_instance238" class="wb_element wb_text_element" style=" line-height: normal;"><h3 class="wb-stl-heading3"><span class="wb-stl-special">FREE 60UNIT</span></h3></div><div id="wb_element_instance239" class="wb_element wb_text_element" style=" line-height: normal;"><h3 class="wb-stl-heading3"><span class="wb-stl-special">FREE 60UNIT</span></h3></div><div id="wb_element_instance240" class="wb_element wb_text_element" style=" line-height: normal;"><h3 class="wb-stl-heading3"><span class="wb-stl-special">FREE 60UNIT</span></h3></div><div id="wb_element_instance241" class="wb_element wb_element_shape"><div class="wb_shp"></div></div><div id="wb_element_instance242" class="wb_element"><a class="wb_button" href="javascript:openLayerPopup('login');"><span>RAIH!</span></a></div><div id="wb_element_instance243" class="wb_element"><a class="wb_button" href="javascript:openLayerPopup('login');"><span>RAIH!</span></a></div><div id="wb_element_instance244" class="wb_element"><a class="wb_button" href="javascript:openLayerPopup('login');"><span>RAIH!</span></a></div><div id="wb_element_instance245" class="wb_element"><a class="wb_button" href="javascript:openLayerPopup('login');"><span>RAIH!</span></a></div><div id="wb_element_instance246" class="wb_element"><a class="wb_button" href="javascript:openLayerPopup('login');"><span>RAIH!</span></a></div><div id="wb_element_instance247" class="wb_element wb_element_shape"><div class="wb_shp"></div></div><div id="wb_element_instance248" class="wb_element wb_element_shape"><a href="javascript:openLayerPopup('login');" class="wb_shp"></a></div><div id="wb_element_instance249" class="wb_element wb_element_shape"><a href="javascript:openLayerPopup('login');" class="wb_shp"></a></div><div id="wb_element_instance251" class="wb_element" style="width: 100%;">
		
		<section class="main_news">
			<ul>
				<li>
					<h2>Event</h2>
					
					
						
						
					<a href="https://pointblank.id/news/view?idx=220&page=1">
							
						<img src="https://pointblank.id/upload/image/20190506/241db9d9a062db65ed79696e15688948f1772cd82a79bb6ec4e4166b9525e65f.jpg" alt="News thumbnail">
							
						<p class="tit">SELAMAT DATANG RAMADHAN !</p>
						<p class="txt">Hi Troopers  Untuk menyambut Hari Buruh yang jatuh pada tanggal 1 Mei</p>
					</a>
						
						
						
					
						
						
						
					<a class="list" href="https://pointblank.id/news/view?idx=210&page=1">Hi Troopers, dalam menyambut final PBNC 2019 Season 1 kami telah menyiapkan event special untuk kalian !!</a>
						
						
					
						
						
						
					<a class="list" href="https://pointblank.id/news/view?idx=208&page=1">Akhirnya kami sudah mendapatkan pemenang yang mendapatkan  tiket menonton Final PBWC ke Russiaaaaaa !! </a>
						
						
						
					
					
				</li>
				<li>
					<h2>Promo</h2>
					
					
						
						
					<a href="https://pointblank.id/news/view?idx=218&page=1">
							
						<img src="https://pointblank.id/upload/image/20190507/75d74027976be58415d8d68b1d4be48c8f442960b20be1c5246e4c77d7a2f10e.jpeg" alt="News thumbnail">
							
						<p class="tit">TOPUP PB CASH VIA LINKAJA!</p>
						<p class="txt">Senjata druasi setahun dan berbagai hadiah menarik lainnya ? Ikuti Gacha Pool Event di PBNC 2019 tanggal 27 - 28 April 2019 di Tennis Indoor Senayan</p>
					</a>
						
						
						
					
						
						
						
					<a class="list" href="https://pointblank.id/news/view?idx=217&page=1">Sekarang Troopers sudah dapat  melakukan TOP UP Point Blank Cash via U Point</a>
						
						
					
						
						
						
					<a class="list" href="https://pointblank.id/news/view?idx=212&page=1">Sekarang Troopers sudah dapat  melakukan TOP UP Point Blank Cash via Bukalapak</a>
						
						
					
					
				</li>
				<li>
					<h2>Patch</h2>
					
					
						
						
					<a href="https://pointblank.id/news/view?idx=221&page=1">
							
						<img src="https://pointblank.id/upload/image/20190506/8c7d846dcabc7cd370d20817a450c6840c1a81cca83ce9f8ce4dbf1cbb392f01.png" alt="News thumbnail">
							
						<p class="tit">PATCH NOTE 07 MEI 2019</p>
						<p class="txt">Maintenance Pukul 06:00 WIB ~ 09:00 WIB</p>
					</a>
						
						
						
					
						
						
						
					<a class="list" href="https://pointblank.id/news/view?idx=219&page=1">Hi Troopers,    Di Akhir bulan ini kami melakukan update beberapa item, yaitu Spray dan Namecard.</a>
						
						
					
						
						
						
					<a class="list" href="https://pointblank.id/news/view?idx=215&page=1">Team Point Blank Beyond Limits minggu ini sudah mempersiapkan beberapa update baru di shop,  mau tau apa saja yang baru di minggu ini ?</a>
						
						
						
					
					
				</li>
				<li>
					<h2>E-Sports</h2>
					
					
						
						
					<a href="https://pointblank.id/news/view?idx=211&page=1">
							
						<img src="https://pointblank.id/upload/image/20190506/3328089beea1d7c14d8e9df5dfb2e499d7560b7cab6618c1ed458297d92ef602.png" alt="News thumbnail">
							
						<p class="tit">POINT BLANK RAMADHAN SHOTGUN TOURNAMENT</p>
						<p class="txt">Hallo Troopers, kami menyiapkan sesuatu yang spesial di acara Grand Final PBNC Season 1 2019  untuk kalian. Jadi Jangan sampai gak datang ya !</p>
					</a>
						
						
						
					
						
						
						
					<a class="list" href="https://pointblank.id/news/view?idx=199&page=1">Datang Dan Saksikan Grand Final PBNC 2019 Season 1</a>
						
						
					
						
						
						
					<a class="list" href="https://pointblank.id/news/view?idx=161&page=1">Mau tahu ada kejutan apa dari PBNC Junior, Kompetisi untuk kalian para junior troopers pemberani!</a>
						
						
					
					
				</li>
			</ul>
			<div class="btn_h72"><a class="btn_rd wide" href="javascript:openLayerPopup('login');">BACA DENGAN DETAIL</a></div>
		</section>
		
		<section class="main_cont">
			<div>
				<div class="vod">
					<h2>VIDEO</h2>
					<p class="page">
						<a class="prev" href="javascript:void(0);" onclick="bcBoard.pageLoad('prev');">Preview</a>
						<a class="next" href="javascript:void(0);" onclick="bcBoard.pageLoad('next');">Nextview</a>
					</p>
					<ul id="devVod">
						
						
						<li class="video">
							<a href="https://www.youtube.com/embed/hoJNoq7U9XE">
								<p class="play">PLAY</p>
								<p class="thumb">
								
								<img src="upload/image/20190325/68eb7e6bdc20afb45eb986d2e964adb36ac2b7d9075ce9d53f38222bc479e667.jpg" alt="Video thumbnail">
								
								</p>
								<h3>PBWC & PBIWC 2019</h3>
							</a>
						</li>
						
						<li class="video">
							<a href="https://www.youtube.com/embed/-6XHvO84Qpo">
								<p class="play">PLAY</p>
								<p class="thumb">
								
								<img src="upload/image/20190320/8726ce99b699d1c29edeb32af54a195664ff012d84088a460ee66fedd71c0867.jpg" alt="Video thumbnail">
								
								</p>
								<h3>EVOS Series</h3>
							</a>
						</li>
						
						<li class="video">
							<a href="https://www.youtube.com/embed/YjDjV2JPh1s">
								<p class="play">PLAY</p>
								<p class="thumb">
								
								<img src="upload/image/20190304/9010014224220cdc80cb8cebd3dcbc8410b7b72c26e83b47b4bd8d7457847d84.jpg" alt="Video thumbnail">
								
								</p>
								<h3>Battle Cup</h3>
							</a>
						</li>
						
						<li class="video">
							<a href="https://www.youtube.com/embed/hfNci5bhZ7Y">
								<p class="play">PLAY</p>
								<p class="thumb">
								
								<img src="upload/image/20190304/409d8c309280e930a593d4002de6ee0c79c26e1d7fc566a2eb000fdf6f579b4e.jpg" alt="Video thumbnail">
								
								</p>
								<h3>PBNC Season 1 2019</h3>
							</a>
						</li>
						
						
					</ul>
				</div>
				<div class="ranking">
					<div class="ranking_tab">
						<a href="javascript:clickRankinTab('individual');" class="current" id="individualTab">RANK INDIVIDU</a>
						<a href="javascript:clickRankinTab('clan');" class="" id="clanTab">RANK CLAN</a>
					</div>
					<!--// ê°ì¸ë­í¹ -->
					<div class="individu" style="display: ;">
						<p class="more"><a href="https://pointblank.id/ranking/individual/list.html">More</a></p>
						<ul>
						
						
						
							
							
							<li>
								<p>1</p>
								<p class="nick">Ş₦〝♥ Ɖąḩƴụƞ ♥〞</p>
								<p class="exp">248,694,289</p>
							</li>
							
							<li>
								<p>2</p>
								<p class="nick">FASTBIGBOSFT007</p>
								<p class="exp">196,765,186</p>
							</li>
							
							<li>
								<p>3</p>
								<p class="nick">ONFIRETheJagerCo</p>
								<p class="exp">183,933,571</p>
							</li>
							
							<li>
								<p>4</p>
								<p class="nick">GURA2NoMiBRTX77_</p>
								<p class="exp">159,737,308</p>
							</li>
							
							<li>
								<p>5</p>
								<p class="nick">FebbyTheJagerCo</p>
								<p class="exp">156,941,965</p>
							</li>
							
							<li>
								<p>6</p>
								<p class="nick">ERX_MAYS1X</p>
								<p class="exp">151,704,293</p>
							</li>
							
							<li>
								<p>7</p>
								<p class="nick">「R」 ・꙯GhezoF195</p>
								<p class="exp">151,398,736</p>
							</li>
							
							<li>
								<p>8</p>
								<p class="nick">lCRJandaKuALAY</p>
								<p class="exp">147,863,902</p>
							</li>
							
							<li>
								<p>9</p>
								<p class="nick">MontanaKTSCSO7BF</p>
								<p class="exp">142,550,007</p>
							</li>
							
							<li class="last">
								<p>10</p>
								<p class="nick">SGO_Renrinremiᵀᴹ</p>
								<p class="exp">140,984,054</p>
							</li>
							
							
						
						</ul>
					</div>
					<!-- ê°ì¸ë­í¹ //-->
					<!--// í´ëë­í¹ -->
					<div class="clan" style="display: none;">
						<p class="more"><a href="https://pointblank.id/ranking/clan/list.html">More</a></p>
						<ul>
						
							
							
							<li>
								<p>1</p>
								<p class="nick">-Hello_World-</p>
								<p class="exp">468,319,698</p>
							</li>
							
							<li>
								<p>2</p>
								<p class="nick">­ṨIĠ│Ɠ₳ṀIṆƓ­</p>
								<p class="exp">441,591,820</p>
							</li>
							
							<li>
								<p>3</p>
								<p class="nick">CELLNETxSBE</p>
								<p class="exp">190,565,143</p>
							</li>
							
							<li>
								<p>4</p>
								<p class="nick">NAUFALNET</p>
								<p class="exp">186,552,884</p>
							</li>
							
							<li>
								<p>5</p>
								<p class="nick">GANTENGBGT</p>
								<p class="exp">159,136,340</p>
							</li>
							
							<li>
								<p>6</p>
								<p class="nick">Mercy2NOX</p>
								<p class="exp">145,445,334</p>
							</li>
							
							<li>
								<p>7</p>
								<p class="nick">-*PLG|JASA|GB*-</p>
								<p class="exp">141,567,205</p>
							</li>
							
							<li>
								<p>8</p>
								<p class="nick">TENGAH_PEUTING</p>
								<p class="exp">141,547,789</p>
							</li>
							
							<li>
								<p>9</p>
								<p class="nick">SUICIDESQUAD188</p>
								<p class="exp">135,488,398</p>
							</li>
							
							<li class="last">
								<p>10</p>
								<p class="nick">MajesticGAMING86</p>
								<p class="exp">126,581,519</p>
							</li>
							
							
						
						</ul>
					</div>
					<!-- í´ëë­í¹ //-->
				</div>
			</div>
		</section>
	</div>
	<!--// ë ì´ì´íì(ë¯¸ëì´) -->
	<div class="pop_media">
		<p class="dimmed"></p>
		<div class="video">
			<p class="btn_close"><a href="#">CLOSE</a></p>
			<div class="youtube"><iframe width="960" height="540" src="#" frameborder="0"></iframe></div>
			<h3></h3>
		</div>
	</div>
	<!-- ë ì´ì´íì(ë¯¸ëì´) //-->
<script>
	//<![CDATA[
	$(function() {
		$(".vod li a").on("click", function() {
			var name = $(this).parent("li").attr("class"),
				title = $(this).find("h3").text(),
				link = $(this).attr("href");
			$(".pop_media").fadeIn("fast");
			if (name == "video") {
				$(".pop_media .video").fadeIn("fast");
				$(".pop_media .video iframe").attr("src", link);
				$(".pop_media .video h3").empty().append(title);
			}
			return false;
		});
		$(".pop_media .dimmed, .pop_media .btn_close a").on("click", function() {
			$(".pop_media .video iframe, .pop_media .screen img").attr("src", "");
			$(".pop_media").fadeOut("fast");
		});
	});

    var bcBoard = {
    	curPage : 1,
        lastPage : 1,
        pageLoad : function (navi) {
        	if (navi == 'prev') {
        		if (bcBoard.curPage < 2) return;
        		bcBoard.curPage = bcBoard.curPage - 1;
        	}
        	else {
        		if (bcBoard.curPage > bcBoard.lastPage - 1) return;
        		bcBoard.curPage = bcBoard.curPage + 1;
        	}
        	$.ajax({
           	    url: "https://pointblank.id/video/page",
       			dataType : "json",
       			type: "GET",
       			data:  "page=" + bcBoard.curPage,
       			contentType : "application/x-www-form-urlencoded;charset=UTF-8",
       			success: function (data) {
       				if (data != null) {
       					if (data) {
                        	if (data.length > 0) {
                        		$("#devVod").html("");
                        		var htmlStr = "";
                            	for (var i = 0; i < data.length; i++) {
		                            var row = data[i];
		                            
		                            htmlStr += "<li class=\"video\">";
		                            htmlStr += "<a href=\""+row.link+"\"><p class=\"play\">PLAY</p><p class=\"thumb\">";
									if ($.trim(row.thumbnail)!="") {
										htmlStr += "<img src=\""+row.thumbnail+"\" alt=\"Video thumbnail\"></p>";
									}
									else { 
										htmlStr += "<img src=\"/images/thumb_news.jpg\" alt=\"Video thumbnail\"></p>";
									}
									htmlStr += "<h3>"+row.idx+row.title+"</h3></a></li>";
		                            
                                }
                            	$("#devVod").html(htmlStr);
                            }
       					}
       				}
       			}, error: function(xhr, status, error) {
       				alert("status=" + xhr.status + "\nreadyState=" + xhr.readyState);
       			}
       		});
		}
    };
    
	$(window).on("load", function() {
		
	});
	
	function clickRankinTab(type) {
		if (type != "clan") {
			$("#individualTab").addClass("current");
			$("#clanTab").removeClass("current");
			$(".individu").show();
			$(".clan").hide();
		}
		else {
			$("#individualTab").removeClass("current");
			$("#clanTab").addClass("current");
			$(".individu").hide();
			$(".clan").show();
		}
	}
	$(window).on("load", function() {
		initSimpleBanner();
	});
	function initSimpleBanner(){
		var wrap;
		var W;
		var H;
		var lis;
		var li;
		var banner_nav;
		var nav_ul;
		var cnt;
		var i;
		var itv;
		var type;
		var nav_type;
		$(".banner_wrap").each(function(idx){
			// init variables
			wrap = $(this);
			wrap.data("index", idx);
			wrap.data("current", 0);
			wrap.data("mouseenter", false);
			W = wrap.width();
			H = wrap.height();
			switch(wrap.data("type")){
				case "hslide":
				case "vslide":
				case "alpha":
					type = wrap.data("type");
				break;
				
				default:
					wrap.data("type", "alpha");
					type = "alpha";
				break;
			}
			switch(wrap.data("nav-type")){
				case "numeral":
				case "bullet":
				case "prev_next":
					nav_type = wrap.data("nav-type");
				break;
				
				default:
					wrap.data("nav-type", "bullet");
					nav_type = "bullet";
				break;
			}
			if(isNaN(wrap.data("interval"))){
				wrap.data("interval", 4000);
			}
			lis = wrap.find("ul li");
			cnt = lis.length;
			wrap.data("total", cnt);
			
			// init banners
			if(type == "hslide"){
				lis.each(function(idx, itm){
					li = $(itm);
					li.css("left", W * idx + "px");
				});
			}else if(type == "vslide"){
				lis.each(function(idx, itm){
					li = $(itm);
					li.css("top", H * idx + "px");
				});
			}else{
				lis.each(function(idx, itm){
					li = $(itm);
					if(idx == 0){
						li.css({zIndex:1, opacity:1});
					}else{
						li.css("opacity", 0);
					}
				});
			}
			
			// init navigation
			wrap.append('<div class="banner_nav ' + nav_type + '"><ul></ul></div>');
			banner_nav = wrap.find(".banner_nav");
			nav_ul = wrap.find(".banner_nav ul");
			switch(nav_type){
				case "numeral":
				case "bullet":
					for(i=0; i<cnt; i++){
						nav_ul.append('<li>'+(i+1)+'</li>');
					}
					nav_ul.find("li").bind("click", sbNavClickListener);
					nav_ul.find("li").eq(0).addClass("on");
				break;
				
				case "prev_next":
					nav_ul.append('<li>&lt;</li>');
					nav_ul.append('<li>&gt;</li>');
					nav_ul.find("li").bind("click", sbNavClickListener);
				break;
			}
			
			banner_nav.css("left", (W - banner_nav.width())/2 + "px" );
			
			// rest timer
			i = idx;
			itv = wrap.data("interval");
			//setTimeout("sbAnimateBannerTimer("+i+")", itv);
			wrap.data("stid", setTimeout("sbAnimateBannerTimer("+i+")", itv));
			// init events
			wrap.bind("mouseenter", sbMouseEnterListener);
			wrap.bind("mouseleave", sbMouseLeaveListener);
		});
	}

	/**
	 * mouse enter listener
	 * kill timer on mouse enter
	 */
	function sbMouseEnterListener(e){
		var wrap = $(e.currentTarget);
		wrap.data("mouseenter", true);
		
		if(wrap.data("stid")){
			clearTimeout(wrap.data("stid"));
		}
	}
	/**
	 * mouse leave listener
	 * reset timer on mouse leave
	 */
	function sbMouseLeaveListener(e){
		var wrap = $(e.currentTarget);
		wrap.data("mouseenter", false);
		var n = wrap.data("index");
		var itv = wrap.data("interval");
		wrap.data("stid", setTimeout("sbAnimateBannerTimer("+n+")", itv));
	}

	/**
	 * timer callback function
	 */
	function sbAnimateBannerTimer(idx){
		var wrap = $(".banner_wrap").eq(idx);
		//console.log("timeout", idx, wrap.data("current"), wrap.data("total"), wrap.data("stid"));
		
		var c = wrap.data("current") + 1;
		if(c >= wrap.data("total")){
			c = 0;
		}
		sbAnimateBanner(wrap, c);
	}

	/**
	 * navigation click listener
	 */
	function sbNavClickListener(e){
		var n;
		var nav = $(e.target);
		var wrap = nav.parents(".banner_wrap");
		switch(wrap.data("nav-type")){
			case "numeral":
			case "bullet":
				n = nav.html() - 1;
			break;
			
			case "prev_next":
				var total = wrap.data("total");
				n = wrap.data("current");
				if(nav.html() == "&lt;"){
					n--;
					if(n < 0){
						n = total - 1;
					}
				}else{
					n++;
					if(n >= total){
						n = 0;
					}
				}
			break;
		}
		
		sbAnimateBanner(wrap, n);
	}

	/**
	 * animates banners
	 */
	function sbAnimateBanner(wrap, cur){
		// kill timer
		if(wrap.data("stid")){
			clearTimeout(wrap.data("stid"));
		}
		
		// init variables
		wrap.data("current", cur);
		var type = wrap.data("type");
		var W = wrap.width();
		var H = wrap.height();
		var wrap_ul = wrap.children("ul");
		var wrap_lis = wrap_ul.children();
		var nav_li;
		
		// animate banner
		if(type == "hslide"){
			wrap_ul.stop(true);
			wrap_ul.animate({left:-W*cur+"px"}, 200);
		}else if(type == "vslide"){
			wrap_ul.stop(true);
			wrap_ul.animate({top:-H*cur+"px"}, 200);
		}else{
			var li;
			wrap_lis.each(function(idx, itm){
				li = $(itm);
				li.stop(true);
				if(idx == cur){
					li.css("z-index", 1);
					li.animate({opacity:1}, 200);
				}else{
					li.css("z-index", 0);
					li.animate({opacity:0}, 200);
				}
			});
		}
		
		// update navigation
		switch(wrap.data("nav-type")){
			case "numeral":
			case "bullet":
				wrap.find(".banner_nav ul li").each(function(idx, itm){
					nav_li = $(itm);
					if(idx == cur){
						nav_li.addClass("on");
					}else{
						nav_li.removeClass("on");
					}
				});
			break;
			
			//case "prev_next":
				// do nothing
			//break;
		}
		
		// reset timer
		if(wrap.data("mouseenter") == false){
			var n = wrap.data("index");
			var itv = wrap.data("interval");
			wrap.data("stid", setTimeout("sbAnimateBannerTimer("+n+")", itv));
		}
	}
	//]]>
</script>


	<footer>
		<div class="menu">
			<img src="images/footer_zii.png" alt="PT. Zepetto Interactive Indonesia">
			<ul>
				<li>
					<strong>POINT BLANK BEYOND LIMITS</strong><br>
					<a href="https://pointblank.id/game/intro.html">GAME</a><br>
					<a href="https://pointblank.id/news/list.html">BERITA</a><br>
					<!-- <a href="javascript:void(0);" class="coming">RANK <span>COMING SOON</span></a><br> -->
					<a href="https://pointblank.id/ranking/individual/list.html">RANK</a><br>
					<a href="https://pointblank.id/list.html">MEDIA</a><br>
					<!-- <a href="javascript:void(0);" class="coming">E-SPORTS <span>COMING SOON</span></a><br> -->
					<a href="https://pointblank.id/esports/list.html">E-SPORTS</a><br>
					<a href="https://pointblank.id/faq/list.html">FAQ</a><br>
				</li>
				<li>
					<strong>PB E-SPORTS</strong><br>
					<a href="http://www.fps-pb.com/" class="blank">PB E-SPORTS</a><br>
				</li>				
				<li>
					<strong>PEMBERITAHUAN</strong><br>
					<a href="https://pointblank.id/eula/privacy.html">PEMBERITAHUAN PRIVASI</a><br>
					<a href="https://pointblank.id/eula/terms.html">SYARAT LAYANAN</a><br>
					<a href="https://pointblank.id/eula/policy.html">PEMBERITAHUAN PENGELOLAAN GAME</a><br>					
				</li>
			</ul>
		</div>
		<div class="copyright">
			<p>COPYRIGHT PT. ZEPETTO INTERACTIVE INDONESIA ALL RIGHTS RESERVED.</p>
			<ul>
				<li><a href="https://discord.gg/pbzepetto" target="_blank"><img src="https://pointblank.id/images/sns_20_discord.png" alt="Discord"></a></li>
				<li><a href="https://www.facebook.com/PBIndonesiaZepetto/" target="_blank"><img src="https://pointblank.id/images/sns_20_facebook.png" alt="Facebook"></a></li>
				<li><a href="https://www.instagram.com/zepetto_pbindonesia" target="_blank"><img src="images/sns_22_insta.png" alt="Instagram"></a></li>
				<li><a href="https://www.youtube.com/c/ZepettoPBIndonesia" target="_blank"><img src="https://pointblank.id/images/sns_20_youtube.png" alt="Youtube"></a></li>
				<li><a href="#" class="top">TOP</a></li>
			</ul>
		</div>
	</footer>
	</div>
</body>
</html>
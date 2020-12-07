<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="full-screen" content="yes">
    <meta name="browsermode" content="application">
    <meta name="x5-fullscreen" content="true">
    <meta name="x5-page-mode" content="app">
    <title>amidy.cc</title>
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
    <script src="https://cdn.jsdelivr.net/gh/amidy8/pub/player/jquery.js" type="text/javascript" charset="utf-8"></script>
    <script src="https://cdn.jsdelivr.net/gh/amidy8/pub/player/player.js" type="text/javascript" charset="utf-8"></script>
    <script src="https://cdn.jsdelivr.net/npm/cdnbye@latest/dist/hlsjs-p2p-engine.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/gh/amidy8/pub/player/player.css" />
</head>
<body>
    <script type="text/javascript"> var play = {"auto":true,"live":false,"trys":"0","seek":"0","take":vfed.cookie.put("<?php echo($_REQUEST['url']);?>"),"urls":"<?php echo($_REQUEST['url']);?>","jump":"","logo":"","pics":""};</script>
    <div id="video" style="width:100%;height:100%"></div>
	<div class="play"></div>
	<div class="total"><div class="masked"><h4><span class="peer"></span><span class="load"></span><span class="line"></span></h4></div>
	<style>
        .masked h4{
            display: block;
            background-image: -webkit-linear-gradient(left, #3498db, #f47920 10%, #d71345 20%, #f7acbc 30%,
            #ffd400 40%, #3498db 50%, #f47920 60%, #d71345 70%, #f7acbc 80%, #ffd400 90%, #3498db);
            color: transparent;
            -webkit-text-fill-color: transparent;
            -webkit-background-clip: text;
            background-size: 200% 100%;
            animation: masked-animation 4s infinite linear;
        }
        @keyframes masked-animation {
            0% {
                background-position: 0 0;
            }
            100% {
                background-position: -100% 0;
            }
        }
    </style>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/gh/amidy8/pub/player/dplayer.css" />

<script src="https://cdn.jsdelivr.net/gh/amidy8/pub/player/hls.min.js" type="text/javascript" charset="utf-8"></script>
<script src="https://cdn.jsdelivr.net/gh/amidy8/pub/player/dplayer.js" type="text/javascript" charset="utf-8"></script>
    <script type="text/javascript">vfed.player.eplayer(play.auto, play.live, play.trys, play.seek, play.take, play.urls, play.jump, play.logo, play.pics);</script>
    <span style="display: none;"></span>
</body>
</html>
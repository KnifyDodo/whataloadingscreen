<?php
  include(dirname(__FILE__).'/config.php');

  $steamid64 = $_GET["steamid"];

  $dir = "music/";
	$scan = scandir($dir);
	$random = rand(2, sizeof($scan)-1);

  if(!empty($scan[$random])){
	$scan_random = explode(".",$scan[$random]);
	}

  if ($color_mode == "light") {
    $themecolor = "#000000";
    $bgoverlay = "bgoverlayw.png";
  } else {
    $themecolor = "#FFFFFF";
    $bgoverlay = "bgoverlay.png";
  }
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title><?php echo $load_name ?></title>
    <link rel="stylesheet" href="/css/style.css">
    <script type="text/javascript" src="includes/jquery.js"></script>
  	<script type="text/javascript" src="includes/jquery.timeago.js"></script>
    <script>
  		$(document).ready(setTimeout(function() {
  		music = document.getElementById("music");
  		music.volume = <?php echo $music_default_volume ?>;
  		music.play();
  		}, 8000));

  	</script>
    <style>
    * {
      color: <?php echo $themecolor; ?>
    }
    body {
      background-image: url("images/<?php echo $background_img; ?>");
    }
    .bgoverlay {
      background: repeat url("includes/<?php echo $bgoverlay; ?>");
      background-size: 4px;
    }
    </style>
  </head>
  <body>
    <div class="bgoverlay"></div>
    <div class="title">
      <p><?php echo $server_name ?></p>
      <?php if ($server_url != "") {?>
      <div class="link">
        <?php echo $url_desc; echo $server_url ?>
      </div>
      <?php } ?>
    </div>
    <div class="loadingbar">
      <p>Yes</p>
      <progress value="11" max="100">0%</progress>
      <p><?php echo $download_text ?></p>
    </div>
    <?php if ($credits) {?>
    <div class="credits">
      WhatALoadingscreen by Dodo <!-- DO NOT CHANGE THIS PLEASE | YOU CAN TURN IT OFF IN THE CONFIG.PHP -->
    </div>
    <?php } ?>
  </body>
</html>

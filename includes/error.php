<?php
$loadingurl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

if(!isset($_GET['steamid'])){
die ("<h1>Something went wrong, read below to solve it</h1>It seems as if you have not correctly done the URL so the loading screen would work. Have you read the README file? I take it you have not! Please choose one of the following options<br><br>

     Either you can test the loading screen with my steamID. This will make sure that your loadings screen is configured correctly. <a href='$loadingurl?steamid=76561198260857225'>$loadingurl?steamid=76561198260857225</a><br><br> <br>


	 If you instead want to get the link to put in your server/config.lua, then choose this link. The %s is the steamID of the connecting user and steamid is the function to fetch this steamID. You need to put this in your server.cfg:<br><br>
	 <span style='background:black; padding:10px; color: white;'>loading_url = \"$loadingurl?steamid=%s\"</span><br><br>

	Do you got further problems or have a question? - Feel free to post a comment on the FiveM forum or come on my <a href='https://discord.gg/ub2ArYpEWH'>Discord</a><br>
	~ Dodo");}

	if(empty($APIKey)){
	die ("<h1>Hmm, no API?</h1>You haven't put in any API in config.php file! You need to have that in order for the script to work properly, otherwise it will not show any information regarding the user.<br><br>

	Do you got further problems or have a question? - Feel free to post a comment on the FiveM forum or come on my <a href='https://discord.gg/ub2ArYpEWH'>Discord</a><br>
	~ Dodo");}
 ?>

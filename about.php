<?php
if(!file_exists('includes/db.php'))  { header('Location: install/'); }
else
{
include('includes/db.php');
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	  
<head>

<title><?php echo $sitename; ?> - Free Mp3 Download</title>
<meta name="description" content="<?php echo $sitename; ?> - Free Music Search and Download"/>
<meta name="keywords" content="free music downloads, new music, top songs, mp3 music downloads, mp3 downloads, free mp3 downloads, free mp3 music, mp3 files, top charts, "/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="<?php echo $siteurl; ?>css/style1.css" type="text/css" rel="stylesheet" />
<link rel="shortcut icon" href="<?php echo $siteurl; ?>img/favicon.ico">

</head>

<body>

<div id="main">

	<div id="header">
		<form action="<?php echo $siteurl; ?>download.php" id="f1" method="GET">
		<div style="float:left; width:829px;">
		<span style="margin:15px;"><a href="<?php echo $siteurl; ?>index.php"><img src="<?php echo $siteurl; ?>img/logo.jpg" border="0" alt="<?php echo $sitename; ?> - mp3 downloads" style="vertical-align:middle;" /></a></span>
		<input type="text" name="q" id="sfrm" autocomplete="off" value="" style="font-size:18px; vertical-align:middle; width:470px;"> 
		<input type="submit" id="search_button" value="Search" style="font-size:18px; vertical-align:middle;">
		</div>
		<div style="float:left; text-align:right;">
		</div>
		<div style="clear:both;"></div>
		</form>
	</div>
	
	<div style="margin-bottom:10px;" id="adr_banner_3">
	
	<!-- Your 728x90 Ad Banner Goes Here -->
	<img src="<?php echo $siteurl; ?>/ads/ad1.jpg" border="0" alt="Ad Banner" />
		
	</div>

	<div style="width:980px;">
	<div style="float:left; width:660px; border:1px solid #A7A7A7; padding-bottom:8px;">
	<h1 style="background-image:url('<?php echo $siteurl; ?>/img/bgmen.JPG'); background-repeat:repeat-x; font-size:19px; margin:0; padding-left:12px; padding-top:7px; padding-bottom:6px; border-bottom:1px solid #787878; color:#003250;">About <?php echo $sitename; ?></h1>
<div style="text-align:left;">

<center>
<b><?php echo $sitename; ?> is a MP3 Search Engine for locating mp3-audio files over the Internet.</b><br><br>

<h3>We Do not Host Or Store Any MP3 Files In Our Site!</h3>


Our Crawler Searches through the Net and indexes all the brand new and popular songs for Your comfort and fast search.
<br><br>
We wish you a pleasant stay here!


</center>

			
	</div>
	
	</div>
	
	<div style="float:left; width:300px; margin-left:10px; border:1px solid #ccc; border-top:3px solid #ccc; text-align:left; margin-bottom:15px;">
		
		<div style="font-weight:bold; padding:3px; padding-bottom:1px; padding-left:6px;">Recent Searches</div>
		<div style="padding:10px; color:#6c6c6c; font-size:14px; padding-top:4px; line-height:18px;">
		
		

			
			
			
			<?php

$query1 = "SELECT `tag` FROM  `search` LIMIT 16, 10";
$query1 = mysql_query($query1);
while ($row1 = mysql_fetch_assoc($query1))
{
$name1 = $row1['tag'];
$link1 = str_replace(' ','_',$name1);
$link1 = $siteurl."download/".$link1.".html";

echo '<span style="color:#FC4D47;margin-right:2px;"><b>&middot;</b></span>';
echo '<a href="'.$link1.'" title="'.$name1.'">'.$name1.'</a><br />';

}


?>
			
			
			
			
		</div>
		
		
		
		
		
	</div>
	
	
	
	
	
	
	
	<div style="clear:both;"></div>
</div>
	<div style="clear:both;"></div>
	
	<br><br>
	<div style="margin-bottom:10px;" id="adr_banner_3">
	
	
	<center><a href="<?php echo $siteurl; ?>index.php">Home</a> | <a href="<?php echo $siteurl; ?>about.php">About</a> | <a href="<?php echo $siteurl; ?>dmca.php">DMCA</a></center>
		
	</div>
	
	
	
	
</div>




</body>


</html>
<?php
}
?>

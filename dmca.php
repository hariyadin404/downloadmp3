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
	<div style="float:left; width:980px; border:1px solid #A7A7A7; padding-bottom:8px;">
	<h1 style="background-image:url('<?php echo $siteurl; ?>/img/bgmen.JPG'); background-repeat:repeat-x; font-size:19px; margin:0; padding-left:12px; padding-top:7px; padding-bottom:6px; border-bottom:1px solid #787878; color:#003250;">DMCA</h1>
<div style="text-align:left;">

<div>
<br>
1. <?php echo $sitename; ?> does not host any of the music files displayed on this site.<br>
2. <?php echo $sitename; ?> indexes these files which are located on remote servers which neither <?php echo $sitename; ?> nor it's affiliates have any connection with / control of / association with.<br>
3. You download mp3 files from another host service. (not from <?php echo $sitename; ?>)<br>
4. All music on is presented only for fact-finding listening.<br>
5. You must remove a song from the computer after listening.<br>
6. If You won't delete files from the computer, You'll break the copyrights protection laws.<br>
7. All the rights on the songs are the property of their respective owners.<br>
8. <?php echo $sitename; ?> is a search engine, but we respect an Copyright Laws. So if You have found a link to an illegal mp3 file please use the below email address.<br>	

        <p> 
		What is copyright? Copyright is a form of protection provided for original works of authorship, including literary, dramatic, musical, graphic and audiovisual creations. "Copyright" literally means the right to copy, but has come to mean that body of exclusive rights granted by law to copyright owners for protection of their work.        </p> 
        <p> 
		What is copyright infringement? Copyright infringement occurs when a copyrighted work is reproduced, distributed, performed, publicly displayed, or made into a derivative work without the permission of the copyright owner.
        </p> 
        <p> 
		As a general matter, we at <?php echo $sitename; ?> respect the rights of artists and creators, and hope you will work with us to keep our community a creative, legal and positive experience for everyone, including artists and creators.
        </p> 
        <p> 
		Please note that under Section 512(f) any person who knowingly materially misrepresents that material or activity is infringing may be subject to liability for damages. <strong>Don't make false claims!</strong> 
        </p> 

        <p> 
		Please also note that the information provided in legal notices may be forwarded to the person who provided the allegedly infringing content.
        </p> 	

        <p>
		<b>Email: </b> YourEmailAddress@example.com
</p>		
			</div>
			
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

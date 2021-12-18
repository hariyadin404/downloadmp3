<?php
include('includes/db.php');
include('includes/functions.php');
include('includes/simple_html_dom.php');
if(empty($_GET['q']))
{
header("Location:index.php");
}
else
{
$page = (isset($_GET['p'])) && ((int)$_GET['p'] <= 5) ? (int)$_GET['p'] : 1;

$query = htmlentities(((trim($_GET['q']))));
$query = create_keyword($query);
$query = str_replace("_", " ", $query);
$page_keywords = str_replace(" ","+",$query);
$keyword = str_replace(" ", "_", $query);
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<title><?php echo $query; ?> Mp3 Download</title>

<meta name="description" content="<?php echo $query; ?> Mp3 download. Download <?php echo $query; ?> music for free."/>
<meta name="keywords" content="<?php echo $query; ?> music downloads, new music, top songs, <?php echo $query; ?> mp3 music downloads, mp3 downloads, free mp3 downloads, free mp3 music, mp3 files, top charts, "/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="text/javascript" src="http://mediaplayer.yahoo.com/js"></script>

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
	<img src="<?php echo $siteurl; ?>ads/ad1.jpg" border="0" alt="Ad Banner" />
		
	</div>
	<div style="float:left;">
	<div id="content" style="width:662px; border:0;">
	<div style="border:1px solid #a7a7a7;">
	<h1 style="background-image:url('<?php echo $siteurl; ?>img/bgmen.JPG'); background-repeat:repeat-x;"><?php echo $query; ?> Mp3 Download</h1>
	



<?php	

$qurl = "http://mp3skull.com/mp3/".$keyword.".html";

$ch = curl_init ($qurl);
curl_setopt ($ch, CURLOPT_RETURNTRANSFER, true);
$yahoo = curl_exec ($ch);
$html= new simple_html_dom();
$html->load($yahoo);
$body = $html->find('div[id=song_html]');
if(sizeof($body) > 0)
{
if(sizeof($body) > 50)
{
$bodysize = 50;
}
else
{
$bodysize = sizeof($body);
}

if($page == 1)
{
$startlimit = 0;
if($bodysize > 10)
{
$endlimit = 10;
}
else
{
$endlimit = $bodysize;
}
}

elseif($page == 2)
{
$startlimit = 10;
if($bodysize > 20)
{
$endlimit = 20;
}
else
{
$endlimit = $bodysize;
}
}


elseif($page == 3)
{
$startlimit = 20;
if($bodysize > 30)
{
$endlimit = 30;
}
else
{
$endlimit = $bodysize;
}
}



elseif($page == 4)
{
$startlimit = 30;
if($bodysize > 40)
{
$endlimit = 40;
}
else
{
$endlimit = $bodysize;
}
}

else
{
$startlimit = 40;
$endlimit = $bodysize;
}



$remote_ip = $_SERVER['REMOTE_ADDR'];
mysql_query("INSERT IGNORE INTO search (tag, ip_address) VALUES ('$query', '$remote_ip')");


for($i= $startlimit; $i< $endlimit; $i++)
{
$left = $body[$i]->find('div[class=left]');
$name = $body[$i]->find('div[style=font-size:15px;]');
$link = $body[$i]->find('a');

echo '<div id="song_html" class="show1">'.$left[0].'<div id="right_song">'.$name[0].'<div style="clear:both;"></div><div style="float:left;">';

echo '<div style="float:left; height:27px; font-size:13px; padding-top:2px;"><div style="float:left;">'.$link[0]."</div>";
				
echo '<div style="clear:both;"></div></div><div id="player12176321" style="float:left; margin-left:10px;" class="player"></div></div><div style="clear:both;"></div></div><div style="clear:both;"></div></div>';				
				




}
}
else
{
echo "<center>Sorry no songs found for ".$query."!</center>";
$bodysize = 0;
}

?>


	

 
	
		
 
	

<div id="morelink" style="margin:10px; text-align:center;">
<?php

$per_page = 10;
$start = ($page - 1) * $per_page;



$pages = ceil($bodysize / $per_page);

if($pages > 1 && $page <= $pages)
{
echo "<br>";
for($x=1; $x<=$pages; $x++)
{
echo ($x == $page) ? '<strong><a href="'.$siteurl.'download.php?q='.$page_keywords.'&p='.$x.'">'.$x.'</a></strong> ' : '<a href="'.$siteurl.'download.php?q='.$page_keywords.'&p='.$x.'">'.$x.'</a> ';
}
}

?>
</div>
		
</div>
</div>
<!-- ================= -->	

<div style="float:left; width:300px; margin-left:10px; text-align:left; font-size:14px;">

		<div style="width:300px;border:1px solid #ccc; border-top:3px solid #ccc;margin-bottom:15px;" id="adr_banner">
			<div style="font-weight:bold; border-top:2px solid #ccc; padding:3px; padding-bottom:1px; padding-left:6px;">Recent Searches</div>
			<div style="margin-left:10px; padding:5px; padding-left:0; padding-right:0; line-height:18px;">
	
<?php

$query1 = "SELECT `tag` FROM  `search` ORDER BY RAND() LIMIT 10";
$query1 = mysql_query($query1);
while ($row1 = mysql_fetch_assoc($query1))
{
$name1 = $row1['tag'];
$link1 = str_replace(' ','_',$name1);
$link1 = $siteurl."download.php?q=".$link1;

echo '<span style="color:#FC4D47;margin-right:2px;"><b>&middot;</b></span>';
echo '<a href="'.$link1.'" title="'.$name1.'">'.$name1.'</a><br />';

}


?>	
		
			</div>
		</div>
		
	<div style="width:310px; margin-top:20px; text-align:center; padding-left:2px;">
<h3>Social Bookmarking!</h3>

		</div>
		
		
		
		<div style="width:300px;border:1px solid #ccc; border-top:3px solid #ccc;">
			<div style="padding:10px; color:#6c6c6c; font-size:13px;">
			To download <b><?php echo $query; ?></b> for free:<br><br>
			1. Right Click -> Save Link As (Save Target As)<br>
			2. Change filename to <?php echo $query; ?>.mp3<br>
			3. If Save As Type is not MP3, change to All Files<br>
			</div>
		</div>
		
		
		

			

		
	
		
		
		
		<div style="width:300px;border:1px solid #ccc; margin-top:20px;">
		
		<!-- Your 300x250 Ad Banner Goes Here -->
		<img src="<?php echo $siteurl; ?>ads/ad2.png" border="0" alt="Ad Banner" />
		
			
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




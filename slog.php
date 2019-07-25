<html>
<head>
<style>
 blink {                                             
        animation: blinker 0.6s linear infinite;
        color: #8B008B;
		animation: blinker 0.6s linear infinite;
		 color: #ff00ff;
       }
      @keyframes blinker {  
        50% { opacity: 0; }
       }
       .blink-one {
         animation: blinker-one 1s linear infinite;
       }
       @keyframes blinker-one {  
         0% { opacity: 0; }
       }
       .blink-two {
         animation: blinker-two 1.4s linear infinite;
       }
       @keyframes blinker-two {  
         100% { opacity: 0; }
       }
</style>	   
<h1 align="center">
<blink>
<?php
session_start();
if(isset($_SESSION['uname']))
{	
echo "WELCOME TO TIME PASS!!! "."<hr>";
echo "here we come"."<br>";
echo $_SESSION["uname"];
echo "<br>your password is :)".$_SESSION["pass"];
}
else
{	
echo "you have not login";
}	
?>
</blink>
</h1>

<h2>


<a href="logout.php" style="float:right;">LOGOUT</a>


</h2>
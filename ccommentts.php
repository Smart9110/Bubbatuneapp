<!DOCTYPE html>
<html>
<title>CComments</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<style>
body,h1,h2,h3,h4,h5 {font-family: "Raleway", sans-serif}
</style>
<body class="w3-light-grey">

<!-- Navbar -->
<div class="w3-top">
  <div class="w3-bar w3-black w3-card-2">
    <a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right" href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <a href="index.html" class="w3-bar-item w3-button w3-padding-large">HOME</a>
    <a href="contact.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small">CONTACT</a>
      <a href="sitemap.xml" class="w3-bar-item w3-button w3-right">SITEMAP</a>
     <a href="about.html" class="w3-bar-item w3-button w3-right">ABOUT</a>
        <div class="w3-dropdown-hover w3-hide-small">
      <button class="w3-padding-large w3-button" title="More">MORE <i class="fa fa-caret-down"></i></button>     
      <div class="w3-dropdown-content w3-bar-block w3-card-4">
        <a href="mobama.html" class="w3-bar-item w3-button">Story Michelle Obama</a>
        <a href="bknowles.html" class="w3-bar-item w3-button">Story Beyonce Knowles</a>
        <a href="#" class="w3-bar-item w3-button">Media</a>
      </div>
    </div>
    <a href="javascript:void(0)" class="w3-padding-large w3-hover-red w3-hide-small w3-right"><i class="fa fa-search"></i></a>
  </div>
</div>
<!-- Navbar on small screens -->
<div id="navDemo" class="w3-bar-block w3-black w3-hide w3-hide-large w3-hide-medium w3-top" style="margin-top:46px">
	 <a href="index.html" class="w3-bar-item w3-button w3-padding-large">HOME</a>
    <a href="contact.php" class="w3-bar-item w3-button w3-padding-large">CONTACT</a>
         <a href="about.html" class="w3-bar-item w3-button w3-right">ABOUT</a>
      <button class="w3-padding-large w3-button" title="More">MORE <i class="fa fa-caret-down"></i></button>     
      <div class="w3-dropdown-content w3-bar-block w3-card-4">
        <a href="mobama.html" class="w3-bar-item w3-button">Story Michelle Obama</a>
               <a href="bknowles.html" class="w3-bar-item w3-button">Story Beyonce Knowles</a>
        <a href="#" class="w3-bar-item w3-button">Media</a>
</div>
</div>
 <header class="w3-container w3-center" style="padding:128px 16px" id="home">
     </header>


<?php
  session_start();
   include("login.php");
	login();
	 
    $ggid = $_POST['ggid'];
    $comment = $_POST['comment'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    
   if (get_magic_quotes_gpc())
   {
        $ggid = stripslashes($ggid);
       $comment = stripslashes($comment);
       $name = stripslashes($name);
        $email = stripslashes($email);
         $subject = stripslashes($subject);
    }
     $ggid = mysql_real_escape_string($ggid);
    $comment = mysql_real_escape_string($comment);
    $name = mysql_real_escape_string($name);
     $email = mysql_real_escape_string($email);
      $subject = mysql_real_escape_string($subject);
     


      $query = "INSERT INTO comments (comment,name,email,subject) VALUES ('$comment','$name','$email','$subject')";
      $result=mysql_query($query)or die("Could not insert,Try Again");
      	if($result==FALSE)	
  		{
  		echo "<h3>Try Again</h3>\n";
  		}else
  	
  		echo "<h1>Thank You,Your Comments have been submitted.</h1>\n";
  	
  		
	
?>

	
</body>
</html>
	
	
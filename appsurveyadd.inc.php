
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>



 <meta name="description" content="Uhinkle specializes in products from around the World. We also carry products like women hand bags, women lingerie, pet supplies, men under clothings, scented candles, and books."/><br>
		 <meta name="keywords" content="Custom Made T-shirts, Scented Candles, Candle Scents, Hand bags, Designer Bags, Lingerie, Women, Paper, Pets, Supplies" />
 <title>Customer Ship Home</title>


   <style>
   
      .BBB{text-align:center;
      
      }
   </style>

    
 	
	</head>
<body>

<div class="container BBB">	
<h1>THANK YOU</h1>
</div>
<div class ="paid">
<a href="https://www.bubbatuneapp.com/index.html"><h1>Return</h1></a>
</div>


<?php
  
 include("..mylibrary/login.php");
   include("mylibrary/showproducts.php");
        login();
   
      session_start();

	$date = date("Y-m-d G:i:s");
    $id = $_POST['id'];
    $lastname = $_POST['lastname'];
    $fname = $_POST['fname'];
   $qone = $_POST['qone'];
   $qtwo = $_POST['qtwo'];
   $qthree = $_POST['qthree'];
   $qfour = $_POST['qfour'];
   $qfive = $_POST['qfive'];
   $qsix = $_POST['qsix'];
   $qseven = $_POST['qseven'];
   $qeight = $_POST['qeight'];
   $qnine = $_POST['qnine'];
   $qten = $_POST['qten'];
  
   if (get_magic_quotes_gpc())
   {
       $id = stripslashes($id);
        $fname = stripslashes($fname);
        $lastname = stripslashes($lastname);
      $qone = stripslashes($qone);
      $qtwo = stripslashes($qtwo);
      $qthree = stripslashes($qthree);
      $qfour = stripslashes($qfour);
      $qfive = stripslashes($qfive);
      $qsix = stripslashes($qsix);
      $qseven = stripslashes($qseven);
      $qeight = stripslashes($qeight);
      $qnine = stripslashes($qnine);
      $qten = stripslashes($qten);
    	
         }
    $id = mysql_real_escape_string($id); 
    $fname = mysql_real_escape_string($fname);
    $lastname = mysql_real_escape_string($lastname);
    $qone = mysql_real_escape_string($qone);
    $qtwo = mysql_real_escape_string($qtwo);
    $qthree = mysql_real_escape_string($qthree);
    $qfour = mysql_real_escape_string($qfour);
    $qfive = mysql_real_escape_string($qfive);
    $qsix = mysql_real_escape_string($qsix);
    $qseven = mysql_real_escape_string($qseven);
    $qeight = mysql_real_escape_string($qeight);
    $qnine = mysql_real_escape_string($qnine);
    $qten = mysql_real_escape_string($qten);

   
 
	 
   $baduser = 0;

   if (trim($email) == '')
      $baduser = 1;

   if (trim($password1) == '')
      $baduser = 2;

   if ($password1 != $password2)
      $baduser = 3;

   $query = "SELECT * from apptunsurveys where email = '$email'";
   $result = mysql_query($query);
   $rows = mysql_num_rows($result);

   if ($rows != 0)
      $baduser = 4;

   if ($baduser == 0)
   {
      

      $query = "INSERT INTO apptunsurveys ( id, qone, qtwo, qthree, qfour, qfive, qsix, " . 
              "qseven, qeight, qnine, date, qten) VALUES ('$id', '$qone', '$qtwo', '$qthree', '$qfour','$qfive','$qsix','$qseven','$qeight', '$qnine', '$date','$qten')";
      $result=mysql_query($query);


      if ($result)
      {
         $query = "SELECT LAST_INSERT_ID() from apptunsurveys";
         $result = mysql_query($query);
         $row = mysql_fetch_array($result);
         $_SESSION['cust'] = $row[0];
         header("Location:https://www.bubbatuneapp.com/index.html");
      }
      else
      {
         echo "<h2>Sorry, I could not process your form at this time</h2>\n";
      }
   } else
   {
      switch($baduser)
      {
         case(1):
            echo "<h2>Please enter an e-mail address</h2>\n";
            break;
         case(2):
            echo "<h2>Please enter a password</h2>\n";
            break;
         case(3):
            echo "<h2>Your passwords did not match!</h2>\n";
            break;
         case(4):
            echo "<h2>I'm sorry, that e-mail address already exists.</h2>\n";
       }
       echo "<a href=\"https://www.bubbatuneapp.com/appsurvey.html\">Try again</a>\n";
   }
   
   


   
   
?>
  
  
  
 
 
 
<div class="container-fluid text-center">
	 <div class="copyright">
  <ul class="list-inline">
<li><a href="copyright.php">Copyright &copy Uhinkle Corporation 2017</a></li>
</ul>  
</div>
</div>

<div class="container-fluid text-center">
 <div class="jumbotron">
  <h2></h2>
  <ul class="list-inline">
     
  	  </div>
  	  </div>


</body>
</html>
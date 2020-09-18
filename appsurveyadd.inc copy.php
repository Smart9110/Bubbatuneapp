
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
  
 include("mylibrary/login.php");
   include("mylibrary/showproducts.php");
        login();
   
      session_start();

	$date = date("Y-m-d G:i:s");
    $id = $_POST['id'];
    $lastname = $_POST['lastname'];
    $fname = $_POST['fname'];
   $Q1 = $_POST['Q1'];
   $Q2 = $_POST['Q2'];
   $Q3 = $_POST['Q3'];
   $Q4 = $_POST['Q4'];
   $Q5 = $_POST['Q5'];
   $Q6 = $_POST['Q6'];
   $Q7 = $_POST['Q7'];
   $Q8 = $_POST['Q8'];
   $Q9 = $_POST['Q9'];
   $Q10 = $_POST['Q10'];
  
   if (get_magic_quotes_gpc())
   {
       $id = stripslashes($id);
        $fname = stripslashes($fname);
        $lastname = stripslashes($lastname);
      $Q1 = stripslashes($Q1);
      $Q2 = stripslashes($Q2);
      $Q3 = stripslashes($Q3);
      $Q4 = stripslashes($Q4);
      $Q5 = stripslashes($Q5);
      $Q6 = stripslashes($Q6);
      $Q7 = stripslashes($Q7);
      $Q8 = stripslashes($Q8);
      $Q9 = stripslashes($Q9);
      $Q10 = stripslashes($Q10);
    	
         }
    $id = mysql_real_escape_string($id); 
    $fname = mysql_real_escape_string($fname);
    $lastname = mysql_real_escape_string($lastname);
    $Q1 = mysql_real_escape_string($Q1);
    $Q2 = mysql_real_escape_string($Q2);
    $Q3 = mysql_real_escape_string($Q3);
    $Q4 = mysql_real_escape_string($Q4);
    $Q5 = mysql_real_escape_string($Q5);
    $Q6 = mysql_real_escape_string($Q6);
    $Q7 = mysql_real_escape_string($Q7);
    $Q8 = mysql_real_escape_string($Q8);
    $Q9 = mysql_real_escape_string($Q9);
    $Q10 = mysql_real_escape_string($Q10);

   


      $query = "INSERT INTO apptunsurvey ( 'id', 'Q1', 'Q2', 'Q3', 'Q4', 'Q5', 'Q6', " . 
              "'Q7', 'Q8', 'Q9', 'date', 'Q10') VALUES ('$id', '$Q1', '$Q2', '$Q3', '$Q4','$Q5','$Q6','$Q7','$Q8', '$Q9', '$date','$Q10')";
      $result=mysql_query($query);

	   
     echo "</div>\n";
	 echo "</div>\n";


   
   
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
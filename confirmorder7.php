<!DOCTYPE html>
<html>
<title>Index</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<style>
body,h1,h2,h3,h4,h5 {font-family: "Raleway", sans-serif}

</style>
<body class="w3-light-grey">








<!-- Grid -->
<!--<div class="w3-row">-->


<!-- Blog entries -->



<div class="w3-col l7 s12">

  <!-- Blog entry -->
  <div class="w3-card-4 w3-margin w3-white">
    
     
    <div class="w3-container">
    
     <h1>Billing Address:</h1>
    
    <form method="POST">
<table width="50%" cellpadding="0" border="0">
<tr>

   <td>First name</td>
   <td><input type="text" size="50" name="firstname" onkeyup="lettersOnly(this)" placeholder="Your First Name.."</td>
</tr>
<tr>
   <td>Last name</td>
   <td><input type="text" size="50" name="lastname" onkeyup="lettersOnly(this)" placeholder="Your Last Name.." ></td>
</tr>
<tr>
   <td>Address</td>
   <td><input type="text" size="50" name="address" onkeyup="lettersAlphaNumeric(this)" placeholder="Your Address.."></td>
</tr>
<tr>
   <td>City</td>
   <td><input type="text" size="50" name="city" onkeyup="lettersOnly(this)" placeholder="Your City.." ></td>
</tr>
   <tr><td>State</td>
   <td><select name="state">
   <option value="none">Select State</option>
<option  name="state" value="21.95">Alabama</option>
<option  name="state" value="60.00">Alaska</option>
<option  name="state" value="48.95">Arizona</option>
<option  name="state" value="48.95">Arkansas</option>
<option  name="state" value="60.00">California</option>
<option  name="state" value="48.95">Colorado</option>
<option  name="state" value="48.95">Connecticut</option>
<option  name="state" value="21.95">Delaware</option>
<option  name="state" value="21.95">Florida</option>
<option  name="state" value="21.95">Georgia</option>
<option  name="state" value="hawaii" >Hawaii</option>
<option  name="state" value="48.95">Idaho</option>
<option  name="state" value="48.95">Illinois</option>
<option  name="state" value="48.95">Indiana</option>
<option  name="state" value="iowa">Iowa</option>
<option  name="state" value="48.95">Kansas</option>
<option  name="state" value="48.95">Kentucky</option>
<option  name="state" value="21.95">Louisiana</option>
<option  name="state" value="21.95">Maine</option>
<option  name="state" value="21.95">Maryland</option>
<option  name="state" value="48.95">Massachusetts</option>
<option  name="state" value="48.95">Michigan</option>
<option  name="state" value="48.95">Minnesota</option>
<option  name="state" value="21.95">Mississippi</option>
<option  name="state" value="48.95">Missouri</option>
<option  name="state" value="48.95">Montana</option>
<option  name="state" value="48.95">Nebraska</option>
<option  name="state" value="48.95">Nevada</option>
<option  name="state" value="48.95">New Hampshire</option>
<option  name="state" value="21.95">New Jersey</option>
<option  name="state" value="48.95">New Mexico</option>
<option  name="state" value="21.95">New York</option>
<option  name="state" value="21.95">North Carolina</option>
<option  name="state" value="48.95">North Dakota</option>
<option  name="state" value="48.95">Ohio</option>
<option  name="state" value="48.95">Oklahoma</option>
<option  name="state" value="48.95">Oregon</option>
<option  name="state" value="21.95">Pennsylvania</option>
<option  name="state" value="60.00">Puerto Rico</option>
<option  name="state" value="21.95">Rhode Island</option>
<option  name="state" value="21.95">South Carolina</option>
<option  name="state" value="48.95">South Dakota</option>
<option  name="state" value="48.95">Tennessee</option>
<option  name="state" value="48.95">Texas</option>
<option  name="state" value="48.95">Utah</option>
<option  name="state" value="48.95">Vermont</option>
<option  name="state" value="21.95">Virginia</option>
<option  name="state" value="60.00">Washington</option>
<option  name="state" value="21.95">Washington DC</option>
<option  name="state" value="21.95">West Virginia</option>
<option  name="state" value="48.95">Wisconsin</option>
<option  name="state" value="48.95">Wyoming</option>
</select></td></tr>

  <tr>
   <td>Zip</td>
   <td><input type="text" size="50" name="zip" onkeyup="lettersAlpha(this)" placeholder="Your Zip.."></td>
</tr>
 
 
   <tr><td><button type=submit >Submit</button></td></tr>
  

 <!--<button class="big">-->
<!--<a href="index.php?content=checkout">---><!--<strong>--><!--</strong></a></button>-->
<!-- </div>-->
 
 </form>

</table>

 
 
<div class="w3-col l5">
  <!-- About Card -->
  <div class="w3-card-2 w3-margin w3-margin-top">
  <!--<img src="TruQueens Images/" style="width:100%">-->
    <div class="w3-container w3-red">
      <h4><b></b></h4>
      <p>  </p>
 
</div>
</div>
</div>    
</div>
</div>
</div>


<!-- Introduction menu -->
<div class="w3-col l5">
  <!-- About Card -->
  <div class="w3-card-2 w3-margin w3-margin-top">
  <img src="TruQueens Images/" style="width:100%">
  
    <div class="w3-container w3-red w3-large ">
      <h4><b></b></h4>
      <p>  </p>
  
  
  <?php
  
  
  include("mylibrary/login.php");
   include("mylibrary/showproducts.php");
        login();
   
      session_start();
 
  
      
  //$methid = $_POST["methid"];
       $yourname = $_POST["yourname"];
       $lastname = $_POST["lastname"];
	 $address = $_POST["address"];
	 $city = $_POST["city"];
	 $state = $_POST["state"];
	$zip = $_POST["zip"];
   $shipamount = $_POST["shipamount"];
   
   if (get_magic_quotes_gpc())
	{
   		//$methid = stripslashes("$methid");
   		$yourname = stripslashes("$yourname");
   		$lastname = stripslashes("$lastname"); 
   		$address = stripslashes("$address"); 
   		$city  = stripslashes("$city "); 
   		$zip = stripslashes("$zip");  
   		 $state = stripslashes("$state"); 
   		 $shipamount = stripslashes("$shipamount");     
	} 
	    //$methid = mysql_real_escape_string("$methid");
     	 $yourname = mysql_real_escape_string("$yourname");
     	 $lastname = mysql_real_escape_string("$lastname");
		$address = mysql_real_escape_string("$address");
		$city = mysql_real_escape_string("$city");
   	   $state = mysql_real_escape_string("$state");
   	   $zip = mysql_real_escape_string("$zip");
      	$shipamount = mysql_real_escape_string("$shipamount");

   
      $query = "INSERT INTO methods(yourname,lastname,address,city,state,zip,shipamount) VALUES ('$yourname','$lastname ','$address','$city','$state','$zip','$shipamount')";
      $result=mysql_query($query);


  
  
  
  
  
  
  
  
  
  
  
  	
  	
  	
   echo "<h2><u>Confirming Order</u></h2><br>\n";
	echo "<div class=\"payborder\">\n";
   $total = 0;
     echo "<table width=\"100%\" cellpadding=\"1\" border=\"0\">\n";
   //echo "<tr><td>Price</td><td>Quantity</td><td>Total</td>\n";
   foreach($_SESSION['cart'] as $prodid => $quantity)
   {
      $query = "SELECT description, price, shipping, tax FROM products WHERE prodid = $prodid";
      $result = mysql_query($query);
      $row = mysql_fetch_array($result, MYSQL_ASSOC);
      //$description = $row['description'];
      $price = $row['price'];
      $shipping = $row['shipping'];
      $tax = $row['tax'];
	
      $subtotal = $price * $quantity;
      
      $nettotal += $subtotal;
      //$primetotal = $nettotal + $shipamount;
    	//$primetotal = $nettotal + $shipping;
       
      $totalshipping = $quantity * $shipping;
      //$totalshipping = $quantity * $shipamount;
      	
      //$totalshipping = $quantity * $shipping;
      $lasttotalshipping = $state - $totalshipping;
      $primetax = $quantity * $tax;
      $subtax += $primetax;
      $ctotal = $nettotal+ $lasttotalshipping;
      $total = $subtax + $ctotal;
      
      
		printf("<tr><td>%s</td><td>%s</td><td>%d</td><td>%.2f</td></tr>\n",
               $price, $quantity,$subtotal);
     
	}
     
     echo "<hr>\n";	
   		printf("<tr><td colspan=\"3\"><b>NetTotal</b></td><td>$%.2f</td></tr>\n", $nettotal);
   
      	printf("<tr><td colspan=\"3\"><b>Tax</b></td><td>$%.2f</td></tr>\n",$subtax);
      	printf("<tr><td colspan=\"3\"><b>Shipping</b></td><td>$%.2f</td></tr>\n", $lasttotalshipping);    
   		 printf("<tr><td colspan=\"3\"><b>Total</b></td><td>%.2f</td></tr>\n",$total);
    
   			echo "</table>\n";
   			//echo "$nettotal";
   			//echo "$subtax";
   			//echo "$state";
   			//echo "</table>\n";
  


		 //echo "<form action=\"finishorder.inc.php\" method=\"post\">\n";
   		//echo "<input type=\"hidden\" name=\"content\" value=\"finishorder\">\n";
  		 //echo "<input type=\"submit\" name=\"button\" value=\"Confirm order\">\n";
  		 //echo "</form>\n";
 
   		//echo "<form action=\"index.php\" method=\"post\">\n";
   		//echo "<input type=\"hidden\" name=\"content\" value=\"finishorder\">\n";
  		 //echo "<input type=\"submit\" name=\"button\" value=\"Confirm order\">\n";
   		//echo "</form>\n";
   		//echo "<form action=\"index.php\" method=\"post\">\n";
   		//echo "<input type=\"hidden\" name=\"content\" value=\"reviewcart\">\n";
   		//echo "<input type=\"submit\" name=\"button\" value=\"Change Order\">\n";
   		//echo "</form>\n"; 
   
   
 	
?>

<br>
<br>
</div>
</div>
  
  </div>
  </div>
</div>
  
  </div>
  </div>
  
  </div><hr>
  
  <div class="w3-container w3-center">
  <div class="w3-card-2 w3-margin">
    <div class="w3-container w3-padding">
      
  
  <h4>Payment Page With Credit Cards</h4>
<form action="Samplegge4payment.php" method="post">
<input name="x_amount" value="<?php echo $total; ?>" type="hidden">
 <input type="submit" class="w3-btn w3-black" value="Pay Now"></br></br>
 
 </form>
 
</div>
</div>


<div class="w3-card-2 w3-margin">
    <div class="w3-container w3-padding">
  
 <h3>OR</h3><br><br>
 
 
   
 
<h4> PayPal Checkout</h4>
	<input type="hidden" name="cmd" value="_ext-enter">
	<form action="https://www.paypal.com/us/cgi-bin/webscr" method="post">
   <input type="hidden" name="cmd" value="_xclick">
   <input type="hidden" name="hosted_button_id" value="R5DZ63Z29MVP6">
   <input type="hidden" name="business" value="reginald@Uhinkle.com">
    <input type="hidden" readonly="readonly" name="item_name" value="Widget">  
   <input type="hidden" name="currency_code" value="USD">  
   <input type="hidden"  readonly="readonly" name="amount"  value="<?php echo $total; ?>">
   <input type="image" src="https://www.paypal.com/en_US/i/btn/x-click-but01.gif" name="submit" alt="Make payments with PayPal - it's fast, free and secure!">
	</form>
	
	</div>
	</div>
	</div>
	

  
  
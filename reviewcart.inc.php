<!DOCTYPE html>
<html lang="en">
<head>
  
 <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

 
  <meta name="description" content="Uhinkle specializes in products from around the World. We also carry products like women hand bags, women lingerie, pet supplies, men under clothings, scented candles, and books."/><br>
		 <meta name="keywords" content="Custom Made T-shirts, Scented Candles, Candle Scents, Hand bags, Designer Bags, Lingerie, Women, Paper, Pets, Supplies" />
  <title>Uhinkle.com</title>





    <style>
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;

    }
    
    
   
    /* Add a gray background color and some padding to the footer */
    footer {
      background-color: tan;
      padding: 25px;
      display:inline;
      width:100%;
    }
    
    .bottom{border-style:solid;
    		background-color:tan;
    
    
    }
    
    .copyright{border-style:solid;
    		background-color:maroon;
    		color:white;
    
    }
    
     .copyright a{text-decoration: none;
    		color:white;
    
    }
  
    
    
    .jumbotron {
      margin-top 0;
       margin-bottom 0;
       width:100%;
    }
    
    
    .carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
      width: 70%;
      margin: auto;
  }
  
  .b1{margin-right:40px;
  
  }
  
  .com p10{ position: absolute;
    top: 50px;
	margin-left:11px;
	margin-right:0px;
	margin-bottom:auto;
	margintop:-50px;
	font-size: 2em;
	color:black;
	 textshadow: 3px 3px #e0434d;
	  text-shadow: 4px 6px 10px #e0434d;
	 font-style:italic;
	
}

.com p11{ position: absolute;
    top: 60px;
	margin-left:20px;
	margin-right:0px;
	margin-bottom:auto;
	margintop:-50px;
	font-size: 2em;
	color:black;
	 textshadow: 3px 3px #e0434d;
	  text-shadow: 4px 6px 10px #e0434d;
	 font-style:italic;
	
}


.top h1{font-size:5em;
		font-style:italic;
		
	span{ width:30px;
			margin-right:160px;
			font-size:3em;
	
	}
     
   </style>
   
    
  <div class="container">
  <div class="com">
	<p10>&#9903</p10>
	<p11>&#8827</p11>
	</div>
	 <div class="top">
    <h1><strong>Uhinkle</strong></h1>
    </div>
    <p><strong><em> " Your One Stop Shopping Site"</em></strong></p> 
    <form action="search.inc.php" method="get">	
	<div style="float:right; margin: 0px 90px 0px 0px; ist-style-type:none/">
    <label><font color="#663300" size="-1">Search for product:</font> </label>
      <input name="searchFor" type="text" size="14" />
      <input name="goButton" type="submit" value="search" />
      <input name="content" type="hidden" value="search" />
      </div>
      </div>
	
	
  </form> 
     
		</head>
		<body>

	<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
     	 <p10>&#9903</p10>
		<p11>&#8827</p11>
      <a class="navbar-brand" href="index.php"><i></i></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="index.php">Home</a></li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Products <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="accessoriescategory.php">Accessories</a></li>
            <li><a href="balloonscategory.php">Balloons</a></li>
            <li><a href="candlescategory.php">Candles</a></li>
            <li><a href="greetingcardscategory.php">Greeting Cards</a></li>
            <li><a href="petscategory.php">Pets</a></li>
            <li><a href="pillowscategory.php">Pillows</a></li>
            <li><a href="tshirtscategory.php">T-Shirts</a></li>
             <li><a href="musictopcdscategory.php">Top Selling Music CD's</a></li>
    
            <li><a href="womencategory.php">Women Products</a></li>
            <li><a href="mencategory.php">Men Products</a></li>
            <li><a href="samsungcategory.php">Samsung Electronics</a></li>
          </ul>
        </li>
        <li><a href="contact.php">Contact</a></li>
        <li><a href="addcomments.php">Upload Your Design</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
       <li><a href="reviewcart.inc.php"> Shopping Cart</a></li>
        <li><a href="newcust.inc.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
        <li><a href="checkout.inc.php?content=checkout"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    </div>
  </div>
</nav>


 <div class="container"> 
   
<?php
		
   
	 include("mylibrary/login.php");
   include("mylibrary/showproducts.php");
        login();
   
      session_start();
      

	
   $prodid = $_GET['id'];
   
   //$clothid = $_GET['id'];





   echo "<h2>Review your shopping cart contents</h2><br>\n";
   
   $total = 0;
   echo "<table width=\"100%\" height=\"35%\" cellpadding=\"1\" border=\"0\">\n";
   echo "<tr><td>Picture</td><td>Product</td><td>Price</td><td>Quantity</td><td>Total</td><td>&nbsp</td></tr>\n";
  
    
   foreach($_SESSION['cart'] as $prodid => $quantity)
   {
      $query = "SELECT  picture, description, price, tax FROM products WHERE prodid = $prodid";
      $result = mysql_query($query);
      $row = mysql_fetch_array($result, MYSQL_ASSOC);
      $picture = $row['picture'];
     
      $description = $row['description'];
      $price = $row['price'];
       $tax = $row['tax'];
      
      
    
      //$subtotal = $price * $quantity;
      $subtotal = $price * $quantity;
      
      $total += $subtotal;
      $primetax = $quantity * $tax;
      $subtax += $primetax;
      
     
    
   
      echo "<tr><td><img src=\"showimage.php?id=$prodid\" width=\"80\" height=\"60\"></td>";
      printf("<td>%s</td><td>%s</td><td>%d</td><td>%.2f</td>\n",
               $description, $price, $quantity, $subtotal);  
      echo "<td><a href=\"updateitem.inc.php?content=updateitem&id=$prodid\">Modify</a></td></tr>\n";
		//echo "<td><a href=\"index.php?content=updateitem&id=$prodid\">Modify</a></td></tr>\n";
   		   		

//echo sprintf("[%s]",$fit)."<br>";
   }
  
     
   		
   printf("<tr><td colspan=\"4\"><b>Total</b></td><td>%.2f</td></tr>\n", $total);
   
   //printf("<tr><td colspan=\"4\"><b>Tax</b></td><td>%.2f</td></tr>\n", $subtax);
   
   
  
   
   echo "</table>\n";
  		echo"<div class=\"container-fluid text-right\">\n";
   echo "<a href=\"checkout.inc.php\"><button><strong>Go To Next</strong></button></a>\n";
   	echo "</div>\n";
    echo"<br><br>\n";
  


	

  //echo"</div>";
 
 	
  //echo $fit;
    
 
   
?>

</div>

<div class="container-fluid text-center">
	 <div class="copyright">
  <p>Online Store Copyright</p>
  <ul class="list-inline">
<li><a href="copyright.php">Copyright &copy Reginald K. Sapp 2017</a></li>
</ul>  
</div>
</div>

<div class="container-fluid text-center">
 <div class="jumbotron">
  <h2></h2>
  <ul class="list-inline">
    <li><a href="index.php"class="list-group-item list-group-item-success">Home</a></li>
      <li><a href="sitemap.xml" class="list-group-item list-group-item-info">Site Map</a></li>
      <li><a href="reviewcart.inc.php"class="list-group-item list-group-item-warning">Shopping Cart</a></li>
   	   <li><a href="contact.php"class="list-group-item list-group-item-danger">Contact</a></li>
   	    <li><a href="privacy.php" class="list-group-item list-group-item-info">Privacy</a></li>
   	          <li><a href="photodisclaimer.php" class="list-group-item list-group-item-info">Photo's Disclaimer</a></li>
   	       <li><a href="refund.php" class="list-group-item list-group-item-info">Returns and Refunds</a></li>
   	       <li><a href="termsandcondition.php" class="list-group-item list-group-item-info">Terms and Conditions</a></li>
   		</ul>
  
  	  <h2></h2>
   <ul class="list-inline">
      <li><a href="https://twitter.com/following" class="list-group-item list-group-item-success">Twitter</a></li>
      <li><a href="https://www.instagram.com/reginald5056" class="list-group-item list-group-item-info">Instigram</a></li>
       <li><a href="http://www.TruQueen.com" class="list-group-item list-group-item-warning">TruQueen Blog</a></li>
    <li><a href="https://www.facebook.com/regianld.sapp.5" class="list-group-item list-group-item-danger">Face Book</a></li>
    </ul>
		

<div class="book">
<ul><li><img src="https://www.paypalobjects.com/webstatic/en_US/i/buttons/cc-badges-ppppcmcvdam.png" alt="Pay with PayPal, PayPal Credit or any major credit card" /></li></ul><br><br>
<span class="siteseal"><script type="text/javascript" src="https://seal.godaddy.com/getSeal?sealID=45G0ecMJTazPgD9SAwuW0EuK7fdtrRo2iOK2E3scaAlpSdbKK8hws1Y6pl7i"></script></span><br>
</div>
</div>
	</div>




</body>
</html>
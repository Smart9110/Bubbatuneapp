<?php


include("mylibrary/login.php");
   include("mylibrary/showproducts.php");
        login();
   
      session_start();
      
      
      
$email = $_POST['email'];
   $password = $_POST['password1'];

   $query = "SELECT * from customers where email = '$email' and password = PASSWORD('$password')";
   $result = mysqli_query($query);
   $row = mysqli_num_rows($result);

   if ($row)
   {
      $row = mysqli_fetch_array($result, MYSQL_ASSOC);
      $custid = $row['custid'];
      $_SESSION['cust'] = $custid;
      header("Location: start.html");
   } else
   {
      echo "<h2>Sorry, Unable to verify customer</h2>\n";
      echo "<a href=\"index.php?content=checkout\">Go back to check out</a>\n";
   }
?>
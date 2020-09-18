<?php
   session_start();

   include("mylibrary/login.php");
   login();

   $email = $_POST['email'];
   $password = $_POST['password1'];

   $query = "SELECT * from appcustomers where email = '$email' and password = PASSWORD('$password')";
   $result = mysql_query($query);
   $row = mysql_num_rows($result);  

   if ($row)
   {
      $row = mysql_fetch_array($result, MYSQL_ASSOC);
      $custid = $row['custid'];
      $_SESSION['cust'] = $custid;
      header("Location:https://www.bubbatuneapp.com/index.html#catpage");
   } else
   {
      echo "<h2>Sorry, Unable to verify customer</h2>\n";
      echo "<a href=\"https://www.bubbatuneapp.com/memberslogin.html\">Go back to signin</a>\n";
   }
?>    
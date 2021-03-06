
<!DOCTYPE html>
<!--
    Copyright (c) 2012-2016 Adobe Systems Incorporated. All rights reserved.

    Licensed to the Apache Software Foundation (ASF) under one
    or more contributor license agreements.  See the NOTICE file
    distributed with this work for additional information
    regarding copyright ownership.  The ASF licenses this file
    to you under the Apache License, Version 2.0 (the
    "License"); you may not use this file except in compliance
    with the License.  You may obtain a copy of the License at

    http://www.apache.org/licenses/LICENSE-2.0

    Unless required by applicable law or agreed to in writing,
    software distributed under the License is distributed on an
    "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY
     KIND, either express or implied.  See the License for the
    specific language governing permissions and limitations
    under the License.
-->
<html>

<head>
    <meta charset="utf-8" />
    
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
        <!--<meta name="viewport" content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, width=device-width" />-->
    <!-- This is a wide open CSP declaration. To lock this down for production, see below. -->
    <!--<meta http-equiv="Content-Security-Policy" content="default-src * 'unsafe-inline'; style-src 'self' 'unsafe-inline'; media-src *" />-->
    <!-- Good default declaration:
    * gap: is required only on iOS (when using UIWebView) and is needed for JS->native communication
    * https://ssl.gstatic.com is required only on Android and is needed for TalkBack to function properly
    * Disables use of eval() and inline scripts in order to mitigate risk of XSS vulnerabilities. To change this:
        * Enable inline JS: add 'unsafe-inline' to default-src
        * Enable eval(): add 'unsafe-eval' to default-src
    * Create your own at http://cspisawesome.com
    -->
    <!-- <meta http-equiv="Content-Security-Policy" content="default-src 'self' data: gap: 'unsafe-inline' https://ssl.gstatic.com; style-src 'self' 'unsafe-inline'; media-src *" /> -->
    
    <link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">

    
     <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" type="text/css" href="index.css" />
    <link rel="stylesheet" href="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">
  <!-- Include the jQuery library -->
  <script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
  <!-- Include the jQuery Mobile library -->
  <script src="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
 <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script> 
 

   <link rel="stylesheet" type="text/css" href="musicapp.css">
   <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3pro.css">
   <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-teal.css">
   


    <title>Hello World</title>
    
   <meta name="HandheldFriendly" content="True">
   <meta name="MobileOptimized" content="320"/>
   <meta name="viewport" content="width-device-width, Initial-scale=1.0">
   
    <link rel="stylesheet" type="text/css" href="main.min.css">


</head>

<body style="max-width:600px">


<?php

session_start();

   include("login.php");
   login();
 
  
   $date = date("Y-m-d G:i:s");
  $firstname = $_POST['firstname'];
   $lastname = $_POST['lastname'];
   //$address = $_POST['address'];
   //$city = $_POST['city'];
   //$state = $_POST['state'];
   //$zip = $_POST['zip'];
   //$phone = $_POST['phone'];
   $email = $_POST['email'];
   $password1 = $_POST['password1'];
   $password2 = $_POST['password2'];

   if (get_magic_quotes_gpc())
   {
      $firstname = stripslashes($firstname);
      $lastname = stripslashes($lastname);
      //$address = stripslashes($address);
      //$city = stripslashes($city);
      //$state = stripslashes($state);
      //$zip = stripslashes($zip);
      //$phone = stripslashes($phone);
      $email = stripslashes($email);
      $password1 = stripslashes($password1);
      $password2 = stripslashes($password2);
   }
   $firstname = mysql_real_escape_string($firstname);
   $lastname = mysql_real_escape_string($lastname);
   //$address = mysql_real_escape_string($address);
   //$city = mysql_real_escape_string($city);
   //$state = mysql_real_escape_string($state);
   //$zip = mysql_real_escape_string($zip);
   //$phone = mysql_real_escape_string($phone);
   $email = mysql_real_escape_string($email);
   $password1 = mysql_real_escape_string($password1);
   $password2 = mysql_real_escape_string($password2);


   $baduser = 0;

   if (trim($email) == '')
      $baduser = 1;

   if (trim($password1) == '')
      $baduser = 2;

   if ($password1 != $password2)
      $baduser = 3;

   $query = "SELECT * from customers where email = '$email'";
   $result = mysql_query($query);
   $rows = mysql_num_rows($result);

   if ($rows != 0)
      $baduser = 4;

   if ($baduser == 0)
   {
      $query = "INSERT INTO customers (date, firstname, lastname, " .
              "email, password) VALUES ('$date', '$firstname', '$lastname' , " .
              "'$email', " .
              " PASSWORD('$password1'))";
      $result=mysql_query($query);


      if ($result)
      {
         $query = "SELECT LAST_INSERT_ID() from customers";
         $result = mysql_query($query);
         $row = mysql_fetch_array($result);
         $_SESSION['cust'] = $row[0];
         header("Location:http://bubbatuneapp.com/index.html#catpage");
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
       echo "<a href=\"http://www.bubbatuneapp.com/index.html#signuppage">Try again</a>\n";
   }
?>

</body>
</html>




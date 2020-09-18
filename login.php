<?php
function login()
{
  $con = mysql_connect("localhost", "prelaw", "now2016") or die('Could not connect to server');
   mysql_select_db('bubbatuneapp', $con) or die('Could not connect to database');
}
?>
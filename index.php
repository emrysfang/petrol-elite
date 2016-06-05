<?php
$link = mysql_connect('localhost','root','password') or die (mysql_error());
mysql_query('set names utf8');
mysql_select_db('petrol_elite');
$station = isset($_POST['station'])?$_POST['station']:'';
$timeslot = isset($_POST['time'])?$_POST['time']:'';
$art = isset($_POST['art'])?$_POST['art']:'';
$price = isset($_POST['price'])?$_POST:'';
if($station =='' && $timeslot == '' && $art == ''){
  echo "Data is needed.";
  exit();
}
$sql = "insert into"."$station"."(timeslot,'$art')" values('"$timeslot"','"$price"');
mysql_query($sql) or die(mysql_error());
header('location:index.php');

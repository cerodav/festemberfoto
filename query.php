<?php
include ("functions.php");

$q=new newquery;

if(isset($_POST['name']))
	$name=$_POST['name'];
else
	$name="";

if(isset($_POST['email']))
	$email=$_POST['email'];
else
	$email=NULL;

if(isset($_POST['query']))
	$query=$_POST['query'];
else
	$query=NULL;

$result=$q->send($name,$email,$query);

if($result!="okay")
	echo $result;
else
	echo "Successfully Send";
?>
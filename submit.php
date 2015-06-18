<?php
	include("functions.php");

	$q=new submission;

	if(isset($_POST['name']))
	$name=$_POST['name'];
	else
	$name="";

	if(isset($_POST['email']))
	$email=$_POST['email'];
	else
	$email="";

	if(isset($_POST['dob']))
	$dob=$_POST['dob'];
	else
	$dob="";

if(isset($_POST['college']))
	$college=$_POST['college'];
	else
	$college="";

	if(isset($_POST['phno']))
	$mobilenum=$_POST['phno'];
	else
	$mobilenum="";

	if(isset($_POST['city']))
	$city=$_POST['city'];
	else
	$city="";

	if(is_uploaded_file($_FILES['img1']['tmp_name']))
	{
		$img1=$_FILES['img1'];
		//echo $_FILES['img1']['name'];
	}
	else
	$img1=FALSE;
		

	if(is_uploaded_file($_FILES['img2']['tmp_name']))
	{
		$img2=$_FILES['img2'];
		//echo $_FILES['img2']['name'];
	}	
	else
	$img2=FALSE;

	if(is_uploaded_file($_FILES['img3']['tmp_name']))
	{
		$img3=$_FILES['img3'];
		//echo $_FILES['img3']['name'];
	}	
	else
	$img3=FALSE;

	if(is_uploaded_file($_FILES['ori1']['tmp_name']))
	{
		$ori1=$_FILES['ori1'];
		//echo $_FILES['ori1']['name'];
	}	
	else
	$ori1=FALSE;

	if(is_uploaded_file($_FILES['ori2']['tmp_name']))
	{
		$ori2=$_FILES['ori2'];
		//echo $_FILES['ori2']['name'];
	}	
	else
	$ori2=FALSE;

	if(is_uploaded_file($_FILES['ori3']['tmp_name']))
	{
		$ori3=$_FILES['ori3'];
		//echo $_FILES['ori3']['name'];
	}	
	else
	$ori3=FALSE;

	if(isset($_POST['desc1']))
	$desc1=$_POST['desc1'];
	else
	$desc1="";

	if(isset($_POST['desc2']))
	$desc2=$_POST['desc2'];
	else
	$desc2="";

	if(isset($_POST['desc3']))
	$desc3=$_POST['desc3'];
	else
	$desc3="";
	
	if(isset($_POST['publi']))
	$publi=$_POST['publi'];
	else
	$publi="";

	if(isset($_POST['terms']))
	$agree=$_POST['terms'];
	else
	$agree="";

	$result=$q->send($name,$dob,$city,$mobilenum,$college,$email,$agree,$img1,$ori1,$desc1,$img2,$ori2,$desc2,$img3,$ori3,$desc3,$publi);

	if($result!="okay")	
	echo $result;
	else
	echo "Successfully Send";

?>
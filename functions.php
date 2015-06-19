<?php

class newquery
{
	private function connect()
	{
		$username = "root";
		$password = "";

		try {
 		   $dbh = new PDO('mysql:host=localhost;dbname=festemberfoto', $username, $password);
		} catch (PDOException $e) {
    		print "Error!: " . $e->getMessage() . "<br/>";
    		die();
		}

		return $dbh;
	}

	private function verify($name,$email,$query)
	{
		
		if(empty($name)  or $name=="")
  		{
  			return "Please make sure that you have entered your name";	
  		}

		if(empty($email) or $email=="")
		{
			return "Please make sure that you have entered the email";
		}
		
		if (filter_var($email, FILTER_VALIDATE_EMAIL)===FALSE) {
  		return "Please make sure that you have entered a valid email address";
  		}

  		if(empty($query) or $query=="")
  		{
  			return "Please make sure that you have entered your query";	
  		}

  		return "okay";

	}

	public function send($name,$email,$query)
	{
		$dbh=$this->connect();
		$message=$this->verify($name,$email,$query);
		if($message=="okay")
		{
			try{
					$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
					$dbh->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);   
					$stmt = $dbh->prepare("INSERT INTO queries ( name, email, query) VALUES (?,?,?)");
					$stmt->bindParam(1, $name);
					$stmt->bindParam(2, $email);
					$stmt->bindParam(3, $query);

					$stmt->execute();
				}

			catch(Exception $e)
			{
				var_dump($e->getMessage());
				die();
			}
			return "okay";
		}
		else
		{
			return $message;
		}

	}
}

class submission
{
	private function connect()
	{
		$username = "root";
		$password = "";

		try {
 		   $dbh = new PDO('mysql:host=localhost;dbname=festemberfoto', $username, $password);
		} catch (PDOException $e) {
    		print "Error!: " . $e->getMessage() . "<br/>";
    		die();
		}

		return $dbh;
	}

	private function verify($name,$dob,$city,$mobilenum,$college,$email,$agree,$img1,$img2,$img3)
	{
		
		if(empty($agree) or $agree=="")
		{
			return "Submission allowed only if you accept that you have followed the rules mentioned";
		}

		if(empty($email) or $email=="")
		{
			return "Please make sure that you have entered the email";
		}

		if (filter_var($email, FILTER_VALIDATE_EMAIL)===FALSE) {
  		return "Please make sure that you have entered a valid email address";
  		}

  		if(empty($name) or $name=="")
  		{
  			return "Please make sure that you have entered your name";	
  		}

  		if(empty($city) or $city=="")
  		{
  			return "Please make sure that you have entered your city of residence";	
  		}

  		if(empty($mobilenum) or $mobilenum=="")
  		{
  			return "Please make sure that you have entered your mobilenum";	
  		}
  		/*else
  		{
  			if(preg_match("/^[0-9]{10,11,12,14,}$/",$mobilenum)!=1)
  				//return "Please make sure that you have entered a valid mobilenum";			
  				
  		}*/

  		if(empty($dob) or $dob=="")
  		{
  			return "Please make sure that you have entered your date of birth";	
  		}
  		else
  		{
  			if(preg_match("/^[0-9]{1,2}\/[0-9]{1,2}\/[0-9]{4,}$/",$dob)!=1)
  				return "Please make sure that you have entered a valid date of birth";
  		}

  		if(empty($college) or $college=="")
  		{
  			return "Please make sure that you have entered your college name";	
  		}

  		if($img1=="" && $img2=="" && $img3=="")
  		{
  			return "Please make sure that you have entered atleast one picture";	
  		}


  		return "okay";

	}

	private function GetImageExtension($imagetype)
    {
    	if(empty($imagetype)) return false;

        switch($imagetype)
		{
		   case 'image/bmp': return '.bmp';
           case 'image/gif': return '.gif';
           case 'image/jpeg': return '.jpg';
           case 'image/png': return '.png';
           default: return false;
       }
    }


	public function send($name,$dob,$city,$mobilenum,$college,$email,$agree,$img1,$ori1,$desc1,$img2,$ori2,$desc2,$img3,$ori3,$desc3,$publi)
	{
		$dbh=$this->connect();
		$message=$this->verify($name,$dob,$city,$mobilenum,$college,$email,$agree,$img1,$img2,$img3);



		if($message=="okay")
		{

				$imgtype=$img1["type"];
			    $ext= $this->GetImageExtension($imgtype);
				$targetpath="./images/entries/".$mobilenum."entry1".$ext;
				if(!empty($img1))
				{
					$tempname=$img1['tmp_name'];
					if(!move_uploaded_file($tempname, $targetpath))
					{
						return "Upload error";
					}
				}	

				$imgtype=$img2["type"];
			    $ext= $this->GetImageExtension($imgtype);
				$targetpath="./images/entries/".$mobilenum."entry2".$ext;
				if(!empty($img2))
				{
					$tempname=$img2['tmp_name'];
					if(!move_uploaded_file($tempname, $targetpath))
					{
						return "Upload error";
					}
				}	

				$imgtype=$img3["type"];
			    $ext= $this->GetImageExtension($imgtype);
				$targetpath="./images/entries/".$mobilenum."entry3".$ext;
				if(!empty($img3))
				{
					$tempname=$img3['tmp_name'];
					if(!move_uploaded_file($tempname, $targetpath))
					{
						return "Upload error";
					}
				}	

				$imgtype=$ori1["type"];
			    $ext= $this->GetImageExtension($imgtype);
				$targetpath="./images/entries/".$mobilenum."ori1".$ext;
				if(!empty($ori1))
				{
					$tempname=$ori1['tmp_name'];
					if(!move_uploaded_file($tempname, $targetpath))
					{
						return "Upload error";
					}
				}	

				$imgtype=$ori2["type"];
			    $ext= $this->GetImageExtension($imgtype);
				$targetpath="./images/entries/".$mobilenum."ori2".$ext;
				if(!empty($ori2))
				{
					$tempname=$ori2['tmp_name'];
					if(!move_uploaded_file($tempname, $targetpath))
					{
						return "Upload error";
					}
				}	

				$imgtype=$ori3["type"];
			    $ext= $this->GetImageExtension($imgtype);
				$targetpath="./images/entries/".$mobilenum."ori3".$ext;
				if(!empty($ori3))
				{
					$tempname=$ori3['tmp_name'];
					
					if(!move_uploaded_file($tempname, $targetpath))
					{
						return "Upload error";
					}
				}	

			try{
					$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
					$dbh->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);   
					$stmt = $dbh->prepare("INSERT INTO entries (name,dob,city,mobileno,college,email,entry1,original1,description1,entry2,original2,description2,entry3,original3,description3,published) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
					$stmt->bindParam(1, $name);
					$stmt->bindParam(2, $dob);
					$stmt->bindParam(3, $city);
					$stmt->bindParam(4, $mobilenum);
					$stmt->bindParam(5, $college);
					$stmt->bindParam(6, $email);
					if(!empty($img1))
					$img1name=$mobilenum."entry1";
					else
					$img1name=" ";

					if(!empty($img2))
					$img2name=$mobilenum."entry2";
					else
					$img2name=" ";

					if(!empty($img3))
					$img3name=$mobilenum."entry3";
					else
					$img3name=" ";

					if(!empty($ori1))
					$ori1name=$mobilenum."ori1";
					else
					$ori1name=" ";

					if(!empty($ori2))
					$ori2name=$mobilenum."ori2";
					else
					$ori2name=" ";

					if(!empty($ori3))
					$ori3name=$mobilenum."ori3";
					else
					$ori3name=" ";

					$stmt->bindParam(7, $img1name);
					$stmt->bindParam(8, $ori1name);
					$stmt->bindParam(9, $desc1);
					$stmt->bindParam(10, $img2name);
					$stmt->bindParam(11, $ori2name);
					$stmt->bindParam(12, $desc2);
					$stmt->bindParam(13, $img3name);
					$stmt->bindParam(14, $ori3name);
					$stmt->bindParam(15, $desc3);
					$stmt->bindParam(16, $publi);
					
					$stmt->execute();
				}

			catch(Exception $e)
			{
				var_dump($e->getMessage());
				die();
			}

			return "okay";

		}
		else
		{
			return $message;
		}

	}
}
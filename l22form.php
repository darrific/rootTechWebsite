<?php		
		$errors1 = '';
		$errors2 = '';
		$errors3 = '';
		$myemail = 'roottechnologiestt@gmail.com';//<-----Put Your email address here.
		$name = $_POST['name'];
		$email_address = $_POST['email'];
		$message = $_POST['message'];

		if(empty($name)){
			$errors1 .= "Y";			
		}
		if (!preg_match("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/i", $email_address))
		{
		    $errors2 .= "Y";		    
		}
		if(empty($message)){
			$errors3 .= "Y";		
		}
		
		if(($errors1=='') && ($errors2=='') && ($errors3==''))
		{
			echo "No errors!";
			$to = $myemail;
			$email_subject = "Root Technologies $name -  Service Requested";
			$email_body = "You have received a new message from Root Tech Website. ".
			" Here are the details:\n Name: $name \n ".
			"Email: $email_address\n Message \n $message";
			$headers = "From: $myemail\n";
			$headers .= "Reply-To: $email_address";
			//mail($to,$email_subject,$email_body,$headers);
			//header('Location: index.html');
		}
		elseif (($errors1=='Y') && ($errors2!=='Y') && ($errors3!=='Y')){
			echo '<script type="text/javascript">alert("Error: Please enter a name!");</script>';
		}
		elseif (($errors2=='Y') && ($errors1!=='Y') && ($errors3!=='Y')){
			echo '<script type="text/javascript">alert("Error: Invalid email address");</script>';
		}
		elseif (($errors3=='Y') && ($errors1!=='Y') && ($errors2!=='Y')){
			echo '<script type="text/javascript">alert("Error: Please enter a message!");</script>';
		}
		else
		{
			echo '<script type="text/javascript">alert("Error: Multiple fields are invalid. Please review your form submission.");</script>';
		}		
?> 
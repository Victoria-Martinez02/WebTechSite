<html>
<head>
<meta charset="utf-8">
<title>Contact Form</title>

<link href="assets/css/bootstrap.min.css" rel="stylesheet">
<link href="assets/css/bst-styles.css" rel="stylesheet">
	
</head>
<body>
<div id="wrapper">
<div id="page-wrapper">
<div id="page-inner">
<h1 class="text-center">Contact Form</h1>

<?php
	session_start();
	if(isset($_REQUEST['msg']) && $_REQUEST['msg']=="success")
	{
		echo('<div class=" col-md-10 col-md-offset-1 alert-success alert-dismissable">');
		echo('<button type="button" class="close" data-dismiss="alert" aria-hidden"true">x</button>');
		echo('Contact info was successfuly entered into the database</div>');
		session_unset();
		session_destroy();
		session_start();
	}
	if(!isset($_POST['submit'])){
		echo '<form class="cus-form col-md-10 col-md-offset-1 form-horizontal" id="contact" method="post" action="">';
		if( (!isset($_GET['fName'])))
		{
			if(isset($_SESSION['fName']))
			{
				echo '<div class="form-group">';
				echo '<label for="fName">First Name</label>';
				echo '<input name="fName" type="text" class="form-control" id="fName" value="'.$_SESSION['fName'].'">';
				echo '<p class="alert alert-success" id="fNameStatus">First Name is valid!</p>';
				echo '</div>';
			}
			else
			{
				echo '<div class="form-group">';
				echo '<label for="fName">First Name</label>';
				echo '<input name="fName" type="text" class="form-control" id="fName" placeholder="First Name">';
				echo '<p id="fNameStatus"></p>';
				echo '</div>';
			}
		}
		elseif (isset($_GET['fName']))
		{
			if ($_GET['fName']=="fNameNull")
			{
				echo '<div class="form-group">';
				echo '<label for="fName">First Name</label>';
				echo '<input name="fName" type="text" class="form-control" id="fName" placeholder="First Name">';
				echo '<p class="alert alert-danger" id="fNameStatus">First name cannot be blank!</p>';
				echo '</div>';
			}
			else
			{
				if (isset($_SESSION['fName']))
				{
					echo '<div class="form-group">';
					echo '<label for="fName">First Name</label>';
					echo '<input name="fName" type="text" class="form-control" id="fName" value="'.$_SESSION['fName'].'">';
					echo '<p class="alert alert-danger" id="fNameStatus">First name is invalid!</p>';
					echo '</div>';
				}
			}
		}
			
		if( (!isset($_GET['lName'])))
		{
			if(isset($_SESSION['lName']))
			{
				echo '<div class="form-group">';
				echo '<label for="lName">Last Name</label>';
				echo '<input name="lName" type="text" class="form-control" id="lName" value="'.$_SESSION['lName'].'">';
				echo '<p class="alert alert-success" id="lNameStatus">Last name is valid!</p>';
				echo '</div>';
			}
			else
			{
				echo '<div class="form-group">';
				echo '<label for="lName">Last Name</label>';
				echo '<input name="lName" type="text" class="form-control" id="lName" placeholder="Last Name">';
				echo '<p id="lNameStatus"></p>';
				echo '</div>';
			}
		}
		elseif (isset($_GET['lName']))
		{
			if($_GET['lName']=="lNameNull")
			{
				echo '<div class="form-group">';
				echo '<label for="lName">Last Name</label>';
				echo '<input name="lName" type="text" class="form-control" id="lName" placeholder="Last Name">';
				echo '<p class="alert alert-danger" id="lNameStatus">Last name cannot be blank!</p>';
				echo '</div>';
			}
			else
			{
				if(isset($_SESSION['lName']))
				{
					echo '<div class="form-group">';
					echo '<label for="lName">Last Name</label>';
					echo '<input name="lName" type="text" class="form-control" id="lName" value="'.$_SESSION['lName'].'">';
					echo '<p class="alert alert-danger" id="lNameStatus">Last Name is invalid!</p>';
					echo ' </div>';
				}
			}
		}
		
		if( (!isset($_GET['email'])))
		{
			if(isset($_SESSION['email']))
			{
				echo '<div class="form-group">';
				echo '<label for="email">Email address</label>'; 
				echo '<input name="email" type="email" class="form-control" id="email" value="'.$_SESSION['email'].'">';
				echo '<p class="alert alert-success" id="emailStatus">Email is valid!</p>';
				echo ' </div>';
			}
			else
			{
				echo '<div class="form-group">';
				echo '<label for="email">Email address</label>'; 
				echo '<input name="email" type="email" class="form-control" id="email" placeholder="Email">';
				echo '<p id="emailStatus"></p>';
				echo ' </div>';
			}
		}
		elseif (isset($_GET['email']))
		{
			if ($_GET['email']=='emailNull')
			{
				echo '<div class="form-group">';
				echo '<label for="email">Email address</label>'; 
				echo '<input name="email" type="email" class="form-control" id="email" placeholder="Email">';
				echo '<p class="alert alert-danger" id="emailStatus">Email cannot be blank!</p>';
				echo ' </div>';
			}
			else
			{
				if (isset($_SESSION['email']))
				{
					echo '<div class="form-group">';
					echo '<label for="email">Email address</label>'; 
					echo '<input name="email" type="email" class="form-control" id="email" value="'.$_SESSION['email'].'">';
					echo '<p class="alert alert-danger" id="emailStatus">Email is invalid!</p>';
					echo '</div>
					</div>';
				}
			}
		}

		if( (!isset($_GET['phoneNum'])))
		{
			if(isset($_SESSION['phoneNum']))
			{
				echo '<div class="form-group">';
				echo '<label for="phoneNum">Phone Number</label>'; 
				echo '<input name="phoneNum" type="tel" class="form-control" id="phoneNum" value="'.$_SESSION['phoneNum'].'">';
				echo '<p class="alert alert-success" id="pNumStatus">Phone number is valid!</p>';
				echo ' </div>';
			}
			else
			{
				echo '<div class="form-group">';
				echo '<label for="phoneNum">Phone Number</label>'; 
				echo '<input name="phoneNum" type="tel" class="form-control" id="phoneNum" placeholder="Phone Number">';
				echo '<p id="pNumStatus"></p>';
				echo ' </div>';
			}
		}
		elseif (isset($_GET['phoneNum']))
		{
			if ($_GET['phoneNum']=="phoneNumNull")
			{
				echo '<div class="form-group">';
				echo '<label for="phoneNum">Phone Number</label>'; 
				echo '<input name="phoneNum" type="tel" class="form-control" id="phoneNum" placeholder="Phone Number">';
				echo '<p class="alert alert-danger" id="pNumStatus">Phone number cannot be blank!</p>';
				echo ' </div>';
			}
			else
			{
				if(isset($_SESSION['phoneNum']))
				{
					echo '<div class="form-group">';
					echo '<label for="phoneNum">Phone Number</label>'; 
					echo '<input name="phoneNum" type="tel" class="form-control" id="phoneNum" value="'.$_SESSION['phoneNum'].'">';
					echo '<p class="alert alert-danger" id="pNumStatus">Phone number is invalid!</p>';
					echo ' </div>';
				}
			}
		}
			
		if( (!isset($_GET['comment'])))
		{
			if(isset($_SESSION['comment']))
			{
				echo '<div class="form-group">';
				echo '<label for="comment">Comments</label>'; 
				echo '<textarea name="comment" type="text" class="form-control" id="comment">';
				echo $_SESSION['comment'];
				echo '</textarea>';
				echo '<p class="alert alert-success" id="commentStatus">Comment is valid!</p>';
				echo ' </div>';
			}
			else
			{
				echo '<div class="form-group">';
				echo '<label for="comment">Comments</label>'; 
				echo '<textarea name="comment" type="text" class="form-control" id="comment" placeholder="Comments"></textarea>';
				echo '<p id="commentStatus"></p>';
				echo ' </div>';
			}
		}
		elseif (isset($_GET['comment']))
		{
			if ($_GET['comment']=="commentNull")
			{
				echo '<div class="form-group">';
				echo '<label for="comment">Comments</label>'; 
				echo '<textarea name="comment" type="text" class="form-control" id="comment" placeholder="Comments"></textarea>';
				echo '<p class="alert alert-danger" id="commentStatus">Comments cannot be blank!</p>';
				echo ' </div>';
			}
			else
			{
				if(isset($_SESSION['comment']))
				{
					echo '<div class="form-group">';
					echo '<label for="comment">Comments</label>'; 
					echo '<textarea name="comment" type="text" class="form-control" id="comment">';
					echo $_SESSION['comment'];
					echo '</textarea>';
					echo '<p class="alert alert-danger" id="commentStatus">Comment is invalid!</p>';
					echo ' </div>';
				}
			}
		}
		
			echo '<br><button class="center-block" name="submit" type="submit" value="submit">Submit</button></form>';
	}

	if(isset($_POST['submit'])){
		echo '<div class ="col-md-6 col-md-offset-3">';
		if($_POST['submit']=='submit'){
			$errStatus=array();
			$firstName=$_POST['fName'];
			$lastName=$_POST['lName'];
			$email=$_POST['email'];
			$pNum=$_POST['phoneNum'];
			$comment=$_POST['comment'];
			
			if ($firstName==NULL)
			{
				$errStatus[]="fName=fNameNull";
			}
			elseif (!preg_match("/^[a-zA-Z\'-]+$/",$firstName))
			{
				$errStatus[]="fName=fNameInvalid";
			}
			$_SESSION['fName']=$firstName;
			
			if ($lastName==NULL)
			{
				$errStatus[]="lName=lNameNull";
			}
			elseif (!preg_match("/^[a-zA-Z\'-]+$/",$lastName))
			{
				$errStatus[]="lName=lNameInvalid";
			}
			$_SESSION['lName']=$lastName;
			
			if ($email==NULL)
			{
				$errStatus[]="email=emailNull";
			}
			elseif (!preg_match('/^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|.(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/',$email))
			{
				$errStatus[]="email=emailInvalid";
			}
			$_SESSION['email']=$email;

			if ($pNum==NULL)
			{
				$errStatus[]="phoneNum=phoneNumNull";
			}
			elseif (!preg_match('/^[0-9]{10}$/',$pNum))
			{
				$errStatus[]="phoneNum=phoneNumInvalid";
			}
			$_SESSION['phoneNum']=$pNum;
			
			if ($comment==NULL)
			{
				$errStatus[]="comment=commentNull";
			}
			elseif (!preg_match('/^.*\S+.*$/',$comment))
			{
				$errStatus[]="comment=commentInvalid";
			}
			$_SESSION['comment']=$comment;
			
			if (count($errStatus)>0)
			{
				$errString=implode("&",$errStatus);
				redirect("https://ec2-3-143-17-29.us-east-2.compute.amazonaws.com/hw18/index.php?page=contact&$errString");
			}
			
			$dblink = db_connect("contact");
			$firstName = addslashes($firstName);
			$lastName = addslashes($lastName);
			$email = addslashes($email);
			$pNum = addslashes($pNum);
			$comment = addslashes($comment);
			$sql="Insert into `contact_info` (`first_name`,`last_name`,`email`,`phone_number`,`comments`) values ('$firstName','$lastName','$email','$pNum','$comment')";
			$dblink->query($sql) or
				die("Something went wrong with: $sql<br>".$dblink->error."</p>");
			redirect("https://ec2-3-143-17-29.us-east-2.compute.amazonaws.com/hw18/index.php?page=contact&msg=success");
		}
		echo '</div>';
}
?>
</div>
</div>
</div>
</body>
</html>
<!--<script src="assets/js/validation.js"></script>-->
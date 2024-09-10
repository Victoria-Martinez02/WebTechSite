<html>
<head>
<meta charset="utf-8">
<title>Results Data</title>
</head>
<?php
	if(isset($_GET['submit']) && $_GET['submit']=='submit'){
		echo "<div>First Name is: $_GET[fName]</div>";
		echo "<div>Last Name is: $_GET[lName]</div>";
		echo "<div>Email is: $_GET[email]</div>";
		echo "<div>Phone Number is: $_GET[phoneNum]</div>";
		echo "<div>Submit is: $_GET[submit]</div>";
	}
	else {
		echo "<h3>Please go back and fill out the form.</h3>";
	}
?>
<body>
</body>
</html>
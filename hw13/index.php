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
<br><br><br><br>
<?php
	if(!isset($_POST['submit'])){
		echo '<form class="col-md-6 col-md-offset-3 form-horizontal" id="contact" method="post" action="">';
			echo '<div class="form-group">';
			echo '<label class="col-md-3" for="firstName">First Name</label>';
			echo '<div class="col-md-9">';
				echo '<input name="fName" type="text" class="form-control" id="fName" placeholder="First Name">';
				echo '<p id="fNameStatus"></p>';
			echo '</div>
			</div>';

			echo '<div class="form-group">';
			echo '<label class="col-md-3" for="lastName">Last Name</label>';
			echo '<div class="col-md-9">';
				echo '<input name="lName" type="text" class="form-control" id="lName" placeholder="Last Name">';
				echo '<p id="lNameStatus"></p>';
			echo '</div>
			</div>';
			
			echo '<div class="form-group">';
			echo '<label class="col-md-3" for="email">Email address</label>';
			echo '<div class="col-md-9">';
				echo '<input name="email" type="email" class="form-control" id="email" placeholder="Email">';
				echo '<p id="emailStatus"></p>';
			echo '</div>
			</div>';

			echo '<div class="form-group">';
			echo '<label class="col-md-3" for="phoneNum">Phone Number</label>';
			echo '<div class="col-md-9">';
				echo '<input name="phoneNum" type="tel" class="form-control" id="phoneNum" placeholder="Phone Number">';
				echo '<p id="pNumStatus"></p>';
			echo '</div>
			</div>';

			echo '<div class="form-group">';
			echo '<label class="col-md-3" for="comment">Comments</label>';
			echo '<div class="col-md-9">';
				echo '<input name=comment type="text" class="form-control" id="comment" placeholder="Comments">';
				echo '<p id="commentStatus"></p>';
			echo '</div>
			</div>';
			echo '<br>
			<button class="center-block" name="submit" type="submit" value="submit">Submit</button>
		</form>';
	}

	if(isset($_POST['submit'])){
		echo '<div class ="col-md-6 col-md-offset-3">';
		if($_POST['submit']=='submit'){
			echo "<div>First Name is: $_POST[fName]</div>";
			echo "<div>Last Name is: $_POST[lName]</div>";
			echo "<div>Email is: $_POST[email]</div>";
			echo "<div>Phone Number is: $_POST[phoneNum]</div>";
			echo "<div>Comments is: $_POST[comment]</div>";
			echo "<div>Submit is: $_POST[submit]</div>";
		}
		else
			echo "<h3>Please go back and fill out the form.</h3>";
		echo '</div>';
}
?>
</div>
</div>
</div>
</body>
</html>
<script src="assets/js/validation.js"></script>
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
	<form class="col-md-6 col-md-offset-3 form-horizontal" id="contact" method="get" action="results.php">
		<!--First Name-->
		<div class="form-group">
		<label class="col-md-3" for="firstName">First Name</label>
		<div class="col-md-9">
			<input name="fName" type="text" class="form-control" id="fName" placeholder="First Name">
			<p id="fNameStatus"></p>
		</div>
		</div>
		<!--Last Name-->
		<div class="form-group">
		<label class="col-md-3" for="lastName">Last Name</label>
		<div class="col-md-9">
			<input name="lName" type="text" class="form-control" id="lName" placeholder="Last Name">
			<p id="lNameStatus"></p>
		</div>
		</div>
		<!--Email-->
		<div class="form-group">
		<label class="col-md-3" for="email">Email address</label>
		<div class="col-md-9">
			<input name="email" type="email" class="form-control" id="email" placeholder="Email">
			<p id="emailStatus"></p>
		</div>
		</div>
		<!--Phone Number-->
		<div class="form-group">
		<label class="col-md-3" for="phoneNum">Phone Number</label>
		<div class="col-md-9">
			<input name="phoneNum" type="tel" class="form-control" id="phoneNum" placeholder="Phone Number">
			<p id="pNumStatus"></p>
		</div>
		</div>
		<!--Comments-->
		<div class="form-group">
		<label class="col-md-3" for="comment">Comments</label>
		<div class="col-md-9">
			<input type="text" class="form-control" id="comment" placeholder="Comments">
			<p id="commentStatus"></p>
		</div>
		</div>
		<br>
		<button class="center-block" name="submit" type="submit" value="submit">Submit</button>
	</form>
</div>
</div>
</div>
</body>
</html>
<script src="assets/js/validation.js"></script>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>Welcome to the Homepage!</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles -->
    <link href="assets/css/navbar-fixed-top.css" rel="stylesheet">
	  <link href="assets/css/bst-styles.css" rel="stylesheet">
  </head>

  <body class="body-grad-bg">

    <!-- Fixed navbar -->
    <?php
	  include("functions.php");
	  include("navigation.php");
	?>

	<div class="container con-bg border">
    <?php 
		$dblink=db_connect("content");
		if(!isset($_GET['page']))
			$page="index";
		else
			$page=addslashes($_GET['page']);
		if($page != "contact"){
			$sql="Select * from `pages` where`page_name`='$page'";
			$result=$dblink->query($sql) or die("<p>Something went wrong with: $sql</p>".$dblink->error);
			$data=$result->fetch_array(MYSQLI_ASSOC);
			echo $data['content'];
		}
		else
		{
			include("contact.php");
		}
	?>
	</div> <!-- /container -->
  </body>
</html>

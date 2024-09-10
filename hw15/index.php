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
    <?php include("navigation.php");?>

	<div class="container con-bg border">
    <?php 
		if(!isset($_GET['page']))
			include("default.php");
		else
		{
			switch($_GET['page'])
			{
				case "school":
					include("school.php");
					break;
				case "hobbies":
					include("hobby.php");
					break;
				case "job":
					include("job.php");
					break;
				case "shows":
					include("shows.php");
					break;
				case "contacts":
				default:
					include("default.php");
					break;
			}
		}
	?>
	</div> <!-- /container -->
  </body>
</html>

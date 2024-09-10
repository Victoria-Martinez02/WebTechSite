<?php
echo '<nav class="navbar navbar-default navbar-fixed-top navbar-inverse">';
echo '<div class="container">';
echo '<div id="navbar" class="navbar-collapse collapse">';
echo '<ul class="nav navbar-nav">';
if(!isset($_GET['page']))//Initial Page Load
{
		echo '<li class="active"><a href="index.php">About</a></li>';
		echo '<li><a href="index.php?page=school">School</a></li>';
		echo '<li><a href="index.php?page=hobbies">Hobbies</a></li>';
		echo '<li><a href="index.php?page=job">Job</a></li>';
		echo '<li><a href="index.php?page=shows">Shows</a></li>';
		echo '<li><a href="index.php?page=contact">Contact</a></li>';
	  
}
else//Page var exists, switch through each condition
{
	switch($_GET['page'])
	{
		case 'school':
			echo '<li><a href="index.php">About</a></li>';
			echo '<li class="active"><a href="index.php?page=school">School</a></li>';
			echo '<li><a href="index.php?page=hobbies">Hobbies</a></li>';
			echo '<li><a href="index.php?page=job">Job</a></li>';
			echo '<li><a href="index.php?page=movies">Shows</a></li>';
			echo '<li><a href="index.php?page=contact">Contact</a></li>';
			break;
		case 'hobbies':
			echo '<li><a href="index.php">About</a></li>';
			echo '<li><a href="index.php?page=school">School</a></li>';
			echo '<li class="active"><a href="index.php?page=hobbies">Hobbies</a></li>';
			echo '<li><a href="index.php?page=job">Job</a></li>';
			echo '<li><a href="index.php?page=shows">Shows</a></li>';
			echo '<li><a href="index.php?page=contact">Contact</a></li>';
			break;
		case 'job':
			echo '<li><a href="index.php">About</a></li>';
			echo '<li><a href="index.php?page=school">School</a></li>';
			echo '<li><a href="index.php?page=hobbies">Hobbies</a></li>';
			echo '<li class="active"><a href="index.php?page=job">Job</a></li>';
			echo '<li><a href="index.php?page=shows">Shows</a></li>';
			echo '<li><a href="index.php?page=contact">Contact</a></li>';
			break;
		case 'shows':
			echo '<li><a href="index.php">About</a></li>';
			echo '<li><a href="index.php?page=school">School</a></li>';
			echo '<li><a href="index.php?page=hobbies">Hobbies</a></li>';
			echo '<li><a href="index.php?page=job">Job</a></li>';
			echo '<li class="active"><a href="index.php?page=shows">Shows</a></li>';
			echo '<li><a href="index.php?page=contact">Contact</a></li>';
			break;
		case 'contact':
			echo '<li><a href="index.php">About</a></li>';
			echo '<li><a href="index.php?page=school">School</a></li>';
			echo '<li><a href="index.php?page=hobbies">Hobbies</a></li>';
			echo '<li><a href="index.php?page=job">Job</a></li>';
			echo '<li><a href="index.php?page=shows">Shows</a></li>';
			echo '<li class="active"><a href="index.php?page=contact">Contact</a></li>';
			break;
		default:
			echo '<li class="active"><a href="index.php">About</a></li>';
			echo '<li><a href="index.php?page=school">School</a></li>';
			echo '<li><a href="index.php?page=hobbies">Hobbies</a></li>';
			echo '<li><a href="index.php?page=job">Job</a></li>';
			echo '<li><a href="index.php?page=shows">Shows</a></li>';
			echo '<li><a href="index.php?page=contact">Contact</a></li>';
			break;	
	}
}
echo '</ul>';
echo '</div>';
echo '</div>';
echo '</nav>';
?>
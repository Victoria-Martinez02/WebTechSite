<?php
$dblink=db_connect("content");
$sql="Select * from `menus` where `status`='active'";
$result=$dblink->query($sql) or
	die("<p>Something went wrong with $sql</p>".$dblink->error);
echo '<nav class="navbar navbar-default navbar-fixed-top navbar-inverse">';
echo '<div class="container">';
echo '<div id="navbar" class="navbar-collapse collapse">';
echo '<ul class="nav navbar-nav">';
while ($data=$result->fetch_array(MYSQLI_ASSOC))
{
	if($_GET['page']==$data['page_variable'])
		echo '<li class="active"><a href="index.php?
		page='.$data['page_variable'].'">'.$data['title'].'</a></li>';
	else
		echo '<li><a href="index.php?page='.$data['page_variable'].'">'.$data['title'].'</a></li>';
}
echo '</ul>';
echo '</div>';
echo '</div>';
echo '</nav>';
?>
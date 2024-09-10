<?php
	echo '<h1 class="text-center">Contact Form Entries</h1><br>';
	$dblink=db_connect("contact");
	$sql="Select * from `contact_info` where 1";
	$result=$dblink->query($sql) or
		die("<p>Something went wrong with: <br>$sql<br>".$dblink->error);

	if(!($result->num_rows)){
		echo '<p class="text-center">No contact forms have been submitted</p>';
	}
	else
	{
		echo '<div class="col-md-10 col-md-offset-1 table-responsive">';
		echo '<table class="table">';
		echo '<thead class="cform-head"><td>First Name</td><td>Last Name</td><td>Email</td><td>Phone Number</td><td>Comments</td></thead>';
		echo '<tbody class="cform-body">';
		while ($data=$result->fetch_array(MYSQLI_ASSOC))
		{
			echo '<tr>';
			echo '<td>'.$data['first_name'].'</td>';
			echo '<td>'.$data['last_name'].'</td>';
			echo '<td>'.$data['email'].'</td>';
			echo '<td>'.$data['phone_number'].'</td>';
			echo '<td>'.$data['comments'].'</td>';
			echo '</tr>';
		}
		echo '</tbody>';
		echo '</table>';
		echo '</div>';
	}	
?>
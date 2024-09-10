<script src="assets/js/jquery-3.5.1.js"></script>
<?php
	echo '<h1 class="text-center">Contact Form Entries</h1><br>';
	echo '<div class="col-md-10 col-md-offset-1 table-responsive">';
	echo '<table class="table">';
	echo '<thead class="cform-head"><td>First Name</td><td>Last Name</td><td>Email</td><td>Phone Number</td><td>Comments</td></thead>';
	echo '<tbody id="results" class="cform-body">';
	echo '</tbody>';
	echo '</table>';
	echo '</div>';
?>
<script>
	function refresh_data(){
		$.ajax({
			type: 'post',
			url: 'https://ec2-3-143-17-29.us-east-2.compute.amazonaws.com/hw20/query_contacts.php',
			success: function(data) {
				$('#results').html(data);
			}
		});
	}
	setInterval(function(){ refresh_data();}, 500);
</script>
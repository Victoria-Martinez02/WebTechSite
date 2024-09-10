<?php
	function db_connect($database) {
		$username="webuser";
		$password="_HdU4qjcgPHzcb)r";
		$hostname="localhost";
		$dblink=new mysqli($hostname,$username,$password,$database);
		if(mysqli_connect_errno()){
			die("Error connecting to database: ".mysqli_connect_error());
		}
		return $dblink;
	}

	function redirect($uri) {
		?>
		<script type="text/javascript">
			document.location.href="<?php echo $uri; ?>";
		</script>	
		<?php die;
	}
?>
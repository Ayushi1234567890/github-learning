<?php

$server='localhost';
$user  ='id14367365_abc';
$password='921O6c+[Oyi[2Csm';
$db  = 'id14367365_mydb';

$con = mysqli_connect('localhost','id14367365_abc','Ayushisingh@321');

if($con){
	?>
	<script>
		alert("connection successful");
	</script>
	<?php 
}else{
	 ?>
	 <script>
	 	alert(" no connection")
	 </script>
	 <?php
}
mysqli_select_db($con, 'id14367365_mydb');

?>
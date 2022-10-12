<?php
include('config.php');
$d=$_GET['del'];
$sql=mysqli_query($conn,"DELETE FROM users WHERE id='$d'");
if($sql)
{
	?>
	<script type="text/javascript" language="javascript">
	alert('Successfully Deleted');
	window.location="viewusers.php";
	</script>
<?php

}
?>
<?php
include 'include/session.php';
if(isset($_POST['clear']))
{
	$sql = "DELETE FROM report";
	$conn->query($sql);
	echo "<b>Logs Cleared</b>&nbsp;";
	echo "<a href='about:blank'><button type='button' class='btn-danger'>Close</button></a>";
}

?>
<link rel="stylesheet" type="text/css" href="./bootstrap-3.3.7-dist/css/bootstrap.min.css">
<style type="text/css">
	body
	{background-color: #f2f2f2;}
</style>
<body></body>
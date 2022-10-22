<?php

include 'conn.php';

$sql = "SELECT * FROM t_lampu";
$query = mysqli_query($conn, $sql);
while($row = mysqli_fetch_array($query))
{
	$status = $row['status'];
}
echo $status;
?>
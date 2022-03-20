<?php
	require_once('dbconfig.php');
	$connect = mysqli_connect( HOST, USER, PASS, DB )
		or die("Can not connect");


	$results = mysqli_query( $connect, "SELECT * FROM appointment" )
		or die("Can not execute query"); 

	echo "<table border> \n";
	

	while( $rows = mysqli_fetch_array( $results ) ) {
		extract( $rows );
		echo "<tr>";
		echo "<td> $phone </td>";
		echo "<td> $appt_date </td>";
		echo "<td> <a href = 'delete.php?id=$id'> Delete </a> </td>";
		
		echo "</tr> \n";
	}

	echo "</table> \n";

	echo "<p><a href=create_input.php>CREATE a new record</a>";
?>
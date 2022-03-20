<?php

	$number = $_GET["phonenumber"];

	$name = $_GET["name"];
	$date = $_GET["date"];
	$doctor_name = $_GET["doctor"];




	require_once('dbconfig.php');

	$connect = mysqli_connect( HOST, USER, PASS, DB )

		or die("Can not connect");



	mysqli_query( $connect, "INSERT INTO appointment VALUES ( NULL,'$number', '$name', '$date','$doctor_name' )" )

		or die("Can not execute query");



	echo "appointment booked :<br> number = $number  <br> doctorname = $doctor_name";



	

?>
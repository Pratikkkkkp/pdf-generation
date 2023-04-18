<?php
	require('fpdf.php');

	// connect to database
	$conn = mysqli_connect('localhost', 'username', 'password', 'pdf');

	// check connection
	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}

	// prepare and bind statement
	$stmt = $conn->prepare("INSERT INTO formdata (uuid, name, phone, city) VALUES ($uuid, $name, $phone, $city)");
	$stmt->bind_param("ssss", $uuid, $name, $phone, $city);

	// generate uuid
	$uuid = uniqid();

	// get form data
	$name = $_POST['name'];
	$phone = $_POST['phone'];
	$city = $_POST['city'];

	// execute statement
	// $stmt
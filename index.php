<?php
	require('./database.php');
	require('fpdf/fpdf.php');
	if(isset($_POST['submitData'])){
		$uuidIs=uniqid();
		$name=mysqli_real_escape_string($db,$_POST['name']);
		$phone=mysqli_real_escape_string($db,$_POST['phone']);
		$city=mysqli_real_escape_string($db,$_POST['city']);

		$query="INSERT INTO insertdata (uuid,name,phone,city) VALUES('$uuidIs','$name','$phone','$city')";
        $run=mysqli_query($db,$query) or die(mysqli_error($db));
        if ($run) {
            // echo "<script>alert('You Successfully create an account as a Teacher.');</script>";
			$pdf = new FPDF();
			$pdf->AddPage();
			$pdf->SetFont('Arial', 'B', 18);
			$pdf->Cell(60,20,'UUID is '.$uuidIs, 0, 1);
			$pdf->Cell(60,20,'name is '.$name, 0, 1);
			$pdf->Cell(60,20,'Phone Number is '.$phone, 0, 1);
			$pdf->Cell(60,20,'City is '.$city, 0, 1);

			$pdf->Output();
        }
        else {
        	echo "<script>alert('Somthing Wrong.');</script>";
        }
	}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Form to PDF</title>
	<link rel="stylesheet" type="text/css" href="styles.css">
	<script src="https://html2canvas.hertzen.com/dist/html2canvas.min.js"></script>
</head>
<body>
	<div class="container">
		<h2>Form to PDF</h2>
		<form action="" method="post">
			<label for="name">Name:</label>
			<input type="text" id="name" name="name" required>
			<label for="phone">Phone Number:</label>
			<input type="tel" id="phone" name="phone" required>
			<label for="city">City:</label>
			<input type="text" id="city" name="city" required>
			<button type="submit" id="submit" name="submitData">Submit</button>
		</form>
	</div>
	
</body>
</html>


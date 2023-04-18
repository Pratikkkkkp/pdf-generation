<?php
?>
<!DOCTYPE html>
<html>
<head>
	<title>Form to PDF</title>
	<link rel="stylesheet" type="text/css" href="styles.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.4.0/jspdf.umd.min.js"></script>
	<script src="https://html2canvas.hertzen.com/dist/html2canvas.min.js"></script>
</head>
<body>
	<div class="container">
		<h2>Form to PDF</h2>
		<form method="post" action="submit.php">
			<label for="name">Name:</label>
			<input type="text" id="name" name="name" required>
			<label for="phone">Phone Number:</label>
			<input type="tel" id="phone" name="phone" required>
			<label for="city">City:</label>
			<input type="text" id="city" name="city" required>
			<button type="submit" id="submit">Submit</button>
		</form>
	</div>
	<script>
		document.getElementById("submit").addEventListener("click", function() {
			html2canvas(document.querySelector('.container')).then(function(canvas) {
				var imgData = canvas.toDataURL('image/png');
				var doc = new jsPDF();
				doc.addImage(imgData, 'PNG', 10, 10);
				doc.save('form.pdf');
			});
		});
	</script>
</body>
</html>


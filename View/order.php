<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>RegistrationForm_v2 by Colorlib</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- MATERIAL DESIGN ICONIC FONT -->
		<link rel="stylesheet" href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">
		
		<!-- STYLE CSS -->
		<link rel="stylesheet" href="css/style1.css">
	</head>

	<body>

		<div class="wrapper" style="background-image: url('images/bg-registration-form-2.jpg');">
			<div class="inner">
				<form method="POST" action="../Controller/proses.php?aksi=order">
					<h3>Order Your Shoes</h3>
					<div class="">
					<div class="form-wrapper">
						<label for="">Shoes Name</label>
						<input type="text" class="form-control" name="name">
					</div>
					<div class="form-wrapper">
						<label for="">Size</label>
						<input type="number" class="form-control" name="size">
					</div>
					<div class="form-wrapper">
						<label for="">Address</label>
						<input type="text" class="form-control" name="address">
					</div>
					<button>Order Now</button>
</div>
				</form>
			</div>
		</div>
		
	</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>
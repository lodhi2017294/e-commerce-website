<?php ?>

<!DOCTYPE html>
<html>
<head>
	<title>E-Store | Contact Us</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">


</head>
<body>
<?php require 'header_logged_out.php' ?>

<div class="row" >
	<div class="container" style="margin-top: 80px; padding: 20px; border: 3px solid #bbb ">
	<div class="row-style-login-page-pannel">
		<div class="col-sm-9 col-xs-12">
			<h2>24*7*360 LIVESUPPORT</h2>
			<h3> 24/7 Customer Support| 365 days in a year Live Technical Support</h3>
			<p>We don't want to push our ideas on to customers, we simply want to make what they want.</p>
			</div>
			<div class="col-sm-3 col-xs-12">
			<!-- contact us pic-->
			<img src="images/24support.jpg">

			</div>

		</div>
	</div>
</div>





<div class="row">
	<div class="container" style="margin-top: 20px; margin-bottom: 50px;">
	<div class="row-style-login-page-pannel" >
		<div class="col-sm-6 col-xs-12" >
			<h3>CONTACT US</h3>
			<form method="post"  action="cont.php">
				<div class="form-group">
					Name:<input type="text" class="form-control" name="name" >
				</div>

				<div class="form-group">
					Email Id:<input type="email" class="form-control" name="email" >
				</div>

				<div class="form-group">
					Message:<textarea rows="4"  class="form-control" name="message"></textarea>
				</div>

					<button class="btn btn-primary" type="submit" value="Submit"  name="button">Submit</button>						
						</button>

			</form>
			
			</div>
			<div class="col-sm-offset-1 col-sm-5 col-xs-12" style="border-left: 2px solid #ccc">
			<h3>Company Information:</h3>
			<p><br>020 Cambrigde vila<br>London<br>Phone:01438-222240 <br>Email:ecommerce@ecommerce.com<br>Facebook : e-commerce <br> Twitter : @ecommerce<br></p>
			</div>

		</div>
	</div>
</div>





<div style="background-color: #333; color:white ;">
<?php require 'foot.php' ?>
</div>
</body>
</html>
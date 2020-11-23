<?php
$b_id=getenv('button_id');
?>
<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://fonts.googleapis.com/css2?family=Titillium+Web:wght@400&display=swap" rel="stylesheet"> 
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="main.css">
	<link rel="stylesheet" href="donate.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<title>
		Welcome to Doggo Donation
	</title>
</head>
<body>
	<section id='top'>
		<img src="logo.png"><span> Doggo Donation</span>
		<div class="header">
  			<div class="header">
    				<a href="index.php"> Home </a>
    				<a href="#contact"> Contact </a>
    				<a href="index.php#about"> About </a>
  			</div>
		</div>
	</section>
	<div class="bg-img">
		<br><br><br><br><span id="headin">Choose Donation Type</span>
		<div class="row">
			<div class="col-lg-4 col-md-6 col-sm-6">
				<div class="txt">
					<h2>Support a dog shelter.</h2><br>
					<img src="donate_1.jpg">
					<p class="cl1"><br>This money is donated to a dog shelter to help them rescue more dogs.</p><br>
					<form><script src="https://checkout.razorpay.com/v1/payment-button.js" data-payment_button_id="<?php echo $b_id ?>"> </script> </form>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 col-sm-6">
				<div class="txt">
					<h2>Donate for a dog's meal.</h2><br>
					<img src="donate_2.jpg">
					<p class="cl1"><br>We provide a stray dog with meals with the money collected</p><br>
					<form><script src="https://checkout.razorpay.com/v1/payment-button.js" data-payment_button_id="<?php echo $b_id ?>"> </script> </form>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 col-sm-6">
				<div class="txt">
					<h2>Donate for a dog's surgery.</h2><br>
					<img src="donate_3.jpg">
					<p class="cl1"><br>Many stray dogs require surgeries which they are deprived off. Help them get rid of the misery.</p><br>
					<form><script src="https://checkout.razorpay.com/v1/payment-button.js" data-payment_button_id="<?php echo $b_id ?>"></script></form>
				</div>
			</div>
		</div>
	</div>
	<footer id='contact'>
  		<p>Made By-Kshitij Kakkar</p>
  		<a href="https://www.facebook.com/kshitij.kakkar.1" class="fa fa-facebook"></a>
		<a href="https://www.linkedin.com/in/kshitij-kakkar-16846316b/" class="fa fa-linkedin"></a>
		<a href="https://www.instagram.com/kshitij.12/" class="fa fa-instagram"></a>
		<br><br>
		Icon made by <a href="https://www.flaticon.com/authors/pixel-perfect" title="Pixel perfect">Pixel perfect</a> from <a href="https://www.flaticon.com/" title="Flaticon"> www.flaticon.com</a>
	</footer>
</body>
</html>
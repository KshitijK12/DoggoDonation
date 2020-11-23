<?php
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
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<title>
		Welcome to Doggo Donation
	</title>

<body>
	<section id='top'>
		<img src="logo.png"><span> Doggo Donation</span>
		<div class="header">
  			<div class="header">
    				<a class="active" href="#home"> Home </a>
    				<a href="#contact"> Contact </a>
    				<a href="#about"> About </a>
					<span><a href="details.php" id="donate"><i class='fas fa-hand-holding-heart'>  </i>  Donate Now</a></span>
  			</div>
		</div>
	</section>
	<div class="container">
	<section id="about">
		<h1 class="heading">Dog Donations</h1>
		<div id='mid'>
				There are so many stray animals on the streets of India , that it becomes very difficult to provide shelter to all of them.Every small donation helps in feeding a stray /abandoned /tortured animal. It is only us who can help them.
				With all shops, hotels, restaurants, bakeries and meat shops shut due to the COVID-19 situation , the street dogs, which usually depended on them, are now left no where to go for food.
				<img src="6.png"> On normal days, the street dogs, which moved on the roads in packs of 10 to 15, somehow used to find food, with people throwing bread, buns, biscuits, waste food, meat wastes etc, at them. But with hardly any public movement on roads, the street dogs lie wailing on the streets, waiting for someone to provide food for them.
However, there seems to be little hope for the street dogs as some animal-lovers of the city, who come in cars, are feeding the dogs with bread and biscuits.
The animal-lovers feel that the Veterinary Department , the MCC and Animal Welfare Organisations such as People For Animals (PFA) should come forward to the rescue of these dumb animals, which are left starving due to want of food.
		<div>
			Read: <a href="https://indianexpress.com/article/opinion/strays-dogs-deserve-our-kindness-gauri-puri-6535982/"><em>Strays deserve our kindness (The Indian Express) </em></a>	
			</p>
			<p>Also Read: <a href="https://www.scoopwhoop.com/Animal-Shelters-In-India/"><em>Scoop Woop's 10 Animal Shelters In India</em></a></p>
</div>
		</div>



<div class="slideshow-container">

<div class="mySlides">
  <div class="numbertext">1 / 5</div>
  <img src="1.jpg" style="width:100%">
  <div class="content">
    <h1>Their lives depend on us.</h1>
    <p>There are millions of stray animals who die due to hunger and abuse.</p>
    
  </div>
</div>

<div class="mySlides">
  <div class="numbertext">2 / 5</div>
  <img src="2.jpg" style="width:100%">
  <div class="content">
    <h2>Pause to think about that there are paws to consider.</h2>
    <p>Every small donation helps an animal.</p>
    
  </div>
</div>

<div class="mySlides">
  <div class="numbertext">3 / 5</div>
  <img src="3.jpg" style="width:100%">
  <div class="content">
    <h1>Be the voice of the strays</h1>
    <p>Help them live a happy life.</p>
    
  </div>
</div>

<div class="mySlides">
  <div class="numbertext">4 / 5</div>
  <img src="4.jpg" style="width:100%">
  <div class="content">
    <h1>Pledge to change lives</h1>
    <p>Visit a pet shelter to help a soul.</p>
    
  </div>
</div>

<div class="mySlides">
  <div class="numbertext">5 / 5</div>
  <img src="9.jpg" style="width:100%">
  <div class="content">
    <h1>Adopt, don’t shop</h1>
    <p>Adoption is a loving Option</p>
    
  </div>
</div>


<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>

</div>
<br>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span>
  <span class="dot" onclick="currentSlide(4)"></span> 
  <span class="dot" onclick="currentSlide(5)"></span> 

</div>

<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
</script>

<h1 class="heading">Adopt Dont Shop</h1>
<div id="mid">
	<img src="8.png">
	Adopting a dog from a shelter not only means that you’re giving him a happy life, but you also free up a spot at the rescue or shelter to save another dog’s life.
	Many of the puppies sold in pet stores or online originate from puppy mills, commercial dog-breeding facilities that focus on increasing profit with little regard for the health and welfare of the animals.Practices and conditions in most puppy mills are unethical and downright abhorrent in many cases. Dogs live in filthy conditions without adequate food, water or veterinary care. And female dogs are bred at every opportunity with little to no recovery time between litters. Inbreeding is also a huge problem.Because of these conditions, puppy mills often produce animals with serious health problems down the road. And this translates to hefty vet bills for you. Many pet stores also don’t socialize their animals, which can lead to potential behavioral problems that aren’t ideal for a family pet. Adopting a pet, however, has a ton of advantages. The ASPCA reports that roughly 6.5 million companion animals enter shelters every year.<br><br>
	Read More: <a href="https://www.caninejournal.com/adopt-dont-shop/"><em>Why You Should Adopt A Pet Rather Than Buy</em></a>
</div>
<div class="don">
	<a href="details.php" id="donate"><i class='fas fa-hand-holding-heart'> </i>  Donate Now</a>	
</div>
</section>


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
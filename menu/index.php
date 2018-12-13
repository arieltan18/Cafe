<!DOCTYPE html>
<html>
<head>
<link rel="icon" href="../images/icon.png">
<title>
	Menu Le Meilleur Cafe
</title>
<link rel="stylesheet" href="../styles/mystyle.css">
<link rel="stylesheet" href="../styles/menustyle.css">
<link href='https://fonts.googleapis.com/css?family=PT+Sans+Narrow' rel='stylesheet' type='text/css'>
<!--close link above when connection slow-->
</head>
<body>
<?php include('../includes/navigation.php');?>
<?php include('../includes/header.php');?>
<div id="contentWrapper">
<div class="headslide"></div>

<div class="menu">
<div class="title" style="background-image:url(../images/menu.png);"></div>
<div class="menuSlideShow">
	<div class="mySlides fade">
		<img src="/cafe/images/slideshow/slide1.jpg" style="width:100%; height:300px;">
	</div>

	<div class="mySlides fade">
		<img src="/cafe/images/slideshow/slide2.jpg" style="width:100%; height:300px;">
	</div>

	<div class="mySlides fade">
		<img src="/cafe/images/slideshow/slide3.jpg" style="width:100%; height:300px;">
	</div>
</div>

<div class="menuSlideShowDesc">
<h1>Satisfying tastes for every mood and moment</h1>
<p>Get delicious food and handcrafted beverages to go, 
	or grab a seat and savor something warm. No need to wait in line - 
	just place an order and pay on your mobile device.</p>
</div><br style="clear:both;"><br><br>

<div class="menuLink">
	<a href="/cafe/menu/coffee&tea.php">
		<img src="/cafe/images/slideshow/coffee_icon.jpg" alt="coffee" width="180px" height="180px">
	</a>
	<a href="/cafe/menu/chocolateDrinks.php">
		<img src="/cafe/images/slideshow/chocolate_icon.jpg" alt="chocolate" width="180px" height="180px">
	</a>
	<a href="/cafe/menu/juice.php">
		<img src="/cafe/images/slideshow/Juice-icon.jpg" alt="juice" width="180px" height="180px">
	</a>
	<a href="/cafe/menu/cake.php">
		<img src="/cafe/images/slideshow/cake_icon.jpg" alt="cake" width="180px" height="180px">
	</a>
</div><br>

</div>
</div>
<?php include('../includes/footer.php');?>
<script src="../script/myscript.js"></script>
<script src="../script/myscriptslide.js"></script>
</body>
</html>

<!DOCTYPE html>
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
<link rel="icon" href="../images/icon.png">
<title>
	Contact Us Le Meilleur Cafe
</title>
<link rel="stylesheet" href="../styles/mystyle.css">
<script src="../script/myscript.js"></script>
<style>
#contentWrapper{
	height: 100%;
}
.footer{
	width: 100%;
	position: absolute;
	bottom: 0;
}
</style>
</head>
<body>
<?php include('../includes/navigation.php');?>
<?php include('../includes/header.php');?>
<div id="contentWrapper">
<div class="headslide"></div>
<div class="title" style="background-image: url(../images/contactUsTitle.png);"></div>
<div style="text-align:center;">
<?php echo $_GET['submit']; ?><br><br>
<div style="text-align:center;">
<a href="../index.php" style="list-style-type:none;">
<button class="button" type="submit" size="100%">Back To Home</button><a><br><br>
</div>
</div>
<div class="footer"><?php include('../includes/footer.php');?></div>
</div>
</body>
</html>
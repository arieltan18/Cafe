<!DOCTYPE html>
<html>
<head>
<link rel="icon" href="../images/icon.png">
<title>
	Le Meilleur Cafe-Chocolate Drinks
</title>
<link rel="stylesheet" href="../styles/mystyle.css">
<link href='https://fonts.googleapis.com/css?family=PT+Sans+Narrow' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Abel' rel='stylesheet' type='text/css'>
</head>
<body>
<div id="wrapper">
<?php include('../includes/header.php');?>
<?php include('../includes/navigation.php');?>
<div class="headslide"></div>

<?php include("../includes/DBSetting.php");?>

<?php $sql = "SELECT * FROM chocolateDrinks";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
	
?>

<div id="contentWrapper">
<div id="chocolateheader" class="title"></div>
<ul class='menuUL'>
<?php
     // output data of each row
     while($row = $result->fetch_assoc()) {
?>
<li id="menuLI">
<div id="menuBox">
<p class="menuName"><?php echo $row["name"]; ?></p>
<div id="f1_container">
<div id="f1_card" class="shadow">
<div class="front face">
<img id="<?php echo $row["id"]; ?>" src="<?php echo $row["image"]; ?>" alt="<?php echo $row["name"]; ?>" width="200" height="200">
</div>
<div class="back face">
<?php echo $row["description"]; ?>
</div>
</div>
</div>
</div>
</li>
<?php }?>
</ul>
<?php }
include('../includes/footer.php');?>
</div>
</div>
</body>
</html>
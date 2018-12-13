<!DOCTYPE html>
<html>
<head>
<link rel="icon" href="../images/icon.png">
<title>
	Le Meilleur Cafe-Coffee&Tea Menu
</title>
<link rel="stylesheet" href="../styles/mystyle.css">
<link href='https://fonts.googleapis.com/css?family=PT+Sans+Narrow' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Abel' rel='stylesheet' type='text/css'>
<script>
function showAll() {
    document.getElementById("menuCoffee").style.display = "table";
	document.getElementById("menuTea").style.display = "table";
}
	function showCoffee() {
    document.getElementById("menuCoffee").style.display = "table";
	document.getElementById("menuTea").style.display = "none";
}
	function showTea() {
    document.getElementById("menuCoffee").style.display = "none";
	document.getElementById("menuTea").style.display = "table";
}
</script>
</head>
<body>
<?php include('../includes/header.php');?>
<?php include('../includes/navigation.php');?>
<div class="headslide"></div>
<div id="wrapper">
<div id="contentWrapper">
<?php include("../includes/DBSetting.php");?>
<?php $coffeeTeaType=array("Coffee", "Tea");?>
<div id="coffeeheader" class="title"></div>
<ul class="diffTypeNav" id="coffeeTeaNav">
<li class="coffeeTeaMenuNavList"><a onclick="showAll();">View All</a></li>
<li class="coffeeTeaMenuNavList"><a onclick="showCoffee();">Coffee</a></li>
<li class="coffeeTeaMenuNavList"><a onclick="showTea();">Tea</a></li>
</ul>

<?php foreach($coffeeTeaType as $type) {?>
<?php $sql = "SELECT * FROM coffeetea where type='".$type."'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
?>

<?php echo"<ul id='menu$type' class='menuUL'>";?>
<p class="type"><?php echo $type ?></p>
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
<div class="back face" >
<?php echo $row["description"]; ?>
</div>
</div>
</div>
</div>
</li>
<?php }?>
</ul>
<?php }
	 
}
include('../includes/footer.php');?>
</div>
</div>
</body>
</html>
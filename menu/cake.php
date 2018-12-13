<!DOCTYPE html>
<html>
<head>
<link rel="icon" href="../images/icon.png">
<title>
	Le Meilleur Cafe-Cake Menu
</title>
<link rel="stylesheet" href="../styles/mystyle.css">
<link href='https://fonts.googleapis.com/css?family=PT+Sans+Narrow' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Abel' rel='stylesheet' type='text/css'>
<script>
function showAll() {
    document.getElementById("menuCheese Cake").style.display = "table";
	document.getElementById("menuFresh Cream Cake").style.display = "table";
	document.getElementById("menuBrownies").style.display = "table";
	document.getElementById("menuHealth Cake").style.display = "table";
}
	function showCheeseCake() {
    document.getElementById("menuCheese Cake").style.display = "table";
	document.getElementById("menuFresh Cream Cake").style.display = "none";
	document.getElementById("menuBrownies").style.display = "none";
	document.getElementById("menuHealth Cake").style.display = "none";
}
	function showFreshCreamCake() {
    document.getElementById("menuCheese Cake").style.display = "none";
	document.getElementById("menuFresh Cream Cake").style.display = "table";
	document.getElementById("menuBrownies").style.display = "none";
	document.getElementById("menuHealth Cake").style.display = "none";
}
function showBrownies() {
    document.getElementById("menuCheese Cake").style.display = "none";
	document.getElementById("menuFresh Cream Cake").style.display = "none";
	document.getElementById("menuBrownies").style.display = "table";
	document.getElementById("menuHealth Cake").style.display = "none";
}
function showHealthCake() {
    document.getElementById("menuCheese Cake").style.display = "none";
	document.getElementById("menuFresh Cream Cake").style.display = "none";
	document.getElementById("menuBrownies").style.display = "none";
	document.getElementById("menuHealth Cake").style.display = "table";
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
<?php $cakeTypes=array("Cheese Cake", "Fresh Cream Cake", "Brownies", "Health Cake");?>
<div id="cakeheader" class="title"></div>
<ul class="diffTypeNav" id="cakeNav">
<li class="cakeMenuNavList"><a onclick="showAll();">View All</a></li>
<li class="cakeMenuNavList"><a onclick="showCheeseCake();">Cheese Cake</a></li>
<li class="cakeMenuNavList"><a onclick="showFreshCreamCake();">Fresh Cream Cake</a></li>
<li class="cakeMenuNavList"><a onclick="showBrownies();">Brownies</a></li>
<li class="cakeMenuNavList"><a onclick="showHealthCake();">Health Cake</a></li>
</ul>

<?php foreach($cakeTypes as $cakeType) {?>
<?php $sql = "SELECT * FROM cake where cakeType='".$cakeType."'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
?>


<?php echo"<ul id='menu$cakeType' class='menuUL'>";?>
<p class="type"><?php echo $cakeType ?></p>
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
<?php }}
include('../includes/footer.php');?>
</div>
</div>
</body>
</html>
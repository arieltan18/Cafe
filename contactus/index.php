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
<link href='https://fonts.googleapis.com/css?family=PT+Sans+Narrow' rel='stylesheet' type='text/css'>
<!--close link above when connection slow-->
<script type="text/javascript">
	function validate()
	{
		if(document.myForm.salutation.value=="")
		{
			alert("Please provide your salutation");
			return false;
		}
		if(document.myForm.name.value == "")
		{
			alert("Please provide your name");
			document.myForm.name.focus();
			return false;
		}
		if(document.myForm.email.value == "")
		{
			alert("Please enter your email!");
			document.myForm.email.focus();
			return false;
		}
		if(document.myForm.email.value != "")
		{
			var emailID = document.myForm.email.value;
			atpos = emailID.indexOf("@");
			dotpos = emailID.lastIndexOf(".");
			
			if(atpos < 1 || (dotpos - atpos < 2))
			{
				alert("Please enter correct email")
				document.myForm.email.focus();
				return false;
			}
		}
		if(document.myForm.enquirytype.value == "")
		{
			alert("Please enter your type of enquiry!");
			return false;
		}
		if(document.myForm.subject.value == "")
		{
			alert("Please enter subject!");
			document.myForm.subject.focus();
			return false;
		}
		if(document.myForm.message.value == "")
		{
			alert("Please enter message!");
			document.myForm.message.focus();
			return false;
		}
		document.getElementById("myForm").submit();	
		return true;
	}
</script>
</head>
<body>
<?php include('../includes/navigation.php');?>
<?php include('../includes/header.php');?>
<?php include('validate.php');?>
<div class="headslide"></div>
<div id="contentWrapper">
<div class="title" style="background-image: url(../images/contactUsTitle.png);"></div>
<div id="contactWrapper" class="content">
<form id="form" name="myForm" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
	<fieldset>
		<legend>Personal Information</legend>	
		<label for="salutation">Salutation: </label><br>
			<input type="radio" name="salutation" <?php if (isset($salutation) && $salutation=="Mr") echo "checked";?> value="Mr">Mr
			<input type="radio" name="salutation" <?php if (isset($salutation) && $salutation=="Mrs") echo "checked";?> value="Mrs">Mrs
			<input type="radio" name="salutation" <?php if (isset($salutation) && $salutation=="Ms") echo "checked";?> value="Ms">Ms 
			<span class="error">* <?php echo $salutationErr;?></span> <br><br>
		<label for="name">Name: </label><br>
			<input type="text" size="100px"  id="name" name="name" value="<?php echo $name;?>"> <span class="error">* <?php echo $nameErr;?></span><br><br>
		<label for="email">Email Address: </label><br>
			<input type="text" size="100px" id="email" name="email" value="<?php echo $email;?>"> <span class="error">* <?php echo $emailErr;?></span><br><br>
		<label for="phone">Phone Number: </label><br>
			<input type="text" size="100px" id="phone" name="phone" value="<?php echo $phone;?>"> <span class="error"><?php echo $phoneErr;?></span><br><br>
		<label for="enquiry">Type of Enquiry: </label>
			<select name="enquirytype" id="enquiry" >
				<option value=""></option>
				<option value="enquiry" <?php if (isset($enquirytype) && $enquirytype=="enquiry") echo "selected";?>>General Enquiry</option>
				<option value="complaint" <?php if (isset($enquirytype) && $enquirytype=="complaint") echo "selected";?>>Complaint</option>
				<option value="suggestion" <?php if (isset($enquirytype) && $enquirytype=="suggestion") echo "selected";?>>Suggestion</option>
			</select> <span class="error">* <?php echo $enquirytypeErr;?></span>
		<br><br>
		<label for="subject">Subject: </label><br>
			<input type="text" id="subject" size="100px" name="subject" value="<?php echo $subject;?>"> <span class="error">* <?php echo $subjectErr;?></span><br><br>
		<label for="message">Message: </label><br>
			<textarea type="text" id="message" name="message"  rows="10" cols="100"><?php echo $message;?></textarea> <span class="error">* <?php echo $messageErr;?></span><br><br>
		<button class="button" type="submit" size="200%" onclick="return(validate());">Send</button>
		<p class="error">* Require to fill up.</p>
	</fieldset>
</form>
<br>
</div>
</div>
<?php include('../includes/footer.php');?>
</body>
</html>
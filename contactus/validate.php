<?php
$salutationErr = $nameErr = $emailErr = $phoneErr = $enquirytypeErr = $subjectErr = $messageErr = "";
$salutation = $name = $email = $phone = $enquirytype = $subject = $message = $submit = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	
	if(empty($_POST["salutation"])){
		$salutationErr = "Salutation is required";
	}else{
		$salutation = test_input($_POST["salutation"]);
	}
	
	if (empty($_POST["name"])) {	
		$nameErr = "Name is required";
	} else {
		$name = test_input($_POST["name"]);	
		if(!preg_match("/^[a-zA-Z ]*$/",$name)) {
			$nameErr = "Only letters and white space allowed";
		}
	}
	
	if(empty($_POST["email"])){
		$emailErr = "Email is required";
	}else {
		$email = test_input($_POST["email"]);
		if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		$emailErr = "Invalid email format"; 
		}
	}
	
	if(empty($_POST["phone"])){
		$phoneErr = "";
	}else{
		$phone = test_input($_POST["phone"]);
		if (!preg_match("/^[0-9]{10,12}$/",$phone)){
			$phoneErr = "* Invalid Phone Number";
		}
	}
	
	if(empty($_POST["enquirytype"])){
		$enquirytypeErr = "Enquiry type is required";
	}else{
		$enquirytype = test_input($_POST["enquirytype"]);
	}
	
	if(empty($_POST["subject"])){
		$subjectErr = "Subject is required";
	}else{
		$subject = test_input($_POST["subject"]);
	}
	
	if(empty($_POST["message"])){
		$messageErr = "Message is required";
	}else{
		$message = test_input($_POST["message"]);
	}
}	
    if(!empty($_POST["message"])&&!empty($_POST["subject"])&&!empty($_POST["enquirytype"])
		&&(empty($_POST["phone"])||preg_match("/^[0-9]{10,12}$/",$phone))&&filter_var($email, FILTER_VALIDATE_EMAIL)
	&&!empty($_POST["email"])&&preg_match("/^[a-zA-Z ]*$/",$name)&&!empty($_POST["name"])&&!empty($_POST["salutation"]))
	{
		include("../includes/DBSetting.php");
		$sqlstm="INSERT INTO cafe.contactus(salutation,name,email,phone,enquiry,subject,message) VALUES ('$salutation','$name','$email','$phone','$enquirytype','$subject','$message')";
		if ($conn->query($sqlstm) === TRUE){
		$submit = "Thank you ".$salutation." ".$name."! Your ".$enquirytype." submitted." ;
		header('Location:sentMsg.php?submit='.$submit);
		}else{
			echo "Error: " . $sqlstm . "<br>" . $conn->error;
		}
		$conn->close();
	}
	
	function test_input($data) {
	   $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}
?>

<?php
	//start PHP session
	session_start();
	

	//check if register form is submitted
	if(isset($_POST['submit'])){
		//assign variables to post values

		$full_name = $_POST['full_name'];
		$dob = $_POST['dob'];
		$gender = $_POST['gender'];
		$skill = $_POST['skill'];
		$description = $_POST['description'];
		$address = $_POST['address'];
		$phone = $_POST['phone'];
		$country = $_POST['country'];
		$e_duration = $_POST['e_duration'];
		$email = $_GET["email"];

//MySQLi Procedural

	
		require_once("conn2.php");

mysqli_query($conn,"UPDATE mentors SET full_name = '$full_name', dob = '$dob', gender = '$gender', skill = '$skill', description = '$description', address = '$address', phone = '$phone', e_duration = '$e_duration', country = '$country' WHERE email = '$email' ") or die("cannot update" . mysqli_error($conn));

	echo "Successfull";
	header("location:mentors/index.php?mail=$email");


}
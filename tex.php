<?php
//include 'config.php';
if (isset($_POST['submit'])) {
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$password1 = $_POST['password1'];

	echo $fname . "<br>";
	echo $lname . "<br>";
	echo $email . "<br>";
	echo $password1 . "<br>";
	echo $password . "<br>";
echo "string";
	echo "INSERT INTO users (fname, lname, email, password) VALUES ('$fname', '$lname', '$email', '$password')";
		// $result = mysqli_query($con, $sql);
		// if ($result) {
		// 	echo "Data entered successfully";
		// }else{
		// 	echo "Unknown error occured";
		// }

}
?>
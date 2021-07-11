	<?php

$fname = filter_input(INPUT_POST, 'fname');
$lname = filter_input(INPUT_POST, 'lname');
$email = filter_input(INPUT_POST, 'email');
$password = filter_input(INPUT_POST, 'password');
$phone = filter_input(INPUT_POST, 'phone');
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "login";
$conn = new mysqli($host, $dbusername, $dbpassword, $dbname);
if (mysqli_connect_error()){
	die('connect error'.mysqli_connect_errno().mysqli_connect_error()); 
}
else
	{
		$sql = "INSERT INTO userdata (fname, lname, email, password, phone) 
		values ('$fname', '$lname' ,'$email' , '$password' , '$phone')";
		
		if ($conn->query($sql))
		{
			echo "REGISTRATION SUCCESFULL";
		}
		else{
			echo "ALREADY REGISTERED";}
	}

?>
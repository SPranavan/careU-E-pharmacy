<?php
session_start();
include "db_connect.php";



if (isset($_POST['email']) && isset($_POST['password'])) {

	// function validate($data){
	//    $data = trim($data);
	//    $data = stripslashes($data);
	//    $data = htmlspecialchars($data);
	//    return $data;
	// }

	$email = $_POST['email'];
	$pw = $_POST['password'];
	$hashedpw = password_hash($pw, PASSWORD_DEFAULT);

	$sql = "SELECT * FROM store_keeper WHERE email='$email'OR mobile_number='$email' AND password='$hashedpw '";
	$result = mysqli_query($conn, $sql);
	$name = mysqli_fetch_assoc($result);
	$_SESSION['first_name'] = $name['first_name'] ." " . $name['last_name'];

	if (mysqli_num_rows($result) === 1) {
		header("Location:home.php");
	} else {
		header("Location: signin.php?msg = failed");
	}


	// print_r($email);die();



	// $num_length = strlen($ucd);
	// if($num_length == 10) {

	// 	$sql = "SELECT * FROM users WHERE mobile_number='$ucd' AND password='$pass'";

	// 	$result = mysqli_query($conn, $sql);

	// 	if (mysqli_num_rows($result) === 1) {
	// 		$row = mysqli_fetch_assoc($result);
	// 		if ($row['mobile_number'] === $ucd && $row['password'] === $pass) {
	// 			$_SESSION['user_id'] = $row['user_id'];
	// 			$_SESSION['name'] = $row['name'];
	// 			$_SESSION['user_name'] = $row['user_name'];
	// 			$_SESSION['mobile_number'] = $row['mobile_number'];
	// 			header("Location: dashboard.php");
	// 			exit();
	// 		}else{
	// 			header("Location: index.php?error=Incorect User ID/Mobile Number or password");
	// 			exit();
	// 		}
	// 	}else{
	// 		header("Location: index.php?error=Incorect User name or password");
	// 		exit();
	// 	}
	// }

	// else{
	// 	$sql = "SELECT * FROM users WHERE user_id='$ucd' AND password='$pass'";

	// 	$result = mysqli_query($conn, $sql);

	// 	if (mysqli_num_rows($result) === 1) {
	// 		$row = mysqli_fetch_assoc($result);
	// 		if ($row['user_id'] === $ucd && $row['password'] === $pass) {
	// 			$_SESSION['user_id'] = $row['user_id'];
	// 			$_SESSION['name'] = $row['name'];
	// 			$_SESSION['user_name'] = $row['user_name'];
	// 			$_SESSION['mobile_number'] = $row['mobile_number'];
	// 			header("Location: dashboard.php");
	// 			exit();
	// 		}else{
	// 			header("Location: index.php?error=Incorect User Id/Mobile Number or password");
	// 			exit();
	// 		}
	// 	}else{
	// 		header("Location: index.php?error=Incorect User name or password");
	// 		exit();
	// 	}	
	// }


} else {
	header("Location: signin.php");
	exit();
}

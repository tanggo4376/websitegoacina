<?php
    $conn = mysqli_connect('localhost','id17067664_goacina','Et5MoyX_CJEA=]KI','id17067664_databasegoacina');
	$fullName = $_POST['fullName'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$number = $_POST['number'];

	// Database connection
	
	$sql = "INSERT INTO user(nama_user, email_user, pass_user, no_telp) VALUES('$fullName','$email','$password','$number')";
    if(!mysqli_query($conn,$sql)){
        echo "Failed";
    }else{
        echo "Success";
    }
?>
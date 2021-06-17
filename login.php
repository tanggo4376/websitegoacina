<?php    
    $conn = mysqli_connect('localhost','id17067664_goacina','Et5MoyX_CJEA=]KI','id17067664_databasegoacina');
    $email = $_POST['email'];
	$password = $_POST['password'];
    if($conn->connect_error){
        die("Failed to connect : ".$conn->connect_error);
    }else{
        $temp = $conn->prepare("SELECT * from user where email_user = ?");
        $temp->bind_param("s", $email);
        $temp->execute();
        $temp_result = $temp->get_result();
        if($temp_result->num_rows>0){
            $data = $temp_result->fetch_assoc();
            if($data['pass_user']==$password){
                echo "Login Succes";
                
                header("Location: index.html");
                die();
                
            }else{
                echo "invalid email or password";
            }
        }else{
            echo "invalid email or password";
        }
    }
?>
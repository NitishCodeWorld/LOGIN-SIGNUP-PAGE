<?php
    session_start();
    include "config.php";

    if(isset($_POST['ok'])){

        function validate($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }

    $email = validate($_POST['email']);
    $password = validate($_POST['password']);
    $rpassword = validate($_POST['password-r']);

    if(empty($email)){
        header("Location: signup.php?error=Email is required");
        exit();
    }
    elseif(empty($password)){
        header("Location: signup.php?error=Password is required");
        exit();
    }
    elseif(empty($rpassword)){
        header("Location: signup.php?error=Please confirm password");
        exit();
    }
    elseif(!empty($email)){
        if(filter_var($email, FILTER_VALIDATE_EMAIL)){
            if($password === $rpassword){
                $sql = "INSERT INTO user(email, password) VALUES('$email', '$password')";
                if(mysqli_query($conn, $sql)){
                    $sql1 = "SELECT * FROM user WHERE email = '$email'";
                    $result = mysqli_query($conn, $sql1);
                    
                    if(mysqli_num_rows($result) > 0){ 
                        $row = mysqli_fetch_array($result);
                        $_SESSION['email'] = $row['email'];
                        $_SESSION['password'] = $row['password'];
                        $_SESSION['id'] = $row['id'];
                        header("Location: home.php");
                        exit();
                    }
                }
            }else{
                header("Location: signup.php?error=Password did not match");
            }
        }else{
            header("Location: signup.php?error=Invalid Email");
            exit();
        }
    }else{
        header("Location: signup.php");
        exit();
    }


}
?>
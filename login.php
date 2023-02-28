<?php
    session_start();
    include "config.php";

    if(isset($_POST['email']) && isset($_POST['password'])){

        function validate($data){
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
    }

    $email = validate($_POST['email']);
    $pass = validate($_POST['password']);

    if(empty($email)){
        header("Location: index.php?error=Email is required");
        exit();
    }
    elseif(empty($pass)){
        header("Location: index.php?error=Password is required");
        exit();
    }

    $sql = "SELECT * FROM user WHERE email = '$email' AND password = '$pass'";
    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) === 1){
        $row = mysqli_fetch_assoc($result);
        if($row['email'] === $email && $row['password'] === $pass){
            echo "Logged In!";
            $_SESSION['email'] = $row['email'];
            $_SESSION['password'] = $row['password'];
            $_SESSION['id'] = $row['id'];
            header("Location: home.php");
            exit();
        }
        else{
            header("Location: index.php?error=Incorrect Email or Password");
            exit();
        }
    }else{
        header("Location: index.php");
        exit();
    }

?>
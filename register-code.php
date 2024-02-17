<?php
session_start();

require_once "dbcon.php";

if(isset($_POST['registerBtn']))
{
    $name = mysqli_real_escape_string($conn,$_POST['name']);
    $tel = mysqli_real_escape_string($conn,$_POST['tel']);
    $email = mysqli_real_escape_string($conn,$_POST['email']);
    $password = mysqli_real_escape_string($conn,$_POST['password']);
    $university = mysqli_real_escape_string($conn,$_POST['university']);
    $year = mysqli_real_escape_string($conn,$_POST['year']);

    $errors = [];

    if($name == '' OR $tel == '' OR $email == '' OR $password == '' OR $university == '' OR $year == '' ){
        array_push($errors, "All fields are required");
    }

    if($email != '' && !filter_var($email, FILTER_VALIDATE_EMAIL)){
        array_push($errors, "Enter valid email address");
    }

    if($email != ''){
        $userCheck = mysqli_query($conn, "SELECT email FROM users WHERE email='$email'");
        if($userCheck){
            if(mysqli_num_rows($userCheck) > 0){
                array_push($errors, "Email already registered");
            }
        }else{
            array_push($errors, "Something Went Wrong!");
        }
    }

    if(count($errors) > 0){
        $_SESSION['errors'] = $errors;
        header('Location: register.php');
        exit();
    }

    $query = "INSERT INTO users (name,tel,email,password,university,year) VALUES ('$name','$tel','$email','$password ', '$university','$year')";
    $userResult = mysqli_query($conn, $query);

    if($userResult){
        $_SESSION['message'] = "Registered Successfully";
        header('Location: index.php');
        exit();
    }else{
        $_SESSION['message'] = "Something Went Wrong";
        header('Location: register.php');
        exit();
    }

}



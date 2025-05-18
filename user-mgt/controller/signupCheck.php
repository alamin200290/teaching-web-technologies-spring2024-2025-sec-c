<?php
    require_once('../model/userModel.php');
    //error_reporting(A_ALL);
    if(isset($_POST['submit'])){
        $username = trim($_POST['username']);
        $password = trim($_POST['password']);
        $email = trim($_POST['email']);

        if($username == "" || $password == "" || $email == ""){
            echo "null username/password/email!";
        }else{
        
            $user = ['username'=> $username, 'password'=>$password, 'email'=> $email];
            $status = addUser($user);
            if($status){
                header('location: ../view/login.html');
            }else{
                header('location: ../view/signup.html');
            }
        }
    }else{
        echo "Invalid request! Please submit form!";
    }
?>
<?php
    $error = null;
    $con = mysqli_connect("localhost", "root", "", "tripmitra");
    if(!$con){
        die("Failed!!".mysqli_error($con));
    }
    if(isset($_POST['submit'])){
        $email=$_POST['email'];
        $password=$_POST['password'];
        $query = "select * from login where email = '$email'";
        $result = mysqli_query($con, $query);
        $user = mysqli_fetch_array($result, MYSQLI_ASSOC);
        if($user){
            if($user["password"]==$password){
                header("location: landingpg.html");
            }else{
                echo "error";
                $error = "Invalid email and Password";
            }
        }
        else{
            $error = "User doesn't exist";
        }
    }
?>
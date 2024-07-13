<?php
    $error = null;
    $con = mysqli_connect("localhost", "root", "", "tripmitra");
    if(!$con){
        die("Failed!!".mysqli_error($con));
    }
    if(isset($_POST['submit'])){
        $username = $_POST['Username'];
        $email=$_POST['email'];
        $password=$_POST['password'];
        $query = "select * from login where email = '$email'";
        $result = mysqli_query($con, $query);
        $user = mysqli_fetch_array($result, MYSQLI_ASSOC);
        if($user["userName"] == $username){
            $error = "Username already in use";
            return;

        } else if($user["email"] == $email){
            $error = "Email already in use";
        }
        else if(mysqli_query($con, "insert into login(userName,email, password) values('$username', '$email', '$password')")){
            header("location: landingpg.html");
        }
        else{
            echo "failed";
        }
        mysqli.close($con);
    }
?>
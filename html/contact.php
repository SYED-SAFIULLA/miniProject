<?php
    $con = mysqli_connect("localhost", "root", "", "tripmitra");
    if(!$con){
        die("Failed!!".mysqli_error($con));
    }
    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $mobileNo = $_POST['mobileNo'];
        $email = $_POST['email'];
        $feedback = $_POST['feedback'];

        $query = "insert into contact(name, mobileNo, email, feedback) values('$name', '$mobileNo', '$email', '$feedback')";
        if(mysqli_query($con, $query)){
            header("location: landingpg.html");
        }else{
            echo "Failed";
        }
    }
?>
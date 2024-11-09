<?php
include 'connector.php';
if(isset($_POST['signup'])){
    $Name=$_POST['Name'];
    $UserName=$_POST['UserName'];
    $Email=$_POST['Email'];
    $password=$_POST['password'];
    $password=md5($password);
    $checkEmail="SELECT * from con where Email='$Email'";
    $result=$conn->query($checkEmail);
    if($result->num_rows>0){
        echo "Email Address Already Exists!",$Email;
    }
    else{
        $inserQuery="INSERT INTO con(Name,UserName,Email,password)
        VALUES('$Name','$UserName','$Email','$password')";
        if($conn->query($inserQuery)==TRUE){
            header("Location:homepage.php");
        }
        else{
            echo "Error".$conn->error;
        }
    }
}
if(isset($_POST['login'])){
    $Email=$_POST['Email'];
    $password=$_POST['password'];
    $password=md5($password);
    $sql = "SELECT * from con where Email='$Email' and password='$password'";
    $result=$conn->query($sql);
    if($result->num_rows==0){
        echo"Not Found ,Incorrect Email and Password";
    }
    else{
        session_start();
        $row=$result->fetch_assoc();
        $_SESSION['Email']=$row['Email'];
        header('Location:homepage.php');
    }
}
?>
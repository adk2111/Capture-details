<?php 
session_start();
$adminname = "abcd";
$adminpass = "2345";
if (isset($_POST['submit'])) { 
    $username = $_POST['username'];
    $password = $_POST['password'];
    if ($username == $adminname and $password == $adminpass){
        session_start();
        $_SESSION['username'] = $adminname;
        $_SESSION['password'] = $adminpass;
        header("location: form2.php");
    }else{
        echo "Username or password is incorrect";
    }
} else {
    header("location: form.php");
}

?> 
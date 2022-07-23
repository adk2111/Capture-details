<?php 
session_start();    // starting the session
$name = $_SESSION['name'];
$age = $_SESSION['age'];
$profession = $_SESSION['Profession'];
if (isset($_POST['submit'])) { 
}
echo "Name entered: ". $name . ".<br/>";
echo "Age entered: ". $age. ".<br/>";
echo "Profession entered:". $profession. ".<br/>";
?> 


<?php
 if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $age = $_POST['age'];
    $profession = $_POST['Profession'];
}
    function sanitize($string) {
    $string = str_replace(' ', '-', $string); 
    return preg_replace('/[^A-Za-z0-9\-]/', '', $string); 
    }
 echo "Your name is ". sanitize($name). ".<br/>";
 echo "Your age is ". $age. ".<br/>";
 echo "You work as a ". sanitize($profession). ".<br/>";
?>
    
<?php
session_start();
$_SESSION['name']=$_POST['name'];
$_SESSION['age']=$_POST['age'];
$_SESSION['Profession']=$_POST['Profession'];
?>

<html>
    <head>
        <title>Response</title>
    </head>
    <body>
            <form action = "validate.php" method = "post">
            <h4>Admin Page</h4>
            <label>Username:</label><input type = "text" name = "username"  >
            <label>Password:</label><input type = "password" name = "password" >
            <button type = "submit" name = "submit"> SUBMIT </button>
            </form>
    </body>
</html>
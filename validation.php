<?php
session_start();

$con = mysqli_connect('localhost','root');
mysqli_select_db($con,'registerdb');
$usernameVar = $_POST['usernamelogform'] ;
$emailVar = $_POST['emaillogform'];
$passwordVar = $_POST['passwordlogform'];

$query = "select * from registertable where username = '$usernameVar' && email = '$emailVar'  && password = '$passwordVar' ";
$result = mysqli_query($con,$query);
$num = mysqli_num_rows($result);

if($num == 1)
{
    $_SESSION['usernamePass'] = $usernameVar;
    // $_SESSION['emailPass'] = $emailVar;
    header('location:home.php');
    // header('location:comment.php');
    // echo "Seccessfully";
}
else{
    header('location:index.php');
    // echo "Sorry!";
}


?>
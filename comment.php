<?php
session_start();
$a =$_SESSION ['usernamePass'];
$con =mysqli_connect("localhost",'root' );
mysqli_select_db($con,'registerdb');    

$comment = $_POST['commentarea'];

$q = "select * from registertable where username = '$a'";
$result = mysqli_query($con,$q);
$num = mysqli_num_rows($result);
if($num == 1)
{
    $insert = "insert into commentbox(comments , username) values ('$comment','$a')";
    mysqli_query($con , $insert);
    $_SESSION['commentspass'] = $comment;
    $_SESSION[$a];
    header('location:home.php');
}
else{
    echo"Sorry!";
}



?>
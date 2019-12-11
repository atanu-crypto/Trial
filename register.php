<?php

session_start();
// header('location:register.php');

// $servername = "localhost";
// $username = "root";
// $password = "";
// $database = "registerdb";


// $con = mysqli_connect($servername, $username, $password, $database);
# Checking Connetion
/*
if(!$con){
    echo"Sorry";
}
else{
    echo"Yes";
}
*/

$con = mysqli_connect("localhost" ,'root');
mysqli_select_db($con, 'registerdb');

$usernamevar = $_POST['usernameform'];
$emailvar = $_POST['emailform'];
$passwordvar = $_POST['passwordform'];

$query = "Select * from registertable where username = '$usernamevar'";
$result = mysqli_query($con, $query);
$num = mysqli_num_rows($result);

if($num == 1)
{
    echo "Username Already Register ";
}
else
{
    $insert = "insert into registertable(username, email, password) values ('$usernamevar' , '$emailvar' , '$passwordvar')";
    mysqli_query($con , $insert);
    // echo "Register Successfully Complete";
    header('location:index.php');
}


?>
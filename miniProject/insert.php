<?php
session_start();
header('location:login.html');
$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];
if (!empty($username) || !empty($password) || !empty($email))  {
    $con = mysqli_connect('localhost', 'root');
    // if ($con){
    //     echo "connected";
    // }else{
    //     echo "not connected";
    // }
    $db = 'pesu';
    mysqli_select_db($con, $db);
    $q = " SELECT * from signup where username = '$username' && password = '$password' ";
    $result = mysqli_query($con, $q);
    $num = mysqli_num_rows($result);

    if($num){
        echo "THE USERNAME AND PASSWORD ARE ALREADY REGISTERED YOU CAN PROCEED WITH LOGIN";
        echo "<a href = 'login.html'> click here to go to login page</a>";
    }else{
        $qy = "insert into signup(username, password, email) values ('$username', '$password', '$email')";
        mysqli_query($con, $qy);
    }
}
?>
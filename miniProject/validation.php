<?php
session_start();
// header('location:login.html');
$username = $_POST['username'];
$password = $_POST['password'];
// $email = $_POST['email'];
if (!empty($username) || !empty($password))  {
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
        $_SESSION['username'] = $username;
        $_SESSION["logged"] = true;
        
        header('location:myProject.php');
        echo " hello ";
        
    }else{
        $_SESSION["logged"] = true;
        echo "THE USERNAME AND PASSWORD ARE NOT REGISTERED PLEASE SIGN UP!!";
        echo "<a href = 'signUp.html'> click here to go to signup page</a>";
    }
}
?>
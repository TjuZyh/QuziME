
<?php
include("util.inc.php");
session_start();

$name = $_POST['name'];
$password = $_POST['password'];
echo $name;
echo $password;

$passwordcorrect = false;
$user = GetUserInfo($name)->fetch();
$encryption = $user["password"];
$uid = $user["userid"];

if ($encryption == null){
    echo "<script>alert('wrong username')</script>";
}
elseif (password_verify($password,$encryption)){
    $_SESSION['user'] = $name;
    $_SESSION['uid'] = $uid;
    $passwordcorrect = true;
    echo "<script>alert('welcome back')</script>";
}
else{
    echo "<script>alert('wrong password')</script>";
    session_unset();
    session_destroy();
    session_regenerate_id(TRUE);
}


if ($passwordcorrect){
    header("Location: index.html");
}
else{
    header("Location: login.php");
}


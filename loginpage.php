<?php
session_start();
include ('db_connection.php');
$error_msg = '';
if(isset($_POST['login'])){
    $email = $_POST['user_email'];
    $pass = $_POST['user_pass'];
    $sel_user = "select * from admins where user_email='$email' AND user_pass='$pass'";
    $run_user = mysqli_query($con, $sel_user);
    $check_user = mysqli_num_rows($run_user);
    if($check_user==0){
        $error_msg = 'Password or Email is wrong, try again';
    }
    else{
        $_SESSION['user_email'] = $email;
        if(!empty($_POST['remember'])) {
            setcookie('user_email', $email, time() + (10 * 365 * 24 * 60 * 60));
            setcookie('user_pass', $pass, time() + (10 * 365 * 24 * 60 * 60));
        } else {
            setcookie('user_email','' );
            setcookie('user_pass', '');
        }
        header('location:index.php?logged_in=successfully logged in!');
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="css/style1.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/stylelog.css">
</head>
<body>


<?php require "Header.php ";
?>
<div class="loginbox" style="margin-top: 140px">
    <img src="av1.jpg" class="avatar">
    <h1> Login </h1>
    <form>
        <p>Username</p>
        <input type="text" name="user_email" placeholder="Enter Username" required pattern="^\D([a-z]|[A-Z]){2,}\d*?" value="<?php echo @$_COOKIE['user_email']?>">
        <p>Passsword</p>
        <input type="password" name="user_pass" placeholder="Enter Password" required pattern="^(([A-Z]+)[a-z]{3,})\d+[a-z]*?[A-Z]*?" value="<?php echo @$_COOKIE['user_pass']?>">
        <input type="submit" name="login" value="login">
        <a href="ForgotLink">Forgot Password?</a><br>
        <a href="registerpage.php">Create a new account</a>
    </form>
</div>


</body>

</html>

<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>

    <link rel="stylesheet" href="style/login.css">
    
</head>
<body>
    
    <div class="container">
    <div class="l-form">
            <form action="admin_login.php" method="post" class="form">
                <h1 class="form__title">Admin Login</h1>

                <div class="form__div">
                    <input type="username" name="email" class="form__input" id="email">
                    <label for="email" class="form__label">Username</label>
                </div>

                <div class="form__div">
                    <input type="password" name="password" class="form__input" id="pwb">
                    <label for="pwb" class="form__label">Password</label>
                </div>

                <input type="submit" name="submit" class="form__button" value="Sign In">
    </div>



</body>
</html>

<?php
include('db/connection.php');

if (isset($_POST['submit'])){
$email=$_POST['email'];
$password=$_POST['password'];

$query=mysqli_query($conn, "select * from admin_login where name='$email' AND password='$password' ");

if ($query) {
    if (mysqli_num_rows($query)>0) {
        $_SESSION['email']=$email;

        header('location:home.php');
    }else{
        echo "<script> alert('Vui lòng kiểm tra lại tài khoản, mật khấu')</script>";

    }
}



}

?>


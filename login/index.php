<?php 
session_start();

if(isset($_SESSION["login"])) {
    header("location: ../backend/index.php");
    exit();
}


$_SESSION['justLoggedin'] = true;
?>
 
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
 
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="shortcut icon" href="img/icon-48x48.png" type="image/x-icon">
 
    <title>Login</title>
</head>
<!-- biar kalo mau ke index harus login dulu -->
<?php 
if (isset($_SESSION['eror'])) {
    ?>
    <div class="alert alert-danger" role="alert">
        <?php echo $_SESSION['eror'] ?>
    </div>
    <?php
}

?>
<body>
    
    <div class="container">
        <form action="proses_login.php" method="POST" class="login-email">
            <p class="login-text" style="font-size: 2rem; font-weight: 800;">Login</p>
            <div class="input-group">
                <input type="email" placeholder="Email" name="email"  required>
            </div>
            <div class="input-group">
                <input type="password" placeholder="Password" name="password"  required>
            </div>
            <div class="input-group">
                <button type="submit" name="submit" class="btn">Login</button>
            </div>
            <!-- <p class="login-register-text">Kalian belum punya akun? <a href="register.php">Register</a></p> -->
            
        </form>
    </div>
</body>
</html>

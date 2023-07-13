
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../login system/css/style.css">
</head>
<style>
    .login {
        color: #ff7200;
    }
</style>

<body>
    <?php include("includes/navbar.php") ?>
    <br><br><br>

    <!-- <form class="form" method="post" action="login" onsubmit="return validateform()">
        <h2>Login Here</h2>
        <div class="inp">
            <label for="uname"></label>
            <input type="email" name="email" placeholder="Enter email" required>

            <label for="password"></label>
            <input type="password" placeholder="Enter Password" name="password" required>
        </div>


        <button type="submit" name="login" class="lg" id="lgb">Login</button>


        <p class="link">Don't have an account ?<br>
            <a href="signup">Sign up </a> here</a>
        </p>
        <p class="liw" s>Log in with</p>

        <div class="icons">
            <a href="#">
                <ion-icon name="logo-facebook"></ion-icon>
            </a>
            <a href="#">
                <ion-icon name="logo-instagram"></ion-icon>
            </a>
            <a href="#">
                <ion-icon name="logo-twitter"></ion-icon>
            </a>
            <a href="#">
                <ion-icon name="logo-google"></ion-icon>
            </a>
            <a href="#">
                <ion-icon name="logo-skype"></ion-icon>
            </a>
    </form>
    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script> -->
    <div class="form-container">

<form action="" method="post">
   <h3>login now</h3>
   <?php
   if(isset($error)){
      foreach($error as $error){
         echo '<span class="error-msg">'.$error.'</span>';
      };
   };
   ?>
   <input type="email" name="email" required placeholder="enter your email">
   <input type="password" name="password" required placeholder="enter your password">
   <input type="submit" name="submit" value="login now" class="form-btn">
   <p>Don't have an account? <a href="./signup.php">Register now</a></p>
</form>

</div>
</body>
<script>


</script>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Signup</title>
  <link rel="stylesheet" href="../login system/css/style.css">
</head>

<body>
  <?php include("includes/navbar.php") ?>
  <div class="form-container">

   <form action="" method="post">
      <h3>register now</h3>
      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
      <input type="text" name="name" required placeholder="enter your name">
      <input type="email" name="email" required placeholder="enter your email">
      <input type="password" name="password" required placeholder="enter your password">
      <input type="password" name="cpassword" required placeholder="confirm your password">
      <select name="user_type">
         <option value="user">user</option>
         <option value="admin">admin</option>
      </select>
      <input type="submit" name="submit" value="register now" class="form-btn">
      <p>Already have an account? <a href="./login.php">Login now</a></p>
   </form>

</div>
  <!-- <form name="myForm" action="signup" method="post">
            <h2>SIGNUP</h2>
            <div class="formdesign" id="name">
              <input type="text" name="name" placeholder="Enter your Full name ">
              <span class="formerror"></span>
            </div>
            <div class="formdesign" id="email">
              <input type="email" name="email" placeholder="Enter your email address">
              <span class="formerror"></span>
            </div>
            <div class="formdesign" id="phnum">
              <input type="number" name="mobile" placeholder="Enter your mobile number">
              <span class="formerror"></span>
            </div>
            <div class="formdesign" id="pswd">
              <input type="password" name="password" placeholder="Type password">
              <span class="formerror"></span>
            </div>
            <div class="formdesign" id="rpswd">
              <input type="password" name="cpassword" placeholder="Re-type password">
              <span class="formerror"></span>
            </div>
            <div class="formdesign" id="usertype">
              <select name="userType">
                <option value="user">User</option>
                <option value="owner">Owner</option>
              </select>
              <span class="formerror"></span>
            </div>
            <button type="submit" name="submit" class="btnn" id="btnn1" value="submit">Create</button>
            <button type="reset" class="btnn" id="btnn2" value="reset">Reset</button>
    <?php
    include("includes/dbconnection.php");
    if (isset($_POST['submit'])) {

      $name = mysqli_real_escape_string($con, $_POST["name"]);
      $email = mysqli_real_escape_string($con, $_POST["email"]);
      $mobile = mysqli_real_escape_string($con, $_POST["mobile"]);
      $password = mysqli_real_escape_string($con, $_POST["password"]);
      $cpassword = mysqli_real_escape_string($con, $_POST["cpassword"]);

      if (strlen($name < 3)) {
        echo "<span style='margin:5px;color:red;display:block;padding:8px;background:white;border-radius:8px;'>Full Name must be atleast 3 character.</span>";
        return;
      } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "<span style='margin:5px;color:red;display:block;padding:8px;background:white;border-radius:8px;'>Please enter valid email.</span>";
        return;
      } else if ($mobile < 0 || strlen($mobile) > 10) {
        echo "<span style='margin:5px;color:red;display:block;padding:8px;background:white;border-radius:8px;'>Mobile Number must be atleast 10 digits.</span>";
        return;
      } else if (strlen($password) < 8) {
        echo "<span style='margin:5px;color:red;display:block;padding:8px;background:white;border-radius:8px;'>Password must be atleast 8 characters.</span>";
        return;
      } else if ($password != $cpassword) {
        echo "<span style='margin:5px;color:red;display:block;padding:8px;background:white;border-radius:8px;'>Re-type Password must be same.</span>";
        return;
      } else {
        if (mysqli_num_rows($con->query("SELECT * from footsal.users WHERE email='$email'")) != 0) {
          echo "<span style='margin:5px;color:red;display:block;padding:8px;background:white;border-radius:8px;'>This email already exists please login.</span>";
          return;
        }
        $password = md5($password);
        if ($con->query("INSERT INTO footsal.users (`name`,`email`,`mobile`,`password`) VALUES('$name','$email','$mobile','$password')")) {
          echo "<span style='margin:5px;color:green;display:block;padding:8px;background:white;border-radius:8px;'>Signup Successful.</span>";
        } else {
          echo "<span style='margin:5px;color:red;display:block;padding:8px;background:white;border-radius:8px;'>Failed to Signup.</span>";

        }
      }


    }

    ?>

  </form> -->


</body>
<script>


</script>

</html>
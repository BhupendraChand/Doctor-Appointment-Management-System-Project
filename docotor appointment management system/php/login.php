<?php

session_start();


?>


<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="stylesheet" href="login.css">
  

  <title>Login</title>
</head>

<body>


  <?php
include "connect.php";
  

  if (isset($_POST['login_btn'])) {

    $email = $_POST['email'];
    $password = $_POST['password'];

    $email_search = "select * from registration where email = '$email' AND password = '$password' ";
    $query = mysqli_query($con, $email_search);

    $email_count = mysqli_num_rows($query);

    if($email_count){
      $email_pass = mysqli_fetch_assoc($query);
  
      $db_pass = $email_pass['password'];
  
      $_SESSION['username'] = $email_pass['username'];
      if($db_pass){
     
        ?>
        <script>
          alert("Login successful");
          location.replace("admin.php");//to redirect to admin page after login successful
        </script>
       
         
      <?php
      }else{
        // echo "Password incorrect";
        ?>
        <script>
          alert("Password incorrect");
        </script>
        <?php
      }
      }else{
        // echo "Invalid email";
        ?>
        <script>
        alert("Invalid email");
      </script>
      <?php
      
      }
      }
      ?>




  <div class="wrapper">
    <h2>Login</h2>
    <form id="form1" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post">

      <div class="input-box">
        <label for="email" class="details">Email</label>
        <input type="email" id="txtEmail" class="form-control" placeholder="Enter your email" name="email">
        <span class="formerror hide" id="email"> Email field is required</span>
      </div>
      <div class="input-box">
        <label for="password" class="details">Password</label>
        <input type="password" id="txtPassword" class="form-control" placeholder="Enter your password" name="password">
        <span class="formerror hide" id="password">Password is required </span>
      </div>


      <div class="input-box button">
        <button type="submit" name="login_btn" class="btn btn-primary">Login</button>
      </div>

    </form>

    <div class="login-signup">
      <label for="link" class="text">Not registered?
        <a href="register.php" class="text signup-link">Signup now</a>
      </label>
    </div>
  </div>
</body>

</html>
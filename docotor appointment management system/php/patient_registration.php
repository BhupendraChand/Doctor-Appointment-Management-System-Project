<!DOCTYPE html>

<head>
  <link rel="stylesheet" href="patient_registration.css">
  <script defer src="register.js"></script>
  <script defer src="patient_dob_valid.js"></script>

  <title>Registration</title>
</head>

<body>
  <?php
  include 'connect.php';
 if(isset($_POST['submit'])){
   $username = mysqli_real_escape_string($con, $_POST['userName']);
   $email = mysqli_real_escape_string($con, $_POST['email']);
   $password = mysqli_real_escape_string($con, $_POST['password']);
   $repassword = mysqli_real_escape_string($con, $_POST['rePassword']);
   $phone = mysqli_real_escape_string($con, $_POST['phone']);
   $address = mysqli_real_escape_string($con, $_POST['address']);
   $dateOfBirth = mysqli_real_escape_string($con, $_POST['dateOfBirth']);
   $gender = mysqli_real_escape_string($con, $_POST['gender']);

$emailquery = "select * from patient where email='$email' ";
$query = mysqli_query($con,$emailquery);

$emailcount =mysqli_num_rows($query);
if($emailcount>0){ 
  ?>
  <script>
    alert("Email already exists");
  </script>
  <?php
}else{
  if($password === $repassword){
    
    $insertquery = "INSERT INTO `patient`(`username`,`email`,`password`,`phone`,`address`,`dateOfBirth`,`gender`)
    VALUES('$username','$email','$password','$phone','$address','$dateOfBirth','$gender')";
  
    $iquery = mysqli_query($con, $insertquery);
    if($iquery){
      ?>
      <script>
          alert("Registered successfully");
         location.replace("patient.php");
      </script>
      <?php
  }else{
      ?>
      <script>
      alert("Registration failed");
      </script>
      <?php
  }
  }else{
    ?>
    <script>
      alert("Password are not matching");
    </script>
  <?php
  }
}



 }
  ?>
  <div class="container">
    <div class="title"> Patient Registration</div>
    <div class="content">
      <form id="form1" action="" method="post">
        
        <div class="user-details">
          <div class="input-box">
            <label for="userName" class="details">Username</label>
            <input type="text" id="txtUserName" class="form-control" placeholder="Enter your username" name="userName">
            <span class="formerror hide" id="userName">User name is required</span>
          </div>
          <div class="input-box">
            <label for="email" class="details">Email</label>
            <input type="email" id="txtEmail" class="form-control" placeholder="Enter your email" name="email" >
            <span class="formerror hide" id="email"> Email field is required</span> 
        </div>

          <div class="input-box">
            <label for="password" class="details">Password</label>
            <input type="password" id="txtPassword" class="form-control" placeholder="Enter your password" name="password">
            <span class="formerror hide" id="password">Password is required </span>
        </div>
          <div class="input-box">
            <label for="RePassword"class="details">Confirm Password</label>
            <input type="password" id="txtRePassword" class="form-control" placeholder="Confirm your password" name="rePassword">
            <span class="formerror hide" id="conPassword">Confirm Password is required </span>  
        </div>
          <div class="input-box">
            <label for="phone" class="details">Phone Number</label>
            <input type="text" id="txtPhone" class="form-control" placeholder="Enter your phone number" name="phone" >
            <span class="formerror hide" id="phone">Phone number is required </span> 
        </div>
        
        <div class="input-box">
            <label for="address" class="details">Address</label>
            <input type="text" id="txtAddress" class="form-control" placeholder="Enter your address" name="address">
            <span class="formerror hide" id="address"> Address field is required</span>  
        </div>
       
          <div class="input-box">
            <label for="dateOfBirth" class="details">Date of birth</label>
            <input type="date" id="txtDateOfBirth" class="form-control" placeholder="mm / dd / yyyy" name="dateOfBirth">
            <span class="formerror hide" id="dateOfBirth"> Birth date field is required</span>
        </div>

  <div class="radio-container">
<br><label for="gender" class="gender" id="gender">Gender:</label>
 <label >Male<input type="radio"  name="gender" value="male" required></label>
<label >Female<input type="radio"  name="gender" value="female" required></label>
<label >Other<input type="radio"  name="gender" value="other" required></label>
</div>
        </div>
        <div class="input-box button">
          <button type="submit" class="btn btn-primary" name="submit">Sign up</button>
        </div>
        <div class="login-signup">
          <label for="link" class="text">Already registered?
            <a href="patient.php" class="text signup-link">Login</a>
          </label>
        </div>
      
      
    
    </div>
  </form>
  </div>

</body>

</html>
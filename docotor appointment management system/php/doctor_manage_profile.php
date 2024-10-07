<?php

session_start();

if(!isset($_SESSION['username'])){
    echo "You are logged out";
    header('location:doctor.php');
}
?>

<!DOCTYPE html>

<head>
  <link rel="stylesheet" href="register.css">
  <!-- <script defer src="doctor_update_profile.js"></script> -->
  <title>Update</title>
</head>

<body>

  <div class="container">
    <div class="title">Update Profile
       <!-- <div class="profile-details"> -->
   (<?php echo  $_SESSION['username']; ?>)
   <!-- <i class='bx bx-chevron-down' ></i> -->
 <!-- </div> -->
      
  
    </div>
    <div class="content">
      <form id="form1" action="" method="post">

        <div class="user-details">
        <?php

include 'connect.php';


$id = $_GET['id'];

$selectquery = "select * from doctor where id = $id ";

$query = mysqli_query($con, $selectquery);

$result = mysqli_fetch_assoc($query);


if (isset($_POST['submit'])) {
  
  $id = $_GET['id']; 
  // $doctorname = mysqli_real_escape_string($con, $_POST['userName']);
  $email = mysqli_real_escape_string($con, $_POST['email']);
  $password = mysqli_real_escape_string($con, $_POST['password']);
  $phone = mysqli_real_escape_string($con, $_POST['phone']);
  $address = mysqli_real_escape_string($con, $_POST['address']);
  // $degree = mysqli_real_escape_string($con, $_POST['degree']);
  // $speciality = mysqli_real_escape_string($con, $_POST['speciality']);
  // $dateOfBirth = mysqli_real_escape_string($con, $_POST['dateOfBirth']);
 

  // if ($query = mysqli_query($con, " update doctor set doctorname='$doctorname', email='$email', password='$password', phone='$phone', address='$address', degree='$degree', specialist='$speciality', dateOfBirth='$dateOfBirth' where id = $id")) {
    if ($query = mysqli_query($con, " update doctor set  email='$email', password='$password', phone='$phone', address='$address' where id = $id")) {
?>
    <script>
      alert("updated successfull");
      location.replace("doctorDashboard.php");
    </script>
  <?php
  } else {
  ?>
    <script>
      alert("Not updated");
    </script>
<?php
  }
}
?>




          <!-- <div class="input-box">
            <label for="userName" class="details">Username</label>
            <input type="text" id="txtUserName" class="form-control" placeholder="Enter your username" name="userName" value="<?php echo $result['doctorname']; ?>" disabled>
            <span class="formerror hide" id="userName">User name is required</span>
          </div> -->
          <div class="input-box">
            <label for="email" class="details">Email</label>
            <input type="email" id="txtEmail" class="form-control" placeholder="Enter your email" name="email" value="<?php echo $result['email']; ?>" required>
            <span class="formerror hide" id="email"> Email field is required</span>
          </div>

          <div class="input-box">
            <label for="password" class="details">Password</label>
            <input type="password" id="txtPassword" class="form-control" placeholder="Enter your password" name="password"  value="<?php echo $result['password']; ?>" required>
            <span class="formerror hide" id="password">Password is required </span>
          </div>
    
          <div class="input-box">
            <label for="phone" class="details">Phone Number</label>
            <input type="number" id="txtPhone" class="form-control" placeholder="Enter your phone number" name="phone"  value="<?php echo $result['phone']; ?>" required>
            <span class="formerror hide" id="phone">Phone number is required </span>
          </div>
          <div class="input-box">
            <label for="address" class="details">Address</label>
            <input type="text" id="txtAddress" class="form-control" placeholder="Enter your address" name="address"  value="<?php echo $result['address']; ?>" required>
            <span class="formerror hide" id="address"> Address field is required</span>
          </div>
          <!-- <div class="input-box">
            <label for="degree" class="details">Degree</label>
            <input type="text" id="txtDegree" class="form-control" placeholder="Enter your degree" name="degree"  value="<?php echo $result['degree']; ?>" disabled>
            <span class="formerror hide" id="degree"> Degree field is required</span>  
        </div>
        <div class="input-box">
            <label for="speciality" class="details">Specialist</label>
            <input type="text" id="txtSpecialist" class="form-control" placeholder="Enter your speciality" name="speciality"  value="<?php echo $result['specialist']; ?>" disabled>
            <span class="formerror hide" id="speciality"> Specialist field is required</span>  
        </div>
          <div class="input-box">
            <label for="dateOfBirth" class="details">Date of birth</label>
            <input type="date" id="txtDateOfBirth" class="form-control" placeholder="mm / dd / yyyy" name="dateOfBirth"  value="<?php echo $result['dateOfBirth']; ?>" disabled>
            <span class="formerror hide" id="dateOfBirth"> Birth date field is required</span>
          </div> -->

  
        </div>
        <div class="input-box button">
          <button type="submit" class="btn btn-primary" name="submit">Update</button>
        </div>
      
    </div>
    </form>
  </div>

</body>

</html>
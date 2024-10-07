<?php

session_start();

if(!isset($_SESSION['username'])){
    echo "You are logged out";
    header('location:doctor.php');
}
?>

<!DOCTYPE html>

<head>
  <link rel="stylesheet" href="register_doc.css">
  <!-- <script defer src="update_doctor.js"></script> -->

  <script defer src="doc_schedule_time.js"></script>
  
  <title>Doctor Schedule</title>
 
</head>

<body>

  <div class="container">
    <div class="title">Create Schedule
       (<?php echo  $_SESSION['username']; ?>)
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
  $docid = mysqli_real_escape_string($con, $_POST['id']);

  // $doctorid = mysqli_real_escape_string($con, $_POST['userId']);
  $doctorname = mysqli_real_escape_string($con, $_POST['userName']);
  $gender = mysqli_real_escape_string($con, $_POST['gender']);
  $specialist = mysqli_real_escape_string($con, $_POST['speciality']);
  $date = mysqli_real_escape_string($con, $_POST['date']);
  $time = mysqli_real_escape_string($con, $_POST['time']);
  $price = mysqli_real_escape_string($con, $_POST['price']);
  $token = mysqli_real_escape_string($con, $_POST['token']);
  // $bookavail         = mysqli_real_escape_string($con, $_POST['bookavail']);
 
  // $insertquery = "INSERT INTO `doctor_schedule`(`d_id`,`doctorname`,`gender`,`specialist`,`appointmentdate`,`appointmenttime`,`appointmentprice`)
  // VALUES('$docid','$doctorname','$gender','$specialist','$date','$time','$price')";
  // $result = mysqli_query($con, $insertquery);


//one schedule only allow
$sql = "select * from doctor_schedule where doctorname='$doctorname' ";
$query = mysqli_query($con,$sql);

$sqlCount =mysqli_num_rows($query);
if($sqlCount>0){ 
  ?>
  <script>
    alert("Opps, your schedule already exists");
  </script>
  <?php
}
else{
  $valid = "select * from doctor where id = '$docid' AND doctorname = '$doctorname' AND gender = '$gender' AND specialist = '$specialist' ";

  $query = mysqli_query($con, $valid);

 $valid_count = mysqli_num_rows($query);
  if($valid_count){
    $valid_pass = mysqli_fetch_assoc($query);

    // $db_pass = $valid_pass(['id'] , ['doctorname'] , ['gender'], ['specialist']);
    // $db_pass = $valid_pass['id'];['doctorname'];['gender'];['specialist'];['appointmentdate'];['appointmenttime'];['appointmentprice'];

    $db_pass = $valid_pass['id'];
    $_SESSION['doctorname'] = $valid_pass['doctorname'];
    
    if($db_pass){

      $insertquery = "INSERT INTO `doctor_schedule`(`d_id`,`doctorname`,`gender`,`specialist`,`appointmentdate`,`appointmenttime`,`appointmentprice`,`token`)
VALUES('$docid','$doctorname','$gender','$specialist','$date','$time','$price','$token')";
$iquery = mysqli_query($con, $insertquery);

?>
<script>
  // alert("Login successful");
  alert("Schedule created");
  location.replace("doctorDashboard.php");//to redirect to patient page after login successful
</script>

 
<?php
}else{
// echo "Password incorrect";
?>
<script>
  alert("Invalid credentials");
</script>
<?php
}
}else{
// echo "Invalid email";
?>
<script>
alert("Schedule not created");
</script>
<?php

}
}
}
?>







        <div class="input-box">
            <label for="doctor id" class="details">Doctor id</label>
            <input type="number" id="txtDoctorId" class="form-control" placeholder="Enter your id" name="id" value="<?php echo $result['id']; ?>" >
            
          </div>



          <div class="input-box">
            <label for="userName" class="details">Doctor name</label>
            <input type="text" id="txtUserName" class="form-control" placeholder="Enter your username" name="userName" value="<?php echo $result['doctorname']; ?>">
            <span class="formerror hide" id="userName">User name is required</span>
          </div>
         
          <div class="input-box">
            <label for="gender" class="details">Gender</label>
            <input type="text" id="txtGender" class="form-control" placeholder="Select your gender" name="gender" value="<?php echo $result['gender']; ?>">
          
          </div>
         
         
        <div class="input-box">
            <label for="speciality" class="details">Specialist</label>
            <input type="text" id="txtSpecialist" class="form-control" placeholder="Enter your speciality" name="speciality"  value="<?php echo $result['specialist']; ?>">
             
        </div>
        
     
        <div class="input-box">
            <label for="date" class="details">Apppointment Date</label>
            <input type="date" id="txtDate" class="form-control" placeholder="Enter appointment date" name="date"  required>
             
        </div>
  
        <div class="input-box">
            <label for="time" class="details">Apppointment Time</label>
            <input type="time" id="txtTime" class="form-control" placeholder="Enter appointment time" name="time" required>
    
        </div>

        <div class="input-box">
            <label for="price" class="details">Apppointment Price</label>
            <input type="text" id="txtPrice" class="form-control" placeholder="Enter your appointment price" name="price" required>
           
        </div>
        <div class="input-box">
            <label for="token" class="details">Apppointment Token</label>
            <input type="number" id="txtToken" class="form-control" placeholder="Enter appointment token" name="token" required>
           
        </div>
        <!-- <div class="input-box">
            <label for="appointment booking" class="details">Appointment</label>
            <select id="bookavail" name="bookavail" class="form-control" required >
              <option value="available">Available</option>
              <option value="notavail">Not available</option>
             
            </select>
          
          </div> -->

        </div>
        <div class="input-box button">
          <button type="submit" class="btn btn-primary" name="submit">Create schedule</button>
        </div>
      
    </div>
    </form>
  </div>

</body>

</html>
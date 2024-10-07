<?php

// include "connect.php";

if (!isset($_SESSION)) {
    session_start();
}
?>  


<!-- result -->
<?php
$id = isset($_GET['id']) ? $_GET['id'] : "";

?>
<!-- fetching doctor info -->


<!-- new -->

<?php

include "connect.php";
$selectquery = "SELECT * FROM doctor_schedule WHERE d_id = $id ";

$query = mysqli_query($con,$selectquery );


while($result = mysqli_fetch_assoc($query)){

$id  = $result["d_id"];
        $scheduleid = $result["schedule_id"];
        $doctorname     = $result["doctorname"];
        $specialist = $result["specialist"];
        $date     = $result["appointmentdate"];
        $time     = $result["appointmenttime"];
        $price = $result["appointmentprice"];
         $d_id = $result["d_id"];
        $token = $result['token'];
        //  $valid = "select * from doctor_schedule where d_id = '$d_id' AND doctorname = '$doctorname'  AND specialist = '$specialist' AND appointmentdate = '$date' AND appointmenttime = '$time' AND appointmentprice = '$price' ";

        //  $query = mysqli_query($con, $valid);
    
        // $valid_count = mysqli_num_rows($query);

    }
    ?>
<!DOCTYPE html>

<head>
  <link rel="stylesheet" href="register.css">
  <!-- <script defer src="patient_update_profile.js"></script> -->
  <title>Book</title>
  
</head>

<body>

  <div class="container">
    <div class="title">Book Appointment
    (<?php echo  $_SESSION['username']; ?>)
    </div>
    <div class="content">
      <form id="form1" action="" method="post">

        <div class="user-details">   

         
     <div class="input-box">
            <label for="doctorName" class="details">Doctor Name</label>
            <input type="text" id="txtDoctorName" class="form-control" placeholder="Enter your name" name="dname" value="<?php echo $doctorname; ?>" >
            <span class="formerror hide" id="doctorName">Doctor name is required</span>
          </div>
          <div class="input-box">
            <label for="scheduleId" class="details">Schedule ID</label>
            <input type="number" id="txtScheduleId" class="form-control" placeholder="Enter your schedule id" name="scheduleId" value="<?php echo $scheduleid; ?>">
            <span class="formerror hide" id="scheduleId">Schedule ID is required</span>
          </div>
          <div class="input-box">
            <label for="speciality" class="details">Specialist</label>
            <input type="text" id="txtSpecialist" class="form-control" placeholder="Enter your speciality" name="specialist"  value="<?php echo $specialist; ?>" >
            <span class="formerror hide" id="speciality"> Specialist field is required</span>  
        </div>
        <!-- for catching different date of single doctor -->
       
        <div class="input-box">
          
            <label for="date" class="details">Apppointment Date</label>
            <input type="date" id="txtDate" class="form-control" placeholder="Enter appointment date" name="appointmentdate" value="<?php echo $date; ?>" >
             
        </div>

        <div class="input-box">
            <label for="time" class="details">Apppointment Time</label>
            <input type="time" id="txtTime" class="form-control" placeholder="Enter appointment time" name="appointmenttime" value="<?php echo $time; ?>">
    
        </div>
        <div class="input-box">
            <label for="price" class="details">Apppointment Price</label>
            <input type="text" id="txtPrice" class="form-control" placeholder="Enter your appointment price" name="price" value="<?php echo $price; ?>"   >
           
        </div>

        <div class="input-box">
            <label for="token" class="details">Token</label>
            <input type="number" id="txtToken" class="form-control" placeholder="Available token" name="token" value="<?php echo $token; ?>">
            <span class="formerror hide" id="token">Token is required</span>
          </div>  
<?php
            // $id = $_GET['id'];

// $selectquery = "select * from patient where id = $id ";
$currentUser = $_SESSION['username'];

$selectquery = " select * from patient where username = '$currentUser'";

// $selectquery = "select * from patient_registration ";

$query = mysqli_query($con, $selectquery);

$result = mysqli_fetch_assoc($query);


?>
 <div class="input-box">
            <label for="patient id" class="details">Patient id</label>
            <input type="number" id="txtPatientId" class="form-control" placeholder="Enter your id" name="pid" value="<?php echo $result['id']; ?>" >
            
          </div>

          <div class="input-box">
            <label for="userName" class="details">User Name</label>
            <input type="text" id="txtUserName" class="form-control" placeholder="Enter your username" name="pname" value="<?php echo $result['username']; ?>" >
            <span class="formerror hide" id="userName">User name is required</span>
          </div>

          <!-- <div class="input-box">
            <label for="phone" class="details">Phone Number</label>
            <input type="number" id="txtPhone" class="form-control" placeholder="Enter your phone number" name="pcontact" value="<?php echo $result['phone']; ?>">
            <span class="formerror hide" id="phone">Phone number is required </span>
          </div> -->

          

          <div class="input-box">
            <label for="email" class="details">Email</label>
            <input type="email" id="txtEmail" class="form-control" placeholder="Enter your email" name="email" value="<?php echo $result['email']; ?>">
            <span class="formerror hide" id="email"> Email field is required</span>
          </div>

    
         
          <div class="input-box">
            <label for="address" class="details">Address</label>
            <input type="text" id="txtAddress" class="form-control" placeholder="Enter your address" name="address" value="<?php echo $result['address']; ?>">
            <span class="formerror hide" id="address"> Address field is required</span>
          </div>
          <div class="input-box">
          <label for="dateOfBirth" class="details">Date of birth</label>
              <input type="date" id="txtDateOfBirth" class="form-control" placeholder="mm / dd / yyyy" name="dateOfBirth" value="<?php echo $result['dateOfBirth']; ?>" > 
            <span class="formerror hide" id="dateOfBirth"> Birth date field is required</span>
          </div>
          <!-- <div class="input-box">
            <label for="reason" class="details">Reason for appointment</label>
            <input type="text" id="txtReason" class="form-control" placeholder="Enter your reason" name="preason" required>
            <span class="formerror hide" id="reason">Reason  is required</span>
          </div>   -->
         
        <label>
                <input type="hidden" name="d_id" value="<?php echo $d_id; ?>">
            </label><br><br>

        </div>
        <div class="input-box button">
          <button type="submit" class="btn btn-primary" name="submit">Confirm Appointment</button>
        </div>
      
    </div>
    </form>
  </div>

  <!-- 	booking info-->

<!-- confirming booking -->
<?php

include "connect.php";
if (isset($_POST['submit'])) {

  // new 
  // for patient valid
  
  $id = mysqli_real_escape_string($con, $_POST['pid']);
  $username = mysqli_real_escape_string($con, $_POST['pname']);
  $email = mysqli_real_escape_string($con, $_POST['email']);
  // $password = mysqli_real_escape_string($con, $_POST['password']);
  // $phone = mysqli_real_escape_string($con, $_POST['pcontact']);
  $address = mysqli_real_escape_string($con, $_POST['address']);
  $dateOfBirth = mysqli_real_escape_string($con, $_POST['dateOfBirth']);
 
 
  $valid = "select * from patient where id = '$id' AND username = '$username'  AND email = '$email'  AND address = '$address' AND dateOfBirth = '$dateOfBirth' ";

     $query = mysqli_query($con, $valid);

    $valid_count = mysqli_num_rows($query);


    if($valid_count){
      $valid_pass = mysqli_fetch_assoc($query);
  
   
      $db_pass = $valid_pass['id'];
      // $_SESSION['username'] = $valid_pass['username'];

      //for doctor valid
      $scheduleid = mysqli_real_escape_string($con,$_POST['scheduleId']);
      $doctorname = mysqli_real_escape_string($con, $_POST['dname']);
      $specialist = mysqli_real_escape_string($con, $_POST['specialist']);
      $date = mysqli_real_escape_string($con, $_POST['appointmentdate']);
      $time = mysqli_real_escape_string($con, $_POST['appointmenttime']);
      $price = mysqli_real_escape_string($con, $_POST['price']);
      $token = mysqli_real_escape_string($con, $_POST['token']);
      $valid1 = "select * from doctor_schedule where schedule_id ='$scheduleid' AND doctorname = '$doctorname'  AND specialist = '$specialist' AND appointmentdate = '$date' AND appointmenttime = '$time' AND appointmentprice = '$price' AND token = '$token' ";
      // $valid1 = "select * from doctor_schedule where  doctorname = '$doctorname'  AND specialist = '$specialist' AND appointmentdate = '$date' AND appointmenttime = '$time' AND appointmentprice = '$price' AND token = '$token' ";
      // $valid1 = "select * from doctor_schedule where  doctorname = '$doctorname'  AND specialist = '$specialist' AND appointmentdate = '$date' AND appointmenttime = '$time' AND appointmentprice = '$price' ";
     $query1 = mysqli_query($con, $valid1);

    $valid_count1 = mysqli_num_rows($query1);
    if($valid_count1){
      $valid_pass1 = mysqli_fetch_assoc($query1);
      $db_pass1 = $valid_pass1['doctorname'];
      // $_SESSION['doctorname'] = $valid_pass['doctorname'];


      if($db_pass && $db_pass1 ){
         // for once booking allow

         $bookCheck = "select * from appointment where pname = '$username' AND dname ='$doctorname' ";
         $query = mysqli_query($con,$bookCheck);
         
         $bookCount =mysqli_num_rows($query);
         if($bookCount>0){ 
           ?>
           <script>
             alert("You have already booked this appointment");
           </script>
           <?php
         }
         else{
          if($token != 0)
          {
           $qty = mysqli_query($con,"update doctor_schedule set token = token-1 where schedule_id = '$_POST[scheduleId]' ");
       
       
           $selectquery = " INSERT INTO appointment (dname,d_id,schedule_id,specialist,appointmentdate,appointmenttime,price,p_id, pname,email,address,dateOfBirth,token)
       
       VALUES ('" . $_POST["dname"] . "','" . $_POST["d_id"] . "', '" . $_POST["scheduleId"] . "','" . $_POST["specialist"] . "','" . $_POST["appointmentdate"] . "','" . $_POST["appointmenttime"] . "', '" . $_POST["price"] . "','" . $_POST["pid"] . "', '" . $_POST["pname"] . "','" . $_POST["email"] . "','" . $_POST["address"] . "','" . $_POST["dateOfBirth"] . "','" . $_POST["token"] . "')";
       
       $iquery = mysqli_query($con, $selectquery);
       ?>
         
       <script>
         // alert("Login successful");
         alert("Congratulation, Appointment has been booked !!");
       
         location.replace("patientDashboard.php");//this is done because if you keep doctorschedule while going back it will take too much time
       </script>
       <?php
       
          }
          else{
           echo "<script>alert('Opps,token completed for today !!');</script>";
       
          //  this below is for deleting purpose
          
          //  $scheduleDelete = mysqli_query($con," DELETE from doctor_schedule where schedule_id = '$scheduleid' ");
       
           echo "<script> location.replace('patientDashboard.php');</script>";
          }
          
       
             }
       }else{
         // echo "Password incorrect";
         ?>
         <script>
           alert("Invalid credentials");
         </script>
         <?php
       }
       }
       else{
         // echo "Invalid email";
         ?>
         <script>
         alert("Opps!! Appointment not booked");
       </script>
       <?php
       
       }
       }
         }

  
?>

</body>

</html>
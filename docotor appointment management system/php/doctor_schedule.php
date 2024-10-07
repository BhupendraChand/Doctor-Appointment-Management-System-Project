<!DOCTYPE html>

<head>
  <link rel="stylesheet" href="doctor_schedule.css">
  <!-- <script defer src="doctor_register.js"></script> -->
  <title>Create Schedule</title>
</head>

<body>
  <?php

  include 'connect.php';

  if (isset($_POST['submit'])) {
    $doctorid = mysqli_real_escape_string($con, $_POST['userId']);
    $username = mysqli_real_escape_string($con, $_POST['userName']);
    $gender = mysqli_real_escape_string($con, $_POST['gender']);
    $specialist = mysqli_real_escape_string($con, $_POST['speciality']);
    $date = mysqli_real_escape_string($con, $_POST['date']);
    $time = mysqli_real_escape_string($con, $_POST['time']);
    $price = mysqli_real_escape_string($con, $_POST['price']);
    $bookavail         = mysqli_real_escape_string($con, $_POST['bookavail']);

    $insertquery = "INSERT INTO `doctor_schedule`(`d_id`,`username`,`gender`,`specialist`,`appointmentdate`,`appointmenttime`,`appointmentprice`,`bookAvail`)
    VALUES('$doctorid','$username','$gender','$specialist','$date','$time','$price','$bookavail')";
    $result = mysqli_query($con, $insertquery);

    if ($result) {
  ?>
      <script>
        alert("Schedule created");
        location.replace("doctorDashboard.php");
      </script>
    <?php

    } else {
    ?>
      <script>
        alert("Schedule not created");
      </script>
  <?php

    }
  }

  ?>

  <!-- new -->

  
  <div class="container">
    <div class="title"> Doctor Schedule</div>
    <div class="content">
      <form id="" action="" method="post">
        <div class="user-details">
          <div class="input-box">
            <label for="userId" class="details">Doctor Id</label>
            <input type="number" id="txtuserId" class="form-control" placeholder="Enter your id number" name="userId" value="<?php echo $doctorid; ?>">
            <span class="formerror hide" id="userId">User id is required</span>
          </div>

          <div class="user-details">
            <div class="input-box">
              <label for="userName" class="details">Doctor Name</label>
              <input type="text" id="txtUserName" class="form-control" placeholder="Enter your name" name="userName" value="<?php echo $username; ?>">
              <span class="formerror hide" id="userName">User name is required</span>
            </div>
            <div class="radio-container">

              <label for="gender" class="gender" id="gender">Gender</label><br>

              <input type="radio" id="male" name="gender" value="Male">
              <label for="male">Male</label>


              <input type="radio" id="female" name="gender" value="Female">
              <label for="female">Female</label>


              <input type="radio" id="other" name="gender" value="Other">
              <label for="other">Other</label>

            </div>

            <div class="input-box">
              <label for="speciality" class="details">Specialist</label>
              <input type="text" id="txtSpecialist" class="form-control" placeholder="Enter your speciality" name="speciality">

            </div>
            <div class="input-box">
              <label for="date" class="details">Apppointment Date</label>
              <input type="date" id="txtDate" class="form-control" placeholder="" name="date">

            </div>
            <div class="input-box">
              <label for="time" class="details">Appointment Time</label>
              <input type="time" id="txtTime" class="form-control" placeholder="" name="time">

            </div>
            <div class="input-box">
              <label for="price" class="details">Appointment Price</label>
              <input type="text" id="txtPrice" class="form-control" placeholder="Enter price" name="price">

            </div>
            <div class="col-sm-10">
              <select class="select form-control" id="bookavail" name="bookavail" required>
                <option value="available">
                  available
                </option>
                <option value="notavail">
                  notavail
                </option>
              </select>
            </div>

            

          </div>

          <div class="input-box button">
            <button type="submit" class="btn btn-primary" name="submit">Create schedule</button>
          </div>


        </div>
      </form>
    </div>

</body>

</html>
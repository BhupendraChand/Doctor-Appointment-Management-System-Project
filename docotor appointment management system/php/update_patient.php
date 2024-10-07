<!DOCTYPE html>

<head>
  <link rel="stylesheet" href="register.css">

  <title>Update</title>
</head>

<body>
  <?php

       include 'connect.php';

          $id = $_GET['id'];

          $selectquery = "select * from patient where id = $id ";

          $query = mysqli_query($con, $selectquery);

          $result = mysqli_fetch_assoc($query);
  ?>

  <div class="container">
    <div class="title">Update Profile
      (<?php echo $result['username']; ?>)
    </div>
    <div class="content">
      <form id="form1" action="" method="post">

        <div class="user-details">


          <?php

          include 'connect.php';

          $id = $_GET['id'];

          $selectquery = "select * from patient where id = $id ";

          $query = mysqli_query($con, $selectquery);

          $result = mysqli_fetch_assoc($query);


          if (isset($_POST['submit'])) {

            $id = $_GET['id']; 
            
            $phone = mysqli_real_escape_string($con, $_POST['phone']);
            $address = mysqli_real_escape_string($con, $_POST['address']);
            
            if ($query = mysqli_query($con, " update patient set phone='$phone', address='$address' where id = $id ")) {
          ?>
              <script>
                alert("updated successfull");
                location.replace("adminDashboard.php");
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



           <?php echo $result['username']; ?>
           <?php echo $result['email']; ?>
           <?php echo $result['password']; ?>
          
    
          <div class="input-box">
            <label for="phone" class="details">Phone Number</label>
            <input type="number" id="txtPhone" class="form-control" placeholder="Enter your phone number" name="phone" value="<?php echo $result['phone']; ?>" required>
            <span class="formerror hide" id="phone">Phone number is required </span>
          </div>
          <div class="input-box">
            <label for="address" class="details">Address</label>
            <input type="text" id="txtAddress" class="form-control" placeholder="Enter your address" name="address" value="<?php echo $result['address']; ?>" required> 
            <span class="formerror hide" id="address"> Address field is required</span>
          </div>
           <?php echo $result['dateOfBirth']; ?>
          

  
        </div>
        <div class="input-box button">
          <button type="submit" class="btn btn-primary" name="submit">Update</button>
        </div>
      
    </div>
    </form>
  </div>

</body>

</html>
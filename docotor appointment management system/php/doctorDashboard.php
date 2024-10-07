<?php

session_start();

if(!isset($_SESSION['username'])){
    echo "You are logged out";
    header('location:doctor.php');
}


?>


<!DOCTYPE html>
<html lang="en">
  <head>
  
    <link rel="stylesheet" href="doctorDashboard.css">
  
   </head>
<body>
  <div class="sidebar">
    <div class="logo-details">
      <i class='bx bxl-c-plus-plus'></i>
      <span class="logo_name">DOCTOR</span>
    </div>
   <p><hr></p> 
      <ul class="nav-links">
        <!-- <li>
          <a href="#" class="active">
            <i class='bx bx-grid-alt' ></i>
            <span class="links_name">Dashboard</span>
          </a>
        </li> -->
        <?php

include "connect.php";
$currentUser = $_SESSION['username'];

$selectquery = " select * from doctor where doctorname = '$currentUser'";

$query = mysqli_query($con, $selectquery);

if($query){

if(mysqli_num_rows($query)>0){

while ($result = mysqli_fetch_assoc($query)){
?>

        <li>
          <a href="doctor_view_appointment.php?id=<?php echo $result['id']; ?>">
            <i class='bx bx-box' ></i>
            <span class="links_name">View Appointment</span>
          </a>
        </li>
        <!-- <li>
          <a href="#">
            <i class='bx bx-list-ul' ></i>
            <span class="links_name">View Patient</span>
          </a>
        </li> -->

        
        <li>
          <!-- new  -->

          <a href="doc_schedule.php?id=<?php echo $result['id']; ?>">
          <!-- <a href="doc_schedule.php"> -->
            <i class='bx bx-pie-chart-alt-2' ></i>
            <span class="links_name">Create schedule</span>
          </a>
        </li>
        
 


<li>


<a href="doctor_manage_profile.php?id=<?php echo $result['id']; ?>">
<i class='bx bx-coin-stack'></i>
<span class="links_name">Manage profile</span>


</a>


</li>

<?php

}
}

}

?>


        <li class="log_out">
          <a href="doctor_logout.php">
            <i class='bx bx-log-out'></i>
            <span class="links_name">Log out</span>
          </a>
        </li>
      </ul>
  </div>
  <section class="home-section">
    <nav>
      <div class="sidebar-button">
        <i class='bx bx-menu sidebarBtn'></i>
        <h1><span class="dashboard"><b>Dashboard</b></span></h1>
      </div>
      <div class="content">
        <!-- For displaying whose user home page this is -->
        <!-- <h1>Welcome </h1> -->

    </div>
      <div class="profile-details">
      <h2>Welcome, <span class="admin_name"><?php echo  $_SESSION['username']; ?></span></h2>
        <i class='bx bx-chevron-down' ></i>
        
      </div>
    </nav>
      </div>
    </div>
  </section>


</body>
</html>


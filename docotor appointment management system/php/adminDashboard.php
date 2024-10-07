<?php

session_start();

if(!isset($_SESSION['username'])){
    echo "You are logged out";
    header('location:admin.php');
  
  }


?>

<!DOCTYPE html>
<html lang="en">
  <head>
  
    <link rel="stylesheet" href="adminDashboard.css">
  
   </head>
<body>
  <div class="sidebar">
    <div class="logo-details">
      <i class='bx bxl-c-plus-plus'></i>
      <span class="logo_name">ADMIN</span>
    </div>
   <p><hr></p> 
      <ul class="nav-links">
        
        <li>
          <a href="admin_manage_patient.php">
            <i class='bx bx-box' ></i>
            <span class="links_name">Manage patient</span>
          </a>
        </li>
        <li>
          <a href="admin_manage_doctor.php">
            <i class='bx bx-list-ul' ></i>
            <span class="links_name">Manage doctor</span>
          </a>
        </li>
        <li>
          <a href="admin_view_appointment.php">
            <i class='bx bx-pie-chart-alt-2' ></i>
            <span class="links_name">View appointment</span>
          </a>
        </li>
        
      <?php

include "connect.php";
$currentUser = $_SESSION['username'];

$selectquery = " select * from admin where name = '$currentUser'";

$query = mysqli_query($con, $selectquery);

if($query){

if(mysqli_num_rows($query)>0){

while ($result = mysqli_fetch_assoc($query)){
?>

<li>


<a href="admin_manage_profile.php?id=<?php echo $result['id']; ?>">
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
          <a href="admin_logout.php">
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
       <h1> <span class="dashboard"><b>Dashboard</b></span></h1>
      </div>
      <div class="content">
      
    

    </div>

      <div class="profile-details">
       <h2>Welcome, <span class="admin_name"><?php echo  $_SESSION['username']; ?></span></h2>
        <i class='bx bx-chevron-down' ></i>
   
      </div>
    </nav>
   
  </section>

 
</body>
</html>


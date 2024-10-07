<?php 

if(!isset($_SESSION)){
	session_start();
	}
      
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>View Appointment</title>
	<style>table{
    background-color:white;
    border:2px;
}
table, th, td {
  border: 4px solid black;
  border-collapse: collapse;
}
th{
	background-color:peru;
}
tr:hover {background-color: yellowgreen;}

</style>
</head>
<body>

<div class="dashboard" style="background-color:#fff;">
<h1 align=center style="color:Red;">My Appointment</h1>
		
		
	</div>
		
			<div class="all_user" style="margin-top:0px; margin-left: 40px;">
				<?php 
					include "connect.php";
					
                    
					$currentUser = $_SESSION['username'];
					
					$sql = " select * from appointment where pname = '$currentUser'";
					
				
					$result = mysqli_query($con,$sql);
					$count = mysqli_num_rows($result);

					if($count>=1){
						echo "<table border='1' align='center' cellpadding='32'>
							<tr>
							    <th>AppointmentNo</th>
							    <th>DoctorID</th>
								<th> Doctor</th>
								<th>DoctorSpeciality</th>
								
								<th>AppointmentDate</th>
								<th>AppointmentTime</th>
								<th>AppointmentPrice</th>
							
							</tr>";
						while($row=mysqli_fetch_array($result)){
								echo "<tr>";
								echo "<td align='center'>".$row['appointment_no']."</td>";
								echo "<td align='center'>".$row['d_id']."</td>";
								echo "<td align='center'>".$row['dname']."</td>";
								echo "<td align='center'>".$row['specialist']."</td>";
								// echo "<td align='center'>".$row['reason_for_appointment']."</td>";
								echo "<td align='center'>".$row['appointmentdate']."</td>";
								echo "<td align='center'>".$row['appointmenttime']."</td>";
								echo "<td align='center'>".$row['price']."</td>";
						?>
						
						<?php
								echo "</tr>";
						}
						echo "</table>";
					}
					else{
						print "<p align='center'>Sorry, you haven't booked any appointment !!</p>";
					}

					?>

				
			</div>
		
	
	
	



	
	</div>





</body>
</html>





<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Doctor Schedule</title>
    <style>
        table{
            background-color:lightblue;
            border: 2px;
        }
        
a:link, a:visited {
  background-color: green;
  color: white;
  padding: 15px 25px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
}

a:hover, a:active {
  background-color: #f44336;
}
</style>
</head>
<body>
    <div class="main-div">
        <h1 align = "center" style="color:Red;">List of Doctor Schedule</h1>
        <div class="center-div">
            <div class="table">
            <table align = "center" border="3" cellspacing = "8">
                    <thead>
                        <th>DOCTOR ID</th>
                        <th>SCHEDULE ID</th>
                        <th>DOCTORNAME</th>
                        <th>GENDER</th>
                        <th>SPECIALITY</th>
                        <th>APPOINTMENT DATE</th>
                        <th>APPOINTMENT TIME</th>
                        <th>APPOINTMENT PRICE</th>
                        <th>AVAILABLE TOKEN</th>
                        <th>BOOKING</th>
                    </thead>
                    <tbody>
                        <?php

                            include "connect.php";
                            
                            $selectquery = " select * from doctor_schedule ";

                            $query = mysqli_query($con,$selectquery );

    

                            while($result = mysqli_fetch_assoc($query)){

                                ?>

                            
                       
                            <tr>
                                <td align="center"><?php  echo $result['d_id']; ?></td>

                                <!-- for schedule id -->
                                <td align="center"><?php  echo $result['schedule_id']; ?></td>

                                <!-- below username is same from db table which must be same  in echo $result[''] -->
                                <td align="center"><?php  echo $result['doctorname']; ?></td>
                                <td align="center"><?php  echo $result['gender']; ?></td>
                                <td align="center"><?php  echo $result['specialist']; ?></td>
                                <td align="center"><?php  echo $result['appointmentdate']; ?></td>
                                <td align="center"><?php  echo $result['appointmenttime']; ?></td>
                                <td align="center"><?php  echo $result['appointmentprice']; ?></td>
                                <td align="center"><?php  echo $result['token']; ?></td>
                                <!-- <td> echo $result['bookAvail']; </td> -->
                                <!-- above php also include -->
                                <!-- <td><a href ="patient_book_app.php?id=<?php  echo $result['d_id']; ?>">Book Appointment</a></td> -->
                               
                                <!-- For getting two data from table use below -->
                                <td><a href ="patient_book_appoint.php?id=<?php  echo $result['d_id'];
                                
                                ?> && schedule_id =<?php echo $result['schedule_id'];?> && appointmentdate =<?php echo $result['appointmentdate'];?>">Book Appointment</a></td>


                           <!-- <td><a href ="patient_book_appoint.php?id=<?php  echo $result['d_id']; ?> ">Book Appointment</a></td> -->
                            </tr>

                        <?php
                        }

                        ?>

                    </tbody>
                </table>

            </div>

        </div> 

    </div>
    
</body>
</html>
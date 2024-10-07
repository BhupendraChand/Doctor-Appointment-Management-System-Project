

<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Manage Doctor Profile</title>
    <style>
        table{
            background-color:lightblue;
            border:2px;
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
  background-color:  #f44336;
}
</style>
</head>
<body>
    <div class="main-div">
        <h1 align="center" style="color:Red;">List of Doctor</h1>

        <td><h5 align = "center"><a href ="admin_add_doctor.php">ADD</a></h5></td>

        <div class="center-div">
            <div class="table">
                <table align="center" border="3" cellspacing = "8" cellpadding = "8" >
                    <thead>
                        <th>ID</th>
                        <th>DOCTORNAME</th>
                        <th>EMAIL</th>
                        <th>PASSWORD</th>
                        <th>PHONE</th>
                        <th>ADDRESS</th>
                        <th>DEGREE</th>
                        <th>SPECIALIST</th>
                        <th>DATE_OF_BIRTH</th>
                        <th>GENDER</th>
                        <th colspan="2">OPERATION</th>
                    </thead>
                    <tbody>
                        <?php

                            include "connect.php";
                            
                            $selectquery = " select * from doctor ";

                            $query = mysqli_query($con,$selectquery );

    

                            while($result = mysqli_fetch_assoc($query)){

                                ?>

                            
                       
                            <tr>
                            <td><?php  echo $result['id']; ?></td>
                               
                                <td align='center'><?php  echo $result['doctorname']; ?></td>
                                <td align='center'><?php  echo $result['email']; ?></td>
                                <td align='center'><?php  echo $result['password']; ?></td>
                                <td align='center'><?php  echo $result['phone']; ?></td>
                                <td align='center'><?php  echo $result['address']; ?></td>
                                <td align='center'><?php  echo $result['degree']; ?></td>
                                <td align='center'><?php  echo $result['specialist']; ?></td>
                                <td align='center'><?php  echo $result['dateOfBirth']; ?></td>
                                <td align='center'><?php  echo $result['gender']; ?></td>
                                <td><a href ="update_doctor.php?id=<?php  echo $result['id']; ?>">Edit</a></td>
                                <td><a href ="delete_doctor.php?id=<?php  echo $result['id']; ?>">Delete</a></td>
                               
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
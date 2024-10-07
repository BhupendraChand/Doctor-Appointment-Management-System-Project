

<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Manage Patient Profile</title>
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
   
       
        <h1 align="center" style="color:Red;">List of Patient </h1>
      
       <td><h5 align = "center"><a href ="admin_add_patient.php">ADD</a></h5></td>

        <div class="center-div">
           
            <div class="table">
           
            <table align="center" border="3" cellspacing = "8" cellpadding = "8" >
                    <thead>
                        <th>ID</th>
                        <th>USERNAME</th>
                        <th>EMAIL</th>
                        <th>PASSWORD</th>
                        <th>PHONE</th>
                        <th>ADDRESS</th>
                        <th>DATE_OF_BIRTH</th>
                        <th>GENDER</th>
                        <th colspan="2">OPERATION</th>
                    </thead>
                    <tbody>
                        <?php

                            include "connect.php";
                            
                            $selectquery = " select * from patient ";

                            $query = mysqli_query($con,$selectquery );

    

                            while($result = mysqli_fetch_assoc($query)){

                                ?>

                            
                       
                            <tr>
                            <td><?php  echo $result['id']; ?></td>

                                <td align='center'><?php  echo $result['username']; ?></td>
                                <td align='center'><?php  echo $result['email']; ?></td>
                                <td align='center'><?php  echo $result['password']; ?></td>
                                <td align='center'><?php  echo $result['phone']; ?></td>
                                <td align='center'><?php  echo $result['address']; ?></td>
                                <td align='center'><?php  echo $result['dateOfBirth']; ?></td>
                                <td align='center'><?php  echo $result['gender']; ?></td>
                                <td align='center'><a href ="update_patient.php?id=<?php  echo $result['id']; ?>">Edit</a></td>
                                <td><a href ="delete_patient.php?id=<?php  echo $result['id']; ?>">Delete</a></td>
                               
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
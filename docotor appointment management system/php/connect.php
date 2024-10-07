
<?php
$server_name = "localhost";
$username = "root";
$password = "";
$dbname = "db_opd";
$con = mysqli_connect($server_name,$username,$password,$dbname);
if($con){
    ?>
    <script>
        console.log("Connection successful");
        
    </script>
    <?php
}else{
    ?>
    <script>
    alert("Connection failed");
    </script>
    <?php
}

?>

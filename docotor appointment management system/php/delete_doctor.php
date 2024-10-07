<?php

include "connect.php";
$id = $_GET['id'];

$deletequery = "delete from doctor where id = $id";
$query = mysqli_query($con, $deletequery);
if($query){
?>
<script>
  alert("Deleted successfull");
  location.replace("admin_manage_doctor.php");
</script>
<?php
} else{
?>
<script>
  alert("Not deleted");
</script>
<?php

}
?>

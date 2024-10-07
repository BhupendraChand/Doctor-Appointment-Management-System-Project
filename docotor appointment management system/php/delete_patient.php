<?php

include "connect.php";
$id = $_GET['id'];
$deletequery = " delete from patient where id=$id";
$query = mysqli_query($con, $deletequery);
if($query){
?>
<script>
  alert("Deleted successfull");
  location.replace("admin_manage_patient.php");
</script>
<?php
} else {
?>
<script>
  alert("Not deleted");
</script>
<?php

}
?>

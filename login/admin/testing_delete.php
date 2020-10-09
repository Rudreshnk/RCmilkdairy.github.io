<?php
$id=$_REQUEST['id'];
include('dbconnect.php');

$sql="delete from testing where test_id='$id'";
mysql_query($sql);
?>

<script>
alert('values deleted');
document.location="testing_view.php";
</script>
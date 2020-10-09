<?php
include('dbconnect.php');
$employee_id=$_POST['employee_id'];
$employee_name=$_POST['employee_name'];
$employee_contact=$_POST['employee_contact'];
$employee_address=$_POST['employee_address'];
$monthly_salary=$_POST['monthly_salary'];
$sql="update employee set employee_name='$employee_name',employee_contact='$employee_contact',employee_address='$employee_address',
monthly_salary='$monthly_salary'
where employee_id='$employee_id'";
mysql_query($sql);
?>
<script>
alert("values updated");
document.location="employee_view.php";
</script>
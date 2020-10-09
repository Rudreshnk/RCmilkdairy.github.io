<?php
include('dbconnect.php');
$employee_name=$_POST['employee_name'];
$employee_contact=$_POST['employee_contact'];
$employee_address=$_POST['employee_address'];
$monthly_salary=$_POST['monthly_salary'];
$sql="insert into employee values(null,'$employee_name','$employee_contact','$employee_address','$monthly_salary')";
mysql_query($sql);
?>
<script>
alert("values inserted");
document.location="employee_view.php";
</script>
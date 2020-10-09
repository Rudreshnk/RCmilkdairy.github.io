<?php
include('dbconnect.php');
$username=$_POST['username'];
$employee_name=$_POST['employee_name'];
$employee_contact=$_POST['employee_contact'];
$employee_address=$_POST['employee_address'];
$monthly_salary=$_POST['monthly_salary'];
$sql="insert into employee values(null,'$username','$employee_name','$employee_contact','$employee_address','$monthly_salary')";
mysql_query($sql);

$sql1="insert into login values('$username','123456','employee','Enter the registered contact no','$employee_contact')";
mysql_query($sql1);
?>
<script>
alert("values inserted");
document.location="employee_view.php";
</script>
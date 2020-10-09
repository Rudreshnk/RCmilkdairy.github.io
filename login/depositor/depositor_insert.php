<?php
include('dbconnect.php');
$depositor_name=$_POST['depositor_name'];
$depositor_contact=$_POST['depositor_contact'];
$depositor_address=$_POST['depositor_address'];
$depositor_adhar=$_POST['depositor_adhar'];
$account_no=$_POST['account_no'];

$sql="insert into depositors values(null,'$depositor_name','$depositor_contact','$depositor_address','$depositor_adhar','$account_no')";
mysql_query($sql);

$sql1="insert into login values('$depositor_adhar','123456','depositor','My registered contact no','$depositor_contact')";
mysql_query($sql1);
?>
<script>
alert("values inserted");
document.location="depositor_view.php";
</script>
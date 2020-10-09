<?php
include('dbconnect.php');
$depositor_id=$_POST['depositor_id'];
$depositor_name=$_POST['depositor_name'];
$depositor_contact=$_POST['depositor_contact'];
$depositor_address=$_POST['depositor_address'];
$depositor_adhar=$_POST['depositor_adhar'];
$account_no=$_POST['account_no'];
$sql="update depositors set  depositor_id='$depositor_id',depositor_name='$depositor_name',depositor_contact='$depositor_contact',depositor_address='$depositor_address',depositor_adhar='$depositor_adhar',account_no='$account_no'
where depositor_id='$depositor_id'";
mysql_query($sql);
?>
<script>
alert("values updated");
document.location="depositor_view.php";
</script>

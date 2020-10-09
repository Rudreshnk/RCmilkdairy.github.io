<?php
include('dbconnect.php');
$loan_id=$_POST['loan_id'];
$depositor_id=$_POST['depositor_id'];
$loan_date=$_POST['loan_date'];
$total_given_amount=$_POST['total_given_amount'];
$paid_amount=$_POST['paid_amount'];
$balance_amount=$_POST['balance_amount'];
$pay=$_POST['pay'];
$loan_paid_date=$_POST['loan_paid_date'];

$pd=$paid_amount+$pay;
$bal=$balance_amount-$pay;

if($pd>$total_given_amount)
{
?>
<script>
alert("Invalid amt");
document.location="loans_view.php";
</script>
<?php
}
else
{

$sql="update loans set paid_amount='$pd',balance_amount='$bal',loan_paid_date='$loan_paid_date' where loan_id='$loan_id'";
mysql_query($sql);
?>
<script>
alert("values updated");
document.location="loans_view.php";
</script>
<?php
}
?>
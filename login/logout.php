<?php 
session_start();
unset($_SESSION["uname"]);
session_destroy();
header("location:index.html");
?>
<script>
alert("logout successfully");

</script>
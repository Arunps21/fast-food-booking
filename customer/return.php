<?php	
include("dbcon.php");
$cart_id = $_GET['id'];
echo $cart_id;
$sql = "update booking set status=6 where bookingid=".$cart_id;

$conn->query($sql);

// header('location:viewreturn.php');



?>
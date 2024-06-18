

<?php	
include("dbcon.php");
$cart_id = $_GET['id'];
echo $cart_id;
$sql = "delete from booking  where bookingid=".$cart_id;

$conn->query($sql);

 header('location:viewcart.php');



?>


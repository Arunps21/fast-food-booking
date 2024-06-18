

<?php	
include("dbcon.php");
$cartid = $_GET['id'];
$date1=date('Y-m-d',time());
$sql = "update booking set status=3,deliv_date='$date1' where bookingid=".$cartid;

$conn->query($sql);

 header('location:deliveryview.php');



?>


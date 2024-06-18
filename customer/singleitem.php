<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport">
    <meta http-equiv="X-UA-Compatible">
    <title>Document</title>
    <link rel="stylesheet" href="ui.css">
    
    <script>
function showtotal() {
//alert(str);
	  var price=document.getElementById("price").value;  
	   var qty=document.getElementById("qty").value; 
	   var total=price*qty; 
	   //alert(total);
	   document.getElementById("total").value = total;
}
</script>
    
</head>

<body>

<?php include("userheader.php");	
include("dbcon.php");

?>

<?php require('../config/autoload.php'); 

$iid = "";
$iname = "";
$name="";
$dao=new DataAccess();
?>



<?php
if(isset($_POST["btn_insert"]))
{

$name=$_SESSION['email'];
$itid = $_GET['id'];
$q10="select * from food where foodid=".$itid ;
$info121=$dao->query($q10);

$iname=$info121[0]["foodname"];
$itemname = $iname;
$price = $info121[0]["offerrate"];
$qty = $_POST["qty"];
$total = $_POST["total"];
$status=1;
$date1=date('Y-m-d',time());
$bdate=$_POST["bookingdate"];
$sql = "INSERT INTO booking(email,foodname,foodid,foodrate,bookingquantity,totalamount,status,bookingdate,currentdate) VALUES ('$name','$iname','$itid' ,'$price','$qty','$total','$status','$bdate','$date1')";

$conn->query($sql);
$_SESSION['amount']=$total;
header('location:viewcart.php');
}


?>


<?php
$dao=new DataAccess();
?>

<?php	$itid=$_GET['id']; 



			 $q="select * from food where foodid=".$itid ;

$info=$dao->query($q);
$iname=$info[0]["foodname"];
?>
 
   

<form action="" method="POST" enctype="multipart/form-data">

 <div class="upper">
        <div class="upper-left">
<?php 
if(isset($_SESSION['email']))
{ 
   $name=$_SESSION['email'];
?>

 <h7 class="title-w3-agileits title-black-wthree"><?php  echo $name ?></h7>

<?php } ?>
            <h3>Product Details</h3>
            <img style="width:300; height:300" src=<?php echo BASE_URL."uploads/".$info[0]["fimage"]; ?> alt=" " class="img-responsive" />
        </div>
        <div class="content">
            <h3>Details</h3>
            <div style="display: block;">
                <label for="name">Food Name:</label>
                
                <label for="name"><?php echo $info[0]["foodname"]; ?></label><br>
                 <label for="price">Offer Rate:</label><br>
                <input id="price" name="offerrate" type="text" value="<?php echo $info[0]["offerrate"];  ?>" readonly style="margin-top: 8px;"><br>
                <label for="qty">Food Quantity:</label><br>
                <input id="qty" name="qty" type="text" onkeyup="showtotal()" style="margin-top: 8px;"><br>
                <label for="Total">Total</label><br>
                <input id="total" name="total" type="text" readonly style="margin-top: 8px;"><br>
                <label for="">Booking Date</label><br>
                <input id="bookingdate"name="bookingdate" type="date" style="margin-top: 8px;"><br>
            </div>
        </div>
    </div>
    <div class="lower">
        <div class="btn-grp">
                <button class="buttons" name="btn_insert" id="btn-1">Add To Cart</button>
                <button class="buttons" id="btn-2">Booking</button>
                <button class="buttons" id="btn-3">Cancel
                    
                </button>        
        </div>
    </div>
    </form>
</body>

</html>
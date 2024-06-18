<?php include("userheader.php");	?>
<?php require('../config/autoload.php'); 
include("dbcon.php");
?>

<?php
$dao=new DataAccess();
   $name=$_SESSION['email'] ;
 if(isset($_POST["payment"]))
{
     echo "hai";
	 header('location:payment.php');
}
   if(isset($_POST["purchase"]))
{
     header('location:displaycategory.php');
}
if(!isset($_SESSION['email']))
   {
	   header('location:login.php');
	   }
	   else
	   { 
	   $sql = "select sum(totalamount)as t from booking where status=1 and  email='$name'";
$result = $conn->query($sql);
	   $row = $result->fetch_assoc();
	   $total=$row["t"];
	   
	   $_SESSION['amount']=$total; 
	   
	    ?>
       
       
       
       
 <div class="container_gray_bg" id="home_feat_1">
    <div class="container">
    	<div class="row">
            <div class="col-md-12">
            
            <H1><center> CART DETAILS </center> </H1>
                <table  border="1" class="table" style="margin-top:100px;">
                    <tr>
                        
                        <th>Sl No</th>
                        <th>Item Name</th>
                        <th>Quantity</th>
                        <th>Price</th>
                        <th>Total</th>
                       
                        <th>CANCEL</th>
                     
                      
                    </tr>
<?php
    
    $actions=array(
    
    
    'delete'=>array('label'=>'Cancel','link'=>'cancel.php','params'=>array('id'=>'bookingid'),'attributes'=>array('class'=>'btn btn-success'))
    
    );

    $config=array(
        'srno'=>true,
        'hiddenfields'=>array('foodid','bookingid')
        
        
    );

   $condition="email='".$name."' and status=2";
   
   $join=array(
       
    );  
	$fields=array('bookingid','foodid','foodname','bookingquantity','foodrate','totalamount');

    $users=$dao->selectAsTable($fields,'booking as c',$condition,$join,$actions,$config);
    
    echo $users;
                                     
    ?>

             
                </table>
            </div>    


            <div class="row">
 <div class="col-md-3">

</div>

</div>

            
            
            
        </div><!-- End row -->
    </div><!-- End container -->
    </div><!-- End container_gray_bg -->

<?php } ?>
<?php include("oghead.php");	?>
<?php require('../config/autoload.php'); 
include("dbcon.php");
?>

<?php
$dao=new DataAccess();
   
	 
	   
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
                        <th>Date</th>
                       
                        
                     
                      
                    </tr>
<?php
    
    $actions=array(
    
    
    //'delete'=>array('label'=>'Cancel','link'=>'cancel.php','params'=>array('id'=>'bookingid'),'attributes'=>array('class'=>'btn btn-success'))
    
    );

    $config=array(
        'srno'=>true,
        'hiddenfields'=>array('foodid','bookingid')
        
        
    );

   $condition="status=2";
   
   $join=array(
       
    );  
	$fields=array('bookingid','foodid','foodname','bookingquantity','foodrate','totalamount','bookingdate');

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

<?php  ?>
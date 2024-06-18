<?php include("oghead.php");	?>
<?php require('../config/autoload.php'); 
include("dbcon.php");
?>

<?php
$dao=new DataAccess();
   //$name=$_SESSION['did'];
   $cdate=$_SESSION['cdate'];


	   ?>
       
       
       
       
 <div class="container_gray_bg" id="home_feat_1">
    <div class="container">
    	<div class="row">
            <div class="col-md-12">
            
            <H1><center> Booking Details</center> </H1>
                <table  border="1" class="table" style="margin-top:100px;">
                    <tr>
                        
                        <th>Sl No</th>
                        <th>Item Name</th>
                       
                         <th>Quantity</th>
                        <th>Price</th>
                       
                        <th>Total</th>
                     
                      
                    </tr>
<?php
    
    $actions=array(
    
    
    //'delete'=>array('label'=>'consult','link'=>'prescription.php','params'=>array('id'=>'bid'),'attributes'=>array('class'=>'btn btn-success')),
   // 'edit'=>array('label'=>'History','link'=>'history.php','params'=>array('id'=>'uemail'),'attributes'=>array('class'=>'btn btn-success')),
    
    );

    $config=array(
        'srno'=>true,
        'hiddenfields'=>array('bookingid')
        
        
    );
$condition="bookingdate='".$cdate."' and status=2 ";

   //$condition="did=".$name."and cdate="'".$cdate."'"  and status=2";
   
   $join=array(
      
    );  
	$fields=array('bookingid','foodname','bookingquantity','foodrate','totalamount');

    $users=$dao->selectAsTable($fields,'booking as c',$condition,$join,$actions,$config);
    
    echo $users;
                                     
    ?>

             
                </table>
            </div>    


            <div class="row">
 

</div>

            
            
            
        </div><!-- End row -->
    </div><!-- End container -->
    </div><!-- End container_gray_bg -->


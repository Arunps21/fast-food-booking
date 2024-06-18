
<?php include("header.php");	?>

<?php include("userhead.php"); ?>


<?php require('../config/autoload.php'); ?>

<?php
$file=new FileUpload();
$elements=array(
        "foodrate"=>"","bookingquantity"=>"","totalamount"=>"","bookingdate"=>"","status"=>"");


$form=new FormAssist($elements,$_POST);



$dao=new DataAccess();

$labels=array('foodrate'=>"Food Rate","bookingquantity"=>"Booking Quantity","totalamount"=>"Total Amount","bookingdate"=>"Booking Date","status"=>"Status" );

$rules=array(
    "foodrate"=>array("required"=>true,"minlength"=>3,"maxlength"=>30,"integeronly"=>true),
    
"bookingquantity"=> array('filerequired'=>true),
"totalamount"=>array("required"=>true,"minlength"=>3,"maxlength"=>30,"integeronly"=>true),
"bookingdate"=> array('filerequired'=>true),
"status"=> array('filerequired'=>true),
"fimage"=> array('filerequired'=>true),
);
    
    
$validator = new FormValidator($rules,$labels);

if(isset($_POST["btn_insert"]))
{

if($validator->validate($_POST))
{
	
if($fileName=$file->doUploadRandom($_FILES['fimage'],array('.jpg','.png','.jpeg'),100000,1,'../uploads'))
		{

$data=array(

        'foodrate'=>$_POST['foodrate'],
        'totalamount'=>$_POST['totalamount'],
        'boo'=>$_POST['cname'],
        
          'fimage'=>$fileName,
		
    );
  
    if($dao->insert($data,"category"))
    {
        echo "<script> alert('New record created successfully');</script> ";
header('location:category.php');
    }
    else
        {$msg="Registration failed";} ?>

<span style="color:red;"><?php echo $msg; ?></span>

<?php
    
}
else
echo $file->errors();
}

}


?>
<html>
<head>
</head>
<body>

 <form action="" method="POST" enctype="multipart/form-data">
 
<div class="row">
                    <div class="col-md-6">
Name:

<?= $form->textBox('cname',array('class'=>'form-control')); ?>
<?= $validator->error('cname'); ?>

</div>
</div>



<div class="row">
                    <div class="col-md-6">
IMAGE:

<?= $form->fileField('cimage',array('class'=>'form-control')); ?>
<span style="color:red;"><?= $validator->error('cimage'); ?></span>

</div>
</div>






<button type="submit" name="btn_insert"  >Submit</button>
</form>


</body>


	
	

		</html>
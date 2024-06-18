<?php 

 require('../config/autoload.php'); 
include("oghead.php");

$file=new FileUpload();
$elements=array(
        "foodname"=>"","bookingquantity"=>"","foodrate"=>"","offerrate"=>"","cid"=>"","fimage"=>"");


$form=new FormAssist($elements,$_POST);



$dao=new DataAccess();

$labels=array('foodname'=>"Food Name","bookingquantity"=>"Food Quantity","foodrate"=>"Food Rate","offerrate"=>"Offer Rate","cid"=>"Category Id","fimage"=>"Food Image" );

$rules=array(
    "foodname"=>array("required"=>true,"minlength"=>3,"maxlength"=>30),
    "foodquantity"=>array("required"=>true,"minlength"=>1,"maxlength"=>5,"integeronly"=>true),
    "foodrate"=>array("required"=>true,"integeronly"=>true),
    "offerrate"=>array("required"=>true,"integeronly"=>true),
 "cid"=>array("required"=>true),

"fimage"=> array('filerequired'=>true)
     
);
    
    
$validator = new FormValidator($rules,$labels);

if(isset($_POST["btn_insert"]))
{

if($validator->validate($_POST))
{
	
if($fileName=$file->doUploadRandom($_FILES['fimage'],array('.jpg','.png','.jpeg'),100000,2,'../uploads'))
		{
echo"haiclear";
$data=array(

        'foodname'=>$_POST['foodname'],
        'bookingquantity'=>$_POST['bookingquantity'],
          'foodrate'=>$_POST['foodrate'],
          'offerrate'=>$_POST['offerrate'],
		  'cid'=>$_POST['cid'],
        
          'fimage'=>$fileName,
    );
  
    if($dao->insert($data,"food"))
    {
        echo "<script> alert('New record created successfully');</script> ";
header('location:itemdetails.php');
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
Food Name:

<?= $form->textBox('foodname',array('class'=>'form-control')); ?>
<?= $validator->error('foodname'); ?>

</div>
</div>

<div class="row">
                    <div class="col-md-6">
Food Quantity:

<?= $form->textBox('bookingquantity',array('class'=>'form-control')); ?>
<?= $validator->error('bookingquantity'); ?>

</div>
</div>


<div class="row">
                    <div class="col-md-6">
Food Rate:

<?= $form->textBox('foodrate',array('class'=>'form-control')); ?>
<?= $validator->error('foodrate'); ?>
</div>
</div>


<div class="row">
                    <div class="col-md-6">

 Offer Rate:

<?= $form->textBox('offerrate',array('class'=>'form-control')); ?>
<?= $validator->error('offerrate'); ?>
</div>
</div>


<div class="row">
                    <div class="col-md-6">


Category Name:

<?php
                    $options = $dao->createOptions('cname','cid',"category");
                    echo $form->dropDownList('cid',array('class'=>'form-control'),$options); ?>
<?= $validator->error('cid'); ?>

</div>
</div>



<div class="row">
                    <div class="col-md-6">
Food Image:

<?= $form->fileField('fimage',array('class'=>'form-control')); ?>
<span style="color:red;"><?= $validator->error('fimage'); ?></span>

</div>
</div>






<button type="submit" name="btn_insert"  >Submit</button>
</form>


</body>

</html>



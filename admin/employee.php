<?php 

 require('../config/autoload.php'); 
include("oghead.php");

$file=new FileUpload();
$elements=array(
        "ename"=>"", "sal"=>"");


$form=new FormAssist($elements,$_POST);



$dao=new DataAccess();

$labels=array('ename'=>"employee name",'sal'=>"salary");

$rules=array(
    "ename"=>array("required"=>true,"minlength"=>3,"maxlength"=>30,"alphaonly"=>true),"sal"=>array("required"=>true,"minlength"=>3,"maxlength"=>30,"integeronly"=>true)
    

     
);
    
    
$validator = new FormValidator($rules,$labels);

if(isset($_POST["btn_insert"]))
{

if($validator->validate($_POST))
{
	


$data=array(

        'employeename'=>$_POST['ename'],
        'salary'=>$_POST['sal']
         
    );
  
    if($dao->insert($data,"employee"))
    {
        echo "<script> alert('New record created successfully');</script> ";
header('location:student.php');
    }
    else
        {$msg="Registration failed";} ?>

<span style="color:red;"><?php echo $msg; ?></span>

<?php
    
}
else
echo $file->errors();
}




?>
<html>
<head>
</head>
<body>

 <form action="" method="POST" enctype="multipart/form-data">
 
<div class="row">
                    <div class="col-md-6">
employee name:

<?= $form->textBox('ename',array('class'=>'form-control')); ?>
<?= $validator->error('ename'); ?>

</div>
</div>
<div class="row">
                    <div class="col-md-6">
salary:

<?= $form->textBox('sal',array('class'=>'form-control')); ?>
<?= $validator->error('sal'); ?>

</div>
</div>

<button type="submit" name="btn_insert"  >Submit</button>
</form>


</body>

</html>



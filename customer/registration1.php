



<!DOCTYPE html>
<html lang="en">



<head>

    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Au Register Forms by Colorlib</title>

    <!-- Icons font CSS-->
    <link href="reg/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="reg/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="reg/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="reg/vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="reg/css/main.css" rel="stylesheet" media="all">



</head>

<body>

<style type="text/css">
            .valErr{
                color:red!important;
            }
        </style>

<?php
require('../config/autoload.php'); 
$dao=new DataAccess();
$elements=array(
        "customername"=>"","email"=>"","password"=>"","address"=>"","pincode"=>"","phonenumber"=>"");


$form=new FormAssist($elements,$_POST);
//$file=new FileUpload();
$labels=array('customername'=>"Customer Name","email"=>"Email Id","password"=>"Password","address"=>"Address","pincode"=>"Pincode","phonenumber"=>"Phone Number");

$rules=array(
    "customername"=>array("required"=>true,"minlength"=>3,"maxlength"=>30,"alphaspaceonly"=>true),
    "email"=>array("required"=>true,"email"=>true,"unique"=>array("field"=>"uemail","table"=>"users")),
    "password"=>array("required"=>true),
    "address"=>array("required"=>true,"minlength"=>3,"maxlength"=>30,"alphaspaceonly"=>true),
    "pincode"=>array("required"=>true,"integeronly"=>true,"minlength"=>6,"maxlength"=>10),
    "phonenumber"=>array("required"=>true,"integeronly"=>true,"minlength"=>6,"maxlength"=>10),
);
    
    
$validator = new FormValidator($rules,$labels);

if(isset($_POST['register']))
{
    if($validator->validate($_POST))
    {
        // code for insertion 
		
        $data=array(
				'customername'=>$_POST['customername'],
				'email'=>$_POST['email'],
                'password'=>$_POST['password'],
                'address'=>$_POST['address'],
                'pincode'=>$_POST['pincode'],
				'phonenumber'=>$_POST['phonenumber'],
	
			);
			if($dao->insert($data,'customer'))
			{
				$msg="Inserted Successfully";
			}
			else
				$msg="insertion failed";
		}
		
		
		
		
    }

if(isset($_POST['home']))
{
echo "<script> alert('New zxx created successfully');</script> ";
   echo"<script> location.replace('viewcategory.php'); </script>";

}

?>




    <div class="page-wrapper bg-gra-01 p-t-180 p-b-100 font-poppins">
        <div class="wrapper wrapper--w780">
            <div class="card card-3">
                <div class="card-heading"></div>
                <div class="card-body">
                    <h2 class="title">Registration Info</h2>
                    <form method="POST">
                    
				
					<p><?php if(isset($msg)) echo $msg; ?></p>
                        <div class="input-group">
                             <?= $form->textBox('customername',array("placeholder"=>"Customer Name")); ?>
                           <span class="valErr"><?= $validator->error('customername'); ?></span>
                               
                               
                        </div>
                         <div class="input-group">
                             <?= $form->textBox('email',array("placeholder"=>"Email")); ?>
                           <span class="valErr"><?= $validator->error('email'); ?></span>
                               
                        </div>
                         <div class="input-group">
                             <?= $form->textBox('password',array("placeholder"=>"Password")); ?>
                           <span class="valErr"><?= $validator->error('password'); ?></span>
                               
                               
                        </div>
                         <div class="input-group">
                             <?= $form->textBox('address',array("placeholder"=>"Address")); ?>
                           <span class="valErr"><?= $validator->error('address'); ?></span>
                               
                               
                        </div>
                         <div class="input-group">
                             <?= $form->passwordbox('pincode',array("placeholder"=>"Pincode")); ?>
                           <span class="valErr"><?= $validator->error('pincode'); ?></span>
                               
                               
                        </div>
                        
                          <div class="input-group">
                             <?= $form->passwordbox('phonenumber',array("placeholder"=>"Phone Number")); ?>
                           <span class="valErr"><?= $validator->error('phonenumber'); ?></span>
                               
                        </div>
                        
                        
                        
                        
                        
                        
                      
                         
                        <div class="p-t-10">
                            <button class="btn btn--pill btn--green" name="register" type="submit">Register</button>
                               </div>
                                <div class="p-t-10">
                              <button class="btn btn--pill btn--green" name="home" type="submit">Home</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="reg/vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="reg/vendor/select2/select2.min.js"></script>
    <script src="reg/vendor/datepicker/moment.min.js"></script>
    <script src="reg/vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="reg/js/global.js"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->
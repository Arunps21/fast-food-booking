<?php 


include("oghead.php");
include("dbcon.php");
session_start();
$emailErr="";
if(isset($_POST["btn_insert"]))
{

if ($_POST["uname"]=="-Select-")
 {
   $emailErr = "Name is required";
  }
else
{	
 $_SESSION['email']=$_POST['uname'];
        
       
header('location:deliveryview.php');
   
}
}


?>
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>

 <form action="" method="POST" enctype="multipart/form-data">
 
User Name
<div class="row">
                    <div class="col-md-6">
<select name="uname">
<option>-Select-</option>
<?php

$sql="SELECT distinct email FROM booking where status=2";
$result = $conn->query($sql);;
while($row = $result->fetch_assoc())
{
?>
  <option value='<?php echo $row["email"];?>'><?php echo $row["email"]; ?></option>
<?php
}
?>
  </select>
<span class="error">* <?php echo $emailErr;?></span>
</div>
</div>
<br>
<br>

<br>
<br>
<button type="submit" name="btn_insert"  >Submit</button>
</form>


</body>

</html>



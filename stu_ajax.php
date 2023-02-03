<?php
header('content-Type:application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Method: POST');
$stu_mobile=$_POST["mobile"];
$con = mysqli_connect('localhost', 'root', '2000', 'php_project1');
// $query = "select * from tbl_registered where mobile='$stu_mobile'";
$query="SELECT * FROM `tbl_registered` WHERE mobile='$stu_mobile'";
$result=mysqli_query($con,$query) or die("SQL query failed");
if(mysqli_num_rows($result)>0)
{
    $output = mysqli_fetch_all($result, MYSQLI_ASSOC);
    
    // returns res in json  form
    echo json_encode($output);
}

// if num of rows is zero then 
else
{
   
    echo json_encode(array('msg' => "You are not eligible to fill this form!", 'status' => false));
}

?>









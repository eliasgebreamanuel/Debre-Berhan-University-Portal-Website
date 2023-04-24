<?php
$host = 'sql313.epizy.com';
$username = 'epiz_33930639';
$password = 'IVtWt2O8jsDNz';
$db_name = 'epiz_33930639_dbu';
$conn = mysqli_connect($host,$username,$password,$db_name);
if($conn){
    // echo "Successfuly Connected";
}else{
  //  die(mysqli_error($conn));
}
?>
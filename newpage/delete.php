<?php
include("confi.php");
$id=$_GET['id'];
$result = mysqli_query($mysqli,"Delete from contactinformation where id = $id");
if($result)
{
   echo"Delete Record Successfully";
}
else
{
    echo"falied";
}
?>
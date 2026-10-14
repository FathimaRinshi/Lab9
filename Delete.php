<?php
require "db.php";
$pid=$_GET['id'];
$res=mysqli_query($conn,"delete from product where pid=$pid");
if($res)
{
    header("location:view.php");
}
?>

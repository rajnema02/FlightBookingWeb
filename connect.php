<?php
$con=new mysqli('localhost','root','','project');

if(!$con){
    echo "Connection successfull";
    die(mysqli_error($con));
}
?>
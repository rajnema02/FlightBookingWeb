<?php
include 'connect.php';
if(isset($_GET['deleteid'])){
    $fid=$_GET['deleteid'];

    $sql="delete from `flight` where fid=$fid";
    $result=mysqli_query($con,$sql);
    if($result){
        // echo "Deleted Successfully";
        header('location:display_flight1.php');
    }
    else{
        die(mysqli_error($con));
    }
}

?>
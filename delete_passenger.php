<?php
include 'connect.php';
if(isset($_GET['deleteid'])){
    $pid=$_GET['deleteid'];

    $sql="delete from `passenger` where pid=$pid";
    $result=mysqli_query($con,$sql);
    if($result){
        // echo "Deleted Successfully";
        header('location:display_passenger.php');
    }
    else{
        die(mysqli_error($con));
    }
}

?>
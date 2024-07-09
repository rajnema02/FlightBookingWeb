<?php
include 'connect.php';
if(isset($_GET['deleteid'])){
    $aid=$_GET['deleteid'];

    $sql="delete from `agency` where aid=$aid";
    $result=mysqli_query($con,$sql);
    if($result){
        // echo "Deleted Successfully";
        header('location:display_agency.php');
    }
    else{
        die(mysqli_error($con));
    }
}

?>
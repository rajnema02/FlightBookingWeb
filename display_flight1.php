<?php
include 'connect.php'; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="Passenger.css">
</head>
<body>
<div id="nav">
        <img src="images/Logo.jpg">
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="passenger.php">Booking</a></li>
            <li><a href="#">Agency</a></li>
            <li><a href="#">Contact Us</a></li>
        </ul>
        <input type="text" placeholder="Looking for something specific...">
        <button>log In</button>
    </div>
    <div class="container">
        <button class="btn btn-primary my-5"><a href="flight.php" class="text-light">Insert User</a></button>
        <button class="btn btn-primary my-5"><a href="display_passenger.php" class="text-light">passenger table</a></button>
        <button class="btn btn-primary my-5"><a href="display_agency.php" class="text-light">agency table</a></button>
        <button class="btn btn-primary my-5"><a href="display_flight1.php" class="text-light">flight table</a></button>

        
    <table class="table">
        <thead>
            <tr>
            <th scope="col">fid</th>
            <th scope="col">fdate</th>
            <th scope="col">ftime</th>
            <th scope="col">src</th>
            <th scope="col">dest</th>
            <th scope="col">operation</th>
            </tr>
        </thead>
        
        <?php
        $sql='Select * from `flight` ';
        $result=mysqli_query($con,$sql);
        if($result){
            // $row=mysqli_fetch_assoc($result);
            // echo $row['pid'];
            // $row=mysqli_fetch_assoc($result);
            // echo $row['pgender'];
            while($row=mysqli_fetch_assoc($result)){
                $fid=$row['fid'];
                $fdate=$row['fdate'];
                $ftime=$row['ftime'];
                $src=$row['src'];
                $dest=$row['dest'];
                


                echo '<tr>
                <th scope="row">'.$fid.'</th>
                <td>'.$fdate.'</td>
                <td>'.$ftime.'</td>
                <td>'.$src.'</td>
                <td>'.$dest.'</td>

                <td>
                    <button class="btn btn-primary"><a href="update_flight.php?updateid='.$fid.'" class="text-light" >Update</a></button>
                    <button class="btn btn-danger"><a href="delete_flight.php?deleteid='.$fid.'" class="text-light">Delete</a></button>
                </td>
                </tr>';
            }
        }
        ?>
    
    </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
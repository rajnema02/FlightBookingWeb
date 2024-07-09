
<?php
include 'connect.php';
if(isset($_POST['submit'])){
    $fid=$_POST['fid'];
    $fdate=$_POST['fdate'];
    $ftime=$_POST['ftime'];
    $src=$_POST['src'];
    $dest=$_POST['dest'];

    $sql= "INSERT INTO  `flight` (`fid`,`fdate`,`ftime`,`src`, `dest`)
            VALUES ('$fid', '$fdate', '$ftime', '$src','$dest')";


    $result=mysqli_query($con ,$sql);
    if($result){
    //   echo "Data inserted successfully";
      header('location:display_flight1.php');
    }
    else{
      die(mysqli_error($con));
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="Passenger.css">
</head>
<body>
    <div id="main">
        <div id="nav">
            <img src="images/Logo.jpg">
            <ul>
                <li><a href="home.html">Home</a></li>
                <li><a href="Passenger.php">Booking</a></li>
                <li><a href="#">Agency</a></li>
                <li><a href="#">Contact Us</a></li>
            </ul>
            <input type="text" placeholder="Looking for something specific...">
            <button>Log In</button>
        </div>
        <div id="part1"></div>
        <div id="part2">
            <div id="text"><h3><i>Find and Book <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   A great Experiance...</h3></i></div>
            <div id="image">
                <h2>Flight Details:-</h2>
                <form action="flight.php" method="post">
                    <label for="pass">Flight-id:</label>
                    <input type="text" name="fid" placeholder="Passenger-id"  readonly>
                    <label for="Date">Flight-date:</label>
                    <input type="date" id="Date"  name="fdate" placeholder="mm/dd/yyyy" required >
                    <label for="Time">Flight-time:</label>
                    <input type="time" id="Time" name="ftime" placeholder="flight-time" required >
                    <br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <label for="depart">From:</label>
                    <input type="text" id="depart" name="src" placeholder="Departure" required>
                    <label for="desti">To:</label>
                    <input type="text" id="desti" name="dest" placeholder="Destination" required>
                    <br>
                    <!-- &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input id ="btn" type="submit"> -->
                    <!-- <button class="bu" type="submit" name="submit">submit</button> -->
                    <div id="btn">
                        <!-- <button><a href="Flight.html">Next</a></button> -->
                        <button class="bu" type="submit" name="submit">submit</button>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

<?php
include 'connect.php';
$fid = $_GET['updateid'];
$sql = "SELECT * FROM `flight` WHERE fid='$fid'";
$result = mysqli_query($con,$sql);
$row = mysqli_fetch_assoc($result);
$fid=$row['fid'];
$fdate=$row['fdate'];
$ftime=$row['ftime'];
$src=$row['src'];
$dest=$row['dest'];

if(isset($_POST['submit'])){
    $fid=$_POST['fid'];
    $fdate =$_POST['fdate'];
    $ftime=$_POST['ftime'];
    $src=$_POST['src'];
    $dest=$_POST['dest'];

    $sql="UPDATE `flight` set fid='$fid', fdate='$fdate', ftime='$ftime', src='$src',dest='$dest' WHERE fid=$fid";

    $result=mysqli_query($con ,$sql);
    if($result){
    //   echo "updated inserted successfully";
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
    <link rel="stylesheet" href="Flight.css">
</head>
<body>
    <div id="main">
        <div id="nav">
            <img src="images/Logo.jpg">
            <ul>
                <li><a href="home.html">Home</a></li>
                <li><a href="Passenger.html">Booking</a></li>
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
                <form action="update_flight.php" method="post">
                    <label for="pass">Flight-id:</label>
                    <input type="text" name="fid" placeholder="Passenger-id" value="<?=$fid; ?>" readonly>
                    <label for="Date">Flight-date:</label>
                    <input type="date" id="Date"  name="fdate" placeholder="mm/dd/yyyy" value="<?=$fdate;?>">
                    <label for="Time">Flight-time:</label>
                    <input type="time" id="Time" name="ftime" placeholder="time" value=<?=$ftime;?>>
                    <br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <label for="depart">From:</label>
                    <input type="text" id="depart" name="src" placeholder="Departure" value=<?=$src;?>>
                    <label for="desti">To:</label>
                    <input type="text" id="desti" name="dest" placeholder="Destination" value=<?=$dest;?>>
                    <br>
                    <!-- &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input id ="btn" type="submit"> -->
                    <button class="bu" type="submit" name="submit">submit</button>
                </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
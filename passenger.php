
<?php
include 'connect.php';
if(isset($_POST['submit'])){
    $pid=$_POST['pid'];
    $pname=$_POST['pname'];
    $pgender=$_POST['pgender'];
    $pcity=$_POST['pcity'];

    $sql= "INSERT INTO  `passenger` (`pid`,`pname`,`pgender`,`pcity`)
            VALUES ('$pid', '$pname', '$pgender', '$pcity')";


    $result=mysqli_query($con ,$sql);
    if($result){
    //   echo "Data inserted successfully";
      header('location:display_passenger.php');
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
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
                <h2>Passenger Details:-</h2>
                <form action="passenger.php" method="post">
                    <label for="pass">Passenger-id:</label>
                    <input type="text" name="pid"  placeholder="Passenger-id" required>
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="pname" placeholder="Enter Passenger name" required>
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <label for="select">Gender:</label>
                    <input type="text" id="select"name="pgender" placeholder="Passenger-gender" required>
                    <!-- <label for="select">Gender: </label>
                    <select id="select" name="pgender" value=>
                        <option >Select Gender</option>
                        <option >Male</option>
                        <option >Female</option>
                        <option >Other</option>
                    </select required> -->
                    <label for="pass">Passenger-city:</label>
                    <input type="text" id="pass" name="pcity" placeholder="Passenger-city" required>
                    <!-- <input type="submit" name="submit" placeholder="submit"> -->
                    <div id="btn">
                        <!-- <button><a href="agency.php">Next</a></button> -->
                        <button type="submit" name="submit">submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="booking.js"></script>
</body>
</html>
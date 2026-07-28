<?php

include "php/config.php";

$pnr = $_GET['pnr'];

$sql = "SELECT * FROM reservations WHERE pnr='$pnr'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

    $row = $result->fetch_assoc();

} else {

    die("Ticket Not Found!");

}

?>
<!DOCTYPE html>
<html>

<head>

<title>Ticket</title>

<link rel="stylesheet" href="css/style.css">

</head>

<body>

<div class="container">

<div class="login-box">

<h1>🎫 Ticket Confirmed</h1>

<hr><br>

<p><b>PNR Number :</b> <?php echo $row['pnr']; ?></p>

<p><b>Passenger :</b> <?php echo $row['passenger_name']; ?></p>

<p><b>Age :</b> <?php echo $row['age']; ?></p>

<p><b>Gender :</b> <?php echo $row['gender']; ?></p>

<p><b>Train Number :</b> <?php echo $row['train_number']; ?></p>

<p><b>Train Name :</b> <?php echo $row['train_name']; ?></p>

<p><b>Source :</b> <?php echo $row['source']; ?></p>

<p><b>Destination :</b> <?php echo $row['destination']; ?></p>

<p><b>Date :</b> <?php echo $row['journey_date']; ?></p>

<p><b>Class :</b> <?php echo $row['class']; ?></p>

<br>

<button onclick="window.print()">

Print Ticket

</button>

</div>

</div>

</body>

</html>
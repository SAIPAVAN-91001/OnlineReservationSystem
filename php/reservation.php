<?php

include "config.php";

// Get form data
$passenger = $_POST['passenger'];
$age = $_POST['age'];
$gender = $_POST['gender'];
$trainno = $_POST['trainno'];
$trainname = $_POST['trainname'];
$source = $_POST['source'];
$destination = $_POST['destination'];
$journeydate = $_POST['journeydate'];
$class = $_POST['class'];

// Generate Random 6-digit PNR
$pnr = rand(100000, 999999);

// Insert into Database
$sql = "INSERT INTO reservations
(pnr, passenger_name, age, gender, train_number, train_name, source, destination, journey_date, class)
VALUES
('$pnr','$passenger','$age','$gender','$trainno','$trainname','$source','$destination','$journeydate','$class')";

// Execute Query
if ($conn->query($sql) == TRUE) {

    header("Location: ../ticket.php?pnr=".$pnr);
    exit();

} else {

    die("Database Error: " . $conn->error);

}

$conn->close();

?>
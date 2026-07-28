<?php

include "config.php";

$pnr = $_POST['pnr'];

$sql = "SELECT * FROM reservations WHERE pnr='$pnr'";

$result = $conn->query($sql);

if($result->num_rows > 0){

    $delete = "DELETE FROM reservations WHERE pnr='$pnr'";

    if($conn->query($delete)==TRUE){

        echo "
        <script>
        alert('Ticket Cancelled Successfully');
        window.location='../dashboard.html';
        </script>
        ";

    }

}else{

    echo "
    <script>
    alert('PNR Number Not Found');
    window.location='../cancellation.html';
    </script>
    ";

}

$conn->close();

?>
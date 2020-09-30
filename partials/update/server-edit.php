<?php
include __DIR__ . '/../database.php';
include __DIR__ . '/../env.php';


$sql = "UPDATE stanze SET room_number = ?, floor = ?, beds = ? WHERE id = ?";
// uso i placeholder

$stmt = $conn->prepare($sql);
$stmt->bind_param("iiii", $roomNumber, $piano, $letti, $id); //qui sono ancora segnaposto

$roomNumber = $_POST['roomNumber'];
$piano = $_POST['floor'];
$letti = $_POST['beds'];
$id = $_POST['id'];

$stmt->execute();

// var_dump($stmt);
var_dump($basepath);
//affected_rows restituisce 1 per modifica fatta, 0 per non fatta, -1 per modifica impossibile
if($stmt && $stmt->affected_rows > 0) { 
    header("location: $basepath/show.php?id=$id");
    die();
} elseif ($stmt->affected_rows < 0) {
    echo "impossibile effettuare la modifica";
} else {
    echo "nessuna modifica effettuata";
}



// $conn->close();

?>

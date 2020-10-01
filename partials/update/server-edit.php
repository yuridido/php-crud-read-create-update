<?php
include __DIR__ . '/../database.php';


$sql = "UPDATE stanze SET room_number = ?, floor = ?, beds = ?, updated_at = NOW() WHERE id = ?";
// uso i placeholder

$stmt = $conn->prepare($sql);
$stmt->bind_param("iiii", $roomNumber, $piano, $letti, $id); //qui sono ancora segnaposto

$roomNumber = $_POST['roomNumber'];
$piano = $_POST['floor'];
$letti = $_POST['beds'];
$id = $_POST['id'];

$stmt->execute();

var_dump($basepath);
// var_dump($id);
// affected_rows restituisce 1 per modifica fatta, 0 per non fatta, -1 per modifica impossibile


 if ($stmt && $stmt->affected_rows > 0) {
     header("Location: $basepath/show.php?id=$id");
} elseif ($stmt->affected_rows == 0)  {
     header("Location: $basepath/update.php?id=$id");
} else  {
     header("Location: $basepath/update.php?id=$id");
}



$conn->close();

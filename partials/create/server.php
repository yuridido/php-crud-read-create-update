<?php
include __DIR__ . '/../database.php';

if (empty($_POST['roomNumber'])) {
    die('non hai inserito il numero della stanza');
}

if (empty($_POST['floor'])) {
    die('non hai inserito il numero del piano');
}

if (empty($_POST['beds'])) {
    die('non hai inserito il numero di letti');
}

$sql = "INSERT INTO stanze (room_number, floor, beds, created_at, updated_at) VALUES(?, ?, ?, NOW(), NOW())";

$stmt = $conn->prepare($sql);
$stmt->bind_param("iii", $roomNumber, $piano, $letti );
// potrei anche mettere direttamente il valore nei bind_param
// bind_param mi restituisce un valore booleano
$roomNumber = $_POST['roomNumber'];
$piano = $_POST['floor'];
$letti = $_POST['beds'];

$stmt->execute();
// var_dump($stmt);
// $id = $stmt->insert_id;


// var_dump($basepath);

 if ($stmt && $stmt->affected_rows > 0) {
     header("Location: $basepath/show.php?id=$stmt->insert_id");
 }






$stmt->close();
$conn->close();

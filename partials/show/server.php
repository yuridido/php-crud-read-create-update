<?php
include __DIR__ . '/../database.php';
include __DIR__ . '/../functions.php';

if (empty($_GET['id'])) {
    die('nessun id');
}

$id = $_GET['id'];

$row = getId($conn, 'stanze', $id);








// $sql = "SELECT id, room_number, floor, beds FROM stanze WHERE id = $id";
// $result = $conn->query($sql);
// if ($result && $result->num_rows > 0) {
//     $results = [];
//     $row = $result->fetch_assoc();
//     // NON SERVE IL CICLO WHILE PERCHè AVRò SEMPRE UNA SOLA RIGA
// } elseif ($result) {
//     echo "0 results";
// } else {
//     echo "query error";
// }

// $conn->close();


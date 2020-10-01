<?php
include __DIR__ . '/../database.php';
include __DIR__ . '/../functions.php';


// salvo il return in una variabile
$results = getAll($conn, 'stanze');





// $sql = "SELECT id, room_number, floor FROM stanze";
// $result = $conn->query($sql);
// if ($result && $result->num_rows > 0) {
//     $results = [];
//     while($row = $result->fetch_assoc()) {
//         $results[] = $row;
//     }
// } elseif ($result) {
//     echo "0 results";
// } else {
//     echo "query error";
// }

// $conn->close();


<?php
include __DIR__ . '/../database.php';

if (empty($_POST['id'])) {
    die('nessun id');
}

$id = $_POST['id'];

$sql = "DELETE FROM stanze WHERE id = ?";
// $result = $conn->query($sql);
// preparo la query con valore placeholder (?) e dichiaro che tipo di dato è (i o s)
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $id);

// gli passo l'id e lo eseguo
$id = $_POST['id'];
$stmt-> execute();

if ($stmt && $stmt->affected_rows > 0) {
    header("location: $basepath/index.php?roomId=id");
} else {
    echo "non ho cancellato";
}


$conn->close();


?>

<?php 
// le variabili esterne non sono visibili all'interno della funzione e vanno passati come argomento
// $conn è un valore segnaposto!!!
function getAll($conn, $table) {
    $sql = "SELECT * FROM $table";
    $result = $conn->query($sql);
    
    if ($result && $result->num_rows > 0) {
        $results = [];
        while($row = $result->fetch_assoc()) {
            $results[] = $row;
        }
    } elseif ($result) {
        $results = [];
    } else {
        $results = false;
    }

$conn->close();
return $results;
}


function removeId($conn, $table, $id, $basepath) {
    $sql = "DELETE FROM $table WHERE id = ?";
    
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);

    $stmt-> execute();

    if ($stmt && $stmt->affected_rows > 0) {
        header("location: $basepath/index.php?roomId=$id");
    } else {
        echo "non ho cancellato";
    }

    $stmt->close();
    $conn->close();

}


function getId($conn, $table, $id) {
    $sql = "SELECT * FROM $table WHERE id = $id";
    $result = $conn->query($sql);
    
    if ($result && $result->num_rows > 0) {
        $results = [];
        $row = $result->fetch_assoc();
        // NON SERVE IL CICLO WHILE PERCHè AVRò SEMPRE UNA SOLA RIGA
    } elseif ($result) {
        $row = "";
    } else {
        $row = false;
    }

    $conn->close();
    return $row;
}
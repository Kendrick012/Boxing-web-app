<?php
include 'db_connect.php';

$sql = "SELECT name, height, reach, stance, image FROM boxers";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<div class='card'>";
        echo "<img src='" . $row["image"] . "' alt='" . $row["name"] . "' style='width:100%; height:auto;'>";
        echo "<h2>" . $row["name"] . "</h2>";
        echo "<p>Height: " . $row["height"] . "</p>";
        echo "<p>Reach: " . $row["reach"] . "</p>";
        echo "<p>Stance: " . $row["stance"] . "</p>";
        echo "</div>";
    }
} else {
    echo "No boxers found.";
}

$conn->close();
?>

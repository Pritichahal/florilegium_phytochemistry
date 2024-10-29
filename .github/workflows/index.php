<?php
include 'db_connect.php';

// Fetch data from Table D
$sql = "SELECT * FROM IDS";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>IDS</title>
</head>
<body>
    <h1>IDS</h1>
    <table border="1">
        <tr>
            <th>IDS_ID</th>
            <th>Details</th>
        </tr>
        <?php
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["IDS_ID"] . "</td>";
                echo "<td><a href='details.php?IDS_ID=" . $row["IDS_ID"] . "'>View Details</a></td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='2'>No records found</td></tr>";
        }
        ?>
    </table>
</body>
</html>

<?php
$conn->close();
?>

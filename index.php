<?php
$conn = new mysqli("localhost:3306", "root", "root", "db_task");;
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  } 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To do List</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Tache</th>
            </tr>
        </thead>
            <?php
            $query = $conn->query("SELECT * FROM task");
            if ($query->num_rows > 0) {
                while($row = $query->fetch_assoc()) {
                  echo "".$row["id"]. " - " . $row["name"]. "<br>";
                }
              } else {
                echo "0 results";
              }
              $conn->close();
            ?>
    </table>
    <form action="">
        <input type="text" placeholder="une tache">
        <button>Add</button>
    </form>
</body>
</html>
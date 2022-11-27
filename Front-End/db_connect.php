<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "charsearch";

// Create connection
$conn = mysqli_connect($servername, $username, $password);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
$sql = "SELECT id, firstname, lastname FROM MyGuests";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
  }
} else {
  echo "0 results";
}

mysqli_close($conn);
        $sql = $conn;
        $insert = insert into charbase values();
        $delete = drop column;
        $display = select * from charbase;
        $edit = alter table from charbase where column;
        $search = select * from series where ;
?>


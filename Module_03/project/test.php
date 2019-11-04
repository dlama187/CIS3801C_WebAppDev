<?php
include 'mod3_config.php';
include 'mod3_opendb.php';

$sql= "SELECT name, rating, runtime FROM movies LIMIT 10";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  //output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    echo "name: " . $row["name"]. "<br>";
    echo "rating: " . $row["rating"]. "<br>";
    echo "runtime: " . $row["runtime"]. "<br><hr>";
  }
} else {
  echo "0 results";
}

mysqli_close($conn);

?>

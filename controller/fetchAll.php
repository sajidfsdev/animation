<?php
    function fetchAnimationInfo()
    {
        $servername = "localhost";
$username = "root";
$password = "";
$dbname = "animation";
$animationData=array();

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM animation";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    $animationData["delayanimation"]=$row["delayanimation"];
    $animationData["repeatanimation"]=$row["repeatanimation"];
    $animationData["classanimation"]=$row["classanimation"];
    $animationData["price"]=$row["price"];
}
return $animationData;
} else {
  return null;
}
$conn->close();
    }
?>
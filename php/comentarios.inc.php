<?php
function setComentarios($conn) {

  if (isset($_POST["commentSubmit"])) {

    $uid = $_POST["uid"];
    $date = $_POST["date"];
    $message = $_POST["message"];

    $sql = "INSERT INTO comments (uid, date, message) VALUES ('".$uid."', '".$date."', '".$message."')";
    $result = $conn->query($sql);
    return;
  }
}

function fecha(){
  date_default_timezone_set("America/Argentina/Cordoba");
  $fecha = date("Y-m-d H:i:s");
  return $fecha;
}

function getComentarios($conn){
  $sql = "SELECT * FROM comments";
  $result = $conn->query($sql);
  while($row = mysqli_fetch_assoc($result)){
    echo "<div><p class='texto-parrafo'>";

      echo $row["uid"]."<br>";
      echo $row["date"]."<br>";
      echo $row["message"]."<br><br>";

    echo "</p></div>";
    echo "<hr>";
  }
}
?>

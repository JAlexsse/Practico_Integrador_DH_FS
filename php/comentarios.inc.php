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
    echo "<div class='position-relative'>";
      echo "<p class='text-muted texto-parrafo'>";
        echo $row["uid"]." ";
        echo $row["date"]."<br>";
      echo "</p>";
      echo "<p class='texto-parrafo'>";
        echo nl2br($row["message"]);
      echo "</p>";
      echo "<div class='overflow-hidden'><form class='float-left mr-1' method='post' action='".deleteComentarios($conn)."'>
              <input type='hidden' name='cid' value='".$row["cid"]."'>
              <button type='submit' class='btn btn-outline-dark' name='commentDelete'>Borrar</button>
              </form>
              <form class='float-left' method='post' action='editcomentarios.php'>
              <input type='hidden' name='cid' value='".$row["cid"]."'>
              <input type='hidden' name='uid' value='".$row["uid"]."'>
              <input type='hidden' name='date' value='".$row["date"]."'>
              <input type='hidden' name='message' value='".$row["message"]."'>
              <button class='btn btn-outline-dark' >Editar</button>
            </div></form>";
    echo "</div>";
    echo "<hr>";
  }
}

function editComentarios($conn) {

  if (isset($_POST["commentSubmit"])) {

    $cid = $_POST["cid"];
    $uid = $_POST["uid"];
    $date = $_POST["date"];
    $message = $_POST["message"];

    $sql = "UPDATE comments SET message='$message' WHERE cid='$cid'";
    $result = $conn->query($sql);
  }
}

function deleteComentarios($conn) {

  if (isset($_POST["commentDelete"])) {

    $cid = $_POST["cid"];

    $sql = "DELETE FROM comments WHERE cid='$cid'";
    $result = $conn->query($sql);
  }
}
?>

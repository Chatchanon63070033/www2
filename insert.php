<?php

$conn = mysqli_init();
mysqli_real_connect($conn, 'markererer.mysql.database.azure.com', 'Chatchanon@markererer', 'Swaggac05', 'ITF-marklab', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}


$name = $_POST['name'];
$comment = $_POST['Comment'];
$link = $_POST['link'];


$sql = "INSERT INTO guestbook (name , Comment , link) VALUES ('$name', '$comment', '$link')";


if (mysqli_query($conn, $sql)) {
    header("location:show.php")
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
  
mysqli_close($conn);
?>

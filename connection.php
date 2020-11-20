<?php
$conn = mysqli_init();
mysqli_real_connect($conn, 'markererer.mysql.database.azure.com', 'Chatchanon@markererer', 'Swaggac05', 'ITF-marklab', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}
$res = mysqli_query($conn, 'SELECT * FROM guestbook');
?>

<html>
<head>
<title>ITF Lab</title>
</head>
<body>
<?php
$conn = mysqli_init();
mysqli_real_connect($conn, 'markererer.mysql.database.azure.com', 'Chatchanon@markererer', 'Swaggac05', 'ITF-marklab', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}
$res = mysqli_query($conn, 'SELECT * FROM guestbook');
?>
<table width="600" border="1">
  <tr>
    <th width="100"> <div align="center">name</div></th>
    <th width="350"> <div align="center">Comment </div></th>
    <th width="150"> <div align="center">link </div></th>
  </tr>
<?php
while($Result = mysqli_fetch_array($res))
{
?>
  <tr>
    <td><?php echo $Result['name'];?></div></td>
    <td><?php echo $Result['Comment'];?></td>
    <td><?php echo $Result['link'];?></td>
  </tr>
<?php
}
?>
</table><a href=“form.php”><button type="button" class="btn btn-success">add</button></a>
<?php
mysqli_close($conn);
?>
</body>
</html>

<?php

require_once("connection.php");

if(isset($_POST['update']))
{
    if(empty($_POST['name']) || empty($_POST['comment']) || empty($_POST['link']))
    {
        echo ' Please Fill in the Blanks ';
    }
    else
    {
        $UserID = $_GET['ID'];
        $FixName = $_POST['name'];
        $FixComment = $_POST['comment'];
        $FixLink = $_POST['link'];

        $query = "UPDATE guestbook SET NAME='".$FixName."', Comment='".$FixComment."', Link='".$FixLink."' where ID='".$UserID."'";
        $result = mysqli_query($conn,$query);

        if($result)
        {
            header("location:show.php");
        }
        else
        {
            echo '  Please Check Your Query ';
        }
    }
}
else
{
    header("location:index.php");
}



?>

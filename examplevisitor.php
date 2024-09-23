<?php

$id=$_GET['id'];
$id=mysqli_real_escape_string($conn,$id);
$id=htmlentities($id);
$sql="select * from news where id=$id limit 1";
$res=mysqli_query($conn,$sql);
if(mysqli_fetch_assoc($res))
{
    $views=$x['views'];
    $sql="update news set views=$views+1 where id=$id";
    $res=mysqli_query($conn,$sql);
}

else{
    header("Location: undex.php");
}
?>
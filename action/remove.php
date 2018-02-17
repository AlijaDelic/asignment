<?php
if (isset($_GET['id'])){
    $id=$_GET['id'];
    require ('connection.php');
    $q=mysqli_query($conn, "DELETE FROM players WHERE id={$id}");
    header("location: ../delete.php");
}
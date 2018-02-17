<?php

if (isset($_POST['submit'])) {
    if (isset($_POST['fname']) && isset($_POST['lname']) && isset($_POST['img']) && isset($_POST['position'])) {
        if (!empty($_POST['fname']) && !empty($_POST['lname']) && !empty($_POST['img']) && !empty($_POST['position'])) {
            $fname = trim($_POST['fname']);
            $lname = trim($_POST['lname']);
            $img = trim($_POST['img']);
            $position = trim($_POST['position']);
            require('connection.php');
            $q = mysqli_query($conn, "INSERT INTO players (id, fname , lname , img , position) VALUE (NULL ,'{$fname}','{$lname}','{$img}','{$position}')");
            if ($q === TRUE) {
                echo "<p class='positive_respond'>Sucesfuly added to DB<br> <a href='add.php'>Add another one</a> or go <a href='index.php'>Back</a> </p>";
            } else {
                echo "<p class='respond'>There was problems. Not added to DB</p>";
            }
        }else{
            echo "<p class='respond'>You must fill in all fileds!</p>";
        }
    } else {
        echo "<p class='respond'>All parametars must be sent!</p>";
    }
}
mysqli_close($conn);


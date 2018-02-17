<?php
?>
<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <link href="style.css" rel="stylesheet" type="text/css">
    <title>Assignment</title>
</head>
<body>
<div id="wraper">
    <h1>WELCOME TO MY SITE</h1>
    <p>Here You can delete data from DB!<br>
    Or You can go <a href="index.php">back</a> !!</p>
    <?php
    require('action/connection.php');
    $q = mysqli_query($conn, "SELECT * FROM players");
    if (mysqli_num_rows($q) > 0){
    while ($rw = mysqli_fetch_assoc($q)){
    $img = $rw['img'];
    $fname = $rw['fname'];
    $lname = $rw['lname'];
    $id = $rw['id'];
    $position = $rw['position'];
    ?>
    <div class="show">

        <img src="<?= $img ?>" alt="<?= $fname ?>">
        <a href="action/remove.php?id=<?=$id?> "> DELETE </a>
        <table>
            <tr>
                <th>ID</th>
                <td><?= $id ?></td>
            </tr>
            <th>First Name</th>
            <td><?= $fname ?></td>
            </tr>
            <th>Second Name</th>
            <td><?= $lname ?></td>
            </tr>
            <th>Position</th>
            <td><?= $position ?></td>
            </tr>
            </tr>
        </table>

        <br>

    </div>

    <?php
    }
    mysqli_close($conn);

    }else{
        echo "NO DATA";
    }
    ?>
</div>
</div>
</body>


</html>
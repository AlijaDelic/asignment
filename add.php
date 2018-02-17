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
    <p>Here You can add data to DB. Please fill out all the fields.</p>

    <form method="post" action="add.php" id="insert">

        <label for="fname">Enter players First Name: </label> <input type="text" name="fname"> <br>

        <label for="lname">Enter players Last Name: </label> <input type="text" name="lname"> <br>

        <label for="img">Insert players image: </label> <input type="text" name="img"> <br>

        <label for="position">Position: </label>

        <select name="position" form="insert">

            <?php
            require('action/connection.php');
            $q = mysqli_query($conn, "SELECT * FROM players ");
            while ($rw = mysqli_fetch_assoc($q)) {
                $position = $rw[position];
                echo "<option value='{$position}'>{$position}</option>";
            }

            ?>
        </select>
        <br>

        <input type="submit" name="submit" value="Submit">

    </form>
    <p>OR just go <a href="index.php">back</a> ?!</p>
    <?php
    require ('action/addproces.php');
    ?>
</div>
</body>


</html>
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
    <p>Select position!</p>
    <p>Or go <a href="index.php">BACK</a>??</p>


    <form>
        <input type="submit" name="filter" value="ALL">
        <input type="submit" name="filter" value="GK">
        <input type="submit" name="filter" value="DEF">
        <input type="submit" name="filter" value="MID">
        <input type="submit" name="filter" value="ATT">
    </form>


    <?php

    require ('action/filterSelection.php');

    ?>
</div>
</body>


</html>
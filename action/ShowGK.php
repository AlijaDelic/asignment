<?php

function ShowGK(){
    $conn = mysqli_connect("localhost", "root", "", "manutd");
    if (mysqli_connect_errno($conn)){
        die("Not connected!!");
    }
    $q=mysqli_query($conn, "SELECT * FROM players WHERE position LIKE 'GK'");
while ($rw = mysqli_fetch_assoc($q)) {
    $img = $rw['img'];
    $fname = $rw['fname'];
    $lname = $rw['lname'];
    $id = $rw['id'];
    $position = $rw['position'];
    ?>
    <div class="show">
        <img src="<?= $img ?>" alt="<?= $fname ?>">
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
}


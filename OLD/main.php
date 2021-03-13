<?php
    require 'includes/db.inc.php';
    $conn = openCon();
    $res = $conn->query("SELECT * FROM merce");
    while ($row = mysqli_fetch_assoc($res)) {
        echo $row['descrizione'];
    }
?>


<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>E-commerce</title>
</head>

<body>
    <div class="finestra-principale">
        <fieldset>
            <legend>ciao</legend>
            <img src="images" alt="">
        </fieldset>

    </div>
</body>

</html>

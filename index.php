<?php

require_once "./functions.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Raccolta Musicale</title>
</head>
<body>
    <h1>Raccolta Musicale</h1>

    <ul>
        <?php
        foreach($records as $record) {
            echo "<li>" . $record['title'] . " - " . $record['artist'] . "</li>";
        }
        ?>
    </ul>
</body>
</html>
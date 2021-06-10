<!DOCTYPE html>
<html lang='fr'>
	<head>
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>PHP ex 5.10 tableau</title>
    </head>
    <body>
        <p>Should receive parameters with the GET method</p>
        <?php
            $lastName=$_GET["lastname"];
            $firstName=$_GET["firstname"];
        ?>
        <p>test_url.php?lastname=<?= $lastName ?>&firstname=<?= $firstName ?></p>
    </body>
</html>
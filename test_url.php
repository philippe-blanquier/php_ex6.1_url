<!DOCTYPE html>
<html lang='fr'>
	<head>
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>PHP ex 6.1 URL Server</title>
    </head>
    <body>
        <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST')
        {
            $lastName=$_POST['lastname'];
            $firstName=$_POST['firstname'];
            $usedMethod='POST';
        }
        else
        {
            $usedMethod='GET';
            $lastName=$_GET['lastname'];
            $firstName=$_GET['firstname'];
        }
       ?>
        <p>Should receive parameters with the <?= $usedMethod ?> method</p>
        <p>test_url.php?lastname=<?= $lastName ?>&firstname=<?= $firstName ?></p>
    </body>
</html>
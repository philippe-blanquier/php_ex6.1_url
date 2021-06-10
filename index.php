<!DOCTYPE html>
<html lang="fr">
	<head>
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>PHP ex 5.10 tableau</title>
    </head>
    <body >
        <!--
        /*  Faire une page index.php. 
            Tester sur cette page que tous les paramètres de cette URL existent et les afficher : 
                index.php?lastname=Nemare&firstname=Jean
        */
        -->
        <p>Veuillez vous identifier</p>
        <form action="test_url.php" methode="get">
            <label for="lastname">Nom :</label>
			<input type="string" name="lastname" placeholder="nom" required>
            <label for="firstname">Prénom :</label>
			<input type="string" name="firstname" placeholder="prénom" required>
            <input type="submit" value="OK">
        </form>
    </body>
</html>
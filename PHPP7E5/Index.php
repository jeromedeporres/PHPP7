<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <meta charset="utf-8"/>
    <title>PHPP7EXO05</title>
    <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div>
            <form action='Index.php' method='get'>
                <label for="civilité">Civilité:</label>
                <select name="civilité" id="civilité">
                    <option value=""></option>
                    <option value="Mr">Mr.</option>
                    <option value="Mme">Mme.</option>
                </select>
                <label for="Nom">Nom :</label>
                <input type="text" id="Nom" name="Nom" placeholder="Votre Nom...">
                <label for="Prénom">Prénom :</label>
                <input type="text" id="Prénom" name="Prénom" placeholder="Votre Prénom...">
                <input type="submit" value="Submit">
            </form>
        </div>
        <?php
                if (empty($_GET['Nom']) && empty ($_GET['Prénom']) && (empty($_GET['civilité'])))
                {
                    $message = 'Veuillez indiquer les info svp !';
                }
                else
                {
                    echo $message = 'Bienvenue ' . $_GET['civilité'] . ' ' . $_GET['Nom'] . ' ' . $_GET['Prénom'];
                }
            ?>
    </body>
</html>
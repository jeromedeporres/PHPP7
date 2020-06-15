<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <meta charset="utf-8"/>
    <title>PHPP7EXO07</title>
    <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <?php
            if (!empty($_GET['Nom']) && !empty ($_GET['Prénom']) && (!empty($_GET['civilité'])))
        {
            echo 'Bonjour! ' . $_GET['civilité'] . ' ' . $_GET['Nom'] . ' ' . $_GET['Prénom'] . ', ' . 'Votre fichier est: ' . $_GET['fichier'];
        }
            else
        {
        ?>
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
                <input type="file" id="fichier" name="fichier">
                <input type="submit" value="Valider">
            </form>
        </div>
        <?php
        }
        ?>
    </body>
</html>


        
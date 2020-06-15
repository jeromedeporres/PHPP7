<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <meta charset="utf-8"/>
    <title>PHPP7EXO08</title>
    <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <?php
            if (!empty($_POST['Nom']) && (!empty($_POST['Prénom']) && (!empty($_POST['civilité']))))
        {
            if ($_FILES['fichier']['type'] == 'application/pdf' )
            {
                echo  ' Votre fichier est : ' . $_FILES['fichier']['name'];
            } else 
            {
                echo 'Bonjour! ' . $_POST['civilité'] . ' ' . $_POST['Nom'] . ' ' . $_POST['Prénom'] . '.';
            }
            
        }
        else 
        {
        ?>
        <div>
            <form action='Index.php' method='post' enctype='multipart/form-data'>
                <label for='civilité'>Civilité:</label>
                <select name='civilité' id='civilité'>
                    <option value=''></option>
                    <option value='Mr'>Mr.</option>
                    <option value='Mme'>Mme.</option>
                </select>
                <label for='Nom'>Nom :</label>
                <input type='text' id='Nom' name='Nom' placeholder='Votre Nom...'>
                <label for='Prénom'>Prénom :</label>
                <input type='text' id='Prénom' name='Prénom' placeholder='Votre Prénom...'>
                <input type='file' id='fichier' name='fichier'>
                <input type='submit' value='Valider'>
            </form>
        </div>
        <?php
        
        }
        ?>
    </body>
</html>

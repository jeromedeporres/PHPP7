<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8" dir="ltr" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultat P7E4</title>
</head>
<body>
<?php
    if (isset($_POST['Nom']) && isset ($_POST['Prénom']))
    {
        echo 'Nom:' . $_POST['Nom'] . ' ' . 'Prénom:' . $_POST['Prénom'];
    }
    else 
    {
        echo 'Il faut renseigner les informations';
    }
?> 
</body>
</html>
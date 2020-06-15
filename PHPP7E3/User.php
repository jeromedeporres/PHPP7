<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8" dir="ltr" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultat P7E3</title>
</head>
<body>
<?php
    if (isset($_GET['Nom']) AND isset ($_GET['Prénom']))
    {
        echo 'Nom:' . $_GET['Nom'] . ' ' . 'Prénom:' . $_GET['Prénom'];
    }
    else 
    {
        echo 'Il faut renseigner les informations';
    }
?> 
</body>
</html>
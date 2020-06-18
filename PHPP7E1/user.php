<?php
    $regexName = '^[\p{L}]{1}[\' \-\p{L}]+$^';
    if(!empty($_GET['lastname'])) {
        if(preg_match($regexName, $_GET['lastname'])) {
            $lastname = 'Votre nom de famille est ' . $_GET['lastname'];
        }else {
            $lastnameError = 'Veuillez renseigner un nom de famille valide';
        }
    }else {
        $lastnameError = 'Veuillez renseigner votre nom de famille';
    }

    if(!empty($_GET['firstname'])) {
        if(preg_match($regexName, $_GET['firstname'])) {
            $firstname = 'Votre prénom est ' . $_GET['firstname'];
        }else {
            $firstnameError = 'Veuillez renseigner un prénom valide';
        }
    }else {
        $firstnameError = 'Veuillez renseigner votre prénom';
    }
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <meta charset="UTF-8" /> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Vos informations</title>
</head>
<body>
    <p><?= isset($lastname) ? $lastname : $lastnameError ?></p>
    <p><?= isset($firstname) ? $firstname : $firstnameError ?></p>
</body>
</html>

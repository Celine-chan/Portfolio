<?php

$errorMessages = [];
$regexTextArea = '/^[a-zA-Z0-9éèàêâùïüëçæœÉÈÇÙÆŒ .;:,_!?()=*&\"\'$€~-]+$/';

if (isset($_POST['submit'])) {

    if (isset($_POST['mail'])) {
        //filtre pour éviter une regex 
        if (!filter_var($_POST['mail'], FILTER_VALIDATE_EMAIL)) {
            $errorMessages['mail'] = 'Veuillez saisir une adresse mail valide';
        }
        if (empty($_POST['mail'])) {
            $errorMessages['mail'] = 'Veuillez saisir une adresse email.';
        }
    }

    if (isset($_POST['textContact'])) {
        if (!preg_match($regexTextArea, $_POST['textContact'])) {
            $errorMessages['textContact'] = 'Veuillez remplir le champ correctement.';
        }
        if (empty($_POST['textContact'])) {
            $errorMessages['textContact'] = 'Veuillez remplir le champ.';
        }
    }
}
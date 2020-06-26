<?php

// On a déplacé tout le code HTML dans les 3 fichiers de templates
// header.tpl.php
// contact.tpl.php
// footer.tpl.php

// Si on a des données à prévoir avant l'affichage, c'est ICI !

// On inclut le fichier contenant les données utiles pour tout le site
include './inc/data.php';

// Si les données du formulaire avaient été envoyées sur contact.php
// Pour distinguer l'affichage en GET, de l'envoi des données en POST
// On ajouterait cette condition
if (!empty($_POST)) { // => le formulaire a été soumis
    // TODO récupérer les données
    // voir contact_form_dest.php
}


// Donc, à la fin de notre script PHP, on inclut ces 3 fichiers de templates
// TOUJOURS A LA FIN !
include './templates/header.tpl.php'; // utile plusieurs fois
include './templates/contact.tpl.php'; // utile une seule fois, sur cette page
include './templates/footer.tpl.php'; // utile plusieurs fois

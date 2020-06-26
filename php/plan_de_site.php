<?php

// On a déplacé tout le code HTML dans les 3 fichiers de templates
// header.tpl.php
// plan_de_site.tpl.php
// footer.tpl.php

// Si on a des données à prévoir avant l'affichage, c'est ICI !

// On inclut le fichier contenant les données utiles pour tout le site
include './inc/data.php';



// Donc, à la fin de notre script PHP, on inclut ces 3 fichiers de templates
// TOUJOURS A LA FIN !
include './templates/header.tpl.php'; // utile plusieurs fois
include './templates/plan_de_site.tpl.php'; // utile une seule fois, sur cette page
include './templates/footer.tpl.php'; // utile plusieurs fois

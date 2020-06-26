<?php

// print_r($_GET);exit;

// On a déplacé tout le code HTML dans les 3 fichiers de templates
// header.tpl.php
// article.tpl.php
// footer.tpl.php

// Si on a des données à prévoir avant l'affichage, c'est ICI !

// On inclut le fichier contenant les données utiles pour tout le site
include './inc/data.php';
// => $navLinks
// => $allPosts

// Etape 3
// Rendre les données de la page "article" dynamiques
// On récupère le paramètre id dans l'URL => article.php?id=xxx
$id = (int) ($_GET['id'] ?? 0);
// $id = filter_input(INPUT_GET, 'id');
// On récupère les données pour l'article $id

// Si l'id existe en clé du tableau des articles
if (array_key_exists($id, $allPosts)) {
  // Alors récupère les données de l'article
  $post = $allPosts[$id];
}
// Sinon
else {
  // Alors afficher une erreur HTTP 404 Not Found
  header('HTTP/1.0 404 Not Found');
  exit; // on oublie pas d'arrêter le script
}


// Donc, à la fin de notre script PHP, on inclut ces 3 fichiers de templates
// TOUJOURS A LA FIN !
include './templates/header.tpl.php'; // utile plusieurs fois
include './templates/article.tpl.php'; // utile une seule fois, sur cette page
include './templates/footer.tpl.php'; // utile plusieurs fois

// a la fin du script, toutes les variables sont supprimées
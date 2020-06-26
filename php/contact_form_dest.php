<pre><?php

// Ce fichier est appelé via HTTP (GET ou POST)
// après validation du formulaire de contact (contact.php)

// On a envoyé les données en POST
// A priori, la variable $_POST contient ces données
// https://www.php.net/manual/fr/reserved.variables.post.php
// Mais, on ne sait pas comment c'est organisé => debug
print_r($_POST);
/*
Array
(
    [gender] => monsieur
    [firstname] => Ben
    [lastname] => CORDIER
    [email] => philippe@oclock.io
    [source] => twitter
    [message] => 
    [fileUpload] => 
)

On constate que la clé correspondant à l'attribut name de chaque champ de saisie
Et en value, on a la saisie effectuée par l'internaute
*/

// Mais si les données avaient été envoyées en GET
// Pareil, mais dans le tableau $_GET
print_r($_GET);
/*
Array
(
    [gender] => monsieur
    [firstname] => Ben
    [lastname] => CORDIER
    [email] => philippe@oclock.io
    [source] => fb
    [message] => 
    [fileUpload] => 
)

On constate que la structure est EXACTEMENT la même que pour $_POST
=> on récupère les données de la même façon,
    $_GET si transport via HTTP GET
    $_POST si transport via HTTP POST
*/

// Maintenant, on veut récupérer le prénom dans la variable $prenom
$prenom = $_POST['firstname'];
var_dump($prenom);
// On veut récupérer le nom dans la variable $nom
$nom = $_POST['lastname'];
var_dump($nom);

// => mais si le name change (un hacker peut le faire facilement avec le DevTool)
// alors on a une erreur 'Notice'
// On veut désormais éviter cela
// On teste d'abord si la clé existe dans un tableau
if (isset($_POST['firstname'])) {
    // Alors on récupère la saisie (la valeur dans le tableau)
    $prenom = $_POST['firstname'];
}
// si la clé n'existe pas
else {
    // Alors on affecte une string vide
    $prenom = '';
}
var_dump($prenom);

// On peut faire la même chose, sur une seule ligne
// On appelle cela une condition ternaire
$nom = isset($_POST['lastname']) ? $_POST['lastname'] : '';
// condition ? résultat si condition = true : résultat si condition = false
var_dump($nom);

// Depuis PHP7, PHP a encore simplifié cette "ternaire" car très souvent utilisée pour les données des formulaires
$email = $_POST['email'] ?? '';
// si $_POST['email'] existe alors, ce sera le résultat
// sinon, le résultat sera ''
var_dump($email);

// On a une 4e façon de faire
// https://www.php.net/manual/fr/function.filter-input
$nom = filter_input(INPUT_POST, 'lastname');
$source = filter_input(INPUT_POST, 'source');
// filter_input va s'occuper d'aller chercher l'info "source" dans les données en POSt ($_POST) pour nous
// Et si la clé 'source' n'existe pas dans $_POST, filter_input nous retourne null, mais ne génère aucune erreur !
var_dump($source);
// Equivalent en GET
// $source = filter_input(INPUT_GET, 'source');

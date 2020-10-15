<?php

require './controllers/content-controller.php';

// Parser l'url donc découper après la racine
$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

// Si je suis sur l'accueil
if ('/' === $urlPath) {
    showIndex();
}
// Show creation user page
elseif ('./create' === $urlPath){
    showCreation();
}
// Show edit user page
elseif ('./edit' === $urlPath && isset($_GET['id'])){
    showEdit();
}
// Show list user page
elseif ('/list' === $urlPath){
    showList();
}
// Error page
else {
    header('HTTP/1.1 404 Not Found');
}
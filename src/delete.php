<?php require './header.php';

//Suppress user in BDD

if ($_GET['id'] <> '')
{
    $sql = 'DELETE FROM formulaire WHERE id=:id';
    $statement = $pdo->prepare($sql);
    $statement-> bindValue(':id', $_GET['id'], PDO::PARAM_INT);
    $statement->execute();
    echo '<meta http-equiv="refresh" content="0;URL=./list.php">';
}
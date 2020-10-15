<?php
include './../routing.php';

//Connection BDD

function getPdo(): PDO
{
    try
    {
        $pdo = new PDO("mysql:host=" . SERVER . ";dbname=" . DATABASE . ";charset=utf8", USER, PASSWORD);
    }
    catch(Exception $e)
    {
        echo'Error!: ' . $e->getMessage() . '<br\>';
        die();
    } 
    return $pdo;
}

//Creation new user

function createUser(): void
{
    $pdo = getPdo();

    $sql = "INSERT INTO formulaire VALUES (null, '".$_POST['firstname']."', '".$_POST['lastname']."','".$_POST['email']."')";
    $statement = $pdo->prepare($sql);
    $statement->bindValue(':firstname', $_POST['firstname'], PDO::PARAM_STR);
    $statement->bindValue(':lastname', $_POST['lastname'], PDO::PARAM_STR);
    $statement->bindValue(':email', $_POST['email'], PDO::PARAM_STR);
    $statement->execute();
    echo '<meta http-equiv="refresh" content="0.5;URL=./list.php">';
}

//Update user

function updateUser()
{
    $pdo = getPdo();

    $sql = 'UPDATE formulaire SET firstname=:firstname, lastname=:lastname, email=:email WHERE id=:id';
    $statement = $pdo->prepare($sql);
    $statement->bindValue(':id', $_GET['id'], PDO::PARAM_INT);
    $statement->bindValue(':firstname', $_POST['firstname'], PDO::PARAM_STR);
    $statement->bindValue(':lastname', $_POST['lastname'], PDO::PARAM_STR);
    $statement->bindValue(':email', $_POST['email'], PDO::PARAM_STR);
    $statement->execute();
    echo '<meta http-equiv="refresh" content="0.5;URL=./list.php">';
}

//Delete user

function deleteUser()
{
    $pdo = getPdo();

    $sql = 'DELETE FROM formulaire WHERE id=:id';
    $statement = $pdo->prepare($sql);
    $statement-> bindValue(':id', $_GET['id'], PDO::PARAM_INT);
    $statement->execute();
    echo '<meta http-equiv="refresh" content="0;URL=./list.php">';
}

//Find user

function findUser()
{
    $pdo = getPdo();

    $person = $pdo->query('SELECT * FROM formulaire WHERE id='.$_GET['id'])->fetch();
}
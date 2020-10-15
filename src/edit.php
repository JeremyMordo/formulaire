<?php require './header.php';

//Update user in BDD

if(isset($_POST['firstname'])<>'' && isset($_POST['lastname'])<>'' && isset($_POST['email'])<>'' ){
    $sql = 'UPDATE formulaire SET firstname=:firstname, lastname=:lastname, email=:email WHERE id=:id';
    $statement = $pdo->prepare($sql);
    $statement->bindValue(':id', $_GET['id'], PDO::PARAM_INT);
    $statement->bindValue(':firstname', $_POST['firstname'], PDO::PARAM_STR);
    $statement->bindValue(':lastname', $_POST['lastname'], PDO::PARAM_STR);
    $statement->bindValue(':email', $_POST['email'], PDO::PARAM_STR);
    $statement->execute();
    echo '<meta http-equiv="refresh" content="0.5;URL=./list.php">';
}else{

    $person = $pdo->query('SELECT * FROM formulaire WHERE id='.$_GET['id'])->fetch();

?>
 <div class="container">
    <form method="POST">
        <div class="form-group">
            <label for="firstname">Modify your firstname</label>
            <input type="firstname" name="firstname" class="form-control" id="firstname" value="<?= $person['firstname']?>">
        </div>
        <div class="form-group">
            <label for="lastname">Modify your lastname</label>
            <input type="lastname" name="lastname"class="form-control" id="lastname" value="<?= $person['lastname']?>">
        </div>
        <div class="form-group">
            <label for="email">Modify your email</label>
            <input type="email" name="email" class="form-control" id="email" value="<?= $person['email']?>">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
     <?php
    }
    ?>
<?php require './footer.php';
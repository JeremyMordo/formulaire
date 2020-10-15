<?php require './header.php';

//New user in BDD

if(isset($_POST['firstname'])<>'' && isset($_POST['lastname'])<>'' && isset($_POST['email'])<>'' ){
    $sql = "INSERT INTO formulaire VALUES (null, '".$_POST['firstname']."', '".$_POST['lastname']."','".$_POST['email']."')";
    $statement = $pdo->prepare($sql);
    $statement->bindValue(':firstname', $_POST['firstname'], PDO::PARAM_STR);
    $statement->bindValue(':lastname', $_POST['lastname'], PDO::PARAM_STR);
    $statement->bindValue(':email', $_POST['email'], PDO::PARAM_STR);
    $statement->execute();
    echo '<meta http-equiv="refresh" content="0.5;URL=./list.php">';
}
?>
<div class="container">
    <form method="POST">
        <div class="form-group">
            <label for="firstname">Enter your firstname</label>
            <input type="firstname" name="firstname" class="form-control" id="firstname">
        </div>
        <div class="form-group">
            <label for="lastname">Enter your lastname</label>
            <input type="lastname" name="lastname"class="form-control" id="lastname">
        </div>
        <div class="form-group">
            <label for="email">Enter your email</label>
            <input type="email" name="email" class="form-control" id="email">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>


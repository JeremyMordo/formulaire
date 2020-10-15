<?php
//Update user in BDD

if(isset($_POST['firstname'])<>'' && isset($_POST['lastname'])<>'' && isset($_POST['email'])<>'' ){
    updateUser();
}else{

    findUser();
}
    require './form.php';

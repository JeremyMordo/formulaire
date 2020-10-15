<?php include './header.php'?>

<div class="container">
    <table class="table">
        <caption>List of users</caption>
        <thead>
            <tr>
            <th scope="col">ID</th>
            <th scope="col">Firstname</th>
            <th scope="col">Lastname</th>
            <th scope="col">Email</th>
            <th scope="col">Update</th>
            <th scope="col">Delete</th>
            </tr>
        </thead>
        <tbody>
        <?php    
        $sql = 'SELECT * FROM formulaire';
        $allPersons = $pdo->query($sql)->fetchAll();
            foreach($allPersons as $person)
            {
            ?>          
            <tr>
                <th scope="row"><?php echo $person['id']?></th>
                    <td><?php echo $person['firstname']?></td>
                    <td><?php echo $person['lastname']?></td>
                    <td><?php echo $person['email']?></td>
                    <td><a href="edit.php?id=<?= $person['id']?>" class="btn btn-info">Update</td>
                    <td><a onclick="return confirm('Are you sure ?')" href="./delete.php?id=<?= $person['id']?>" class="btn btn-danger">Delete</td>    
            </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
</div>
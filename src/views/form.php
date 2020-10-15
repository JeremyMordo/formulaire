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
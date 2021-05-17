<?php
include "layout/header.php";


if(!empty($_POST)){
    $account = $_POST;
}

?>

<div class="row">
    <aside class="col-12 col-md-4">

        <h2> Créer un compte</h2>
        <form action="" method="post">
            <input name="name" class ="form-control my-2" type="text">
            <input name= "amount" class ="form-control my-2" type="number">
            <input name="addAccount" class="form-control btn btn-dark text-white my-2 " type="submit" value="Envoyer">
        </form>   
    </aside>

    <section class="col-12 col-md-8">
    <h3> Vos informations</h3>
    <?php if(isset($account)): ?>
        <ul class="list-group my-5">
            <li class="list-group-item"><?php echo htmlspecialchars ($account["name"]) ?></li>
            <li class="list-group-item"><?php echo htmlspecialchars ($account["amount"]) ?></li>
        </ul>
        <?php endif; ?>
    </section>
</div>


<?php
include "layout/footer.php";

?>


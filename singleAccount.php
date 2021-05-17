<?php
require "model/acounts.php";
include "layout/header.php";


$accounts = get_accounts();
if(isset($_GET["index"]) && isset($accounts[$_GET["index"]])){
$account = $accounts[$_GET["index"]];    
}
else{
    $error ="Nous ne pouvont pas recupere votre compte ";
    
}

?>

<?php if(isset($account)) : ?>
<h2> <?php echo $account["name"] ?></h2>
<?php else : ?>
<div class="alert alert-secondary text-center" role="alert">
    <?php echo $error; ?>
    <p>pourquoi ne pas retourner a l'acccueil? </p> 
    <a href = "index.php" class= "btn btn-dark text-white">Accueil</a>
</div>

<?php endif  ?>






<?php
include "layout/footer.php";

?>
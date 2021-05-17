<?php
include "model/identifiant.php";
include "layout/header.php";
?>


<p>Pour acceder au site veuillez entrer votre identifiant et votre mot de passe </p>
    <div class="row">
        
        <aside class="col-12 col-md-2 ">

        
            <form action="identifiant.php" method="post">
                <p>
                <input type="username" class=" form-control my-2 text-center" name="username" />
                <input type="password" class="form-control  my-2" name="mot_de_passe" />
                <input type="submit" name="send" class=" form-control btn btn-danger my-2" value="Valider" />
                </p>
            </form>
        </aside>
  </div>



<?php
include "layout/footer.php";

?>
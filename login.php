<?php

$user = [

    "username" => "taoufik",
    "mot_de_passe" => "chat"


];

if(isset($_POST["username"]) && isset($_POST["mot_de_passe"])) {

      if($_POST["username"] === $user["username"] && $_POST["mot_de_passe"] === $user["mot_de_passe"]) {
            session_start();
            $_SESSION["user"] = $user;
            header("Location:index.php");
            exit;





      } 
      
      else{
        $error_message = "erreur d'identifiant";
        header("Location:login.php");
      }
}


include "layout/header.php";
?>


<p>Pour acceder au site veuillez entrer votre identifiant et votre mot de passe </p>
    <div class="row">
        
        <aside class="col-12 col-md-2 ">

        
            <form action="" method="post">
                <p>
                <div>
                    <label for="username" class="form-label">Votre nom d'utilisateur</label>
                    <input type="username" class=" form-control my-2 text-center" id="username" name="username" />
                </div>
                <div>
                <label for="password" class="form-label">Votre mot de passe</label>
                <input type="password" class="form-control  my-2" id="mot_de_passe" name="mot_de_passe" />
                </div>

                <div>
                    <input type="submit" name="send" class=" form-control btn btn-danger my-2" value="Valider" />
                </div>   


                </p>
            </form>
        </aside>
  </div>



<?php
include "layout/footer.php";

?>
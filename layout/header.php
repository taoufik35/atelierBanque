<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

   
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="css/main.css">

    <title>Banque PHP</title>
  </head>
  <body>
   <header class="bg-danger text-dark my-0 py-4">
        <section class="comtainer text-center">
            <h1>Ma banque en ligne </h1>
            <p class="lead text-italic">Gerez vos comptes en 1 clique</p>  
        </section>

        <?php if(isset($_SESSION["user"])): ?>
            <a class="btn btn-dark mx-3" href="logout.php">Déconnexion</a>
          <?php endif; ?>
   </header>

   <main class="container my-5">
  
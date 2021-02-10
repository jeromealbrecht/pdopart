<?php
include('headertab.php');
?>

<div class="jumbotron bg-dark">
  <nav class="navbar fixed-top navbar-dark bg-dark justify-content-center">
    <a class="navbar-brand text-white" href="index.php">Exercice 1 |</a>
    <a class="navbar-brand text-white ml-3" href="exercice2.php">Exercice 2 |</a>
    <a class="navbar-brand text-white ml-3" href="exercice3.php">Exercice 3 |</a>
    <a class="navbar-brand text-white ml-3" href="exercice4.php">Exercice 4 |</a>
    <a class="navbar-brand text-white ml-3" href="#!">Exercice 5 |</a>
    <a class="navbar-brand text-white ml-3" href="#!">Exercice 6 |</a>
  </nav>
</div>

<!-- Exercice 1 -->
<div class="col-12 text-center">
  <h1 class="mt-3"> </h1>
  <h2>Exercice 1: Afficher tout les clients.</h2>

  <table class="table-fill">
    <thead>
      <tr>
        <th class="text-left">Nom :</th>
        <th class="text-left">Prénom :</th>
      </tr>
    </thead>
    <tbody class="table-hover">

      <?php

foreach ($clients as $client){ ?>

      <tr>
        <td class="text-left"><?= $client->lastName ?></td>
        <td class="text-left"><?= $client->firstName ?></td>

      </tr>
</div>
<?php

}


include('footer.php');
?>
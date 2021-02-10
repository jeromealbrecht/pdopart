<?php

include('headertab.php');

?>

<div class="jumbotron bg-dark">
    <nav class="navbar fixed-top navbar-dark bg-dark justify-content-center">
        <a class="navbar-brand text-white" href="index.php">Exercice 1 |</a>
        <a class="navbar-brand text-white ml-3" href="exercice2.php">Exercice 2 |</a>
        <a class="navbar-brand text-white ml-3" href="exercice3.php">Exercice 3 |</a>
        <a class="navbar-brand text-white ml-3" href="exercice4.php">Exercice 4 |</a>
        <a class="navbar-brand text-white ml-3" href="exercice5.php">Exercice 5 |</a>
        <a class="navbar-brand text-white ml-3" href="exercice6.php">Exercice 6 |</a>
        <a class="navbar-brand text-white ml-3" href="exercice7.php">Exercice 7 |</a>

    </nav>
</div>

<div class="col-12 mt-5">
    <div class="table-title">

    </div>
    <table class="table-fill">
        <thead>
            <tr>
                <th class="text-left">Nom</th>
                <th class="text-left">Prénom</th>
                <th class="text-left">Date de naissance</th>
                <th class="text-left">Carte de fidélité</th>
                <th class="text-left">Numéro de carte</th>


            </tr>
        </thead>
        <tbody class="table-hover">
            <?php



foreach ($clientCli as $client){ $date = new DateTime($client->birthDate); ?>

    <tr>
                <td class="text-left"><?=  $client->lastName ?></td>
                <td class="text-left"><?=  $client->firstName ?></td>
                <td class="text-left"><?=  $date->format('d-m-Y') ?></td>
                <td class="text-left"><?= ($client->card == 1) ? 'Oui' : 'Non';?>
                <td class="text-left"><?=  $client->cardNumber ?></td>
            </tr>

<?php
}

?>

</div>

<?php
include('footer.php');

?>
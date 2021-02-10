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
        </nav>
</div>


<?php

// Exercice 3
// Afficher les 20 premiers clients.
?>

<div class="col-12 mt-5 text-center">
        <h1 class="mt-3">Exercice 3 </h1>
        <h2>Afficher les 20 premiers clients.</h2>
        <ul class="list-group mt-3">




                <?php

foreach ($clientsLimit as $client){ ?>

                <li class="list-group-item"><?=  $client->lastName ?></li><?php

}
?>

        </ul>
</div>

<?php

include('footer.php');

?>
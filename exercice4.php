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

<div class="col-12 mt-5 text-center">
        <h1 class="mt-3">Exercice 4 </h1>
        <h2>N'afficher que les clients possédant une carte de fidélité.</h2>
        <ul class="list-group mt-3">




<?php

foreach ($clientID as $client){ ?>

    <li class="list-group-item"><?=  $client->lastName ?></li><?php

    
  

}

?>

        </ul>
</div>

<?php

include('footer.php');


?>
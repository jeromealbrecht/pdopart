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
<th class="text-left">1</th>
<th class="text-left">2</th>
<th class="text-left">3</th>

</tr>
</thead>
<tbody class="table-hover">
<?php
foreach ($orderBy as $client){ ?>

<td class="text-left"><?=  $client->lastName ?></td>
<?php

}
?>

</div>

<?php
include('footer.php');

?>

 




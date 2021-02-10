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

<?php
//Exercice 2 : Afficher tous les types de spectacles possibles.
?>

<div class="col-12 mt-5">
<div class="table-title">

</div>
<table class="table-fill">
<thead>
<tr>
<th class="text-left">EX</th>
<th class="text-left">ER</th>
<th class="text-left">CI</th>
<th class="text-left">CE 2</th>
</tr>
</thead>
<tbody class="table-hover">
<?php
foreach ($showtypes as $content){ ?>

<td class="text-left"><?=  $content->type ?></td>
<?php

}
?>

</div>

<?php
include('footer.php');

?>
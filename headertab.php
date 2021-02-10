<?php

$pdo = new PDO('mysql:host=localhost;dbname=colyseum', 'pdotrain','Turfubooba456');    
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$query = $pdo->query('SELECT * FROM clients'); //statement: renvoie un objetPDO Statement
$queryShows = $pdo->query('SELECT * FROM showtypes');
$queryLimit = $pdo->query('SELECT * FROM clients LIMIT 20');
$queryID = $pdo->query('SELECT * FROM clients WHERE `card`=1');
$queryOrder = $pdo->query('SELECT * FROM `clients`  WHERE `lastName` LIKE "M%" ORDER BY `lastName`  ');
$queryShotitle = $pdo->query('SELECT * FROM shows');
$queryCli = $pdo->query('SELECT * FROM clients');


if ($query === false || $queryShows === false || $queryLimit === false || $queryID === false || $queryOrder === false) {
    var_dump($pdo->errorInfo());
    die('Erreur SQL');
}


$clients = $query->fetchAll(PDO::FETCH_OBJ); // Afficher tout les clients
$showtypes = $queryShows->fetchAll(PDO::FETCH_OBJ); // Afficher tout les types de Shows
$clientsLimit = $queryLimit->fetchAll(PDO::FETCH_OBJ); // Afficher tout les clients limité à 20
$clientID = $queryID->fetchAll(PDO::FETCH_OBJ); // Afficher tout les clients dont l'id === 1
$orderBy = $queryOrder->fetchAll(PDO::FETCH_OBJ); // Trier les noms par ordre alphabétique.
$shows = $queryShotitle->fetchAll(PDO::FETCH_OBJ); // Nom des shows
$clientCli = $queryCli->fetchAll(PDO::FETCH_OBJ); //

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/show.css">
    <link rel="stylesheet" href="assets/css/tab.css">


    <title>Tableau</title>
</head>

<div class="container-fluid">
    <div class="row">


<?php
    //CONNEXION BASE DE DONNEES
    try{
        $mysqlConnection = new PDO(
            'mysql:host=localhost;dbname=landing_page;charset=utf8',
            'root',
            '');
        }
        catch (Exception $e)
{
    // en cas d'erreur on affiche un message et on ne montre pas le password
        die('Erreur : ' . $e->getMessage());     
}


    //On récupère tous le contenu de la table film
    $sqlQuery = "SELECT *, IF(support = 1,'Yes','No') AS domainYes, IF(hidden_fees = 1,'Yes','No') AS feesYes
    FROM pricing ";
    $pricingsStatement = $mysqlConnection -> prepare($sqlQuery);
    $pricingsStatement-> execute();
    $pricings = $pricingsStatement-> fetchAll();

    

    ?>
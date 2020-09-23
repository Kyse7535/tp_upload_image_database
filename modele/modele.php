<?php

function connexion()
{
    $base = new PDO("mysql:host = 127.0.0.1;dbname=_test", "kisse", "AF+%y)PhAb.r7.s");
    $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "connexion reussie <br>";
    return $base;
}

function setComment($titre, $comment, $image, $base)
{
    $sql = "INSERT INTO tp1(titre, commentaire, img) VALUES(?, ?, ?)";
    $resultat = $base->prepare($sql);
    $resultat->execute(array($titre, $comment, $image));
    return $resultat;
}
<?php

try {
    $connexion = new PDO('mysql:host=localhost;dbname=hospitalE2N','root','', [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ]);
} catch (\Throwable $th) {
    die('erreur db');
}
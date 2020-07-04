<?php

    try{

        $pdo = new PDO('mysql:host=localhost;dbname=praxi185_lmengenharia', 'praxi185_lmeng', 'lmengenharia123456');

    }catch(PDOException $e){
        echo("Ocorreu um erro ou conectar: ".$e->getMessage());
    }
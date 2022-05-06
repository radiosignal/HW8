<?php
$DBH = new PDO("mysql:host=127.0.0.1:3309; dbname=shop", 'root', '');
$DBH->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);



    $STH=$DBH->prepare("SELECT * FROM `goods` WHERE id= :id");



    $data= ['id'=>2];


    $STH->execute($data);

    var_dump($STH->fetch());
    die();
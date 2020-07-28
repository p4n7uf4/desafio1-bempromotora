<?php

const DB_HOST = "localhost";
const DB_NAME = "pesquisa";
const DB_USER = "root";
const DB_PASS = "";

ini_set("display_errors", true);

function conecta_bd() {
    $PDO = new PDO ("mysql:host=".DB_HOST.";dbname=".DB_NAME.";charset=utf8", DB_USER,DB_PASS);
    return $PDO;
}
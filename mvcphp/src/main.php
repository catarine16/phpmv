<?php
include_once __DIR__ . "/../vendor/autoload.php";


use App\model\Usuario;

$u = new Usuario ("cleber");
echo "<h1> atividade de hoje </h1>";
echo $u->getNome();
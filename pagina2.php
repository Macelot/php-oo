<?php
require './Usuario.php';

$usuario1 = new Usuario("Marcelo",43);
//setando as notas
$usuario1->setNotas(array(
    "Matemática"=> array (9,9.5,10),
    "Geografia"=> array (9,8,7,6),

));

$usuario2 = new Usuario("Lucas",17);
//setando as notas
$usuario2->setNotas(array(
    "Matemática"=> array ("A","NA","EP"),
    "Geografia"=> array ("A","A","A"),

));
$usuarios = array($usuario1,$usuario2);
echo json_encode($usuarios);//json

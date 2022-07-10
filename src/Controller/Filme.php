<?php

namespace APP\Controller;

require "../../vendor/autoload.php";

use APP\Model\Filme;
use APP\Model\Diretor;
use APP\Model\Genero;

$diretor_one = new Diretor("Sam Raimi", 62, "99999-9999");

$filme_one = new Filme(
    yearOfRelease:1991,
    filmeGenero:: Genero::AÇÃO,
    diretor:: $diretor_one,
    title: "Doutor Estranho no Multiverso da Loucura"
);
echo "<pre>";
var_dump($filme_one);
echo "</pre>";
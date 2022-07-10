<?php
namespace APP\Model;
enum Genero{
    case TERROR;
    case AÇÃO;
    case COMEDIA;
    case ROMANCE;

    public function toString()
    {
        return $this->name;
    }
}
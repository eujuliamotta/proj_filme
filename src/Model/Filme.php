<?php
namespace APP\Model;
class Filme{
    public string $title;
    public Genero $filmeGenero;
    public int $yearOfRelease;
    public Diretor $diretor;

    public function __construct(
        string $title,
        Genero $filmeGenero,
        int $yearOfRelease,
        Diretor $diretor,
    )
    {
        $this->title = $title;
        $this->filmeGenero = $filmeGenero;
        $this->yearOfRelease = $yearOfRelease;
        $this->diretor = $diretor;
    }
}
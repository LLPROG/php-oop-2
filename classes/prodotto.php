<?php
class Prodotto
{
    protected $nome;
    private $prezzo;
    private $dimensione;
    private $marca;
    private $modello;
    private $animale;
    private $stock;
    private $info;

    public function __construct($nome, $prezzo, $animale,
    $marca) {
        $this->nome = $nome;
        $this->prezzo = $prezzo;
        $this->animale = $animale;
        $this->marca = $marca;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getPrezzo() {
        return $this->prezzo;
    }

    public function getAnimale() {
        return $this->animale;
    }

    public function getMarca() {
        return $this->marca;
    }

    // public function setNome() {
    //     return 
    // }
}





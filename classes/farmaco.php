<?php
include __DIR__ . '/prodotto.php';

class Farmaco extends Prodotto
{
    private $composizione;
    private $meseInizio;
    private $meseFine;
    private $scopoDUso;


    public function __construct($nome, $prezzo, $animale, $marca,  $meseInizio, $meseFine) {
        parent::__construct($nome, $prezzo, $animale, $marca);
        $this->meseInizio = $meseInizio;
        $this->meseFine = $meseFine;
    }

    public function getScopoDUso() {
        return $this->scopoDUso;
    }

    public function getComposizione() {
        return $this->composizione;
    }

    public function getMeseInizio() {
        return $this->meseInizio;
    }

    public function getMeseFine() {
        return $this->meseFine; 
    }

    public function Disponibilit√†($meseInizio, $meseFine) {
        if (date('m') >= $meseInizio && date('m') <= $meseFine) {
            echo 'il prodotto √© disponibile';
        } else {
            echo 'il prodotto non √© disponoibile';
        }
    }
}
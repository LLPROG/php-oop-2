<?php

class Cliente
{
    private $nome;
    private $cognome;
    private $indirizzo;
    private $telefono;
    private $scadenzaCarta;
    private $sconto;
    private $prodotto;

    public function __construct($nome,$cognome,$scadenzaCarta) {
        $this->nome = $nome;
        $this->cognome = $cognome;
        $this->scadenzaCarta = $scadenzaCarta;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getCognome() {
        return $this->cognome;
    }

    public function setVerificaScadenza($scadenzaCarta) {
        if ($scadenzaCarta <= Date("Y/m")) {
            echo "puoi effettuare l'acquisto";
        } else {
            echo "la tua carta é scaduta";
        }
    }

}
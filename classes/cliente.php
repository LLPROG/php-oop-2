<?php

class Cliente
{
    private $nome;
    private $cognome;
    private $indirizzo;
    private $telefono;
    private $scadenzaCarta;
    private $sconto = 20;
    private $codiceProdotto;
    private $registrato;


    public function __construct($nome,$cognome,$scadenzaCarta, $registrato) {
        $this->nome = $nome;
        $this->cognome = $cognome;
        $this->scadenzaCarta = $scadenzaCarta;
        $this->registrato = $registrato;

    }

    public function getNome() {
        return $this->nome;
    }

    public function getCognome() {
        return $this->cognome;
    }

    public function getIndirizzo() {
        return $this->indirizzo;
    }

    public function getTelefono() {
        return $this->telefono;
    }

    public function getCodiceProdottoe() {
        return $this->codiceProdotto;
    }

    public function getScadenzaCarta() {
        return $this->scadenzaCarta;
    }

    public function getRegistrato() {
        return $this->registrato;
    }

    public function setSconto() {
        if ($this->registrato == true) {
            echo 'il tuo sconto é ' . ' ' . $this->sconto . ' ' . 'per cento';
        } else {
            echo 'per lo sconto registrati';
        }
    }

    public function setVerificaScadenza($scadenzaCarta, $nome, $cognome) {
        if ($scadenzaCarta < Date("Y/m")) {
            echo $nome . " " . $cognome . " puoi effettuare l'acquisto";
        } else {
            echo $nome . " " . $cognome . " la tua carta é scaduta";
        }
    }

}
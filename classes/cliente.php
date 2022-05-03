<?php

class Cliente
{
    private $nome;
    private $cognome;
    private $indirizzo;
    private $telefono;
    private $scadenzaCarta;
    private $sconto;
    private $codiceProdotto;

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

    public function getIndirizzo() {
        return $this->indirizzo;
    }

    public function getTelefono() {
        return $this->telefono;
    }

    public function getCodiceProdottoe() {
        return $this->codiceProdotto;
    }

    public function getSconto() {
        return $this->sconto;
    }

    public function getScadenzaCarta() {
        return $this->scadenzaCarta;
    }

    public function setVerificaScadenza($scadenzaCarta, $nome, $cognome) {
        if ($scadenzaCarta < Date("Y/m")) {
            echo $nome . " " . $cognome . " puoi effettuare l'acquisto";
        } else {
            echo $nome . " " . $cognome . " la tua carta é scaduta";
        }
    }

}
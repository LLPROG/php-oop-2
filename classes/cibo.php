<?php
include __DIR__ . '/prodotto.php';

class Cibo extends Prodotto
{
    private $gusto;
    private $peso;
    private $scadenza;

    public function __construct($gusto,$peso) {
        parent::__construct('carne', 12.50, 'cane', 'pets');
        $this->gusto = $gusto;
        $this->peso = $peso;

    }
    
    public function getGusto() {
        $this->gusto;
    }

    public function getPeso() {
        $this->peso;
    }

    public function getScadenza() {
        $this->scadenza;
    }
    
}
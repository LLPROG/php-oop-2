<?php 
/*
    L'e-commerce vende prodotti per gli animali.
    I prodotti saranno oltre al cibo, anche giochi, cucce, etc.
    L'utente potrà sia comprare i prodotti senza registrarsi, oppure iscriversi e ricevere il 20% di sconto su tutti i prodotti.
    Il pagamento avviene con la carta di credito, che non deve essere scaduta.
    BONUS:
    Alcuni prodotti (es. antipulci) avranno la caratteristica che saranno disponibili solo in un periodo particolare (es. da maggio ad agosto).
*/

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





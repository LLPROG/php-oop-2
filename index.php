<?php

/*
    L'e-commerce vende prodotti per gli animali.
    I prodotti saranno oltre al cibo, anche giochi, cucce, etc.
    L'utente potrà sia comprare i prodotti senza registrarsi, oppure iscriversi e ricevere il 20% di sconto su tutti i prodotti.
    Il pagamento avviene con la carta di credito, che non deve essere scaduta.
    BONUS:
    Alcuni prodotti (es. antipulci) avranno la caratteristica che saranno disponibili solo in un periodo particolare (es. da maggio ad agosto).
*/

include __DIR__ . '/classes/cibo.php';
include __DIR__ . '/classes/cliente.php';


$prodotto1 = new Cibo('bastoncini di carne', 12.50, 'cane', 'pets', 'manzo', '15kg');
$cliente1 = new Cliente('luca', 'lo bianco', '2022/04');

// echo date_default_timezone_set('Europe/Rome');

echo $cliente1->setVerificaScadenza('2022/07');

// echo $prodotto1->getNome();
// var_dump($prodotto1);
<?php

/*
    L'e-commerce vende prodotti per gli animali.
    I prodotti saranno oltre al cibo, anche giochi, cucce, etc.
    L'utente potrà sia comprare i prodotti senza registrarsi, oppure iscriversi e ricevere il 20% di sconto su tutti i prodotti.
    Il pagamento avviene con la carta di credito, che non deve essere scaduta.
    BONUS:
    Alcuni prodotti (es. antipulci) avranno la caratteristica che saranno disponibili solo in un periodo particolare (es. da maggio ad agosto).
*/

// include __DIR__ . '/classes/cibo.php';
include __DIR__ . '/classes/cliente.php';
include __DIR__ . '/classes/farmaco.php';



// $prodotto1 = new Cibo('bastoncini di carne', 12.50, 'cane', 'pets', 'manzo', '15kg');

// echo $prodotto1->getNome();


$cliente1 = new Cliente('luca', 'lo bianco', '2022/04', false);

echo $cliente1->setSconto();




// echo $cliente1->setVerificaScadenza($cliente1->getScadenzaCarta(), $cliente1->getNome(), $cliente1->getCognome());


// $antipulci = new Farmaco('antipulci', 10, 'cane', 'pulcix', 6, 8);

// echo $antipulci->Disponibilità($antipulci->getMeseInizio(), $antipulci->getMeseFine());


<?php

include __DIR__ . '/classes/prodotto.php';

$prodotto1 = new Prodotto('pallina', 12.50, 'cane', 'pets');

echo $prodotto1->getNome();
// var_dump($prodotto_1);
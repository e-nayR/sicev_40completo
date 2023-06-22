<?php

$preco = $_POST['preco'];
$qnt = $_POST['qnt'];

$subtotal = (float)$preco * (float)$qnt;

echo ((string)$subtotal);

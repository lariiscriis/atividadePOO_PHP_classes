<?php
include_once 'PagamentoCredito.php';
include_once 'PagamentoBoleto.php';

echo "<h3> Crédito</h3> <br>";
$pagamento_credito = new CartaoCredito("Maria");
echo $pagamento_credito->processarPagamento(200.00);

echo"<hr>";
echo "<h3> Boleto</h3> <br>";

$pagamento_boleto = new Boleto("João");
echo $pagamento_boleto->processarPagamento(100.00);






?>
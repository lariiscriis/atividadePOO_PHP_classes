<?php

include_once 'Eletronico.php';
include_once 'Alimento.php';

$eletronico1 = new Eletronico("Fone de Ouvido", "R$ 100.00", "44", "Samsung");
$alimento1 = new Alimento("Peixe", "R$ 30.00", "80", "Perecível");

echo "<h3>Eletronicos</h3>";
echo "Nome: ". $eletronico1->getNome() . "<br> Preço: ". $eletronico1->getPreco(). "<br> Quantidade: ". $eletronico1->getQuantidade() . "<br> Marca: ". $eletronico1-> getMarca() . "<br> Categoria: " . $eletronico1->getCategoria();
echo "<hr>";
echo "<h3>Alimentos</h3>";
echo "Nome: ". $alimento1->getNome() . "<br> Preço: ". $alimento1->getPreco(). "<br> Quantidade: ". $alimento1->getQuantidade() . "<br> Tipo de Alimento: ". $alimento1-> getTipoDeAlimento() . "<br> Categoria: " . $alimento1->getCategoria();

echo "<br> <hr>";

echo "Total de Produtos criados: " . Produto::getTotalProdutos(); 

?>
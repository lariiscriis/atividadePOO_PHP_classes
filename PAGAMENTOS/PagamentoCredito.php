<?php
include_once 'PagamentoSistema.php';

use PagamentoSistema\Pagamento;

class CartaoCredito implements Pagamento{
    private $nome_Cliente;

    public function getNome(){
        return $this->nome_Cliente; 
    }

    public function setNome($nome_Cliente){
        $this->nome_Cliente = $nome_Cliente;
    }

    public function __construct($nome_Cliente){
        $this->nome_Cliente = $nome_Cliente;
    }

    public function processarPagamento($valor){
        return "Olá ". $this->nome_Cliente . "! Seu pagamento de R$ " . $valor . " via Cartão de Crédito foi processado com sucesso!"; 
    }

   
    
}

?>
<?php

include_once 'Produto.php';


class Alimento extends Produto{
    private $tipoDeAlimento; 

    public function getTipoDeAlimento(){
        return $this->tipoDeAlimento;
    }

    public function setIipoDeAlimento(){
        $this->tipoDeAlimento = $tipoDeAlimento;
    }

    public function __construct($nome, $preco, $quantidade, $tipoDeAlimento){
        parent::__construct($nome, $preco, $quantidade);
        $this->tipoDeAlimento = $tipoDeAlimento;
    }

    public function getCategoria(){
        return "Alimento";
    }

}


?>
<?php

 abstract class Produto{
    private $nome;
    private $preco;
    private $quantidade;
    public static $TotalProdutos = 0; 


     public function getNome(){
        return $this->nome;
    }

     public function getPreco(){
        return $this->preco;
    }

    public function getQuantidade(){
        return $this->quantidade;
    }

    public function setNome($nome){
        $this->nome = $nome;
    }

    public function setPreco($preco){
        $this->preco = $preco;
    }

    public function setQuantidade($quantidade){
        $this -> quantidade = $quantidade;
    }

    public function __construct($nome, $preco, $quantidade){
        $this->nome = $nome;
        $this->preco = $preco;
        $this->quantidade = $quantidade;
        self::$TotalProdutos += 1;

    }

    public static function getTotalProdutos(){
        return self::$TotalProdutos;
    }

    abstract public function getCategoria();

    

 }


?>
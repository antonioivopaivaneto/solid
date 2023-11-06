<?php
namespace App;

class Item{

    private string $descricao;
    private float $valor;

    public function __construct()
    {
        $this->descricao = '';
        $this->valor = 0;
        
    }

    public function getValor(){
        return $this->valor;
    }

    public function getDescricao(){
        return $this->descricao;
    }

    public function setValor(float $valor)
    {
        $this->valor = $valor;
    }

    public function setDescricao(string $descricao)
    {
        $this->descricao = $descricao;
    }
    public function itemValido()
    {
        if($this->valor <= 0){
            return false;
        }

        if($this->descricao ==''){
            return false;
        }

        return true;
    }
}

?>
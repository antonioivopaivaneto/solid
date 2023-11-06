<?php

use App\Item;
use PHPUnit\Framework\TestCase;
class ItemTest extends TestCase{

    public function testEstadoInicialItem(){

       $item = new Item();

       //assercoes do phpunit
       $this->assertEquals('', $item->getDescricao());
       $this->assertEquals(0, $item->getValor());


    }

    public function testGeteSetDescricao(){
        $descricao = 'cadeira de plastico';

        $item = new item();
        $item->setDescricao($descricao);
        $this->assertEquals($descricao, $item->getDescricao());
    }

   

    public function testItemValido(){

        $item = new Item();
        $item->setValor(55);
        $item->setDescricao('Cadeira de plastico');


        $this->assertTrue(true,$item->itemValido());

        //inserir um item valido

        //inserir um item invalido
        $item->setValor(55);
        $item->setDescricao('');
        $this->assertTrue(true,$item->itemValido());
        

        $item->setValor(0);
        $item->setDescricao('Cadeira de plastico');
        $this->assertTrue(true,$item->itemValido());

        $item->setValor(0);
        $item->setDescricao('');
        $this->assertTrue(true,$item->itemValido());


    }

    /**
     * @dataProvider dataValores
    */
    public function testGeteSetValor($valor){

        $item = new item();
        $item->setValor($valor);
        $this->assertEquals($valor, $item->getValor());
    }

    public function dataValores(){
        return [
            [100],
            [-2],
            [0]
        ];
    }



}


?>
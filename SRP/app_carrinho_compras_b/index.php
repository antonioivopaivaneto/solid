<?php

require __DIR__."/vendor/autoload.php";

use App\CarrinhoCompra;
use App\Item;
use App\EmailService;
use App\Pedido;

$carrinho = new CarrinhoCompra();

echo "<h3>Com SRP </h3>";

$pedido = new Pedido();

$item1 = new Item();
$item2 = new Item();

$item1->setDescricao('porta copos');
$item1->setValor(4.55);

$item2->setDescricao('Lampada');
$item2->setValor(8.85);

echo "<h4>Pedido iniciado</h4>";
echo "<pre>";
print_r($pedido);
echo "</pre>";

$pedido->getCarrinhoCompra()->adicionarItem($item1);
$pedido->getCarrinhoCompra()->adicionarItem($item2);

echo "<h4>Pedido colm itens</h4>";
echo "<pre>";
print_r($pedido);
echo "</pre>";

//------------------------

echo "<h4>Itens do carrinho</h4>";
echo "<pre>";
print_r($pedido->getCarrinhoCompra()->getItens());
echo "</pre>";

//------------------------

echo "<h4>Valor do carrinho</h4>";
$total = 0;
foreach($pedido->getCarrinhoCompra()->getItens() as $key => $item){
    $total += $item->getValor();
}
echo $total;

//------------------------

echo "<h4>Carrinho esta valido</h4>";

echo $pedido->getCarrinhoCompra()->validarCarrinho();

//------------------------

echo "<h4>estatus do pedido</h4>";

echo $pedido->getStatus();


//------------------------

echo "<h4>Confirmar pedido</h4>";

echo $pedido->confirmar();

//------------------------

echo "<h4>estatus do pedido</h4>";

echo $pedido->getStatus();

//------------------------

echo "<h4>E-mail</h4>";

if($pedido->getStatus() =='confirmado'){
    EmailService::dispararEmail();
}




/*
print_r($carrinho->exibirItens());

$carrinho->adicionarItem('bicicleta',750);
$carrinho->adicionarItem('geladeira',250);
$carrinho->adicionarItem('tapete',350.20);

echo"<br><pre>";
print_r($carrinho->exibirItens());
echo"</pre>";

echo "valor total :". $carrinho->exibirValorTotal();

echo"<br>";
echo "Status :". $carrinho->exibirStatus ();

if($carrinho->confirmarPedido()){
    echo '<br>pedido realizado com sucesso';
}else{
    echo 'Carrinho vazio';
}
echo"<br>";
echo "Status :". $carrinho->exibirStatus ();
*/
?>
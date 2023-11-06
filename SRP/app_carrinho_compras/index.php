<?php

require __DIR__."/vendor/autoload.php";

use App\CarrinhoCompra;

$carrinho = new CarrinhoCompra();
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

?>
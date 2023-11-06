<?php

use src\Leitor;

require __DIR__."/vendor/autoload.php";



///////////leitor csv///////////
$leitorCSV = new Leitor();
$leitorCSV->setDiretorio(__DIR__."/arquivos");
$leitorCSV->setArquivo('dados.txt');

echo "<pre>";
print_r($leitorCSV->lerArquivo());
echo "</pre>";


///////////leitor txt///////////
$leitorTXT = new Leitor();
$leitorTXT->setDiretorio(__DIR__."/arquivos");
$leitorTXT->setArquivo('dados.txt');


echo "<pre>";
print_r($leitorTXT->lerArquivo());
echo "</pre>";




?>
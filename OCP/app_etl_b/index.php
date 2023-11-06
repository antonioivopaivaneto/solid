<?php

use src\Leitor;

require __DIR__."/vendor/autoload.php";



///////////leitor csv///////////
$leitorCSV = new Leitor();
$leitorCSV->setDiretorio(__DIR__."/arquivos");
$arr_csv =$leitorCSV->setArquivo('dados.txt');


///////////leitor txt///////////
$leitorTXT = new Leitor();
$leitorTXT->setDiretorio(__DIR__."/arquivos");
$arr_txt = $leitorTXT->setArquivo('dados.txt');


echo "<pre>";
print_r(array_merge($arr_txt, $arr_csv));
echo "</pre>";




?>
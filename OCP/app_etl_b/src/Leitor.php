<?php

namespace src;

use src\Arquivo;
class Leitor 
{
    private $diretorio;
    private $arquivo;


    public function getDiretorio(){
        return $this->diretorio;
    }

    public function getArquivo(){
        return $this->arquivo;
    }

    public function setDiretorio(string $diretorio){

        $this->diretorio = $diretorio;
    }
    public function setArquivo(string $arquivo){

        $this->arquivo = $arquivo;
    }

    public function lerArquivo(){
        $caminho = $this->getDiretorio().'/'.$this->getArquivo();
        $extensao = explode('.',$this->getArquivo());

        $classe = '\src\extrator\\'. ucfirst($extensao[1]);

        return call_user_func_array(
            [
                new $classe,
                'lerArquivo'
            ],
            [
                $caminho
            ]
        );

      







       
       /*
       $caminho = $this->getDiretorio().'/'.$this->getArquivo();
       $arquivo = new Arquivo();

       $extensao = explode('.',$this->getArquivo());

       if($extensao[1]=='csv'){
        $arquivo->lerArquivoCSV($caminho);


       }else if($extensao[1]=='txt'){
        $arquivo->lerArquivoTXT($caminho);

       }
       
       return $arquivo->getDados();

       */

    }

}


?>
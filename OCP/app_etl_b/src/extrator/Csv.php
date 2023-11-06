<?php

namespace src\extrator;

class Csv extends arquivo
{

    public function lerArquivo(string $caminho):array{

        $handle = fopen($caminho,'r');

        while(($line = fgetcsv($handle, 10000,';')) !== false){

            $this->setDados($line[0],$line[1],$line[2]);
          
        }

        fclose( $handle);
        return $this->getDados();

       
    }

    
}


?>
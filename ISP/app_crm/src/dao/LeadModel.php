<?php

namespace src\dao;

use src\BD;
use src\interfaces\ICadastro;
use src\componentes\Notificacao;
use src\interfaces\INotificacao;

class LeadModel extends BD implements ICadastro,INotificacao{

    public function salvar(){
        //logically
    }
    
    
    public function enviarNotificacao(Notificacao $notificacao){

    }

}

<?php

namespace src\dao;

use src\BD;
use src\interfaces\ICadastro;
use src\componentes\Log;
use src\componentes\Notificacao;
use src\interfaces\ILog;
use src\interfaces\INotificacao;

class UsuarioModel extends BD implements ICadastro,INotificacao,ILog{

    public function salvar(){
        //logically
    }
    public function registrarLog(Log $log){
        
    }
    
    public function enviarNotificacao(Notificacao $notificacao){

    }

}
 
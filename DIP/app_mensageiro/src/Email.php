<?php

namespace src;

class Email implements IMensagemToken{
    public function enviar(): void{
        echo 'email: seu token é: 555';
    }
}
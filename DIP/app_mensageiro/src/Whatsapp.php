<?php

namespace src;

class Whatsapp implements IMensagemToken{
    public function enviar(): void{
        echo 'Whatsapp: seu token é: 555';
    }
}
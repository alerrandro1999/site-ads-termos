<?php

namespace App\Entity;

use \App\Db\Database;

use \PDO;

class Termos{

    public $id_termo;

    public $id_usuario;

    public function cadastrarUsuarioTermo(){

        $obDatabae = new Database('usuario_termo');

        $this->id = $obDatabae->insert([
            'ID_TERMO' => $this->id_termo,
            'ID_USUARIO'   => $this->id_usuario,
        ]);

        return true;
    }

   public static function getTermoUso(){
    return (new Database('termo_uso'))->select()
                                  ->fetchAll(PDO::FETCH_ASSOC);
  }

}
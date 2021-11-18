<?php

namespace App\Entity;

use App\Db\Database;

use \PDO;

class Usuario{

    public $id;

    public $nome;

    public $email;

    public $senha;

    public function cadastrar(){
        $obDatabase = new Database('usuarios');

          $this->id = $obDatabase->insert([
            'nome'  => $this->nome,
            'email' => $this->email,
            'senha' => $this->senha
          ]);

          return true;
    }

    public static function getUserByEmail($email){
        return (new Database('usuarios'))->select('email = "'.$email.'"')->fetchObject(self::class);
    }

}
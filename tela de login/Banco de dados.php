<?php
    class UsuariosService{
        private $db;

        private function __construct(){
            $this->db = new SQLite3('banco_geral_de_informacoes');

            $this->db->exec("CREATE TABLE IF NOT EXISTS usuarios (
                user_ID PRIMARY KEY AUTOINCREMENT,
                nome TEXT NOT NULL,
                email TEXT NOT NULL,
                senha TEXT NOT NULL 
                )");
        }

        public function PegarUsuarios(){
            $result = $this->db->query("SELECT * FROM usuarios");

            $Professores = [];

            while($linha = $result->fetchArray(SQLITE3_ASSOC)){
                $Professores[] = $linha;
            }

            return $Professores;
        }

    // $meuBanco = new SQLite('banco_usuarios');
    //professor


    $result = $meuBanco->("SELECT * FROM usuarios");
    }


?>
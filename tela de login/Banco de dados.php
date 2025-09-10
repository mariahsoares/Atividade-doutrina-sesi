<?php
    class UsuariosService{
        private $db;

        public function __construct(){
            $this->db = new SQLite3('banco_geral_de_informacoes');

            $this->db->exec("CREATE TABLE IF NOT EXISTS usuarios (
                user_ID INTEGER PRIMARY KEY AUTOINCREMENT,
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

        public function AdicionarUsuario($email, $senha){
            $stmt = $this->db->prepare("INSERT INTO usuarios (nome, email, senha) VALUES (:nome, :email, :senha)");
            $stmt->bindValue(':email', $email, SQLITE3_TEXT);
            $stmt->bindValue(':senha', password_hash($senha, PASSWORD_BCRYPT), SQLITE3_TEXT); // Usando hash para segurança
            return $stmt->execute();
        } 
    }


?>
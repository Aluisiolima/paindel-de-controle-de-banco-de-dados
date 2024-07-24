<?php
    class Conexão
    {
        private $servername;
        private $username;
        private $password;
        private $dbname;

        public function __construct(string $servername, string $username, string $password, string $dbname)
        {
            $this->servername = $servername;
            $this->username = $username;
            $this->password = $password;
            $this->dbname = $dbname;

        }
        public function conectar()
        {
            return $conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);
        }
        public function nameBanco()
        {
            return $this->dbname;
        }
    }
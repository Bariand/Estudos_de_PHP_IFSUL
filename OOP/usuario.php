<?php
    
    //atributos da classe
    class Usuario{
        public $nome;
        protected $cpf;
        private $endereco;

        //connstrutor padrão
        // function Usuario(){
        //     $this->nome = "Lucas";
        //     $this->cpf = "123456789";
        //     $this->endereco = "Onde Judas perdeu as botas";
        // }

        //construtor do exemplo de herança
        function Usuario() {
            $this->preparaUsuario();
        }

        private function preparaUsuario(){
            $this->nome = "Lucas";
            $this->cpf = "123456789";
            $this->endereco = "Onde Judas perdeu as botas";
        }

        //métodos da classe
        public function getCpf() {
            return $this->cpf;
        }

        public function getNome() {
            return $this->nome;
        }

        public function getEndereco() {
            return $this->endereco;
        }
    }
?>
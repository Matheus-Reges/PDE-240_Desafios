<?php

class Titular {
    private $cpf;
    private $nome;

    public function __construct(Cpf $cpf, String $nome)
    {
        $this->cpf = $cpf->getCpf();
        $this->validaNomeTitular($nome);
        $this->nome = $nome;   
    }

    public function getCpf(): string
    {
        return $this->cpf;
    }

    public function getNome(): string
    {
        return $this->nome;
    }

    private function validaNomeTitular(string $nomeTitular)
    {
        if (strlen($nomeTitular) < 5) {
            echo "Nome precisa ter pelo menos 5 caracteres";
            exit();
        }
    }

}
<?php

class Cpf {
    private $cpf;

    public function __construct(String $cpf)
    {
       $this->cpf = $cpf;
    }

    public function getCpf(){
        return $this->cpf;
    }
}
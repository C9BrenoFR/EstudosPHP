<?php

class Cpf{
    private string $cpf;

    public function __construct(string $cpf) {
        $this->validaCpf($cpf);
        $this->cpf = $cpf;
    }

    private function validaCpf(string $cpfdoTitular): void{
        if(strlen($cpfdoTitular) != 14){
           echo "Insira um cpf válido";
           exit();
        }
     }

     public function lerOCpf(): string{
        return $this->cpf;
     }
}
<?php

class Titular{
    private $cpf;
    private string $nome;

    public function __construct(Cpf $cpfdoTitular, string $nomedoTitular) {
        $this->cpf = $cpfdoTitular;
        $this->validaNome($nomedoTitular);
        $this->nome = $nomedoTitular;
     }

     public function lerCpf(): string{
        return $this->cpf->lerOCpf();
     }
  
     public function lerNome(): string{
        return $this->nome;
     }

     private function validaNome(string $nomedoTitular): void{
        if(strlen($nomedoTitular) < 5){
           echo "O nome precisa ter pelo menos 5 caracteres";
           exit();
        }
     }
}
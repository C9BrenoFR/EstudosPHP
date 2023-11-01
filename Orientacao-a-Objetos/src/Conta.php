<?php

class Conta{

   private $titular;
   private float $saldo;
   private static float $numeroDeContas = 0;

   public function __construct(Titular $titular) {
      $this->titular = $titular;
      $this->saldo = 0;

      self::$numeroDeContas++;
   }

   public function __destruct() {
      self::$numeroDeContas--;
   }


   public function sacar(float $valorASacar): void{
      if ($valorASacar > $this->saldo) {
         echo "Saldo Indisponivel";
         return;
      }
         $this->saldo -= $valorASacar;
   }

   public function depositar(float $valorADepositar): void{
      if ($valorADepositar < 0) {
         echo "O Deposito precisa ser positivo";
         return;
      }
         $this->saldo += $valorADepositar;
   }

   public function transferir(float $valorATransferir, Conta $destino): void{
      if ($this->saldo < $valorATransferir) {
            echo "Saldo Indisponivel";
            return;
      }
        $this->sacar($valorATransferir);
        $destino->depositar($valorATransferir); 
   }

   public function lerSaldo(): float{
      return $this->saldo;
   }

   public static function lerNumerodeContas(): float{
      return self::$numeroDeContas;
   }

   public function lerNomeTitular(): string{
      return $this->titular->lerNome();
   }

   public function lerCpfTitular(): string{
      return $this->titular->lerCpf();
   }
}
<?php


class Conta
{
    private $titular;
    protected $saldo;
    private static $numeroDeContas = 0;

    public function __construct(Titular $titular)
    {
        $this->titular = $titular; 
        $this->saldo = 0;
        self::$numeroDeContas++;
    }

    public function __destruct()
    {
        self::$numeroDeContas--;
    }

    public function saca(float $valorASacar): void
    {
        if ($valorASacar > $this->saldo) {
            echo "Saldo indisponível";
            return;
        }

        $this->saldo -= $valorASacar;
    }

    public function deposita(float $valorADepositar): void
    {
        if ($valorADepositar < 0) {
            echo "Valor precisa ser positivo";
            return;
        }

        $this->saldo += $valorADepositar;
    }

    public function transfere(float $valorATransferir, Conta $contaDestino): void
    {
        if ($valorATransferir > $this->saldo) {
            echo "Saldo indisponível";
            return;
        }

        $this->saca($valorATransferir);
        $contaDestino->deposita($valorATransferir);
    }

    public function getNomeTitular(): string
    {   
    return $this->titular->getNome();
    }

    public function getCpfTitular(): string
    {
        return $this->titular->getCpf();
    }

    public function getSaldo(): float
    {
        return $this->saldo;
    }

    public function setNome(String $nome){
        $this->nome = $nome;
        return $this->nome;
    }

    public static function recuperaNumeroDeContas(): int
    {
        return self::$numeroDeContas;
    }
}

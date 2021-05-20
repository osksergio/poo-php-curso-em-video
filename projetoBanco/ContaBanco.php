<?php

/**
 * Classe ContaBanco
 * @author: Sergio Oseko
 */

class ContaBanco {
    // Atributos
    public $numConta;
    protected $tipo;
    private $dono;
    private $saldo;
    private $status;

    // Métodos
    public function abrirConta($t) {
        $this->setTipo($t);
        $this->setStatus(true);
        if ( $t == "CC" ) {
            $this->setSaldo(50);
        } elseif ( $t == "CP" ) {
            $this->setSaldo(150);
        }
    }

    public function fecharConta() {
        if ( $this->getSaldo() > 0 ) {
            echo "<p>Conta possui um saldo. Não é possível fechá-la!</p>";
        } elseif ( $this->getSaldo() < 0 ) {
            echo "<p>Conta está em débito. Impossível encerrar!</p>";
        } else {
            $this->setStatus(false);
            echo "<p>Conta de " . $this->getDono() . " fechada com sucesso!</p>";
        }
    }

    public function depositar($v) {
        if ( $this->getSatus() ) {
            $this->setSaldo( $this->getSaldo() + $v );
            echo "Depósito de $v efetuado na conta de " . $this->getDono() . "</p>";
        } else {
            echo "<p>Conta fechada. Não é possível depositar</p>";
        }
    }

    public function sacar($v) {
        if ( $this->getSatus() ) {
            if ( $this->getSaldo() >= $v ) {
                $this->setSaldo( $this->getSaldo() - $v );
                echo "<p>Saque autorizado de R$ $v na conta do titular " . $this->getDono() . "</p>";
            } else {
                echo "<p>Saldo insuficiente para realizar o saque.</p>";
            }
        } else {
            echo "<p>Impossível realiar o saque. A conta está encerrada.</p";
        }
    }

    public function pagarMensal() {
        if ( $this->getTipo() == "CC" ) {
            $valor = 12.00;
        } elseif ( $this->getTipo() == "CP" ) {
            $valor = 20.00;
        }

        if ( $this->getSatus() ) {
            if ( $this->getSaldo() > $valor ) {
                $this->setSaldo( $this->getSaldo() - $valor );
                echo "<p>Mensalidade de R$ $valor debitada da conta de " . $this->getDono() . "</p>";
            } else {
                echo "<p>Saldo insuficiente para debitar a mensalidade!</p>";
            }
        } else {
            echo "<p>Conta encerrada ou inativa. Não é possível debitar a mensalidade</p>";
        }
    }

    // Métodos Especiais
    public function __construct() {
        $this->setSaldo(0);
        $this->setStatus(false);
        echo "<p>Conta criada com sucesso!</p>";
    }

    public function getNumConta() {
        return $this->numConta;
    }
    public function setNumConta($numConta) {
        $this->numConta = $numConta;
    }
    public function getTipo() {
        return $this->tipo;
    }
    public function setTipo($tipo) {
        $this->tipo = $tipo;
    }
    public function getDono() {
        return $this->dono;
    }
    public function setDono($dono) {
        $this->dono = $dono;
    }
    public function getSaldo() {
        return $this->saldo;
    }
    public function setSaldo($saldo) {
        $this->saldo = $saldo;
    }
    public function getSatus() {
        return $this->status;
    }
    public function setStatus($status) {
        $this->status = $status;
    }
}
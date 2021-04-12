<?php
/**
 * Description of Caneta
 *
 * @author sergio
 */
class Caneta {
    public $modelo;
    public $cor;
    private $ponta;
    protected $carga;
    protected $tampada;
    
    public function rabiscar() {
        if ( $this->tampada ) {
            echo "<p>Erro! Não posso rabiscar! A caneta está tampada.</p>";
        } else {
            echo "<p>Ok, estou rabiscando...</p>";            
        }
    }
    
    private function tampar() {
        $this->tampada = true;
    }
    
    private function destampar() {
        $this->tampada = false;
    }
}

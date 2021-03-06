<?php
/**
 * Description of Caneta
 *
 * @author sergio
 */
class Caneta {
    var $modelo;
    var $cor;
    var $ponta;
    var $carga;
    var $tampada;
    
    function rabiscar() {
        if ( $this->tampada ) {
            echo "<p>Erro! Não posso rabiscar! A caneta está tampada.</p>";
        } else {
            echo "<p>Ok, estou rabiscando...</p>";            
        }
    }
    
    function tampar() {
        $this->tampada = true;
    }
    
    function destampar() {
        $this->tampada = false;
    }
}

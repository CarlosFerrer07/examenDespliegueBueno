<?php

use PHPUnit\Framework\TestCase;
include './src/Enana.php';

class EnanaTest extends TestCase {
    
    public function testCreandoEnana() {
        // Para enana viva
        $enanaViva = new Enana("Enana Viva", 1);
        $this->assertEquals("Enana Viva", $enanaViva->getNombre());
        $this->assertEquals(1, $enanaViva->getPuntosVida());
        $this->assertEquals("viva", $enanaViva->getSituacion());
    
        // Para enana muerta
        $enanaMuerta = new Enana("Enana Muerta", -1);
        $this->assertEquals("Enana Muerta", $enanaMuerta->getNombre());
        $this->assertEquals(-1, $enanaMuerta->getPuntosVida());
        $this->assertEquals("muerta", $enanaMuerta->getSituacion());
    
        // Para enana limbo
        $enanaLimbo = new Enana("Enana Limbo", 0);
        $this->assertEquals("Enana Limbo", $enanaLimbo->getNombre());
        $this->assertEquals(0, $enanaLimbo->getPuntosVida());
        $this->assertEquals("limbo", $enanaLimbo->getSituacion());
    }
    
    public function testHeridaLeveVive() {
        #Se probará el efecto de una herida leve a una Enana con puntos de vida suficientes para sobrevivir al ataque
        #Se tendrá que probar que la vida es mayor que 0 y además que su situación es viva

    }

    public function testHeridaLeveMuere() {
        #Se probará el efecto de una herida leve a una Enana con puntos de vida insuficientes para sobrevivir al ataque
        #Se tendrá que probar que la vida es menor que 0 y además que su situación es muerta

    }

    public function testHeridaGrave() {
        #Se probará el efecto de una herida grave a una Enana con una situación de viva.
        #Se tendrá que probar que la vida es 0 y además que su situación es limbo

    }
    
    public function testPocimaRevive() {
        #Se probará el efecto de administrar una pócima a una Enana muerta pero con una vida mayor que -10 y menor que 0
        #Se tendrá que probar que la vida es mayor que 0 y que su situación ha cambiado a viva

    }

    public function testPocimaNoRevive() {
        #Se probará el efecto de administrar una pócima a una Enana en el libo
        #Se tendrá que probar que la vida y situación no ha cambiado

    }

    public function testPocimaExtraLimbo() {
        #Se probará el efecto de administrar una pócima Extra a una Enana en el limbo.
        #Se tendrá que probar que la vida es 50 y la situación ha cambiado a viva.

    }
}
?>
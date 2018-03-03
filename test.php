<?php

require "vendor/autoload.php";
require "Jogo.php";
require "Opcao.php";

class TestSuite extends \PHPUnit\Framework\TestCase {

     public function dadosVencedor() {
         return [
             [Opcao::PAPEL, Opcao::PEDRA],
             [Opcao::PEDRA, Opcao::TESOURA],
             [Opcao::TESOURA, Opcao::PAPEL],
         ];
     }

     /**
      * @param $ganha
      * @param $perde
      * @dataProvider dadosVencedor
     */
     public function testGanhaPerde($ganha, $perde) {
         $jogo = new Jogo();
         $ganhador = $jogo->joga($ganha, $perde);

         $this->assertEquals($ganha, $ganhador);
     }

     public function dadosEmpate() {
         return [
             [Opcao::PEDRA],
             [Opcao::PAPEL],
             [Opcao::TESOURA],
         ];
     }

    /**
     * @param $empate
     *
     * @dataProvider dadosEmpate
     */
    public function testEmpoate($empate) {
        $jogo = new Jogo();
        $ganhador = $jogo->joga($empate, $empate);

        $this->assertEquals(Opcao::EMPATE, $ganhador);
    }

    public function testInvalido(){
        $jogo = new Jogo();
        $ganhador = $jogo->joga("whatever", "abracadabra");

        $this->assertEquals(Opcao::INVALIDO, $ganhador);
    }

    public function testInvalido2(){
        $jogo = new Jogo();
        $ganhador = $jogo->joga("Juliano", "Juliano");

        $this->assertEquals(Opcao::INVALIDO, $ganhador);
    }
}
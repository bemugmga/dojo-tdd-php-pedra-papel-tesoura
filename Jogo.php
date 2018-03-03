<?php
/**
 * Created by PhpStorm.
 * User: pedromazala
 * Date: 22/02/2018
 * Time: 19:50
 */
//namespace App;

class Jogo {
    public function joga ($opcao1, $opcao2): int {

        if ($opcao1 == $opcao2) {
            return Opcao::EMPATE;
        }

        if (
            $opcao1 == Opcao::PAPEL
            &&
            $opcao2 == Opcao::TESOURA
        ) {
            return Opcao::TESOURA;
        }

        if (
            $opcao1 == Opcao::PAPEL
            &&
            $opcao2 == Opcao::PEDRA
        ) {
            return Opcao::PAPEL;
        }

        if (
            $opcao1 == Opcao::TESOURA
            &&
            $opcao2 == Opcao::PEDRA
        ) {
            return Opcao::PEDRA;
        }

        if (
            $opcao1 == Opcao::TESOURA
            &&
            $opcao2 == Opcao::PAPEL
        ) {
            return Opcao::TESOURA;
        }

        if (
            $opcao1 == Opcao::PEDRA
            &&
            $opcao2 == Opcao::PAPEL
        ) {
            return Opcao::PAPEL;
        }

        if (
            $opcao1 == Opcao::PEDRA
            &&
            $opcao2 == Opcao::TESOURA
        ) {
            return Opcao::PEDRA;
        }

        return Opcao::INVALIDO;
    }
}
<?php
//importação
require_once ("pessoa.class.php");

class Teste {
    //objeto pessoa com a visibilidade privada
    private $pessoa;

    public function __construct(){
        //objeto chamado pessoa que recebe a classe Pessoa()
        $pessoa = new Pessoa();
        // Passar um valor para o método setNome
        $pessoa->setNome("Jobson");
        //imprimir um valor do metodo getNome
        echo $pessoa->getNome();

    }
    //instancia
}new Teste ();

?>
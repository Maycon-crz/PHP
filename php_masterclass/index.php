<?php
    $ehFormado = true;
    $temCertificado = false;

    if($ehFormado === true){
        echo "eh formado sim!";
    } elseif($temCertificado === true){
        echo "tem certificado sim!";
    } else{
        echo "Vai estudar rapaz!";
    }

    //Tipos de variaveis
    $nome = "Maycon Nascimento de Oliveira";
    $idade = 33; 
    $altura = 1.70;
    $formacoes = array("PHP", "Javascript");
    $cliente = new \StdClass();

    // echo '$nome: ' . gettype($nome) . '<br />';
    // echo '$idade: ' . gettype($idade) . '<br />';
    // echo '$altura: ' . gettype($altura) . '<br />';
    // echo '$formacoes: ' . gettype($formacoes) . '<br />';
    // echo '$cliente: ' . gettype($cliente) . '<br />';
    
    //StdClass
    $objeto = new \StdClass();
    $objeto->nome = "Maycon";
    $objeto->sobrenome = "Nascimento de Oliveira";

    // var_dump($objeto);

    //Informa o tipo da Variavel
    // echo gettype($objeto). '<br/>';

    //Array associativa
    $frutas = [
        "Um"=>"banana",
        "Dois"=>"Laranja",
    ];
    // echo $frutas['Dois']."<br/>";

?>    

<?php

    //Ternario
    $primeiro = null;
    $segundo = 'Segundo OK';
    $terceiro = null;
    $quarto = null;
    $resultado = $primeiro ?? $segundo ?? $terceiro ?? $quarto ?? 'Não Preenchido';
    echo $resultado;

    //Constant(Não varia contrario de varivel);
    define('PI', 3.14);
    // echo PI;

    $_POST = array(
        'nome' => 'Maycon',
        'sobrenome' => null
    );
    $nome = ''; $sobrenome = ''; $carro = 'Rádo';

    //Modo novo (Ternario)
    $tipoDeCarro = ($carro == "Rápido") ? "Você tem um carro rápido" : "Você tem u carro lento";
    // echo $tipoDeCarro;

    $nome = $_POST['nome'] ?? "Não preenchido";
    $sobrenome = $_POST['sobrenome'] ?? "Não preenchido";
    // echo "{$nome}<br />";
    // echo "{$sobrenome}<br />";

    //Modo Antigo         
    if($_POST['nome'] <> null){
        $nome = $_POST['nome'];
    }else{$nome = "Não preenchido";}
    if($_POST['sobrenome'] <> null){
        $sobrenome = $_POST['sobrenome'];
    }else{$sobrenome = "Não preenchido";}
    // echo "Nome: {$nome} <br /> ";
    // echo "Sobrenome: {$sobrenome}";

    //TERNARIO
    $cpf = '';
    $cnpj = '22222222233333333';

    $tipoDocumento = ($cpf != '') ? 'CPF' : 'CNPJ';
        // echo $tipoDocumento;    
    //---

    //Condiçoes
    $ehFormado = true;
    $temCertificado = false;
    if($ehFormado === true){
        // echo "eh formado sim!";
    } elseif($temCertificado === true){
        // echo "tem certificado sim!";
    } else{
        // echo "Vai estudar rapaz!";
    }

    //Tipos de variaveis
    $nome = "Maycon Nascimento de Oliveira"; //String
    $intrutor = false;//Boolean
    $idade = 33;//INT / INTEGER
    $altura = 1.70;//FLOAT / Double
    $formacoes = array("PHP", "Javascript");//Array
    // $formacoes = ["PHP", "Javascript"];//Array outra forma
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
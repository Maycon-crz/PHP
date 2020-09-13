
<?php    
    //substr - Pega texto a partir de uma possisao especifica
    $mensagem = "Ola, meu nome é Maycon, tenho 21 anos de idade.";
    $nome = substr($mensagem, 5);//a partir da 5ª posição, pega o restante
    $nome = substr($mensagem, 0, 3);//a partir do inicio(posicao 0) pega apenas 3 caracteres
    echo $nome;

    //explode - Transformando string em array
        $pizzas = "musarela calabresa frango";
        $arraypizzas = explode(" ", $pizzas);// Separa a cadas espaço poderia ser ( | ) ( , ) etc...
        // var_dump($arraypizzas);        
    //-----------
    
    //implode/join - Transformando array em string
        $stringDeNovo = implode(' ', $arraypizzas);
        // echo $stringDeNovo;
    //-----------

    //Data
        //d = dia
        //m = mês
        //Y = Ano
        // date_default_timezone_set("America/Sao_Paulo");
        // echo "Hoje é ".date("d/m/Y")." - ";//BR
        // echo "Para salvar no DB é usado: ";
        // echo date("Y/m/d");
        // echo " - Hora: ".date("H:i:s");
        // echo " - Completo: ".date("d/m/Y h:i:s");
    //-----

    //Function

        //Filtrando com funcao anonima
        $filtro = ['nome1' => 'Maycon', 'nome2' => 'Daniel'];
        $nomes = ['Maycon', 'Daniel', 'Richard', 'Ricardo', 'Luiz'];
        $resultado = array_filter($nomes, function($valor) use ($filtro){
            return ($valor === $filtro['nome1']) || ($valor === $filtro['nome2']);
        });
        // var_dump($resultado);

        //string, int..(PHP avançado)
        // echo $resultado = mostraIdade(33);
        function mostraIdade(int $idade) : int{// int obriga que o parametro passado e retornado seja numero inteiro
            return $idade+1;
        }

        //dump and file
        function dd($variavel){
            // echo "<pre>";
            print_r($variavel[0]);
            // echo "</pre>";
            die();
        }
        $nomes = ['Maycon', 'Ricardo'];
        // dd($nomes);

    //--------

    //Foreach

        // $nomes = ['Maycon', 'Luiz', 'Richard', 'Ricardo'];
        // $resultado = [];
        // foreach($nomes as $key=>$value){
        //     if( !($key % 2) ){//Se não for divisivel por 2(se for impar)
        //         continue;
        //     }
        //     array_push($resultado, $value);//Atribui a array resultado o valor
        // }
        // var_dump($resultado);

        // $cores = ['Amarelo', 'Verde', 'Azul', 'Vermelho'];
        // foreach($cores as $cor){
        //     echo " - A cor é: {$cor}";
        // }

    //------

    //Do while

        // $numerando = 1;
        // do{
        //     echo "Numero atual é: {$numerando} - ";
        //     $numerando++;
        // } while($numerando<=5);

    //------
    //While
        // $numero = 1;
        // while($numero <=5 ){
        //     echo "Numero atual: {$numero} - ";
        //     $numero++;
        // }
    //------

    //for
    // for($i=0; $i<=10; $i++){
    //     echo " - Numero: {$i}";
    // }

    //Switch
    $corFavorita = "azul";
    switch($corFavorita){
        case 'vermelho':
            echo "Sua cor é Vermelho";
        break;
        case 'azul': 
            // echo "Sua cor é Azul";
        break;
        default:
            echo "Não selecionou nenhumma cor!";
    }

    //Ternario
    $primeiro = null;
    $segundo = 'Segundo OK';
    $terceiro = null;
    $quarto = null;
    $resultado = $primeiro ?? $segundo ?? $terceiro ?? $quarto ?? 'Não Preenchido';
    // echo $resultado;

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
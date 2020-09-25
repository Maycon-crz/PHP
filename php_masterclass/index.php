<?php

    //----------
    // Enviando mensagem para email PHPMailer
?>
        <!-- <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>SendMail</title>
        </head>
        <body>
            <form action='sendmail.php' method='post'>
                <label form='nome'>Nome Completo</label>
                <input type='text' name='nome' placeholder='Informe o seu sobrenome...' />
                <br><br>
                <label for='pais'>País</label>
                <select name='pais'>
                    <option value=''>Selecione um país</option>
                    <option value='brasil'>Brasil</option>
                    <option value='usa'>Estados Unidos</option>
                </select>        
                <br><br>
                <label for='mensagem'>Mensagem</label>
                <textarea name='mensagem' cols='30' rows='10' placeholder='Insira sua mensagem aqui...'></textarea>
                <br><br>
                <input type='submit' value='Enviar' />
            </form>
        </body>
        </html> -->        
<?php
    //------------------
    //Intalei os arquivos composer e phpmailer

    //Aproveitando/Incluido outro arquivo PHP
        //----
            require_once('confg.php');
            $connection = getConnection();
            // echo $connection;
        //----
        //include
            //Adiciona o arquivo especificado e caso não encontrar retorna um
            //Erro no tipo warning(Deixa a aplicação continuar sendo executada) 
            //com msg de arquivo não encontrado
        //-----
        //include_once
            //Caso ja tenha sido adicionado o aquivo, não inclui novamente
        //-----
        //require(recomendado)
            //Mesma coisa que o include porem se não existir o aquivo a aplicação/escript
            //Para de executar e retorna uma fatal error 
        //-----
        //require_once(recomendado)
            //Caso ja tenha sido adicionado o aquivo, não inclui novamente
        //-----
    //-----

    //try{}catch{}
        //Tratando Erro para aparecer no try catch 
            error_reporting(-1);
            set_error_handler(function($code, $message){
                throw new ErrorException($message, $code);
            });
        //-------

        $numerador = 20;
        $denominador = 0;

        try{//Tenta fazer issso
            // echo $numerador / $denominador;
        }catch(\Exception $error){//Se der erro Executa isso
            // echo "{$error->getMessage()}"; 
        } finally {//Independente do que acontecer vai ser executado isto
            // echo "<br />Fim da execução...<br />";
        }
    //------
    //Globais/
        //SESSION  //cor.php
            
            session_start();
            $_SESSION['cor_favorita'] = 'azul';
            // echo 'Cor favorita setada!';

        //-------
        // $_POST[];  //servidor.php
            ?>
          <!--   <!DOCTYPE html>
            <html lang='pt-br'>
                <head>
                    <meta charset='UTF-8'>
                    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
                    <title>Formulário</title>
                </head>
                <body>
                    <form action='servidor.php' method='POST'>
                        <input type='text' name='nome' placeholder='Informe o seu nome...'/>
                        <button type='submit'>Enviar</button>
                    </form>
                </body>
            </html> -->
<?php 
        //------
        // $_GET[''];
            $nome = $_GET['nome'] ?? "Não informado!";
            $sobrenome = $_GET['sobrenome'] ?? "Não informado";
            // echo $nome."<br>".$sobrenome;
        //------    
    //------
    //Enviando E-mail
        //Não recomendado e tem que configurar o php
            $mensagem = "Olá Meu nome é Maycon";
            $mensagem = wordwrap($mensagem, 25);
            // mail("emailQueVaiReceber@gmail.com", "Assunto", $mensagem);
        //------
    //------

    //Encerrando(parando) a aplicação 
        $nome = "Maycon Nascimento de Oliveira";
        // die("Encerrando a aplicação!");//A partir daqui não executa mais nada e escreve a menssgem setada;
        // exit("Encerrando a aplicação!");//A partir daqui não executa mais nada e escreve a menssgem setada;
        // echo $nome;
    //-------
    //Exemplos de de header()
        // header('Expires: Mon, 26 Nov 2020 18:00:00 GMT');
        // header('Cache-Control: no-cache');
        // header('Pragma: no-cache');

        // header('Location: index.php');

    //-------
    //criptografia fraca
        $md5 = md5('maycon');
        $sha1 = sha1('12345');
        // echo "Criptografado em md5: ".$md5." | ";    
        // echo "Criptografado em sha1: ".$sha1;        
        $nome = "Maycon";
        $nomeCodificado = base64_encode($nome);
        $nomeDecodificado = base64_decode($nomeCodificado);
        // echo "Nome codificado: ".$nomeCodificado." | Nome Decodificado: ".$nomeDecodificado;
    //-------
    //strlen - conta a quantidade de caracteres
        $nome = "Maycon Nascimento de Oliveira";
        // echo strlen($nome);
    //----
    //str_replace - Modifica a string
        $ascinatura = str_replace('Nascimento de Oliveira', 'N. de Oliveira', $nome);
        // echo $ascinatura;
    //----
    //count - conta quantos elementos tem
        $carros =  ["fusca", "opala", "maverick"];
        // echo count($carros);
    //----

    //Numeros aleatórios(Dapara usar em sorteio)
        // echo( rand()." - ");//Aleatório
        // echo(rand()." - ");//Aleatório
        // echo (rand(0, 10));//Aleatório de 0 a 10
    //-----
    //Exportando
        // $texto = file_put_contents('teste.txt', 'Olá meu camarada!');
    //-----
    //Importando
        $texto = file_get_contents('teste.txt');
        // echo $texto;
    //-----

    //json objeto para string
        $idades = [
            'julio'=>'julilo é de 86',
            'roberto'=>'roberto é de 88'
        ];
        $json = json_encode($idades, JSON_UNESCAPED_UNICODE);//Com ascento certo
        // echo $json;
    //-----
    //json string para objeto
        $json = '{"julio":"julilo é de 86","roberto":"roberto é de 88"}';
        $objeto = json_decode($json);
        // var_dump($objeto->julio);
    //-----
    //json string para array
        $array = json_decode($json, true);
        // var_dump($array['julio']);
    //-----

    //substr - Pega texto a partir de uma possisao especifica
        $mensagem = "Ola, meu nome é Maycon, tenho 21 anos de idade.";
        $nome = substr($mensagem, 5);//a partir da 5ª posição, pega o restante
        $nome = substr($mensagem, 0, 3);//a partir do inicio(posicao 0) pega apenas 3 caracteres
        // echo $nome;
    //-----------

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
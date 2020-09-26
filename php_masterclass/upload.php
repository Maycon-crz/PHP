<?php

	$target_dir = "uploads/";
	//basename()//Nome base Pega o caminho atual do arquivo
	$target_file = $target_dir.basename($_FILES['fileToUpload']['name']);//Concatenado com o nome do campo
	$uploadOk = 1;

	//Para pegar o tipo do arquivo com letra minúscula e diretório que vai salvar
		$imagemFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
	//-----
	//Verifica quando enviado e se o arquivo é imagem real
		if(isset($_POST['submit'])){
			$check = getimagesize($_FILES['fileToUpload']['tmp_name']);//

			if($check !== false){//Diferente mesmo até o tipo
				echo "O arquivo é uma imagem. <br />";
			}else{
				echo "O arquivo não é uma imagem";
				$uploadOk = 0;
			}
		}
	//-----
	//Verifica se o aquivo já existe
		if(file_exists($target_file)){
			echo "Desculpe o aquivo já existe";
			$uploadOk = 0;
		}
	//-----
	//Verifica o tamanho do arquivo
		if($_FILES['fileToUpload']['size'] > 500000){
			echo "Desculpe seu arquivo é muito grande.";
			$uploadOk = 0;
		}
	//-----
	//Certifica que o arquivo é do tipo imagem
		if($imagemFileType != "jpg" && $imagemFileType != "png" && $imagemFileType != "jpeg" && $imagemFileType != "gif"){
			echo "Desculpe, apenas aquivos JPG, JPEG, PNG e GIF são permitidos";
			$uploadOk = 0;
		}		
	//-----
	//Verifica se a variavel uploadOk esta com 0 ou com 1(permitido para upload)
		if($uploadOk === 0){
			echo "Desculpe o seu arquivo não foi enviado para o servidor";
		}else{
			//Verifica se o diretorio /uploads existe se não existir vai ser criado
				if(!file_exists('uploads')){
					mkdir('uploads', 0777, true);//cria
				}
			//-----
			//Move o arquivo da pasta /tmp para a pasta /uploads
				if(move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $target_file)){
					echo "O arquivo ".basename($_FILES['fileToUpload']['tmp_name'])."Foi movido com sucesso!";
				}else{
					echo "Desculpe houve um erro ao enviar o seu arquivo para o servidor";
				}
			//-----
		}
	//-----

?>	
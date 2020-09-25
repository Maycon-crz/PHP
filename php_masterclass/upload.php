<?php

	$target_dir = "upload/";
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
			echo "O arquivo é uma imagem - ".$check['mine'].". <br />";
		}else{
			echo "O arquivo não é uma imagem";
			$upload = 0;
		}
	}
?>
<?php
	session_start();
	echo "Minha cor favorita é ".$_SESSION['cor_favorita'] ?? 'não informado.';

?>
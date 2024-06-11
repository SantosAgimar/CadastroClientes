<?php

require __DIR__."/vendor/autoload.php";

//$cadastro = new Cadastro();

//$cadastro->cadastrar();

/**
	* INICIO DO PROGRAMA GERENCIADOR DE BAR
	* AUTOR: AGIMAR A.SANTOS
	* CAMPINAS, RUA FLUMINENSE,179 22/07/21
	*
	*/
	require __DIR__."/vendor/autoload.php"; 

	define('TITLE', 'Home');
	
  use \App\Cadastro;

	$cadastro = new Cadastro();

	include __DIR__."/includes/header.php";

  include __DIR__."/includes/form_cadastrar.php";
 // $cadastro->cadastrar();
	include __DIR__."/includes/footer.php";
	
?>
	</section>
</main>

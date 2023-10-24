<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Question F</title>
<link rel="icon" type="image/png" href="unimed.png" />
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="">
	<meta name="description" content="">

	<link rel="stylesheet" href="../css/bootstrap.min.css">
	<link rel="stylesheet" href="../css/font-awesome.min.css">
	<link rel="stylesheet" href="../css/animate.min.css">
	<link rel="stylesheet" href="../css/et-line-font.css">
	<link rel="stylesheet" href="../css/nivo-lightbox.css">
	<link rel="stylesheet" href="../css/nivo_themes/default/default.css">
	<link rel="stylesheet" href="../css/style.css">
	<link rel="stylesheet" href="../css/login.css">
	<link rel="stylesheet" type="text/css" href="css/demo.css" />
    <link rel="stylesheet" type="text/css" href="css/style3.css" />
    <link rel="stylesheet" type="text/css" href="css/animate-custom.css" />
	<link href='https://fonts.googleapis.com/css?family=Roboto:400,300,500' rel='stylesheet' type='text/css'>
    
 
<script type="text/javascript">
function validaCampo()
{
if(document.cadastro.pergunta_f.value=="")
	{
	alert("Selecione uma resposta");
	return false;
	}
else
return true;
}
<!-- Fim do JavaScript que validará os campos obrigatórios! -->
</script> 
</head>
<body >

<!-- preloader section -->
<?php

session_start();
if((!isset ($_SESSION['login']) == true) and (!isset ($_SESSION['senha']) == true))
{
	unset($_SESSION['login']);
	unset($_SESSION['senha']);
	header('location:error.html');

	}
$user= $_SESSION['login'];

?>

<!-- navigation section -->
<section class=" navbar-fixed-top navbar" role="navigation">
	<div class="container">
		<div class="navbar-header">
			<button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon icon-bar"></span> <span class="icon icon-bar"></span> <span class="icon icon-bar"></span></button>
            </div>
</section>	
<br>
<br>
<br>
<div class="text-center">
		<div class="">
			<div class="col-sm-12">
				<h1><span>F. Essa é uma loja de material de construção?</span></h1>
				<br>
				<br>
				<br> 
</div>
		
<form id="cadastro" name="cadastro" method="post" action="cadastroquestionf.php" onsubmit="return validaCampo(); return false;">	
      <td> 

		<input type="radio" name="pergunta_f" value="sim"> SIM<br>
        <input type="radio" name="pergunta_f" value="não"> NÃO<br>
		<br>
	</tr>
	<tr>
     <tr>
      <td colspan="2"><p>
        <input name="cadastrar" class="smoothScroll btn btn-danger" type="submit" id="cadastrar" value="Próximo" size="70" maxlength="70" /> 
        <br/>
      <p>&nbsp; </p></td>
    </tr>
</form>
<footer>
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12">
				<p>Questionario Anamaco</a></p>
               	<hr>

			</div>
		</div>
	</div>
</footer>
</div>
</section>
</body>
</html>
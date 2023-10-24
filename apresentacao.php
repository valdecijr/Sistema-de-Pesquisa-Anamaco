<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>|Login de Supervisor </title>
<link rel="icon"  href="logo.ico" />
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
    
    
</head>
<body data-spy="scroll" data-target=".navbar-collapse" data-offset="50" color="black">

<!-- Sessão de Login -->
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
				<b>INTRODUÇÃO:<br> Prezado sr.<br>

Como é de seu conhecimento, a ANAMACO – Associação Nacional dos Comerciantes de Material de Construção, realiza mensalmente uma pesquisa para monitorar os resultados de vendas do setor, e com isso, ter informações para subsidiar decisões por parte de fabricantes e lojistas, além de gerar dados para apresentar ao Governo na busca de incentivos ao setor de material de construção.
A sua loja tem participado regularmente da pesquisa e O Instituto de Pesquisas da Universidade Anamaco agradece muito sua colaboração. Como já informado, temos a opção de questionário on line, de forma a ajustar a pesquisa ao horário de sua melhor conveniência, e não tomará mais do que 10 minutos
SUA PARTICIPAÇÃO É VOLUNTÁRIA E GARANTIMOS QUE SUAS RESPOSTAS SERÃO TRATADAS DE FORMA
ESTRITAMENTE CONFIDENCIAL.
		
Como estamos buscando dados sobre as vendas do mês de SETEMBRO em relação a AGOSTO de 2016,
Pedimos a gentileza de responder a esse questionário até  o dia 29 de setembro.

Qualquer dúvida, favor entrar em contato com Katia Ratnieks pelo telefone (11) 9 8198 3299 ou (11) 3393 3409 

Desde já agradecemos sua colaboração. Ao final da análise dos resultados, você estará recebendo um relatório. 
com os mesmos com EXCLUSIVIDADE.
</b>
<br>
<br>
<br>
<a href="perguntaf.php" class="smoothScroll btn btn-danger">Próximo</a>
</div>

        
<footer>
	
</footer>
</div>
</section>
</body>
</html>
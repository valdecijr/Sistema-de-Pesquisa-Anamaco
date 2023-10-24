<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Question FA1</title>
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
if(document.cadastro.cpf.value=="")
	{
	alert("O Campo CPF é obrigatório!");
	return false;
	}

<!-- Fim do JavaScript que validará os campos obrigatórios! -->
</script> 
</head>
<body >

<!-- preloader section -->



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
				<b>FA1. Qual o seu cargo na loja/empresa? (RU)</b>
				<br>
				<br>
				<br>
</div>
		
<form id="cadastro" name="cadastro" method="post" action="cadastroperguntafa1.php" onsubmit="return validaCampo(); return false;">	
      <td> 

		<input type="radio" name="pergunta_fa1" value="sim"> SIM<br>
        <input type="radio" name="pergunta_fa1" value="nao" value="não"> NÃO<br>
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
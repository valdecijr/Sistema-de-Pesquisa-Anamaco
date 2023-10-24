<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Pergunta F</title>
<link rel="icon" type="image/png" href="unimed.png" />
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
if(document.cadastrar.Proximo.value=="Próximo")
	{
	alert("Uma resposta é obrigatória!");
	return false;
	}

<!-- Fim do JavaScript que validará os campos obrigatórios! -->
</script> 
</head>
<body >

<!-- Pergunta-->
<br>
<br>
<br>
<div class="text-center">
		<div class="">
			<div class="col-sm-12">
				<b>FA. O Sr (a) é o(a) responsável pelas vendas da loja, isto é, acompanha as vendas mensais da loja? (RU)</b>
				<br>
				<br>
				<br>
</div>
<!-- Pergunta-->

<!-- Opções de respostas-->		
<form id="cadastro" name="cadastro" method="post" action="cadastroperguntafa.php" onsubmit="return validaCampo(); return false;">	

		<input type="radio" name="pergunta_fa" value="sim"> SIM<br>
        <input type="radio" name="pergunta_fa" value="nao"> NÃO<br>
		<br>
        <input name="cadastrar" class="smoothScroll btn btn-danger" type="submit" id="cadastrar" value="Próximo" size="70" maxlength="70" />		
        <br/>
</form>
<!-- Opções de respostas-->	
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
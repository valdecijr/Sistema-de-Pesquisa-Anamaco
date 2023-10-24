<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<title>Question FA </title>
	<link rel="icon" type="image/png" href="icon.anamaco.png" />
</head>

<body>
<?php 
// RECEBENDO RESPOSTAS DE CADA QUESTÃO !
$ID	= $_POST ["ID"];	//atribuição do campo "ID" vindo do formulário para variavel
$pergunta_fa1	= $_POST ["pergunta_fa1"];	//atribuição do campo "pergunta_f" vindo do formulário para variavel	
//Gravando no banco de dados !

//conectando com o localhost - mysql
$conexao = mysql_connect('127.0.0.1:3306','root','');
if (!$conexao)
	die ("Erro de conexão com localhost, o seguinte erro ocorreu -> ".mysql_error());
//conectando com a tabela do banco de dados
$banco = mysql_select_db("pesquisaanamaco",$conexao);
if (!$banco)
	die ("Erro de conexão com banco de dados, o seguinte erro ocorreu -> ".mysql_error());


$query = "INSERT INTO `questionario` ( `ID`, `pergunta_fa1` )
VALUES ( NULL, '$pergunta_fa1' );";

mysql_query($query,$conexao);

echo "<script language='javascript' type='text/javascript'>alert('Pergunta cadastrada com sucesso!');window.location.href='perguntap1.php'</script>";
?> 
</body>
</html>

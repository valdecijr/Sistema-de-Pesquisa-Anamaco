<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<body>
<?php 
// RECEBENDO RESPOSTAS DE CADA QUEST�O !
$ID	= $_POST ["ID"];	//atribui��o do campo "ID" vindo do formul�rio para variavel
$pergunta_f	= $_POST ["pergunta_f"];	//atribui��o do campo "pergunta_f" vindo do formul�rio para variavel	
//Gravando no banco de dados !

//conectando com o localhost - mysql
$conexao = mysql_connect('127.0.0.1:3306','root','');
if (!$conexao)
	die ("Erro de conex�o com localhost, o seguinte erro ocorreu -> ".mysql_error());
//conectando com a tabela do banco de dados
$banco = mysql_select_db("pesquisaanamaco",$conexao);
if (!$banco)
	die ("Erro de conex�o com banco de dados, o seguinte erro ocorreu -> ".mysql_error());


$query = "INSERT INTO `questionario` ( `ID`, `pergunta_f` )
VALUES ( NULL, '$pergunta_f' );";

mysql_query($query,$conexao);

echo "<script language='javascript' type='text/javascript'>alert('Pergunta cadastrada com sucesso!');window.location.href='perguntafa.php'</script>";
?> 
</body>
</html>

<?php include("phpmailer/class.phpmailer.php"); 
$mail = new PHPMailer(); //INICIA A CLASSE
$dados = $_REQUEST['fale'];
$mail->CharSet = 'utf-8'; //
$mail->IsMail(true);
$mail->IsHTML(true);
$mail->From = $dados['email'];
$mail->FromName = $dados['nome'];
$mail->AddAddress("ingo.bezerra@argohost.net","Setor de Vendas");
$mail->Subject = "Contato pelo Site – ".$dados['assunto'];
$mail->Body = "<b>Nome:</b> ".$dados['nome']."<br /><b>E-mail:</b> ".$dados['email']."<br /><b>Telefone:</b> ".$dados['telefone']."<br /><b>Cidade:</b> ".$dados['cidade']."<br /><b>Estado:</b> ".$dados['estado']."<br /><br /><b>Assunto:</b> ".$dados['assunto']."<br /><b>Mensagem:</b> ".$dados['mensagem'];
$mail->IsSMTP(); //Habilita envio SMPT
$mail->SMTPAuth = true; //Ativa email autenticado
$mail->Host = 'mail.hotelarara.com.br'; //Servidor de envio
$mail->Port = '25'; //Porta de envio
$mail->Username = 'marcio@hotelarara.com.br'; //email para smtp autenticado
$mail->Password = 'marcio@2014'; //seleciona a porta de envio
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Aço Nordeste, Arames, Chapas, Aço, Treliças, Vergalhão, Perfis, Tubos, Barras, Fortaleza, Ferro, Telas, Lojas de Aço, Aço Fortaleza" />
<meta name="description" content="Aço Nordeste" />
<meta name="robots" content="all" />
<meta name="language" content="pt-br" />
<meta name="author" content="Daniel Anaissi" />

<title><?php echo $titulo ?></title>
<link href="css/estilo.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="geral">

<div id="titulo">Contato</div>
<div id="corpo-contato">
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>
    <?php
if($mail->Send())
echo "<b>E-mail enviado com sucesso!</b>";
else
echo "Erro ao enviar e-mail, tente novamente mais tarde.";
?>
  </p>
  <p>&nbsp; </p>
  <p>&nbsp;</p>
  <p><a href="index.php">Voltar</a></p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
</div>
</div>
</body>
</html>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Aço Nordeste, Arames, Chapas, Aço, Treliças, Vergalhão, Perfis, Tubos, Barras, Fortaleza, Ferro, Telas, Lojas de Aço, Aço Fortaleza" />
<meta name="description" content="Aço Nordeste" />
<meta name="robots" content="all" />
<meta name="language" content="pt-br" />
<meta name="author" content="Daniel Anaissi" />
<link href="css/estilo.css" rel="stylesheet" type="text/css" />
<script src="js/SpryValidationTextField.js" type="text/javascript"></script>
<script src="js/SpryValidationSelect.js" type="text/javascript"></script>
<script src="js/SpryValidationTextarea.js" type="text/javascript"></script>
<link href="js/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
<link href="js/SpryValidationSelect.css" rel="stylesheet" type="text/css" />
<link href="js/SpryValidationTextarea.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="geral">
<div id="titulo">Contato</div>
<div id="corpo-contato">
  <p>Utilize o formulário abaixo para enviar suas críticas, dúvidas e sugestões.</p>
  <p>&nbsp;</p>
  <form name="contato" action="contato-enviado.php" method="post" >
    <p>Nome:<br/>
      <span id="sprytextfield1">
      <input name="fale[nome]" type="text" class="campo" value="" size="55" />
      <span class="textfieldRequiredMsg"><br />Informe seu nome.</span></span></p>
    <p>E-mail:<br/>
      <span id="sprytextfield2">
      <input name="fale[email]" type="text" class="campo" value="" size="55" />
      <span class="textfieldRequiredMsg">Informe seu e-mail.</span><span class="textfieldInvalidFormatMsg"><br />
      Informe um e-mail válido.</span></span></p>
    <p>Telefone:<br/>
      <span id="sprytextfield3">
      <input name="fale[telefone]" type="text" class="campo" value="" size="20" />
      <span class="textfieldRequiredMsg">Informe um telefone.</span><span class="textfieldMinCharsMsg"><br />
      Informe um telefone válido.</span></span></p>
     <p>Cidade:<br/>
       <span id="sprytextfield4">
       <input name="fale[cidade]" type="text" class="campo" value="" size="55" />
      <span class="textfieldRequiredMsg"><br />Informe a Cidade.</span></span></p> 
      <p>Estado:<br/>
        <span id="sprytextfield5">
        <input name="fale[estado]" type="text" class="campo" value="" size="40" />
      <span class="textfieldRequiredMsg"><br />Informe o Estado.</span></span></p>
      <p>&nbsp;</p>
      <p>
        <label for="fale[assunto]"></label>
        <span id="spryselect1">
        <select name="fale[assunto]" class="campo" id="assunto">
          <option selected="selected">Selecionar Assunto *</option>
          <option value="Dúvidas">Dúvidas</option>
          <option value="Sugestões">Sugestões</option>
          <option value="Outros">Outros</option>
        </select>
        <span class="selectRequiredMsg"><br />Selecione um assunto.</span></span></p>
      <p>&nbsp; </p>
      <p>Mensagem: <br/>
        <span id="sprytextarea1">
        <textarea name="fale[mensagem]" cols="55" rows="7" class="campo"></textarea>
      <span class="textareaRequiredMsg"><br />Informe sua Mensagem.</span></span></p>
    <p>&nbsp;</p>
    <p>
      <input name="enviar" type="submit" value="Enviar" />
    </p>
  </form>
</div>

</div>
<script type="text/javascript">
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2", "email");
var sprytextfield3 = new Spry.Widget.ValidationTextField("sprytextfield3", "none", {minChars:8});
var sprytextfield4 = new Spry.Widget.ValidationTextField("sprytextfield4");
var sprytextfield5 = new Spry.Widget.ValidationTextField("sprytextfield5");
var spryselect1 = new Spry.Widget.ValidationSelect("spryselect1");
var sprytextarea1 = new Spry.Widget.ValidationTextarea("sprytextarea1");
</script>
</body>
</html>
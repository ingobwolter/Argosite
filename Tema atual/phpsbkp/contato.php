  <a name="emergencia" id="emergencia"></a> 
  <div class="form-group" style="width:58%;font-size:15px;color:#2b3d4f;padding-top;float:left;">
   
    <form action="atendimento.php#emergencia" method="post"> 
 

      <label for="inputEmail3" class="col-sm-2 control-label">Nome:</label><br>
      <input name="nomeremetente" type="text" class="form-control" placeholder="Digite seu nome" value="" size="55" required/>
      <label for="inputEmail3" class="col-sm-2 control-label">E-mail:</label>
      <input name="emailremetente" type="text" class="form-control" placeholder="Email" value="" size="55" required/>
      </span></span></p>
      <p>
        <label for="fale[assunto]" class="col-sm-2 control-label" style="float:none;">Produtos:</label>
        <select name="produtos" class="form-control input-lg" id="departamento" required>
          <option selected="selected" value="hospedagem linux">Hospedagem Linux</option>
          <option value="hospedagem windows">Hospedagem Windows</option>
          <option value="hospedagem blog">Hospedagem para Blog</option>
          <option value="hospedagem semidedicada">Hospedagem semi-dedicada</option>
          <option value="registro de dominio">Registro de domínio</option>
          <option value="revenda">Revenda de hospedagem</option>
        </select>
      <P>  
        <label for="departamento" class="col-sm-2 control-label" style="float:none;">Departamento:</label>
        <select name="departamento" class="form-control input-lg" id="departamento" required>
          <option selected="selected" value="Suporte">Suporte</option>
          <option value="Financeiro">Financeiro</option>
          <option value="Comercial">Comercial</option>
        </select>
        </span></span></p>
        <label for="inputEmail3" class="col-sm-2 control-label">Mensagem:</label>
        <textarea name="mensagem" cols="55" rows="3" class="form-control" placeholder="Digite o assunto e mensagem." required></textarea>
        </span></span><span style="font-size:10px;color:red;">(Todos os campos sao obrigatórios)</span></p>
      <br>
      <div style="width:31%;margin-top:-23px;float:right;margin-right:50px;">
        <input name="enviar" class="btn btn-primary btn-lg btn-block" type="submit" value="Enviar" Onclick="validar();"/>
      </div>  
      <div style="width:31%;margin-top:-23px;">
        <input name="enviar" class="btn btn-default btn-lg btn-block" type="reset" value="Limpar"/>
      </div> 
    </p>
  </form>
  </div>

  <div class="col-md-5" style="font-family:open_sansregular;text-align:center;line-height:18px;padding-top:9px;padding:0px!important;font-size:21px;">
    <p style="color:#2b3d4f;font-size:22px;text-align:center">Telefone geral</p>
    <p style="color:#d94936;font-size:29px;text-align:center">4002 2552</p>
    <br><br>
    <div style="text-align:justify;font-size:20px;font-family:open_sanslight;color:#2b3d4f;line-height:27px;letter-spacing:-1px;padding-left:18px;">
      <p>Para abrir um chamado sobre questões técnicas, comerciais e financeiras, utilize o formulário ao lado.<br><br>
      <p style="text-align:center;">Caso prefira você pode enviar um e-mail para: <a href="mailto:atendimento@argohost.net" style="color:#2b3d4f;">atendimento@argohost.net</a><br />

      <p><center><a href="http://slka01.argohost.net/visitor/index.php?/Default/LiveChat/Chat/StartInline/_sessionID=/_proactive=0/_filterDepartmentID=/_fullName=/_email=/_inline=0/" target="_black" style="color:#d94936;font-family:open_sansbold;text-align:center;">Clique aqui para falar com o atendimento online.</a><br /></center></p>

      <p style="font-size:17px;text-align:center;">
    </div>
      <br>
      <center><img src="Content/images/icones/atendimento-icones.svg" style="width:254px;padding-left:23px;"></center>
  </div>


</div>

</div>
<br>
  <div class="container" style="width:687px!important;">
    <div class="col-md-5">
    <div id="message" class="alert alert-success" role="alert" style="display:none;">
          Mensagem enviada com sucesso!
    </div>
    </div>
  </div>  
<?php

// Passando os dados obtidos pelo formulário para as variáveis abaixo


$nomeremetente     = $_POST['nomeremetente'];
$emailremetente    = trim($_POST['emailremetente']);
$emaildestinatario = 'argohost@gmail.com'; // Digite seu e-mail aqui, lembrando que o e-mail deve estar em seu servidor web
$produtos              = $_POST['produtos'];
$departamento          = $_POST['departamento'];
$mensagem          = $_POST['mensagem'];

 
/* Montando a mensagem a ser enviada no corpo do e-mail. */
$mensagemHTML = '<P>ATENDIMENTO</P>
<p><b>Nome:</b> '.$nomeremetente.'
<p><b>E-Mail:</b> '.$emailremetente.'
<p><b>Produto:</b> '.$produtos.'
<p><b>Departamento:</b> '.$departamento.'
<p><b>Mensagem:</b> '.$mensagem.'</p>
<hr>';


// O remetente deve ser um e-mail do seu domínio conforme determina a RFC 822.
// O return-path deve ser ser o mesmo e-mail do remetente.
$headers = "MIME-Version: 1.1\r\n";
$headers .= "Content-type: text/html; charset=utf-8\r\n";
$headers .= "From: $emailremetente\r\n"; // remetente
$headers .= "Return-Path: $emaildestinatario \r\n"; // return-path
$envio = mail($emaildestinatario, $assunto, $mensagemHTML, $headers); 
 
?>
<script type="text/javascript">
    function validar(){
      document.getElementById("message").style.display="block";
    }
</script>
</body>
</html>
<?php  
    session_start();

        $_SESSION['sld'] = $_POST['sld']; 
        $_SESSION['tld'] = $_POST['tld']; 
?>
<!DOCTYPE html>
	<html lang="pt-br">
        <head>
			<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
			<title>ArgoHost Hospedagem de sites com ativação imediata</title>
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<meta name="description" content="Soluções para hospedagem de sites. Hospedagem Linux com Cpanel para hospedar blog, site, emails e portais. Planos de hospedagem com ativação imediata na aquisição." />
			<meta name="keywords" content="hospedagem de site, hospedagem de sites, hospedagem linux, hospedar site linux, servidor de hospedagem"/>
			<meta name="Argohost" content="Hospedagem de sites"/>
			<link href="Content/bootstrap.css" rel="stylesheet" type="text/css" media="screen"/>
			<link href="Content/estilo.css" rel="stylesheet" type="text/css" media="screen"/>
			<link href="Content/chatestilo.css" rel="stylesheet" type="text/css" media="screen"/>
			<link href="Content/animate.css" rel="stylesheet" media="screen">
			<link href="Content/tooltip.css" rel="stylesheet" media="screen">
			<link rel="canonical" href="http://www.argohost.net" />
			<link href='http://fonts.googleapis.com/css?family=Racing+Sans+One' rel='stylesheet' type='text/css'>
			<script type="text/javascript" src="https://apis.google.com/js/plusone.js">
			</script>

      <script type="text/javascript" src="core/includes/jscript/jqueryui.js"></script>
      <script type="text/javascript" src="core/templates/orderforms/argohost/js/main.js"></script>

			<script src="http://code.jquery.com/jquery-latest.js"></script>
			<script type="text/javascript">
			function fechar(){
			document.getElementById("dentro").style.display="none";
			}
			function sobe(){
			document.getElementById("dentro").style.top = "0%";
				}
			function desce(){
			document.getElementById("dentro").style.top = "93%";
			}
			</script>
			<script type="text/javascript" >try {if (top.location.hostname != self.location.hostname) { throw 1; }} catch (e) { top.location.href = self.location.href; }</script>
			<style type="text/css">
			::-moz-selection {
			color: #ccc;
			background:#F30;
			}
			::selection {
				color: #ccc;
				background: #F30;
			}
			video#bgvid {
				min-width: 100%; 
				min-height: 100%;
				max-height: 100%;
				width: 100%; 
				height: 100px; 
				z-index: -100;
				background: url(logo.jpg) no-repeat;
				background-size: cover;
				padding: 0px 0px;
}
			.product-detail-photo{
				height:351px !important;
			}
			.opa{
				opacity:1;
			}
			.opa:hover{
				opacity:0.8;
			}
			.arrow-down {
				width: 0; 
				height: 0; 
				border-left: 20px solid transparent;
				border-right: 20px solid transparent;
				border-top: 20px solid #E6E6E6;
}
		.arrow-azul {
				width: 0; 
				height: 0; 
				border-left: 20px solid transparent;
				border-right: 20px solid transparent;
				border-top: 20px solid #445581;
}
.arrow-cinzaclaro {
				width: 0; 
				height: 0; 
				border-left: 20px solid transparent;
				border-right: 20px solid transparent;  
				border-top: 20px solid #f2f2f2;
}
.arrow-laran {
				width: 0; 
				height: 0; 
				border-left: 20px solid transparent;
				border-right: 20px solid transparent;  
				border-top: 20px solid #F7931E;
}
			</style>
        </head>
<body>
<?php 
    include 'include_argo/header.php';
    include 'include_argo/nav.php';
?>

<div class="googleplus" style="position: fixed; bottom: 56%; left:2%;z-index:555;">
    <div class="g-plusone" data-size="tall"><g:plusone></g:plusone>
    </div>
</div>
<article class="product-detail-content" style="height:410px;padding:0px !important;background-color:#3B3B3B;">
		<video width="auto" height="100%" autoplay loop  poster="logo.jpg" id="bgvid">
  			<source src="video/dominio01.mp4" type="video/mp4">
  			<object data="video/dominio01.mp4" width="100%" height="auto">
 			</object>
		</video>
</article>
	<div class="container"> 
      
         <div class="produtos" style="background-color:#F2f2f2;width:100%;text-align:center;height:auto;font-family:museo_light;font-size:36px;color:#445581;padding:0px;">
          <img src="images/missão.png">
         </div>
         <center><div class="arrow-cinzaclaro" style="position:relative;z-index:556;"></div></center>  
      
     
        <div class="produtos" style="background-color:#E6E6E6;width:100%;text-align:center;height:auto;font-family:museo_light;font-size:36px;color:#445581;padding:20px;margin-top:-20px;">
            Você tem direito a<br>
            <span style="font-family:museo_regular;font-size:36px;">UM DOMÍNIO GRÁTIS AGORA!<br></span> 
        </div>
        <center><div class="arrow-down" style="position:relative;z-index:556;"></div></center>   
      <div class="produtos" style="background-color:#445581;text-align:center;height:auto;color:#F2F2F2;padding:40px;margin-top:-20px;">
            <span style="font-family:museo_regular;font-size:48px;">As regras da missão</span><br><br>
              <span style="font:24px/36px museo_regular;">Sem compromisso e fidelização<br>
              Você não precisa comprar nada<br>
                <span style="font:18px/34px museo_regular;">Apenas domínios .com .net ou .org<br>
                Apenas um domínio grátis por cpf/cnpj<br>
                Apenas um domínio grátis por pedido<br>
                Registrado em seu cpf/cnpj<br>
                Gratuidade apenas no primeiro ano de registro<br>
                Deve ser seu primeiro domínio registrado na ArgoHost<br>
                Promoção válida apenas em 01/09/14.<br>                
                    </span>
            </span>
        </div>
        <center><div class="arrow-azul" style="position:relative;z-index:556;"></div></center>
  <!---->      
        <div class="produtos" style="background-color:#F2F2F2;width:100%;text-align:center;height:auto;font-family:museo_light;font-size:36px;color:#445581;padding:20px;margin-top:-20px;margin-bottom:-53px;">
          <a name="confira" id="confira"></a> 
          <span style="font-family:museo_regular;font-size:24px;">Confira se o seu domínio está disponível!<br>
                <div class="opa">

                  <!---->
                  <?
function whois ($domain, $tipo) {
$server[0] = "whois.registro.br"; //--> Domínios Nacionais
$server[1] = "whois.internic.net"; //--> Domínios .com, .net, .org, .edu
$server[2] = "whois.networksolutions.com"; //--> Domínios .aero, .arpa, .biz, .coop, .info, .int, .museum

$domain = strtolower($domain);
if (trim($domain) <> "") {
$domain = trim($domain);
$final = substr($domain, -4);
// Verifica dominios do brasil
if (substr("$domain", -3) == ".br") {
$br = fsockopen($server[0], 43, $errno, $errstr, 30);
if (!$br) {
$dados .= "$errstr ($errno)";
} else {
fputs($br, "$domain\r\n");
while (!feof($br)) {
$buffer .= fread($br,128);
}
if ($tipo == 1) {
if (strpos($buffer, "No match for") > 0) $dados .= false; else $dados .= true;
} else {
$dados .= str_replace("\n","<BR>\n",trim($buffer));
}
fclose ($br);
}

// Verifica domínios .com, .net, .org, .edu
} elseif (($final == '.com') OR ($final == '.net') OR ($final == '.org') OR ($final == '.edu')) {
$internic = fsockopen($server[1], 43, $errno, $errstr, 30);
if (!$internic) {
$dados .= "$errstr ($errno)";
} else {
fputs($internic, "$domain\r\n");
while (!feof($internic)) {
$buffer .= fread($internic,128);
}
if ($tipo == 1) {
if (strpos($buffer, "No match for") > 0) $dados .= false; else $dados .= true;
} else {
if (strpos($buffer, "No match for") > 0) {
$dados .= "<pre>" . trim($buffer) . "</pre>";
} else {
$servidor = substr($buffer, strpos($buffer, "Whois Server:")+14, strlen($buffer));
$servidor = substr($servidor, 0, strpos($servidor, "\n"));
$entidade = fsockopen("$servidor", 43, $errno, $errstr, 30);
if (!$entidade) {
$dados .= "$errstr ($errno)";
} else {
$buffer .= "-------------------------------------------------------------------------------<BR> <BR>";
fputs($entidade, "$domain\r\n");
while (!feof($entidade)) {
$buffer .= fread($entidade,128);
}
$dados .= str_replace("\n","<BR>\n",trim($buffer));
fclose ($entidade);
}
}
}
fclose ($internic);
}

// Verifica os outros
} else {
$network = fsockopen($server[2], 43, $errno, $errstr, 30);
if (!$network) {
$dados .= "$errstr ($errno)";
} else {
fputs($network, "$domain\r\n");
while (!feof($network)) {
$buffer .= fread($network,128);
}
if ($tipo == 1) {
if (strpos($buffer, "NOT FOUND") > 0) $dados .= false; else $dados .= true;
} else {
$dados .= str_replace("\n","<BR>\n",trim($buffer));
}
fclose ($network);
}
}
}
return $dados;
}

?>



<form name="formu" method="post" action="http://www.argohost.net/convencer.php#confira">
  <font size="4" face="museo_regular"><br>
  <input type=text name="sld" value=""size=30 maxlenght="26">
  <select name="tld" value="">
    <option selected >.com</option>
    <option >.net</option>
    <option >.org</option>
  </select>
  <input type=submit value=Pesquisar class="btn btn-success">

  </font>
</form>
<font size="4" face="museo_regular">
<? if (strlen($_POST["sld"]) > 0) { ?>
</font>
<BR>


O Domínio <b>
<?=$_POST["sld"]?>
<?=$_POST["tld"]?>

<?php $domain = $_POST["sld"];
      $domain .= $_POST["tld"];

?>
<?php 

?>

</b>
<?
 if (whois($domain,1) == 1) echo "<br><b> <font color=#FF0000 size=3 face=Verdana, Arial, Helvetica, sans-serif>Não está Disponível!</font></b>"; else echo "<br><b><font color=#66CC66 size=3 face=Verdana, Arial, Helvetica, sans-serif>Está
Disponível </b> </font>";?>
</font>
<? } ?>




               <!---->

               
          </span> 
        </div>
<!---->         
      <div class="produtos" style="background-color:#F7931E;width:100%;text-align:center;height:auto;font-family:museo_regular;font-size:36px;color:#445581;padding:20px;margin-top:54px;">
          
        <span style="font-size:24px;color#006a6e !important;font-family:museo_light;">Informe seu e-mail para continuar</span><br>

     <form name="msgindex" method="post" action="vender.php">   
        <font size="4" face="museo_regular"><br>
          <input type="email" id="email" name="email" tabindex="2" size="30" width="300" height="50" required>
          <input type="submit" name="Submit" value="Enviar" class="btn btn-success" Onclick="return verifica()">
        </font>  
     </form>   

       </div>
                <center><div class="arrow-laran" style="position:relative;z-index:556;"></div></center>

        
  </div>

<script language="javascript">
 function verifica()
   {
        if (<?PHP $_SESSION['sld'] ?> == "")  //sempre use o length, é mais facil para fazer comparações, se eu digitar    dois campos em branco já naum funciona
            alert("Por favor, Digite o nome!");
//você naum colocou um return (true), assim ele sempre vai voltar false e naum vai submeter o formulario

        return false;  
        
   }

</script>


<?php
    include 'include_argo/footer.php';
?>    

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-51915478-1', 'argohost.net');
  ga('send', 'pageview');

</script> 
<script type="text/javascript">
    $(document).ready(function(){
    $('.top').click(function(){
    $('html,body').animate({scrollTop: 0},'slow');
    });
    });
  </script> 
<script src="Scripts/jQuery/jquery.placeholder.js" type="text/javascript"></script> 
<script src="js/pagescroll.js" type="text/javascript"></script> 
<script type="text/javascript">
        B2BPortal.UI.Navigation.ProductMenu.init();
        B2BPortal.UI.Navigation.SideMenu.init();
        B2BPortal.UI.WidgetCreator.init();
    </script> 
<script src="js/bootstrap.min.js"></script> 
<script src="js/wow.min.js"></script> 
<script src="js/main.js"></script> 
<script src='http://code.jquery.com/jquery-1.9.1.min.js'></script> 
<script src='js/jquery.tooltip.js'></script> 
<script>
            $('.top').tooltip({align: 'top'});
            $('.right').tooltip({align: 'right'});
            $('.bottom').tooltip({align: 'bottom'});
            $('.left').tooltip({align: 'left'});
            $('.autotop').tooltip({align: 'autoTop'});
            $('.autoleft').tooltip({align: 'autoLeft'});
            $('.fade').tooltip({
                fade: {
                    duration: 200,
                    opacity: 0.8,
                    complete: function(hidden){
                        alert(hidden ? 'hidden' : 'visible');
                    }
                }
            });
            $('.attr').tooltip({attr: 'id'});
            $('.fallback').tooltip({fallback: 'It was set to nothing!'});
            $('.html').tooltip({html: true});
            $('.delay').tooltip({delay: {show: 150, hide:300}});
            var myTooltip = $('.trigger.show').tooltip({trigger: {}});
            $('.trigger').click(function(){
                myTooltip.trigger('tooltip:'+ this.innerText);
                return false;
            });
            $('input, select, textarea').tooltip({
                align: 'autoLeft',
                trigger: {
                    show: 'focus',
                    hide: 'blur'
                }
            });
</body>
</html>

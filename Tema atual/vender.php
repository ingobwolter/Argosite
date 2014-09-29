<?php  
    session_start();

        $_SESSION['sld']; 
        $_SESSION['tld']; 
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
				cursor:pointer;
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
    .carrinho{
    position:fixed;
    width:80px;
    height:100px;
    background-color:#EF1014;
    z-index: 8855;
    top: 21%;
    right: 2%;
    padding: 30px;
}
			</style>
        </head>
<body>

<!--Carrinho
  <div class="carrinho">
    <h2>Carrinho</h2>
  <div class="imagemcar">
    </div>    
<?php
  print_r("Produtos "."$produto[0]");
?>
</div>
  <!--Carrinho-->

<?php 
    include 'include_argo/header.php';
    include 'include_argo/nav.php';
?>

<div class="googleplus" style="position: fixed; bottom: 56%; left:2%;z-index:555;">
    <div class="g-plusone" data-size="tall"><g:plusone></g:plusone>
    </div>
</div>
<article class="product-detail-content" style="height:410px;padding:0px !important;background-color:#3b3b3b;">
		<video width="auto" height="100%" autoplay loop  poster="logo.jpg" id="bgvid">
  			<source src="video/dominio01.mp4" type="video/mp4" width="%" height="500px">
  			<object data="video/dominio01.mp4" width="100%" height="auto">
 			</object>
		</video>
</article>
	
	<div class="container"> 
     	
         <div class="produtos" style="background-color:#F2f2f2;width:100%;text-align:center;height:auto;font-family:museo_light;font-size:36px;color:#445581;padding:0px;">
         	<img src="images/escolha-dominio.png">
         </div>
         <center><div class="arrow-cinzaclaro" style="position:relative;z-index:556;"></div></center>	 
   	  <div class="produtos" style="background-color:#E6E6E6;width:100%;text-align:center;height:auto;font-family:museo_regular;font-size:36px;color:#445581;padding:20px;margin-top:-20px;">
           A ArgoHost está fazendo algo inédito<br>
           para você que acabou de entrar para este<br>
           seleto grupo de pessoas! 
      </div>
        <center><div class="arrow-down" style="position:relative;z-index:556;"></div></center>	 
   		<div class="produtos" style="background-image:url(images/hospedagem-linux.svg);background-repeat:no-repeat; text-align:center;height:auto;color:#F2F2F2;padding:40px;margin-top:-20px;">
       	  <span style="font:36px/36px museo_regular;">
                	Adquira agora uma hospedagem <br>
              Linux com e-mail e GARANTA<br>
                    o mesmo valor mensal por 3 anos!<br>
                </span>
            </span>
        </div>
         
      <div class="produtos" style="background-color:#E6E6E6;width:100%;text-align:center;height:auto;font-family:museo_light;font-size:36px;color:#445581;padding:20px;margin-top:-20px;">
      <img src="images/hospedagem-linux-barato.png"></div> 
        <center><div class="arrow-down" style="position:relative;z-index:556;"></div></center>
<!---->        	
	  <div class="produtos" style="background-color:#445581; text-align:center;height:auto;color:#F2F2F2;padding:40px;margin-top:-20px;">
               	<span style="font:36px/36px museo_regular;">
                  São apenas R$ 9,99 por mês.<br>
                  <span style="font:16px/16px museo_regular;">(Pagamento trienal R$ 359,64)<br></span>
                	Esta oferta incrível é somente <br>
                  para as primeiras 100 pessoas.<br>
                </span>
        </div>
        		<center><div class="arrow-azul" style="position:relative;z-index:556;"></div></center>
   	  <div class="row" style="background-color:#F2F2F2;width:100%;text-align:center;height:auto;font-family:museo_regular;font-size:36px;color:#445581;padding:50px 0px;margin-left:0px; margin-top:-20px;margin-bottom:-55px;">
      
      <span class="col-md-4" style="padding:0px !important;"><img src="images/emails-argohost.png" width="280" height="62"></span>
      	
        <form method="post" action="http://www.argohost.net/core/cart.php?a=add&domain=register&skipconfig=configdomains">
          <input type=hidden name="token" value="{token}">
          <input type=checkbox checked name="domains[]" style="display:none;" value=<?php echo $_SESSION['sld'].$_SESSION['tld'];?>>
          <input type=hidden name="domainsregperiod[<?php echo $_SESSION['sld'].$_SESSION['tld'];?>]" value="" style="display:none;">
          <input type=select name="domainsregperiod[<?php echo $_SESSION['sld'].$_SESSION['tld'];?>]" value="" style="display:none;">
          
            <button  type=submit class="col-md-4" style="padding:0px !important;border:0px!important;!important;background-color:rgba(0,0,0,0)!important;">
                <img src="images/dominio-gratis-argohost.png" width="280" height="62">
            </buttom>
               
        </form>

        <form method="post" action="http://www.argohost.net/core/cart.php?a=add&pid=2&productconfig=1&skipconfig=configdomains">
          <input type=hidden name="token" value="{token}">
          <input type=checkbox checked name="domains[]" style="display:none;" value=<?php echo $_SESSION['sld'].$_SESSION['tld'];?>>
          <input type=hidden name="domainsregperiod[<?php echo $_SESSION['sld'].$_SESSION['tld'];?>]" value="" style="display:none;">
          <input type=select name="domainsregperiod[<?php echo $_SESSION['sld'].$_SESSION['tld'];?>]" value="" style="display:none;">
          
            <button  type=submit class="col-md-4" style="padding:0px !important;border:0px!important;!important;background-color:rgba(0,0,0,0)!important;">
                <img src="images/hospedagem-linux-argohost.png" width="280" height="62">
            </buttom>
               
        </form>


    </div>


<?php  
$mensagem = $_POST["email"]; 
$conteudo = "$mensagem".";"; 
$mensagem .= ";";
$f = fopen("emails.txt", "rw+");
$conteudo = "";
if(filesize("emails.txt") > 0) {
  $conteudo = fread($f, filesize("emails.txt")); 
}
file_put_contents("emails.txt", $mensagem, FILE_APPEND);
fclose($f);  
?>


</div>    

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

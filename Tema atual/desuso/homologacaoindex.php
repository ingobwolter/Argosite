<?php
session_start();
require_once '../Mobile_Detect.php';
function layoutTypes()
{
    return array('classic', 'mobile', 'tablet');
}
function initLayoutType()
{
    if (!class_exists('Mobile_Detect')) { return 'classic'; }
    $detect = new Mobile_Detect;
    $isMobile = $detect->isMobile();
    $isTablet = $detect->isTablet();
    $layoutTypes = layoutTypes();
    if ( isset($_GET['layoutType']) ) {
        $layoutType = $_GET['layoutType'];
    } else {
        if (empty($_SESSION['layoutType'])) {
            $layoutType = ($isMobile ? ($isTablet ? 'tablet' : 'mobile') : 'classic');
        } else {
           $layoutType =  $_SESSION['layoutType'];
        }
    }
    if ( !in_array($layoutType, $layoutTypes) ) { $layoutType = 'classic'; }
    $_SESSION['layoutType'] = $layoutType;
    return $layoutType;
}

$layoutType = initLayoutType();
?>
<?php 

    if('mobile' == ($_SESSION['layoutType'])){
        header("Location: http://www.m.argohost.net");

    }
     if('tablet' == ($_SESSION['layoutType'])){
        header("Location: http://www.m.argohost.net");

}   
?>
<?php foreach(layoutTypes() as $_layoutType): ?>
    <?php if($_layoutType == $layoutType):  ?>
        <?php echo strtoupper($_layoutType); ?>
    <?php else: ?>
        <a href="<?php echo $_SERVER['PHP_SELF']; ?>?layoutType=<?php echo $_layoutType; ?>"><?php echo strtoupper($_layoutType); ?></a>
    <?php endif; ?>
<?php endforeach;
?>
<!DOCTYPE html>
<html>
<head>
    	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>ArgoHost Hospedagem de sites Linux . Hospedar site</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="Soluções para hospedagem de sites. Hospedagem Linux com Cpanel para hospedar blog, site, emails e portais. Planos de hospedagem com ativação imediata na aquisição." />
		<meta name="keywords" content="hospedagem de site, hospedagem de sites, hospedagem linux, hospedar site linux, servidor de hospedagem"/>
        <a href="https://plus.google.com/+argohost/" rel="publisher"></a>
       	<meta property="fb:admins" content="https://www.facebook.com/argohostoficial" /> 
		<meta property="fb:page_id" content="https://www.facebook.com/pages/ArgoHost/746803422047367" />
        <link href="Content/bootstrap.css" rel="stylesheet" type="text/css" media="screen">
        <link href="Content/estilo.css" rel="stylesheet" type="text/css" media="screen">
        <link href="Content/chatestilo.css" rel="stylesheet" type="text/css" media="screen">
        <link href="Content/animate.css" rel="stylesheet" media="screen">
        <link href="Content/960_12_col.css" rel="stylesheet" media="screen">
        <link href="Content/pricing-table.css" rel="stylesheet" media="screen">
        <link href="Content/tooltip.css" rel="stylesheet" media="screen">
        <link rel="canonical" href="http://www.argohost.net">
        <link rel="shortcut icon" href="Content/images/icones/favicon.ico">
        <link rel="apple-touch-icon" href="Content/images/logo/logo_argohost.png" />
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
		::-moz-selection
		{color: #ccc;background:#F30;}
		::selection
		{color: #ccc;background:#F30;}
		
		video#bgvid {
				min-width: 100%; 
				min-height: 437%;
				max-height: 100%;
				width: 100%; 
				height: 100px; 
				background-size: cover;
				padding:0px 0px;
				margin-top:-30%;
}
			.product-detail-photo{
				height:295px !important;
				padding-bottom:10%;
			}
			body{overflow-y:hidden;}
        </style>
	</head>
<body>
<script type="text/javascript">
var WRInitTime=(new Date()).getTime();
</script>
     <!--Divs para inclusão do chat-->
     <div id="boxcontainer">
       <div id="distancia">
         <div id="dentro">
           <center>
             <div id="distancia2">
               <div id="dentro2">
				 <div style="cursor:pointer">
                 <b>Posso ajudar?</b>
                 <span class="label label-success" onClick="sobe()" title="abrir janela">Abrir</span> 
                 <span class="label label-warning" onClick="desce()" title="minimizar janela">Minimizar</span> 
                 <span class="label label-danger" onClick="fechar()" title="fechar janela">Sair</span>
                 <p style="padding-top:2px;">
                 </div>
                 <iframe name="InlineFrame1" id="InlineFrame1" width="300" height="450" src="http://slka01.argohost.net/visitor/index.php?/Default/LiveChat/Chat/StartInline/_sessionID=oblczqx4wp9ifr0ka4pk4r3g27osfr78/_proactive=0/_filterDepartmentID=7/_fullName=/_email=/_inline=0/" frameborder="0"> </iframe>
               </div>
             </div>
           </center>
         </div>
       </div>
</div>
      <!--Fim de Divs para inclusão do chat-->
	
		</section>
	</div>
 </div>
  </div>
</div>   
<header>
    <div class="topoargop" id="portal-header">
    	<center>
        	<a href="http://www.argohost.net"><img src="Content/images/logo/argohost.svg" width="90" height="43" title="ArgoHost Hospedagem de Sites" alt="ArgoHost Hospedagem de Sites"></a>
        </center>
    </div>
</header>    
   <nav>
	</div>
	
	<div id="menuparado">
    
    <div class="logar">
		<a data-toggle="modal" data-target=".bs-example-modal-sm" title="Painel do cliente">
			<a href="http://www.argohost.net/core/clientarea.php" type="button" class="btnpadrao btn-login" rel="nofollow">
				<img src="Content/images/icones/cliente-argohost.svg" width="20" height="19" alt="Área do Cliente Argohost" title="Área do Cliente Argohost">&nbsp;Entrar
			</a>
		</a>
	</div>
    
		<div class="container">
        	
			<ul class="nav navbar-nav">
            
            <li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							Registro de dominios 
							<b class="caret">
							</b>
						</a>
						<ul class="dropdown-menu">
							<li class="divider">
							</li>
							<div class="progress progress-striped active" style="width:80%;margin:0 auto;">
								<div class="progress-bar" style="width:90%">
									Registrar um domínio 99%
								</div>
							</div>
							<li class="divider">
							</li>
						</ul>
            
				<li class="dropdown">
					<a href="#" data-toggle="dropdown">Hospedagem de sites  <b class="caret"> </b> </a>
					<ul class="dropdown-menu">
						<li class="divider"> </li>
						<li>
							<a href="http://www.argohost.net/core/cart.php?a=add&pid=2" target="_self" title="Hospedagem linux">
							  Hospede seu site Linux
							  <span style="color:#F90; font-size:7pt;font-weight:bold;">
								&nbsp;&nbsp;À venda
								<span class="glyphicon glyphicon-flash">
								</span>
							  </span>
							</a>
						</li>
						<li class="divider">
						</li>
						<div class="progress progress-striped active" style="width:90%;margin:0 auto;">
							<div class="progress-bar" style="width:80%">
								Hospede seu site Windows 80%
							</div>
						</div>
						<li class="divider"> </li>
						<div class="progress progress-striped active" style="width:90%;margin:0 auto;">
							<div class="progress-bar" style="width:75%">
								Hospedagem para Blog 75%
							</div>
						</div>
						<li class="divider">
						</li>
						<div class="progress progress-striped active" style="width:90%;margin:0 auto;">
							<div class="progress-bar" style="width:80%">
								Hospedagem semi-dedicada 80%
							</div>
						</div>
						<li class="divider">
						</li>
					</ul>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							Revenda 
							<b class="caret">
							</b>
						</a>
						<ul class="dropdown-menu">
							<li class="divider">
							</li>
							<div class="progress progress-striped active" style="width:90%;margin:0 auto;">
								<div class="progress-bar" style="width:45%">
									Revenda 45%
								</div>
							</div>
							<li class="divider">
							</li>
							<div class="progress progress-striped active" style="width:90%;margin:0 auto;">
								<div class="progress-bar" style="width:40%">
									Revenda 2.0 40%
								</div>
							</div>
							<li class="divider">
							</li>
						</ul>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							  Serviços de e-mail 
							  <b class="caret">
							  </b>
							</a>
							<ul class="dropdown-menu">
								<li class="divider">
								</li>
								<div class="progress progress-striped active" style="width:90%;margin:0 auto;">
									<div class="progress-bar" style="width:60%">
										Seu e-mail na web 60%
									</div>
								</div>
								<li class="divider">
								</li>
								<div class="progress progress-striped active" style="width:90%;margin:0 auto;">
									<div class="progress-bar" style="width:60%">
										E-mail personalizado 60%
									</div>
								</div>
								<li class="divider">
								</li>
							</ul>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">
									Cloud vps 
									<b class="caret">
									</b>
								</a>
								<ul class="dropdown-menu">
									<li class="divider">
									</li>
									<div class="progress progress-striped active" style="width:90%;margin:0 auto;">
										<div class="progress-bar" style="width:50%">
											Para seu site 50%
										</div>
									</div>
									<li class="divider">
									</li>
									<div class="progress progress-striped active" style="width:90%;margin:0 auto;">
										<div class="progress-bar" style="width:65%">
											Para grandes portais 65%
										</div>
									</div>
									<li class="divider">
									</li>
									<div class="progress progress-striped active" style="width:90%;margin:0 auto;">
										<div class="progress-bar" style="width:50%">
											Sob demanda 50%
										</div>
									</div>
									<li class="divider">
									</li>
									<div class="progress progress-striped active" style="width:90%;margin:0 auto;">
										<div class="progress-bar" style="width:50%">
											Mini VPS 50%
										</div>
									</div>
									<li class="divider">
									</li>
								</ul>
								<li class="dropdown">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown">
									  Outros produtos 
									  <b class="caret">
									  </b>
									</a>
									<ul class="dropdown-menu">
										<li class="divider">
										</li>
										<div class="progress progress-striped active" style="width:90%;margin:0 auto;">
											<div class="progress-bar" style="width:50%">
												Webradio 50%
											</div>
										</div>
										<li class="divider">
										</li>
										<div class="progress progress-striped active" style="width:90%;margin:0 auto;">
											<div class="progress-bar" style="width:60%">
												E-mail marketing 60%
											</div>
										</div>
										<li class="divider">
										</li>
										<div class="progress progress-striped active" style="width:90%;margin:0 auto;">
											<div class="progress-bar" style="width:50%">
												Collocation 50%
											</div>
										</div>
										<li class="divider">
										</li>
										<div class="progress progress-striped active" style="width:90%;margin:0 auto;">
											<div class="progress-bar" style="width:50%">
												Argodrive 50%
											</div>
										</div>
										<li class="divider">
										</li>
										<div class="progress progress-striped active" style="width:90%;margin:0 auto;">
											<div class="progress-bar" style="width:50%">
												Sua loja virtual 50%
											</div>
										</div>
										<li class="divider">
										</li>
									</ul>
								</li>
			</ul>
		</div>
	</div>
</nav>
	</div>
</div>
<div class="googleplus" style="position: fixed; bottom: 56%; left:2%;z-index:555;">
	  <div class="g-plusone" data-size="tall">
    <g:plusone></g:plusone>
   </div> 
</div>
<aside id="portal-product-sidenav">
    <ul>
    	 <li>
            <a href="#portal-header"  style="color:#CCC;">
                <div class="sidenav-dot"></div>
                <div class="sidenav-title fade">Introdução</div>
            </a>
        </li>
        <li>
            <a href="#whitelabel"  style="color:#CCC">
                <div class="sidenav-dot"></div>
                <div class="sidenav-title fade">ArgoHost</div>
            </a>
        </li>
        <li>
            <a href="#api" style="color:#CCC">
                <div class="sidenav-dot"></div>
                <div class="sidenav-title fade">Atendimento</div>
            </a>
        </li>
        <li>
            <a href="#widgets" style="color:#CCC">
                <div class="sidenav-dot"></div>
                <div class="sidenav-title fade">Inteligência</div>
            </a>
        </li>
        <li>
            <a href="#portal-footer" style="color:#CCC">
                <div class="sidenav-dot"></div  >
                <div class="sidenav-title fade">Infraestrutura</div>
            </a>
        </li>
    </ul>
</aside>

<section class="product-detail-photo"   id="" data-speed="10" data-type="background" data-offset="-5" style="height:246px!important;">
		<video width="auto" height="100%" autoplay loop  poster="logo.jpg" id="bgvid" style="position:relative;z-index:-1;">
  			<source src="video/registro-dominio-gratis.mp4" type="video/mp4">
  			<object data="video/dominio01.mp4" width="100%" height="auto">
 			</object>
		</video>

   <div class="todos" style="color:#FFF;font-size:25px;display:block;padding-left:18%;padding-top:5%;width:auto;"><a href="http://www.argohost.net/core/cart.php?a=add&pid=14"><br></a></div>
    <div class="todos" style="color:#FFF;font-size:25px;display:block;font-size:43px;width: auto;padding-left:64%;font-family: open_sansbold;"><a href="http://www.argohost.net/core/cart.php?a=add&pid=14"></a></div>
    <div class="todos" style="color:#FFF;font-size:39px;display:block;padding-left: 29%;"><a href="http://www.argohost.net/core/cart.php?a=add&pid=14"></a></div>
</section>

<!--Dominio-->
<article class="product-detail-content" id="" data-speed="5" data-type="background" style="border-bottom:6px solid #445581;min-height:205px;">
<header class="center">
			<a href="#"><div class="com" style='background-image:url("images/dominiogratis.png");width:100%;height:293px;background-repeat:no-repeat;background-position:center 11px;'>
                    <!--<div class="center" style="color:#00524C;text-align:center;"><b style="font-size:32px;font-family:museo_regular;">Nós bolamos algo revolucionário...
                    <br>e será um privilégio para poucas pessoas!</b>
                    <br><span style="font-size:32px;font-weight:800; font-family: museo_light; font-weight: bolder;">
                   		
                    <br>
                    <br>#TodosPodemTerumDominio</span></div><br><br><br></span>
                    <center><span style="color:rgba(255, 77, 77, 1);font-size:24px;font-family:museo_bold, Arial, Helvetica, sans-serif;font-weight:bold;">Aguarde o primeiro dia de Setembro...</span></center><br>
                    <span class="center" style="float: right; margin-right:18%; margin-top: -2%; color:#445581;"></span>
	        </div>-->
        </header>
</article>

<section class="product-detail-content" id="product-intro" data-speed="5" data-type="background" data-offset="100">
    <div class="container">
        <header class="center">
            <hgroup class="product-headergroup">
            	<div style="visibility: visible; animation-delay: 0.1s;">
               <div class="wow fadeInDown" data-wow-delay="0.1s"> 
                  <font style="color:#FFF; margin-left:12%;font-size:55px;opacity:1;font-family:open_sanslight;font-weight: 900;"><strong>EXCELÊNCIA POR PRODUTO!</strong></font><br>
                  <center><font style="font-size:34px; font-family:open_sansregular;color:#FFF;">Cada serviço é tratado como único,<br />e você como cliente exclusivo!</font></center>
                </div>  
               </div>
            </hgroup>
        </header>
<section id="product-intro-section">
                  <ul class="display-list-inline">
           			<div class="wow fadeInUp" data-wow-delay="0.05s">
              		
                    <li style="background:#DA4A37;">
                    	 <a href="argohost.html" class="bg-very-lightblue">
                         		<h2>Nova <br>ArgoHost <br>2014</h2>
                         </a>
                    </li>
                 </div>
                <div class="wow fadeInUp" data-wow-delay="0.1s">     
                	<li>
                    	<a href="atendimento.html" class="bg-light-ocean-verde">
                        <h2>Novo <br>atendimento automatizado</h2>
                    	</a>
                	</li>
                </div>  	
                <div class="wow fadeInUp" data-wow-delay="0.1s">
                    <li style="background:#2C3E50">
                  	<a href="inteligencia.html" class="bg-light-ocean-blue">
                        <h2>Nova <br>inteligência de vendas</h2>
                    	</a>
                	</li>
                </div>     
                <div class="wow fadeInUp" data-wow-delay="0.1s">    
                 	<li style="background:#4B7330;">
                    	<a href="infraestrutura.html" class="bg-light-ocean-verdecana">
                        <h2>Arquitetura inovadora infraestrutura</h2>
                    	</a>
                	</li>
                </div>
            </ul>
        </section>
    </div>
</section>
<article class="product-detail-content" id="whitelabel" data-speed="5" data-type="background" style="border-bottom:6px solid #DA4A37;">
<header class="center">
            <hgroup>
                <h5 style="color:#2C3E50;font-family: open_sanslight,arial,verdana ! important; font-size:60px;text-align: center;">Nova ArgoHost 2014</h5>
                <h2 style="color:#2C3E50;">Uma experiência no mercado nacional de Hosting que nasceu em 2003.</h2>
            	  <div class="container">
<div class="boxer">
                    	<center>
                        	<img src="Content/images/icones/rack1azul-argohost.svg" width="100" height="74" title="Argohost Inovação e criatividade" alt="Argohost Inovação e criatividade" style="padding-bottom:25px;">
                			<h3 style="color:#2C3E50;">Estamos prontos para discutir sobre sua arquitetura de infra!</h3><br>
                        	<a href="http://www.argohost.net/infraestrutura.html" type="button" class="btn btn-danger" rel="nofollow">Saiba mais</a>
                        </center>	 	
                   	</div>
<div class="boxer">
                		<center>
                        	<img src="Content/images/icones/institucional-argohost.svg" title="Argohost Provendo soluções de hosting desde 2003" alt="Argohost Provendo soluções de hosting desde 2003" width="100" height="74" style="padding-bottom:25px;">
                			<h3 style="color:#2C3E50;">Uma empresa que se preocupa com o seu negócio!</h3><br>
                        	<a href="http://www.argohost.net/argohost.html" type="button" class="btn btn-danger" rel="nofollow">Saiba mais</a>
						</center>
                   	</div>
<div class="boxer">
                		<center>
                        	<img src="Content/images/icones/suporte-argohost.svg" alt="Suporte Técnico Argohost" title="Suporte Técnico Argohost" width="100" height="74" style="padding-bottom:25px;">
                			<h3 style="color:#2C3E50;">A qualidade do nosso atendimento é assunto sério!</h3><br>
                       		<a href="http://www.argohost.net/atendimento.html" class="btn btn-danger" rel="nofollow">Saiba mais</a>
						</center>	
                   	</div>
           </div>   
            </hgroup>
        </header>
</article>

<section class="product-detail-photo" id="skate" data-speed="5" data-type="background" data-offset="-200" style="height:220px !important;"></section>
<article class="product-detail-content" id="api" data-speed="10" data-type="background" style="border-bottom:6px solid #DA4A37;min-height:100px !important;">
	
      <div class="redes">    
		    	<center>
		    			<h5 style="color:#2C3E50;font-family: open_sanslight,arial,verdana ! important; font-size:60px;text-align: center;">ArgoHost nas redes sociais</h5>
					<a href="https://www.facebook.com/pages/ArgoHost/746803422047367" target="_blank" rel="nofollow">						</a><a href="https://www.linkedin.com/company/argohost" target="_blank" rel="nofollow"><img src="Content/images/rede/linkedin.png" target="_blank" alt="Linkedin Argohost" width="80" style="padding: 10px;" border="0" /></a><a href="https://www.facebook.com/pages/ArgoHost/746803422047367" target="_blank" rel="nofollow"><img src="Content/images/rede/facebook.png" alt="Argohost Facebook" width="80" style="padding: 10px;" border="0" /></a> 
					<a href="https://twitter.com/argohost" target="_blank" rel="nofollow"> 
						<img src="Content/images/rede/twitter.png" alt="Argohost Twitter" width="80" style="padding: 10px;" border="0" /></a> 
					<a href="https://plus.google.com/u/0/b/117451593645726134811/+argohost/" target="_blank" rel="nofollow"> 
						<img src="Content/images/rede/googleplus.png" alt="Google plus Argohost" width="80" style="padding: 10px;" border="0" /></a><a href="http://instagram.com/argohost" target="_blank" rel="nofollow"> 
						<img src="Content/images/rede/instagram.png" alt="Instagram Argohost" width="80" style="padding: 10px;" border="0" /></a>
					<a href="http://www.youtube.com/user/argohost" target="_blank" rel="nofollow"> 
						<img src="Content/images/rede/youtube.png" alt="YouTube Argohost" width="80" style="padding: 10px;" border="0" /></a>
    			</center>
	  	    </div>
    
</article>


<section class="product-detail-photo" id="bg-image-1" data-speed="15" data-type="background" data-offset="-200"></section>
<article class="product-detail-content" id="api" data-speed="10" data-type="background" style="border-bottom:6px solid #DA4A37;">
	   <header class="center">
            <hgroup>
               <h5 style="color:#2C3E50;font-family: open_sanslight,arial,verdana ! important; font-size:60px;text-align: center;">Novo atendimento automatizado</h5>
               <h2 style="color:#DA4A37;">Clientes não compram produtos e serviços, compram performance.</h2>
            </hgroup>
</header>
        	<div class="container" style="padding-left:400px;">
         		 <div class="boxertwo">
                     <center>
                           <img src="Content/images/icones/suporte-tecnico-argohost.svg" title="Suporte ArgoHost" width="100px" height="74px" style="padding-bottom:25px;" alt="Suporte ArgoHost">
                		   <h3 style="color:#DA4A37;">Suporte <br>Help desk</h3><br><br>
                     </center>
                 </div>
               	 <div class="boxertwo">
                	 <center>
                        	<img src="Content/images/icones/atendimento-argohost.svg" width="100px" height="74px" style="padding-bottom:25px;" alt="Atendimento ArgoHost" title="Atendimento ArgoHost">
                			<h3 style="color:#DA4A37;">Posso<br>
                			ajudar?</h3><br>
							<a href="http://www.argohost.net/atendimento.html" class="btn btn-danger" rel="nofollow">Saiba mais</a>
					 </center>
                 </div>
                 <div class="boxertwo">
                	<center>
                        	 <img src="Content/images/icones/contato-argohost.svg" width="100px" height="74px" style="padding-bottom:25px;" alt="Contato ArgoHost" title="Contato ArgoHost">
                			 <h3 style="color:#DA4A37;">Ligue para<br> 4002 2552</h3><br><br>
					</center>	
	       </div>
</article>
<section class="product-detail-content" id="bg-image-5" data-speed="15" data-type="background" data-offset="-200"></section>
<article class="product-detail-content" id="widgets" data-speed="5"  style="border-bottom:6px solid #2B3D4F;">
    <div class="container product-detail-layout-3">
        <header class="center">
            <hgroup class="product-headergroup">
                <h5 style="color:#2C3E50;font-family: open_sanslight,arial,verdana ! important; font-size:60px;text-align: center;">Nova Inteligência no processo de vendas</h5>
                <h2 style="color:#2B3D4F;">É preciso parar de vender o passado, para quem quer comprar o futuro.</h2>
            	    <div class="container" style="padding-left:120px;">
                   	<div class="boxertre">
                    	 <center>
							<h4 style="color:#2B3D4F;">Flexibilidade</h4><br>
                            <img src="Content/images/icones/argohost-flexibilidade.svg" width="100px" height="74px" style="padding-bottom:25px;" alt="Flexibilidade ArgoHost">
                     	 </center>
       </div>
               	  	<div class="boxertre">
                		<center>
                        	<h4 style="color:#2B3D4F;">Agilidade</h4><br>
							<img src="Content/images/icones/argohost-agilidade.svg" width="100px" height="74px" style="padding-bottom:25px;" alt="Agilidade ArgoHost">
						</center>
       </div>
					 	<div class="boxertre">
                		<center>
                        	<h4 style="color:#2B3D4F;">Velocidade</h4><br>
							<img src="Content/images/icones/argohost-velocidade.svg" width="100px" height="74px" style="padding-bottom:25px;" alt="Velocidade ArgoHost">
 						</center>
       </div>
                	<div class="boxertre">
                		<center>
							<h4 style="color:#2B3D4F;">Segurança</h4><br>
                        	<img src="Content/images/icones/argohost-seguranca.svg" width="100px" height="74px" style="padding-bottom:25px;" alt="Segurança ArgoHost">
 						</center>	
                    
       </div>             
                    <div class="boxertre">
                		<center>
                        
	                		<h4 style="color:#2B3D4F;">Objetividade</h4><br>
                        	<img src="Content/images/icones/argohost-objetivo.svg" width="100px" height="74px" style="padding-bottom:25px;" alt="ArgoHost Hospedagem de site">
                       	</center>	
       </div>                 
                    </div>
				 	<center><a href="http://www.argohost.net/inteligencia.html" class="btn btn-danger" rel="nofollow">Saiba mais</a></center>
            </hgroup>
    	</header>
    </article>
        </div>
    </div>
<section class="product-detail-photo" id="bg-image-4" data-speed="20" data-type="background" data-offset="-290"></section>
    <article class="product-detail-content" id="inf" data-speed="30" data-type="background"   style="border-bottom:6px solid #DA4A37;">
	   <header class="center">
            <hgroup>
                       	 <h5 style="color:#2C3E50;font-family: open_sanslight,arial,verdana ! important; font-size:60px;text-align: center;">Nova arquitetura de infraestrutura</h5>
                  	 <h2 style="color:#DA4A37;">Um conceito inovador para cuidar melhor do seu negócio.</h2>
            </hgroup>
       </header>  
          <div class="container">
       <div class="container_12" span="infra">              
        	<div class="grid_4"> <h4><img src="Content/images/icones/hospedar-site-ok.svg" alt="Hospedar sites"  width="50" height="50">&nbsp;&nbsp;Gerenciamento de arquivos</h4>
         	Obtenha uma hospedagem que crescerá conforme suas necessidades, com controle no seu próprio painel.</div>  
            <div class="grid_4"> <h4><img src="Content/images/icones/hospedar-site-ok.svg" alt="Hospedar sites"  width="50">&nbsp;Painel gerenciável</h4>
            Cpanel, Plesk e tecnologias na maior qualidade e controle do seu site .</div> 
            <div class="grid_4"> <h4><img src="Content/images/icones/hospedar-site-ok.svg" alt="Hospedar sites"  width="50" height="50">&nbsp;&nbsp;Carga balanceada</h4>
            Nossos Servidores em balanceamento de carga vinte e quatro horas por dia  ,evitando indisponibilidade.</div> 
            <div class="grid_4"> <h4><img src="Content/images/icones/hospedar-site-ok.svg" alt="Hospedar sites"  width="50" height="50">&nbsp;&nbsp;Ip dedicado</h4>
            Cinco endereços ip's para cada servidor compartilhado e ip dedicado a sua necessidade.</div> 
            <div class="grid_4"> <h4><img src="Content/images/icones/hospedar-site-ok.svg" alt="Hospedar sites"  width="50" height="50">&nbsp;&nbsp;Turbine seu site</h4>
            Mais de 3000 scripts automatizados para instalação em seu website.</div> 
            <div class="grid_4"> <h4><img src="Content/images/icones/hospedar-site-ok.svg" alt="Hospedar sites" width="50" height="50">&nbsp;&nbsp;Programe como quiser</h4>
            Php, Ruby, Asp, seja qual for a programação estamos prontos para lhe atender.</div>  
       	</div>
       </div>
       <br><center style="position: relative; bottom: -16px; margin-bottom: 30px;"><a class="btn btn-danger" href="http://argohost.net/infraestrutura.html">Confira já!</a></center>
</article>
<footer id="portal-footer" style="margin-bottom:-68px;">
	<div class="container" style="width:931px">
    	<div class="um" style="width:15%;height:118px;float:left;margin-right:10px;">
        	<div id="portal-signoff"> 
        		<div class="imgrodape">
        			<img src="Content/images/logo/argohost-logo-premium.svg" alt="Argohost Empresa de Hospedagem" style="width:135px;padding-top:13px;"/>
   				</div>
                <div class="texto" style="text-align:center;color:#5C7287;font-weight:100;font-family:open_sanslight;width:80%;padding-left:10%;line-height:13px;padding-top:13px;">Provendo soluções de hosting desde 2003</div>
            </div>    
   		</div>
	  <div class="dois" style="width:47%;height:118px;float:left;">
			<div class="telefone" style="color:#5C7287;font-family:open_sansregular,verdana,arial;font-size:20px;padding-left:25%;padding-top:2%;padding-bottom:1%;">Telefone (85) 4002 2552<br><span style="font-size:12px;padding-left:27px;"><a href="mailto:comercial@argohost.net">comercial@argohost.net</a></span></div>	
				<ul id="portal-footer-links">
					<li><a href="http://www.argohost.net/argohost.html" rel="nofollow">Argohost</a></li>
					<li><a href="http://www.argohost.net/infraestrutura.html" rel="nofollow">Infraestrutura</a></li>
					<li><a href="http://www.argohost.net/politica.html" rel="nofollow">Política e contrato</a></li>
					<li><a href="http://www.argohost.net/inteligencia.html" rel="nofollow">Processo de vendas</a></li>
					<li><a href="http://www.argohost.net/atendimento.html" rel="nofollow">Atendimento</a></li>
				</ul>
		</div>	 
         <div class="tres" style="width:35%;height:118px;float:right;">
            <div class="redes">    
		    	<center>
					<a href="https://www.facebook.com/pages/ArgoHost/746803422047367" target="_blank" rel="nofollow"> 
						<img src="http://www.argohost.net/images/facebook.png" class="top" alt="Argohost Facebook" width="30" style="padding: 10px;" border="0" /></a> 
					<a href="https://twitter.com/argohost" target="_blank" rel="nofollow"> 
						<img src="http://www.argohost.net/images/twitter.png" alt="Argohost Twitter" width="30" style="padding: 10px;" border="0" /></a> 
					<a href="https://plus.google.com/u/0/b/117451593645726134811/+argohost/" target="_blank" rel="nofollow"> 
						<img src="http://www.argohost.net/images/googleplus.png" alt="Google plus Argohost" width="30" style="padding: 10px;" border="0" /></a> 
					<a href="https://www.linkedin.com/company/argohost" target="_blank" rel="nofollow"> 
						<img src="http://www.argohost.net/images/linkedin.png" target="_blank" alt="Linkedin Argohost" width="30" style="padding: 10px;" border="0" /> </a> 
					<a href="http://instagram.com/argohost" target="_blank" rel="nofollow"> 
						<img src="http://www.argohost.net/images/instagram.png" alt="Instagram Argohost" width="30" style="padding: 10px;" border="0" /></a>
					<a href="http://www.youtube.com/user/argohost" target="_blank" rel="nofollow"> 
						<img src="http://www.argohost.net/images/youtube.png" alt="YouTube Argohost" width="30" style="padding: 10px;" border="0" /></a>
    			</center>
	  	    </div>
        	<div id="portal-signoff">  
            	<a href="http://www.softlayer.com/" target="_blank" rel="nofollow"><img src="Content/images/icones/data-center-moderno.svg" class="top" alt="Infraestrutura de Datacenter Certificado"></a>
            </div>    
            <div id="portal-signoff"> 
				<a href="http://www.mobtecnologia.com.br" target="_blank" rel="nofollow"><img src="Content/images/icones/data-center-certificado.svg" class="top" alt="Infraestrutura de Datacenter Nacional"></a> 
         	</div>  
         </div>   
    </div>
</footer>
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
</script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-51915478-1', 'argohost.net');
  ga('send', 'pageview');
</script>
<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-5VHNM4"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-5VHNM4');</script>
<script type='text/javascript'>
document.write(unescape("%3Cscript%20src='"+
(document.location.protocol=='https:'?
"https://cdnssl.clicktale.net/www02/ptc/2413ef2b-3d2c-4925-920c-2a4d55bcfd95.js":
"http://cdn.clicktale.net/www02/ptc/2413ef2b-3d2c-4925-920c-2a4d55bcfd95.js")+"'%20type='text/javascript'%3E%3C/script%3E"));
</script>
<div style="position:absolute;">
	<a href="http://www.argohost.net/blog"></a>
	<h1>Hospedagem de sites</h1>
</<div>
</body>
</html>
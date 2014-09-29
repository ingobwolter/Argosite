<?php
session_start();
require_once 'mobile/Mobile_Detect.php';
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
        header("Location: http://www.argohost.net");

    }
     if('tablet' == ($_SESSION['layoutType'])){
        header("Location: http://www.argohost.net");

}   

?>
<!DOCTYPE html>
<html>
<head>
    	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>ArgoHost Soluções em hospedagem . Hospedar site, blog e loja virtual.</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="Empresa de hospedagem de sites, blogs, portais e lojas virtuais. Hospedagem Linux, hospedagem windows, hospedagem semi-dedicada e serviços de emails." />
		<meta name="keywords" content="hospedagem de site, hospedagem de sites, hospedagem linux, hospedar site linux, servidor de hospedagem, hospedagem windows, hospedagem semi dedicada"/>
        <a href="https://plus.google.com/+argohost/" rel="publisher"></a>
       	<meta property="fb:admins" content="https://www.facebook.com/argohostoficial" /> 
		<meta property="fb:page_id" content="https://www.facebook.com/pages/ArgoHost/746803422047367" />
        <link href="Content/bootstrap.css" rel="stylesheet" type="text/css" media="screen">
        <link href="Content/estilo.css" rel="stylesheet" type="text/css" media="screen">
        <link href="Content/chatestilo.css" rel="stylesheet" type="text/css" media="screen">
        <link href="Content/animate.css" rel="stylesheet" media="screen">
        <link href="Content/960_12_col.css" rel="stylesheet" media="screen">
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
<?php    
          include 'include_argo/google.php';
?>
<script type="text/javascript">
var WRInitTime=(new Date()).getTime();
</script>
     <!--Divs para inclusão do chat-->
     <div id="boxcontainer">
       <div id="distancia">
         <div id="dentro">
            <img src="core/templates/argohost/images/chat.png" style="position:absolute;top:-46%;">
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
      </section>
	</div>
 </div>
  </div>
</div>   

<?php 
    include 'include_argo/header.php';
	include 'include_argo/nav.php';
?>

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
		<video width="auto" height="100%" autoplay loop  poster="logo.jpg" id="bgvid" style="">
  			<source src="video/registro-dominio-gratis.mp4" type="video/mp4">
  			<object data="video/dominio01.mp4" width="100%" height="auto">
 			</object>
		</video>

   <div class="todos" style="color:#FFF;font-size:25px;display:block;padding-left:18%;padding-top:5%;width:auto;"><a href="http://www.argohost.net/core/cart.php?a=add&pid=14"><br></a></div>
    <div class="todos" style="color:#FFF;font-size:25px;display:block;font-size:43px;width: auto;padding-left:64%;font-family: open_sansbold;"><a href="http://www.argohost.net/core/cart.php?a=add&pid=14"></a></div>
    <div class="todos" style="color:#FFF;font-size:39px;display:block;padding-left: 29%;"><a href="http://www.argohost.net/core/cart.php?a=add&pid=14"></a></div>
</section>

<!--Dominio-->
<article class="product-detail-content" id="" data-speed="5" data-type="background" style="position:relative;border-bottom:6px solid #445581;min-height:205px;">
<header class="center">
			<a href="http://argohost.net/apresentacao.php"><div class="com" style='background-image:url("images/dominiogratislink.png");width:100%;height:293px;background-repeat:no-repeat;background-position:center 11px;'>
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
                    	 <a href="argohost.php" class="bg-very-lightblue">
                         		<h2>Nova <br>ArgoHost <br>2014</h2>
                         </a>
                    </li>
                 </div>
                <div class="wow fadeInUp" data-wow-delay="0.1s">     
                	<li>
                    	<a href="atendimento.php" class="bg-light-ocean-verde">
                        <h2>Novo <br>atendimento automatizado</h2>
                    	</a>
                	</li>
                </div>  	
                <div class="wow fadeInUp" data-wow-delay="0.1s">
                    <li style="background:#2C3E50">
                  	<a href="vendas.php" class="bg-light-ocean-blue">
                        <h2>Nova <br>inteligência de vendas</h2>
                    	</a>
                	</li>
                </div>     
                <div class="wow fadeInUp" data-wow-delay="0.1s">    
                 	<li style="background:#4B7330;">
                    	<a href="infraestrutura.php" class="bg-light-ocean-verdecana">
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
                <h2 style="color:#DA4A37;">Uma experiência no mercado nacional de Hosting que nasceu em 2003.</h2>
            	  <div class="container">
<div class="boxer">
                    	<center>
                        	<img src="Content/images/icones/rack1azul-argohost.svg" width="100" height="74" title="Argohost Inovação e criatividade" alt="Argohost Inovação e criatividade" style="padding-bottom:25px;">
                			<h3 style="color:#2C3E50;">Estamos prontos para discutir sobre sua arquitetura de infra!</h3><br>
                        	</center>	 	
                   	</div>
<div class="boxer">
                		<center>
                        	<img src="Content/images/icones/institucional-argohost.svg" title="Argohost Provendo soluções de hosting desde 2003" alt="Argohost Provendo soluções de hosting desde 2003" width="100" height="74" style="padding-bottom:25px;">
                			<h3 style="color:#2C3E50;">Uma empresa que se preocupa com o seu negócio!</h3><br>
        
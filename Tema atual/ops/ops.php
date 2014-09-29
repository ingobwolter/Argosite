<!DOCTYPE html>
<html>
<head>
    	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>ArgoHost Soluções em hospedagem . Todos podem ter um dominio</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="Infraestrutura certificada e homologada em hospedagem Windows, hospedagem Linux, hospedagem semi-dedicada, registro de domínio, hospedagem para blog com cPanel." />
		<meta name="keywords" content="hospedagem de site, hospedagem de sites, hospedagem linux, hospedar site linux, servidor de hospedagem"/>
        <a href="https://plus.google.com/+argohost/" rel="publisher"></a>
       	<meta property="fb:admins" content="https://www.facebook.com/argohostoficial" /> 
		<meta property="fb:page_id" content="https://www.facebook.com/pages/ArgoHost/746803422047367" />
        <link href="Content/bootstrap.css" rel="stylesheet" type="text/css" media="screen">
        <link href="Content/estilo.css" rel="stylesheet" type="text/css" media="screen">
        <link href="Content/tooltip.css" rel="stylesheet" media="screen">
        <link rel="canonical" href="http://www.argohost.net">
        <link rel="shortcut icon" href="Content/images/icones/favicon.ico">
        <link rel="apple-touch-icon" href="Content/images/logo/logo_argohost.png" />
        <script src="js/jquery.min.js" type="text/javascript"></script>
   		<script type="text/javascript" src="https://apis.google.com/js/plusone.js">
    	</script>
        <script src="Scripts/jQuery/jquery-1.11.0.min.js" type="text/javascript"></script>
        <script type="text/javascript" >try {if (top.location.hostname != self.location.hostname) { throw 1; }} catch (e) { top.location.href = self.location.href; }</script>
        <style type="text/css">
		::-moz-selection
		{color: #ccc;background:#F30;}
		::selection
		{color: #ccc;background:#F30;}
		
body{

	width:100%;
	height:auto;
	background:url(Content/images/argohost-infraestrutura.jpg) no-repeat center top #f3f5fb;
	background-size:100%; /*Css padrão*/
    overflow: hidden;
}

.col-md-9 > ul >li{
    width: 25%;
    text-align: center;
    background-color: #e6e6e6;
    color:#2b3d4f;
}
.nav > li > a{
    padding: 14px 9px;
    height:39px;
}
.nav-tabs > li > a{
    border-radius:4px 4px 0 0;
    border-right:1px solid;
    border-color:#ccc; 
    margin: 0px !important;
    color:#2b3d4f !important;
}
#portal-footer{
    height: 139px !important;
}


input[type="button"], input[type="submit"], input[type="reset"], input[type="file"]::-webkit-file-upload-button, button {
align-items: flex-start;
text-align: center;
cursor: default;
color: white;
padding: 0px;
border: 0px none;
border-image-source: inherit;
border-image-slice: inherit;
border-image-width: inherit;
border-image-outset: inherit;
border-image-repeat: inherit;
background-color: transparent;
box-sizing: inherit;
}


input, input[type="password"], input[type="search"] {
-webkit-appearance: textfield;
border: 0px none;
}

        </style>
	</head>
<body>

<?php 
    include 'include_argo/header.php';
	include 'include_argo/nav.php';
?>
<div class="googleplus" style="position:fixed; bottom: 41%; left:2%;z-index:1001;width:90px;">
      <div class="g-plusone" data-size="tall">
    <g:plusone></g:plusone>
   </div> 
   <div style="float:left;width:50px;">
        <a href="http://www.argohost.net/atendimento.php#emergencia" rel="nofollow" alt="Atendimento Argohost">
            <img src="Content/images/icones/atendimento-argohost.png" width="60" height="60" style="padding-bottom:3px;">
        </a><br>
        <a href="http://www.argohost.net/blog" ><img src="Content/images/icones/blog-argohost.png" width="60" height="60"></a>
   </div>       
</div>


<div >
    <div class="container" style="background-image: url(todos-podem-ter-um-dominio.jpg); background-size: 960px 720px; width: 960px; height: 720px; margin-left: auto; margin-right: auto; text-align: center;"> 
	<div style="padding-top: 39%;">
	<form name="msgindex" method="post" action="registrogratis.php">
	<input type="text" id="email" name="email" size="23" maxlength="40" style="padding-top: 9px; margin-left: 8px; font-style: italic;"></input>
	<input type="submit" name="Submit" value="Quero ser avisado" style="padding-top: 8px; padding-left: 26px;">
	</form>
	</div>


    </div>    

</div>
<?php
    include 'include_argo/footer.php';
?>    

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
    <script type="text/javascript" src="js/tab.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/tab.js"></script>
    

    
    <script>
    $('#myTab a').click(function (e) {
    e.preventDefault()
    $(this).tab('show')
    })
    </script>


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
<div style="position:absolute;display:none;">
	<a href="http://www.argohost.net/blog"></a>
	<h1>Hospedagem de sites</h1>
</<div>
</body>
</html>
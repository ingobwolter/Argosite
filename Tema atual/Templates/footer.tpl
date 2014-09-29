		    

     <div class="chat" style="position:fixed;bottom:0%;left:0%;width:163px;">  

		<!-- INICIAR CÓDIGO DA TAG - NÃO EDITAR! --><a href="javascript: void(0);" onclick="javascript: window.open('http://slka01.argohost.net/visitor/index.php?/Grupo_Argo/LiveChat/Chat/StartInline/_sessionID=/_promptType=chat/_proactive=0/_filterDepartmentID=3%2C6%2C7/_randomNumber=u78vmpisyxesjpllpby8tpoeo6qp0psk/_fullName=/_email=/', 'livechatwin', 'toolbar=0,location=0,directories=0,status=1,menubar=0,scrollbars=0,resizable=1,width=600,height=680');" class="livechatlink"><img src="templates/{$template}/images/chat.png"/></a><!-- TERMINAR CÓDIGO DA TAG - NÃO EDITAR! -->

   		</div>   

        

        {if $pagetitle eq $LANG.carttitle}</div>{/if}

		<div class="clear"></div>

	</div>

</div>

<footer id="portal-footer">
	<div class="container" style="width:931px"><b>
    
    	<div class="um" style="width:15%;height:118px;float:left;margin-right:10px;">
        	<div id="portal-signoff"> 
        		<div class="imgrodape">
        			<img src="templates/{$template}/images/logorodape.svg" style="width:135px;padding-top:13px;"/>
   				</div>
                <div class="texto" style="text-align:center;color:#5C7287;font-weight:100;width:90%;padding-left:8%;line-height:13px;padding-top:13px;font-size:10px;">Provendo soluções de hosting desde 2003</div>
            </div>    
   		</div>
        
	  <div class="dois" style="width:47%;height:118px;float:left;">
			<div class="telefone" style="color:#5C7287;font-family:open_sansregular,verdana,arial;font-size:20px;padding-left:25%;padding-top:2%;padding-bottom:1%;">Telefone 4002 2552<br><span style="font-size:12px;padding-left:27px;">comercial@argohost.net</span></div>	
				<ul id="portal-footer-links">
					<li><a href="http://argohost.net/argohost.html">Argohost</a></li>
					<li><a href="http://argohost.net/infraestrutura.html">Infraestrutura</a></li>
					<li><a href="http://argohost.net/politica.html" >Política e contrato</a></li>
					<li><a href="http://argohost.net/inteligencia.html">Processo de vendas</a></li>
					<li><a href="http://argohost.net/atendimento.html">Atendimento</a></li>
				</ul>
	
		</div>	 
       
         <div class="tres" style="width:35%;height:118px;float:right;">
            <div class="redes">    
		    	<center>
					<a href="https://www.facebook.com/pages/ArgoHost/746803422047367" target="_blank"> 
						<img src="http://www.argohost.net/images/facebook.png" alt="" width="30" style="padding: 10px;" border="0" /></a> 
					<a href="https://twitter.com/argohost" target="_blank"> 
						<img src="http://www.argohost.net/images/twitter.png" alt="" width="30" style="padding: 10px;" border="0" /></a> 
					<a href="https://plus.google.com/u/0/b/117451593645726134811/+argohost/" target="_blank"> 
						<img src="http://www.argohost.net/images/googleplus.png" alt="" width="30" style="padding: 10px;" border="0" /></a> 
					<a href="https://www.linkedin.com/company/argohost" target="_blank"> 
						<img src="http://www.argohost.net/images/linkedin.png" target="_blank" alt="" width="30" style="padding: 10px;" border="0" /> </a> 
					<a href="http://instagram.com/argohost" target="_blank"> 
						<img src="http://www.argohost.net/images/instagram.png" alt="" width="30" style="padding: 10px;" border="0" /></a>
					<a href="http://www.youtube.com/user/argohost" target="_blank"> 
						<img src="http://www.argohost.net/images/youtube.png" alt="" width="30" style="padding: 10px;" border="0" /></a>
    			</center>
	  	    </div>
             
        	<div id="portal-signoff">  
            	<a href="http://www.softlayer.com/" target="_self"><img src="templates/{$template}/images/softlayer.svg" class="top" title="Infraestrutura de Datacenter Internacional"></a>
            </div>    
    
            <div id="portal-signoff"> 
				<a href="http://www.mobtecnologia.com.br" target="_blank"><img src="templates/{$template}/images/mob.svg" class="top" title="Infraestrutura de Datacenter Nacional"></a> 
         	</div>  
        </div>   
		
    </div>
</footer>

{literal}
	<script>
      var selectBox = $("select").selectBoxIt().data("selectBoxIt");            
	</script>
{/literal}	

{$footeroutput} 
</body>
</html>
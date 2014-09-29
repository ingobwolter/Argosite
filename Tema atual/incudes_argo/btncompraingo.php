<!DOCTYPE HTML>
<html class="no-js" lang="en">
  <head>
   <title></title>
<style type="text/css">

.modal-dialog{
    width:726px !important;
}    
.modal-content{
    top:-151px;
}
.modal-body{
	height:332px;
	padding: 0px!important;
}
</style>    
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src='js/jquery.tooltip.js'></script> 

    <script  type="text/javascript">
	
			$(document).ready(function(){
				$('.formulario').submit(function(e){
					e.preventDefault();
					return false;
				});
				$('.mudaForm').click(function(){
					texto = $(this).html();
					if(texto === "Transferir"){
						$("#formidf").hide();	
						$("#trans1").fadeIn();
						$(this).html('Pesquisar');
					} else {
						$("#trans1").hide();	
						$("#formidf").fadeIn();
						$(this).html('Transferir');
					}	
									
				});
				$('.mudaForm2').click(function(){
					texto = $(this).html();
					if(texto === "Transferir"){
						$("#formidf2").hide();
						$("#trans2").fadeIn();
						$(this).html('Pesquisar');
					}else{
						$("#trans2").hide();
						$("#formidf2").fadeIn();
						$(this).html('Transferir');
					}
				});
				$('.mudaForm3').click(function(){
					texto = $(this).html();
					if(texto === "Transferir"){
						$("#formidf3").hide();
						$("#trans3").fadeIn();
						$(this).html('Pesquisar');
					}else{
						$("#trans3").hide();
						$("#formidf3").fadeIn();
						$(this).html('Transferir');
					}

				});

				$("#trans1").submit(function(e){
					e.preventDefault();
					trans = $("#sldtrans").val();
					$("#owndomain").val(trans);
				})

				$("#formidf").submit(function(e){
					cc = $("input:radio[name='billingcycle']:checked").val();
					e.preventDefault();
					
					sld = $("#sld").val();
					tld = $("#tld").val();
					trans = $("#sldtrans").val();

					$.post("whoistest.php",{

					sld:sld,
					tld:tld
					},function(data){
						$("#adiv1").html(data);
						$("#dominioa").val(sld + tld);
						$("#dominiob").val(sld + tld);
						$("#dominioc").val(sld + tld);
						$("#dominiod").val(cc);
						
						$("#esconder").hide();

					});
				});

				$("#formidf2").submit(function(e){
					cc = $("input:radio[name='billingcycle']:checked").val();
					e.preventDefault();
					
					sld = $("#sld").val();
					tld = $("#tld").val();
					$.post("whoistest.php",{

					sld:sld,
					tld:tld
					},function(data){
						$("#adiv2").html(data);
						$("#dominioa").val(sld + tld);
						$("#dominiob").val(sld + tld);
						$("#dominioc").val(sld + tld);
						$("#dominiod").val(cc);
						$("#esconder").hide();

					});
				});

				$("#formidf3").submit(function(e){
					cc = $("input:checkbox[name='billingcycle']:checked").val();
					e.preventDefault();
					
					sld = $("#sld").val();
					tld = $("#tld").val();
					$.post("whoistest.php",{

					sld:sld,
					tld:tld
					},function(data){
						$("#adiv3").html(data);
						$("#dominioa").val(sld + tld);
						$("#dominiob").val(sld + tld);
						$("#dominioc").val(sld + tld);
						$("#dominiod").val(cc);
						$("#esconder").hide();

					});
				});

				$(".cycle1").click(function(){
					cycle1 = $(".cycle1:checked").length;
					if(cycle1 > 1){
						alert('Você não pode selecionar mais de um ciclo');
						$('.cycle1').prop("checked", false );
					}
				});
				$(".cycle2").click(function(){
					cycle2 = $(".cycle2:checked").length;
					if(cycle2 > 1){
						alert('Você não pode selecionar mais de um ciclo');
						$('.cycle2').prop("checked",false);					
					}				
				});
				$(".cycle3").click(function(){
					cycle3 = $(".cycle3:checked").length;
					if(cycle3 > 1){
						alert('Você não pode selecionar mais de um ciclo');
						$('.cycle3').prop("checked",false);
					}				
				});

				cycle1 = $(".cycle1:checked").lenght;
				cycle2 = $(".cycle2:checked").lenght;
				cycle3 = $(".cycle3:checked").lenght;	
			});
			</script>
  </head>
  <body>
    <button href="#argostart" class="btn btn-info" data-dropdown="drop1" aria-controls="drop1" aria-expanded="false" data-toggle="modal"  style="margin-left:80px;">&nbsp;&nbsp;Quero este plano&nbsp;&nbsp;</button>
	<button href="#argobusiness" class="btn btn-danger" data-dropdown="drop1" aria-controls="drop1" aria-expanded="false" data-toggle="modal"  style="margin-left:80px;">&nbsp;&nbsp;Quero este plano&nbsp;&nbsp;</button>
    <button href="#argoultimate" class="btn btn-info" data-dropdown="drop1" aria-controls="drop1" aria-expanded="false" data-toggle="modal"  style="margin-left:80px;">&nbsp;&nbsp;Quero este plano&nbsp;&nbsp;</button>

<!-- Modal produto 1 -->
<div class="modal fade" id="argostart" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body">

 	<div style="text-decoration:none;border:1px solid #f1f1f1;border-radius:20px;width:37%;box-sizing: border-box;">
			<ul style="color:#666;margin-left:-24px">
  
			  <span  style="background-color:#f1f1f1;font-family: Open_sansregular;font-size: 12px;">
				<br>
				<h4><span class="glyphicon glyphicon-usd"></span>&nbsp;&nbsp;&nbsp;Ciclos de pagamento</h4>
				<br>
			  </span>
			  <span>
				<a href="javascript:void(0)">
				  <input type="checkbox" name="billingcycle" class="cycle1" value="monthly"/>
							<label>Mensal - R$ 19,99 / mês</label><br>
				</a>
			  </span>
			  <span style="background-color:#f1f1f1;">
				<a href="javascript:void(0)">
				  <input type="checkbox" name="billingcycle" class="cycle1" value="quarterly" checked="checked" />
							<label style="color:red!important;">Trimestral  - R$ 19,39 / mês</label><br>
				</a>
			  </span>
			  <span>
				<a href="javascript:void(0)">
				  <input type="checkbox" name="billingcycle" class="cycle1" value="semiannually"/>
							<label>Semestral - R$ 18,79 / mês</label><br>
				</a>
			  </span>
			  <span style="background-color:#f1f1f1;">
				<a href="javascript:void(0)">
				  <input type="checkbox" name="billingcycle" class="cycle1" value="annually"/>
							<label>Anual - R$ 18,19 / mês</label><br>
				</a>
			  </span>
			  <span>
				<a href="javascript:void(0)">
				  <input type="checkbox" name="billingcycle" class="cycle1" value="triennially"/>
							<label>Trienal - R$ 16,99 / mês</label><br>
				</a>
			  </span><br>
 		</ul>
 		<span style="font-size: 11px;font-family:open_sanslight;line-height: 12px;display: block;">Os planos trimestral, semestral, anual e trienal são cobrados na  sua totalidade.</span>
	</div>
<!--Pesquisar-->
<div style="text-decoration:none;border:1px solid #f1f1f1;border-radius:20px;width:61%;float:right;position:relative;bottom:295px;">
				<span  style="background-color:#f1f1f1;font-family: Open_sansregular;font-size: 12px;">
				<br>
				<h4 style="padding-left:28px;"><span class="glyphicon glyphicon-search"></span>&nbsp;&nbsp;&nbsp;Informe o domínio para sua hospedagem</h4>
				<br>
	<div class="pesquisar" style="padding-left:28px;">
		
		<button class="mudaForm btn btn-default" >Transferir</button>

		<form name="formu" method="post" id="formidf" action="?">
			<font size="4" face="museo_regular"><br>
			<input type="text" name="sld" id="sld" value="" size=15 maxlenght="26" style="width:150px;" placeholder="Pesquisar" required>
			<select name="tld" id="tld">
				<option selected value=".com" >.com</option>
				<option value=".org" >.org</option>
				<option value=".net" >.net</option>
				<option value=".net.br" >.net.br</option>
				<option value=".com.br" >.com.br</option>
				<option value=".org.br" >.emp.br</option>
				<option value=".org.br" >.org.br</option>
				<option value=".med.br" >.med.br</option>
			</select>
			<input type="submit" value="Pesquisar" class="btn btn-success">

			</font>
		</form>
		<br>
		<form name="formu" method="post" id="trans1" style="display:none;" action="?">
			<font size="4" face="museo_regular"><br>
			<input type="text" name="sld" id="sldtrans" value="" size=15 maxlenght="26" style="width:200px;" placeholder="ex. meudomínio.com" required>
			<input type="text" name="tld" value="" size=15 maxlenght="10" style="width:50px;">
			<br><br>
			</font>
		</form>
		<div id="adiv1" style="padding:0px;text-align:center"></div>
		
	</div>
<!---->
       <div class="modal-footer" style="margin-top:15px!important;">
        
		
		<form method="post" action="http://www.argohost.net/core/cart.php?a=add&pid=29&productconfig=1&skipconfig=configdomains">
			  
			  <input type="hidden" name="token" value="{token}">
			  <input type="checkbox" checked name="domains[]" style="display:none;" id="dominioa" value="" />
			  <input type="hidden" name="domainsregperiod[]" id="dominiob" value="" />
			  <input type="hidden" name="owndomainsld" id="owndomain" value="" />
			  <input type="hidden" name="billingcycle" id="dominiod" value="" />
			  <input type="select" name="domainsregperiod[]" id="dominioc" value="" style="display:none;" />
			  
			  
			  <button type="button" class="btn btn-default" data-dismiss="modal">Voltar</button>
			  <button type="submit" class="btn btn-danger">Comprar</button>
				   
        </form>
		
        
      </div>
    </div>
  </div>
</div>
</div>
</div>

<!--002-->
<div class="modal fade" id="argobusiness" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body">

 	<div style="text-decoration:none;border:1px solid #f1f1f1;border-radius:20px;width:37%;box-sizing: border-box;">
			<ul style="color:#666;margin-left:-24px">
  
			  <span  style="background-color:#f1f1f1;font-family: Open_sansregular;font-size: 12px;">
				<br>
				<h4><span class="glyphicon glyphicon-usd"></span>&nbsp;&nbsp;&nbsp;Ciclos de pagamento</h4>
				<br>
			  </span>
			  <span>
				<a href="javascript:void(0)">
				  <input type="checkbox" name="billingcycle" class="cycle2" value="monthly"/>
							<label>Mensal - R$ 29,99 / mês</label><br>
				</a>
			  </span>
			  <span style="background-color:#f1f1f1;">
				<a href="javascript:void(0)">
				  <input type="checkbox" name="billingcycle" class="cycle2" value="quarterly" checked="checked" />
							<label style="color:red!important;">Trimestral  - R$ 29,09 / mês</label><br>
				</a>
			  </span>
			  <span>
				<a href="javascript:void(0)">
				  <input type="checkbox" name="billingcycle" class="cycle2" value="semiannually"/>
							<label>Semestral - R$ 28,19 / mês</label><br>
				</a>
			  </span>
			  <span style="background-color:#f1f1f1;">
				<a href="javascript:void(0)">
				  <input type="checkbox" name="billingcycle" class="cycle2" value="annually"/>
							<label>Anual - R$ 27,29 / mês</label><br>
				</a>
			  </span>
			  <span>
				<a href="javascript:void(0)">
				  <input type="checkbox" name="billingcycle" class="cycle2" value="triennially"/>
							<label>Trienal - R$ 25,49 / mês</label><br>
				</a>
		
			  </span><br>
 		</ul>
 		<span style="font-size: 11px;font-family:open_sanslight;line-height: 12px;display: block;">Os planos trimestral, semestral, anual e trienal são cobrados na  sua totalidade.</span>
	</div>
<!--Pesquisar-->
<div style="text-decoration:none;border:1px solid #f1f1f1;border-radius:20px;width:61%;float:right;position:relative;bottom:296px;">
				<span  style="background-color:#f1f1f1;font-family: Open_sansregular;font-size: 12px;">
				<br>
				<h4 style="padding-left:28px;"><span class="glyphicon glyphicon-search"></span>&nbsp;&nbsp;&nbsp;Informe o domínio para sua hospedagem</h4>
				<br>
	<div class="pesquisar" style="padding-left:28px;">
	
		<button class="mudaForm2 btn btn-default" >Transferir</button>
		<form name="formu" method="post" id="formidf2" action="?">
			<font size="4" face="museo_regular"><br>
			<input type="text" name="sld" id="sld" value="" size=15 maxlenght="26" style="width:150px;" placeholder="Pesquisar" required>
			<select name="tld" id="tld">
				<option selected value=".com" >.com</option>
				<option value=".org" >.org</option>
				<option value=".net" >.net</option>
				<option value=".net.br" >.net.br</option>
				<option value=".com.br" >.com.br</option>
				<option value=".emp.br" >.emp.br</option>
				<option value=".org.br" >.org.br</option>
				<option value=".med.br" >.med.br</option>
			</select>
		    <input type="submit" value="Pesquisar" class="btn btn-success">
			</font>
		</form>
		<br>
		<form name="formu" method="post" id="trans2" style="display:none;" action="?">
			<font size="4" face="museo_regular"><br>
			<input type="text" name="sld" id="sldtrans" value="" size=15 maxlenght="26" style="width:200px;" placeholder="ex. meudomínio.com" required>
			<input type="text" name="tld" value="" size=15 maxlenght="10" style="width:50px;">
			<br><br>
			</font>
		</form>
		<div id="adiv2" style="padding:0px;text-align:center"></div>
		
	</div>
<!---->
       <div class="modal-footer">
		<form method="post" action="http://www.argohost.net/core/cart.php?a=add&pid=30&productconfig=1&skipconfig=configdomains">
			  
			  <input type="hidden" name="token" value="{token}">
			  <input type="checkbox" checked name="domains[]" style="display:none;" id="dominioa" value="" />
			  <input type="hidden" name="domainsregperiod[]" id="dominiob" value="" />
			  
			  <input type="hidden" name="billingcycle" id="dominiod" value="" />
			  <input type="select" name="domainsregperiod[]" id="dominioc" value="" style="display:none;" />
			  
			  
			  <button type="button" class="btn btn-default" data-dismiss="modal">Voltar</button>
			  <button type="submit" class="btn btn-danger">Comprar</button>
				   
        </form>
		
        
      </div>
    </div>
  </div>
</div>
</div>
</div>
<!--02-->
<div class="modal fade" id="argoultimate" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body">

 	<div style="text-decoration:none;border:1px solid #f1f1f1;border-radius:20px;width:37%;box-sizing: border-box;">
			<ul style="color:#666;margin-left:-24px">
			  <span  style="background-color:#f1f1f1;font-family: Open_sansregular;font-size: 12px;">
				<br>
				<h4><span class="glyphicon glyphicon-usd"></span>&nbsp;&nbsp;&nbsp;Ciclos de pagamento</h4>
				<br>
			  </span>
			  <span>
				<a href="javascript:void(0)">
				  <input type="checkbox" name="billingcycle" class="cycle3" value="monthly"/>
							<label>Mensal - R$ 44,99 / mês</label><br>
				</a>
			  </span>
			  <span style="background-color:#f1f1f1;">
				<a href="javascript:void(0)">
				  <input type="checkbox" name="billingcycle" class="cycle3" value="quarterly" checked="checked" />
							<label style="color:red!important;">Trimestral  - R$ 43,64 / mês</label><br>
				</a>
			  </span>
			  <span>
				<a href="javascript:void(0)">
				  <input type="checkbox" name="billingcycle" class="cycle3" value="semiannually"/>
							<label>Semestral - R$ 42,29 / mês</label><br>
				</a>
			  </span>
			  <span style="background-color:#f1f1f1;">
				<a href="javascript:void(0)">
				  <input type="checkbox" name="billingcycle" class="cycle3" value="annually"/>
							<label>Anual - R$ 40,94 / mês</label><br>
				</a>
			  </span>
			  <span>
				<a href="javascript:void(0)">
				  <input type="checkbox" name="billingcycle" class="cycle3" value="triennially"/>
							<label>Trienal - R$ 38,24 / mês</label><br>
				</a>
			  </span><br>
			  <span style="font-size: 11px;font-family:open_sanslight;line-height: 12px;display: block;">Os planos trimestral, semestral, anual e trienal são cobrados na  sua totalidade.</span>
 		</ul>
	</div>
<!--Pesquisar-->
<div style="text-decoration:none;border:1px solid #f1f1f1;border-radius:20px;width:61%;float:right;position:relative;bottom:294px;">
				<span  style="background-color:#f1f1f1;font-family: Open_sansregular;font-size: 12px;">
				<br>
				<h4 style="padding-left:28px;"><span class="glyphicon glyphicon-search"></span>&nbsp;&nbsp;&nbsp;Informe o domínio para sua hospedagem</h4>
				<br>
	<div class="pesquisar" style="padding-left:28px;">
		
		<button class="mudaForm3 btn btn-default" >Transferir</button>
		<form name="formu" method="post" id="formidf3" action="?">
			<font size="4" face="museo_regular"><br>
			<input type="text" name="sld" id="sld" value="" size=15 maxlenght="26" style="width:150px;" placeholder="Pesquisar" required>
			<select name="tld" id="tld">
				<option selected value=".com" >.com</option>
				<option value=".org" >.org</option>
				<option value=".net" >.net</option>
				<option value=".net.br">.net.br</option>
				<option value=".com.br">.com.br</option>
				<option value=".emp.br">.emp.br</option>
				<option value=".org.br">.org.br</option>
				<option value=".med.br">.med.br</option>
			</select>
			<input type="submit" value="Pesquisar" class="btn btn-success">

			</font>
		</form>
		<br>
		<form name="formu" method="post" id="trans3" style="display:none;" action="?">
			<font size="4" face="museo_regular"><br>
			<input type="text" name="sld" id="sldtrans" value="" size=15 maxlenght="26" style="width:200px;" placeholder="ex. meudomínio.com" required>
			<input type="text" name="tld" value="" size=15 maxlenght="10" style="width:50px;">
			<br><br>
			</font>
		</form>
		<div id="adiv3" style="padding:0px;text-align:center"></div>
		
	</div>
<!---->
       <div class="modal-footer">
        
		
		<form method="post" action="http://www.argohost.net/core/cart.php?a=add&pid=31&productconfig=1&skipconfig=configdomains">
			  
			  <input type="hidden" name="token" value="{token}">
			  <input type="checkbox" checked name="domains[]" style="display:none;" id="dominioa" value="" />
			  <input type="hidden" name="domainsregperiod[]" id="dominiob" value="" />
			  
			  <input type="hidden" name="billingcycle" id="dominiod" value="" />
			  <input type="select" name="domainsregperiod[]" id="dominioc" value="" style="display:none;" />
			  
			  
			  <button type="button" class="btn btn-default" data-dismiss="modal">Voltar</button>
			  <button type="submit" class="btn btn-danger">Comprar</button>
	   
        </form>
        </div>
    </div>
    </div>
	</div>
</div>
</div>

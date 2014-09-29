<!-- Modal produto 1 -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body">

 	<div style="text-decoration:none;border:1px solid #f1f1f1;border-radius:20px;width:37%;box-sizing: border-box;">
			<ul style="color:#666;margin-left:-24px">
  
			  <span  style="background-color:#f1f1f1;font-family: Open_sansregular;font-size: 12px;">
				<br>
				<h4><span class="glyphicon glyphicon-usd"></span>&nbsp;&nbsp;&nbsp;Ciclos de pagamento1</h4>
				<br>
			  </span>
			  <span>
				<a href="javascript:void(0)">
				  <input type="radio" name="billingcycle" id="cycle1" value="monthly"/>
							<label>Mensal - R$ 14,99 / mês</label><br>
				</a>
			  </span>
			  <span style="background-color:#f1f1f1;">
				<a href="javascript:void(0)">
				  <input type="radio" name="billingcycle" id="cycle2" value="quarterly" checked/>
							<label style="color:red!important;">Trimestral  - R$ 14,54 / mês</label><br>
				</a>
			  </span>
			  <span>
				<a href="javascript:void(0)">
				  <input type="radio" name="billingcycle" id="cycle3" value="semiannually"/>
							<label>Semestral - R$ 14,09 / mês</label><br>
				</a>
			  </span>
			  <span style="background-color:#f1f1f1;">
				<a href="javascript:void(0)">
				  <input type="radio" name="billingcycle" id="cycle4" value="annually"/>
							<label>Anual - R$ 13,64 / mês</label><br>
				</a>
			  </span>
			  <span>
				<a href="javascript:void(0)">
				  <input type="radio" name="billingcycle" id="cycle6" value="triennially"/>
							<label>Trienal - R$ 12,74 / mês</label><br>
				</a>
			  </span><br>
 		</ul>
	</div>
<!--Pesquisar-->
<div style="text-decoration:none;border:1px solid #f1f1f1;border-radius:20px;width:61%;float:right;position:relative;bottom:283px;">
				<span  style="background-color:#f1f1f1;font-family: Open_sansregular;font-size: 12px;">
				<br>
				<h4 style="padding-left:28px;"><span class="glyphicon glyphicon-search"></span>&nbsp;&nbsp;&nbsp;Pesquisa de domínios</h4>
				<br>
	<div class="pesquisar" style="padding-left:28px;">
	
		<form name="formu" method="post" id="formidf" action="?">
			<font size="4" face="museo_regular"><br>
			<input type="text" name="sld" id="sld" value="" size=15 maxlenght="26" style="width:150px;" placeholder="Pesquisar" required>
			<select name="tld" id="tld">
				<option selected value=".com" >.com</option>
				<option value=".org" >.org</option>
				<option value=".net" >.net</option>
				<option value=".net" >.net.br</option>
				<option value=".net" >.com.br</option>
				<option value=".net" >.emp.br</option>
				<option value=".net" >.org.br</option>
				<option value=".net" >.med.br</option>
			</select>
			<input type="submit" value="Pesquisar" class="btn btn-success">

			</font>
		</form>
		<br>
		<div id="adiv" style="padding:0px;text-align:center"></div>
		
	</div>
<!---->
       <div class="modal-footer">
        
		
		<form method="post" action="http://www.argohost.net/core/cart.php?a=add&pid=2&productconfig=1&skipconfig=configdomains">
			  
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
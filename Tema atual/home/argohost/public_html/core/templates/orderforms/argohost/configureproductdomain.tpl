<script type="text/javascript" src="includes/jscript/jqueryui.js"></script>
<script type="text/javascript" src="templates/orderforms/{$carttpl}/js/main.js"></script>
<link rel="stylesheet" type="text/css" href="templates/orderforms/{$carttpl}/style.css" />
<link rel="stylesheet" type="text/css" href="includes/jscript/css/ui.all.css" />
<link rel="canonical" href="http://www.argohost.net" />
<script type="text/javascript" src="https://apis.google.com/js/plusone.js"></script>

<div class="container">
	<div class="desc">
		<div class="wow fadeIn" data-wow-delay="3.0s">
			<!--<h1>{$productinfo.groupname}</h1>-->
		</div>
	</div>
	<div class="top" style="margin-right:72px;">
		<video width="auto" height="auto" controls autoplay loop="loop">
  			<source src="templates/{$template}/video/domain.mp4" type="video/mp4">
  			<object data="templates/{$template}/video/domain.mp4" width="auto" height="auto">
 			</object>
		</video>
	</div>
	<div class="mar">

	</div>
	<!--Animação topo-->
	<div class="passo">
		<img src="templates/{$template}/images/passos.jpg" style="border-radius:0px 0px 10px 10px;" />
	</div>
	<div class="wow entrada" data-wow-delay="1.0s">
		<div class="aguia01">

		</div>
	</div>
</div>
<div class="googleplus" style="position: fixed; bottom: 56%; left:2%;z-index:555;">
	
	  <div class="g-plusone" data-size="tall">
    <g:plusone></g:plusone>
   </div> 
</div>
<div id="order-modern">
	<div class="container">
		<!---->
		<div class="col-md-5">
		{$productinfo.description}
		</div>
		<!--<div class="col-md-7">
			<div class="preco" style="position: relative; top: -100px;">
				{if $pid=2}<img src="templates/{$template}/images/preconove.svg" width="281px"/>{else}
                	<h1>testando</h1>
                {/if}
                
			</div>
			<div class="dominio" style="position: relative; top: -73px;">
				Encontre um <span>Domínio</span> que represente você, sua marca ou empresa na internet,<br> Ex:&nbsp;
				<span2>www.nomedaempresa.com</span2>
				&nbsp;ou&nbsp;
				<span2>www.nomedaempresa.com.br</span2>
			</div>
		</div>-->
		<!---->
	<form onsubmit="checkdomain();return false">
		<div class="col2half">
			<div class="internalpadding domain-checker">
				<div class="domainoptions">
					{if $incartdomains}
					<div class="option">
						<label><input type="radio" name="domainoption" value="incart" id="selincart" />&nbsp;{$LANG.cartproductdomainuseincart}</label>
						<div class="domainreginput" id="domainincart">
							<select id="incartsld">
								{foreach key=num item=incartdomain from=$incartdomains}
								<option value="{$incartdomain}">{$incartdomain}</option>
								{/foreach}
							</select> <input class="btn btn-success" type="submit" value="{$LANG.ordercontinuebutton}" style="margin: 3px;" />
						</div>
					</div>
					{/if}
					{if $registerdomainenabled}
					<div class="option">
						<label><input type="radio" name="domainoption" value="register" id="selregister" />&nbsp;{$LANG.cartregisterdomainchoice|sprintf2:$companyname}</label>
						<div class="domainreginput" id="domainregister">
							<span style="color: #3C0"><b>www.</b></span> <input type="text" id="registersld" placeholder="Digite seu domínio" value="{$sld}" maxlength="26" /> 
						  <select id="registertld">
								{foreach key=num item=listtld from=$registertlds}
								<option value="{$listtld}" {if $listtld eq $tld} selected="selected"{/if}>{$listtld}</option> 
								{/foreach}
							</select>
							<button type="submit" value="{$LANG.checkavailability}" style="margin: 3px;" class="btn btn-success">
								<span class="glyphicon glyphicon-search">&nbsp;{$LANG.checkavailability}</span>
							</button>
						</div>
					</div>
					{/if}
					{if $owndomainenabled}
					<div class="option">
						<label><input type="radio" name="domainoption" value="owndomain" id="selowndomain" />&nbsp;{$LANG.cartexistingdomainchoice|sprintf2:$companyname}</label>
						<div class="domainreginput" id="domainowndomain">
							<span style="color: #3C0"><b>www.</b></span>
							<input type="text" id="owndomainsld" placeholder="Digite seu domínio" value="{$sld}" size="30" maxlength="26" /> .
							<input type="text" id="owndomaintld" size="5" value="{$tld|substr:1}" />
							<button class="btn btn-success" type="submit" value="{$LANG.ordercontinuebutton}" style="margin: 3px;" />
							<span class="glyphicon glyphicon-ok">&nbsp;{$LANG.ordercontinuebutton}</span>
							</button>
						</div>
					</div>
					{/if}
					{if $subdomains}
					<div class="option">
						<label><input type="radio" name="domainoption" value="subdomain" id="selsubdomain" />&nbsp;{$LANG.cartsubdomainchoice|sprintf2:$companyname}</label>
						<div class="domainreginput" id="domainsubdomain">
							<span style="color: #3C0"><b>http://</b></span> <input type="text" id="subdomainsld" value="{$sld}" size="30" maxlength="26" /> 
						  <select id="subdomaintld">{foreach
								from=$subdomains key=subid item=subdomain}
								<option value="{$subid}">{$subdomain}</option>{/foreach}
							</select>
							<input class="btn btn-success btn-sm" type="submit" value="{$LANG.ordercontinuebutton}" />
						</div>
					</div>
					{/if}
				</div>
			</div>
		</div>
		<div class="clear"></div>
		{if $freedomaintlds}
		<p>
			* <em>{$LANG.orderfreedomainregistration} {$LANG.orderfreedomainappliesto}: {$freedomaintlds}</em>
		</p>
		{/if}
	</form>
	<div class="clear"></div>
		<div id="greyout"></div>
		<div id="domainpopupcontainer">
			<form id="domainfrm" onsubmit="completedomain();return false">
				<div class="domainresults" id="domainresults">
					<img src="images/loading.gif" border="0" alt="Loading..." />
				</div>
			</form>
		</div>
        
        
	
		<div id="prodconfigcontainer"></div>
		{literal}
		<script language="javascript">
		jQuery(".domainreginput").hide();
		jQuery(".domainoptions input:first").attr('checked', 'checked');
		jQuery(".domainoptions input:first").parent().parent().addClass('optionselected');
		jQuery("#domain" + jQuery(".domainoptions input:first").val()).show();
		jQuery(document).ready(function() {
			jQuery(".domainoptions input:radio").click(function() {
				jQuery(".domainoptions .option").removeClass('optionselected');
				jQuery(this).parent().parent().addClass('optionselected');
				jQuery("#domainresults").slideUp();
				jQuery(".domainreginput").hide();
				jQuery("#domain" + jQuery(this).val()).show();
			});
		});
		function checkdomain() {
			jQuery("#greyout").fadeIn();
			jQuery("#domainpopupcontainer").slideDown();
			var domainoption = jQuery(".domainoptions input:checked").val();
			var sld = jQuery("#" + domainoption + "sld").val();
			var tld = '';
			if (domainoption == 'incart')
				var sld = jQuery("#" + domainoption + "sld option:selected").text();
			if (domainoption == 'subdomain')
				var tld = jQuery("#" + domainoption + "tld option:selected").text();
			else
				var tld = jQuery("#" + domainoption + "tld").val();
			jQuery.post("cart.php", {
				ajax : 1,
				a : "domainoptions",
				sld : sld,
				tld : tld,
				checktype : domainoption
			}, function(data) {
				jQuery("#domainresults").html(data);
			});
		}
		function cancelcheck() {
			jQuery("#domainpopupcontainer").slideUp('slow',function() {
				jQuery("#greyout").fadeOut();
				jQuery("#domainresults").html('<img src="images/loading.gif" border="0" alt="Loading..." />');
			});
		}
		function completedomain() {
			jQuery("#domainresults").append('<img src="images/loading.gif" border="0" alt="Loading..." />');
			jQuery.post("cart.php",'ajax=1&a=add&pid={/literal}{$pid}{literal}&domainselect=1&' + jQuery("#domainfrm").serialize(), function(data) {
				if (data == '') {
					window.location = 'cart.php?a=view';
				} else if (data == 'nodomains') {
					jQuery("#domainpopupcontainer").slideUp('slow', function() {
						jQuery("#greyout").fadeOut();
					});
				} else {
					jQuery("#prodconfigcontainer").html(data);
					jQuery("#domainpopupcontainer").slideUp('slow', function() {
						jQuery("#greyout").fadeOut();
					});
					jQuery("#prodconfigcontainer").slideDown();
				}
			});
		}
		</script>
		{/literal}
	</div>
</div>
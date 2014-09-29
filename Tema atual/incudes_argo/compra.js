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
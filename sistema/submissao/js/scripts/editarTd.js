
	$(document).ready(function(){
		$(document).on('click','.salvaEdicao',function(){
			console.log('entrou');
			var env = {};
			env.id_campo = $(this).attr('id');
			env.campo = $(this).attr('acao');
			env.tabela = $(this).attr('tabela');
			var pai = $(this).parent().parent().parent().parent().parent();
			var input = $(this).parent().parent();
			env.valor = input.children().val();
				
				$.ajax({
			            type: "POST",
			            url: "../controller/editarTdConf.php",
			            data: env,
			            dataType: 'json',
			            success: function(data){
							
			            	console.log("Alerta: Edição feita");
			           		var tdDescrição = pai.children("td:nth-child(2)");
				   			var tdPeso = pai.children("td:nth-child(3)");
				   			console.log(pai);

				   			if(env.tabela == 'criterios'){
				   				if(env.campo == 'corpo_do_criterio'){
	   								tdDescrição.html('');
					   				tdDescrição.html(''+env.valor+'');
					   			}else{
					   				tdPeso.html('');
					   				tdPeso.html(''+env.valor+'');
					   			}
				   			}else{
				   				tdDescrição.html('');
					   			tdDescrição.html(''+env.valor+'');
				   			}
   							
						},
			            error: function(data){
			            	console.log(data);
			            	console.log("Alerta: Erro ao salvar edição de criterio");
			            }
			    });
		    });       
	});
	

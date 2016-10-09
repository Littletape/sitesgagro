
	$(document).ready(function(){
		$(document).on('click','.excluirLinha',function(){

			var env = {};
			env.campo = $(this).attr('id');
			env.tabela = $(this).attr('tabela');

			var pai = $(this).parent().parent();
			var trAvaliacao = pai.children('tr:nth-child(0)');
				$.ajax({
			            type: "POST",
			            url: "../controller/excluirTrConf.php",
			            data: env,
			            dataType: 'json',
			            success: function(data){
							pai.html('');
			            },
			            error: function(data){
			            	console.log(data);
			            	console.log("Alerta: Erro ao excluir");
			            }
			    });
   			

		    });       
	});


	

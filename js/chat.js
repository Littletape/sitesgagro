	
	// Clicar no botão hide parar esconder o chat
	jQuery(document).ready(function() {
		$('#hide').click(function() {
			$( ".window-person" ).animate({ "right": "-=300px" }, "slow" );
			$("#show_chat").show();
		});
	});



	// Clicar no botão show_chat parar exibit o chat
	jQuery(document).ready(function() {
		$('#show_chat').click(function() {
			$( ".window-person" ).animate({ "right": "+=300px" }, "slow" );
			$("#show_chat").hide();
		});
	})
	


	// Apertar Enten para enviar a mensagem e salvar
	jQuery(document).ready(function() {
		
		$(document).on('keypress','.envmensagem',function(e){
			if(e.which == 13){
				var env = {};
				env.mensagem = $(this).val();
				env.id_destino = $(this).attr("usuarioid");
				$("#msg").val("");
					//$(".chat-body").append("<br>"+msg  );
					$.ajax({
						url: '../controller/insertmensagem.php',
						type: 'POST',
						dataType: 'json',
						data: env,
						success: function(data){
							console.log(data);
						},
						error: function (data) {
							console.log(data);
						}
					})
					$.ajax({
						url: '../controller/buscamensagens.php',
						type: 'POST',
						dataType: 'json',
						data: env,
						success: function(data){
							console.log(data);
							$(".body"+data[0]['id_destino']).html("");
							$.each(data, function(i, item) {
								if(data[i]['id_destino'] = env.id_destino){
									$(".body"+data[i]['id_destino']).append("<div class='alert alert-success' role='alert'> " + data[i]['mensagem'] + "</div>");
								}else{
									$(".body"+data[i]['id_remetente']).append("<div class='alert alert-success' role='alert'> " + data[i]['mensagem'] + "</div>");
								}
							});
						},
						error: function (data) {
							console.log(data);
						}
					})

				}


			});
	});




// Fazer a busca no banco do status de cada pessoa
var TESTE = {};
jQuery(document).ready(function() {
	var env = {};
	$.ajax({
		url: '../controller/buscaonline.php',
		type: 'POST',
		dataType: 'json',
		data: env,
		success(data){
			// console.log(data);
			$.each(data, function(i, item) {

				TESTE = data;
				// Verifica Status do usuario
				// Se A - Usuario Ativo no momento
				// Se I - Usuario Inativo
				if(data[i]['status'] ==="A"){status = "status-online"; }
				else {status = "status-offline"; }
				console.log(status);
				// Inclui os usuarios no campo de status
				$('.body-online').append("<p id='"+data[i]['id_usuario']+"' class='person-online contatoChat' value='"+data[i]['nome']+"' tipocad='"+data[i]['id_tipoCad']+"'>"+data[i]['nome']+"<span class='"+status+"'></span></p>");
				
			});
		},
		error(data) {
			console.log(data);
		}
	});	
});




// Exibir tela de chat o clicar no nome do usuario
jQuery(document).ready(function($) {
	$(document).on('click','.contatoChat',function(){
		var nome = $(this).attr('value');
		var id_usuario = $(this).attr('id');
		var linha ="<div class='window'>";
		linha += "<div class='head-chat' >";
		linha += nome;
		linha += "</div>";
		linha += "<div class='body-chat body"+id_usuario+"' >";

		linha += "</div>";
		linha += "<div class='message-chat'>";
		linha += "<input type='text' name='mensagem' id='msg' usuarioId="+id_usuario+" class='form-control envmensagem' placeholder='Digite uma mensagem...'>";
		linha += "</div>";
		linha += "</div>";
		$('.chat').append(linha);



		var env = {};
		env.id_destino =  id_usuario;
		$.ajax({
			url: '../controller/buscamensagens.php',
			type: 'POST',
			dataType: 'json',
			data: env,
			success: function(data){
				console.log(data);
				if (($(data)).length > 0){
					$(".body"+data[0]['id_destino']).html("");
				}
				$.each(data, function(i, item) {
					if(data[i]['id_destino'] = env.id_destino){
						$(".body"+data[i]['id_destino']).append("<div class='alert alert-succes'> " + data[i]['mensagem'] + "</div>");
					}else{
						$(".body"+data[i]['id_remetente']).append("<div class='alert alert-info'> " + data[i]['mensagem'] + "</div>");
					}

				});
			},
			error: function (data) {
				console.log(data);
			}
		})
	});




});




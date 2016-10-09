
function modalAlerta(texto){

var htmlModal =	'<div class="modal fade" id="modalAlerta" role="dialog">'+
			        '<div class="modal-dialog" style="margin-top: 100px">'+
			        	'<div class="modal-content">'+
			                '<div class="modal-header" id="mdHeaderAC" style="color:with;height:40px;">'+
			                    '<button type="button" class="close" data-dismiss="modal">&times;</button>'+
			                    '<h4 style="color:withx;" id="mdTitulo">Atenção <span class="glyphicon glyphicon-info-sign"></span></h4>'+
			                '</div>'+
			                '<div class="modal-body">'+
			                    '<div class="row">'+
			                        '<div class="col-md-12">'+
			                            '<h3 style="text-align:center" class="alert alert-success"></h3>'+
			                        '</div>'+
			                    '</div>  '+
			                '</div>'+
			                '<div class="modal-footer">'+
			                    '<button type="button" id="fecharModalAlerta" class="btn btn-default btn-danger pull-right" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span>Fechar</button>'+
			                '</div>'+
			            '</div>'+
			        '</div>'+
			    '</div>';

	$('body').append(htmlModal);
	$('#modalAlerta .alert').append(texto);
	$('#modalAlerta').modal();

	$(document).on('click','#fecharModalAlerta',function(){
		$('#modalAlerta .alert').html('');
	});
	

	
}
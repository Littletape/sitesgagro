   $(document).ready(function(){
        $(document).on('blur','#cpf',function(){

            var env = {};
                env.cpf = $(this).val();
                
                $.ajax({
                    type: 'POST',
                    url: '../controller/sl-ACAOverificacpf.php',
                    data: env,
                    dataType: 'json',

                    success: function(data){
                    console.log(data);
                        
                     modalAlerta('Este cpf ja foi cadastrado no sistema, verifique e tente novamente');
                     $('#cpf').val('');                        
                
                    },
                    error: function(data){
                        console.log(data);
                    },
                    cache: false
                });
        });
    });
$(document).ready(function(){
        $(document).on('blur','#email',function(){
                
            var env = {};
                env.email = $(this).val();
                
                $.ajax({
                    type: 'POST',
                    url: '../controller/sl-ACAOverificaemail.php',
                    data: env,
                    dataType: 'json',

                    success: function(data){
                        console.log(data);
                     modalAlerta('Este E-mail já esta cadastrado no sistema.');
                     $('#email').val(''); 
                    },
                    error: function(data){
                        console.log(data);
                    },
                    cache: false
                });
        });
    });
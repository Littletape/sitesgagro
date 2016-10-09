$(document).on('click','#cad',function(){
    
    env = {};
    $.ajax({
        type: "POST",
        url: "../controller/sl-ACAOsomaenvios.php",
        data: env,
        dataType : 'json',
        success: function(data){
            console.log(data);
           var somaTrabalhoCad = data[0];
            var limiteDeTrabalho = data[1];
            if(somaTrabalhoCad < limiteDeTrabalho){
                location.href='regras.php';
            }else{
                modalAlerta('Você pode cadastrar apenas 5 trabalhos !!!');
            }
                                            
        }, 
        error: function(data) {
            console.log(data);
            }
    });
        
});
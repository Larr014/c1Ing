$(document).ready(function(){
    
    $('#btnLog').click(function(){
        let formData = new FormData();
        formData.append('validador',true);
        formData.append('iRut',$('#iRut').val());
        formData.append('iPass',$('#iPass').val());

        $.ajax({
            url: "../bd/log.php",
            type: 'POST',
            data: formData,
            processData: false,
            contentType: false,
            success: function(respuesta){
                console.log(respuesta);
                //Tomar un string json y convertirlo a una estructura conocida por js
                if(respuesta=='1'){
                    alert("Coinciden las contraseñas");
                    location.reload();
                }else{
                    alert("No coinciden");
                }
            }
        });

    });

});
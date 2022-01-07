$(document).ready(function(){
    
    $('#btnBuscarCliente').click(function(){
        let formData = new FormData();
        formData.append('validador',true);
        formData.append('iRut',$('#iRut').val());
        

        $.ajax({
            url: "../../bd/compra/buscarCliente.php",
            type: 'POST',
            data: formData,
            processData: false,
            contentType: false,
            success: function(respuesta){
                //Tomar un string json y convertirlo a una estructura conocida por js
                respuesta = JSON.parse(respuesta)[0];
                console.log(respuesta);
                $('#iNombre').val(respuesta['nombre']+' '+respuesta['apellido']);
                $('#iId').val(respuesta['idCliente']);
            }
        });

    });

});
$(document).ready(function(){
    $('#btnBNProducto').click(function(){
        let formData = new FormData();
        formData.append('validador',true);
        formData.append('iNProducto',$('#iNProducto').val());
        

        $.ajax({
            url: "../../bd/compra/buscarProductoNombre.php",
            type: 'POST',
            data: formData,
            processData: false,
            contentType: false,
            success: function(respuesta){
                console.log(respuesta);
                //Tomar un string json y convertirlo a una estructura conocida por js
                respuesta = JSON.parse(respuesta);
                console.log(respuesta);
                let filas = respuesta.length;
                let code = "<select id='sNombre'>";
                for(let x=0;x<filas;x++){
                    code+="<option value='"+respuesta[x]['idproducto']+"'>"+respuesta[x]['codigo']+" | "+respuesta[x]['nombre']+"</option>";
                }
                code+="</select>";
                $('#dOpciones').html(code);


            }
        });

    });



    $('#btnBuscarProducto').click(function(){
        let formData = new FormData();
        formData.append('validador',true);
        formData.append('iCodigo',$('#iCodigo').val());
        

        $.ajax({
            url: "../../bd/compra/buscarProducto.php",
            type: 'POST',
            data: formData,
            processData: false,
            contentType: false,
            success: function(respuesta){
                //Tomar un string json y convertirlo a una estructura conocida por js
                respuesta = JSON.parse(respuesta)[0];
                console.log(respuesta);
                $('#iNombreProducto').val(respuesta['nombre']);
                $('#iIdProducto').val(respuesta['idproducto']);
            }
        });

    });

    


});
$(document).ready(function(){
    //Oculta por default la sección donde se muestra una única caseta
    $('#oneCaseta').hide();

    //Si el usuario selecciona una lista de la caseta se dispara la función
    $('#opciones').change(function(e){
        e.preventDefault();
        //Se muestra una sola caseta
        let opc = $("#opciones option:selected").val();
        if(opc != 0){
            $.ajax({
                url: './../../backend/get_casetas_lobobicis.php',
                type: 'POST',
                data: {opc},// abreviatura de: data: {search: search},
                success: function(response){
                    console.log(response);
                    let bici = JSON.parse(response)[0];//lo convertimos a objeto de java
                    let estadoBici = bici.estado == 1 ? "Abierta" : "Cerrada";
                    $('.card-title').text(bici.nom);
                    $('.card-text').text(estadoBici);

                    //removemos clases que ya no se ocupan
                    $('.card').removeClass('card-disponible');
                    $('.card').removeClass('card-noDisponible');
                    //Asignamos el estilo de acuerdo a la caseta cerrada o abierta
                    if(bici.estado == 1)
                    {
                        $('.card').addClass('card-disponible');
                    }
                    else
                    {
                        $('.card').addClass('card-noDisponible');
                    }
                    $('#map').hide();
                    $('#simbologia').hide();
                    $('#oneCaseta').show();
                }
            });
        }
        else
        {
            $('#oneCaseta').hide();
            $('#map').show();
            $('#simbologia').show();
        }
        //alert(opc);
        //$('#map').hide();
        //$('#simbologia').hide();
        //$('#oneCaseta').show();
        
    });
});
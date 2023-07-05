$(document).ready(function(){
    //Oculta por default la sección donde se muestra una única caseta
    $('#oneCaseta').hide();
    $('#mapa-una-caseta').hide();

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
                    let bici = JSON.parse(response)[0];//lo convertimos a objeto de java
                    let estadoBici = bici.estado == 1 ? "Abierta" : "Cerrada";
                    console.log(bici);

                    //Colocamos los datos de la bici en la card
                    $('.card-title').text(bici.nom);
                    $('.card-text').text(estadoBici);
                    //removemos el estilo de la card que tenga anteriormente
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
                    $('#mapa-una-caseta').show();
                }
            });
        }
        else
        {
            $('#oneCaseta').hide();
            $('#mapa-una-caseta').show();
            $('#map').show();
            $('#simbologia').show();
        }
        //alert(opc);
        //$('#map').hide();
        //$('#simbologia').hide();
        //$('#oneCaseta').show();
        
    });
});
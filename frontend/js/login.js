//Aqui guardamos la ubicación actual de donde se esta ejecutando
//var originUrlPath = window.location.origin;

$(document).ready(function(){
    //Cuando presionamos botón Iniciar Sesión
    $('#form-login').on('submit', function(e){
        e.preventDefault();
        
        var email = $('#email').val();
        var pass = $('#pass').val();

        //validamos los campos antes enviarlos al servidor
        if(email == '' && pass == ''){
            alert('Inserte datos de acceso');
        }else if (email == ''){
            alert('Por favor inserte email');
        }else if(pass == ''){
            alert('Por favor inserte contraseña');
        }else{
            //Si los datos son válidos
            var Json = {
                "email": email,
                "password": pass
            };
            //Convertimos el Json a cadena de texto y la enviamos al servidor
            const datos = JSON.stringify(Json,null,2);
            $.ajax({
                url: './backend/controlador_login.php',
                data: {datos}, //abreviatura de: datas: {datos: datos},
                type: 'POST',
                success: function(response){
                    console.log(response);
                    let res = JSON.parse(response); //Convertimos la respuesta del servidor a Json
                    //console.log(res);
                    //console.log(res['status']);
                    let status = res['status'];
                    let url;
                    if(status == 'Success'){
                        alert('Conexion establecida');
                        
                        switch(res['estado']){
                            case '0':
                                url = './users/admin/index.php';
                                break;
                            case '1':
                                url = './users/estudiante/index.php';
                                break;
                            case '2':
                                url = './users/adminLobobus/index.php';
                                break;
                            case '3':
                                url = './users/adminLobobici/index.php';
                                
                        }
                        $(location).attr('href',url);
                        
                    }else{
                        console.log("[ststus]:"+status);
                        console.log("[message]:"+res['message']);
                    }
                    
                }
            });
        }

    });
});
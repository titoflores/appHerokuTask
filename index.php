<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <link rel="stylesheet" href="Librerias/css/bootstrap.min.css"/>
    <script src="Librerias/js/bootstrap.min.js"></script>
    <body>
        <div class="bs-example" data-example-id="navbar-with-image-brand"> 
            <nav class="navbar navbar-inverse"> 
                <div class="container-fluid"> 
                    <div class="navbar-header"> 
                        <a href="#" class="navbar-brand"> 
                            <img alt="Brand" height="20" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACgAAAAoCAYAAACM/rhtAAAB+0lEQVR4AcyYg5LkUBhG+1X2PdZGaW3btm3btm3bHttWrPomd1r/2Jn/VJ02TpxcH4CQ/dsuazWgzbIdrm9dZVd4pBz4zx2igTaFHrhvjneVXNHCSqIlFEjiwMyyyOBilRgGSqLNF1jnwNQdIvAt48C3IlBmHCiLQHC2zoHDu6zG1iXn6+y62ScxY9AODO6w0pvAqf23oSE4joOfH6OxfMoRnoGUm+de8wykbFt6wZtA07QwtNOqKh3ZbS3Wzz2F+1c/QJY0UCJ/J3kXWJfv7VhxCRRV1jGw7XI+gcO7rEFFRvdYxydwcPsVsC0bQdKScngt4iUTD4Fy/8p7PoHzRu1DclwmgmiqgUXjD3oTKHbAt869qdJ7l98jNTEblPTkXMwetpvnftA0LLHb4X8kiY9Kx6Q+W7wJtG0HR7fdrtYz+x7iya0vkEtUULIzCjC21wY+W/GYXusRH5kGytWTLxgEEhePPwhKYb7EK3BQuxWwTBuUkd3X8goUn6fMHLyTT+DCsQdAEXNzSMeVPAJHdF2DmH8poCREp3uwm7HsGq9J9q69iuunX6EgrwQVObjpBt8z6rdPfvE8kiiyhsvHnomrQx6BxYUyYiNS8f75H1w4/ISepDZLoDhNJ9cdNUquhRsv+6EP9oNH7Iff2A9g8h8CLt1gH0Qf9NMQAFnO60BJFQe0AAAAAElFTkSuQmCC" width="20"> </a> 
                    </div> 
                </div> 
            </nav> 
        </div>

        <div class="container">
            <div class="bs-example"> 
                <form> 
                    <fieldset > 
                        <div class="form-group">
                            <label for="disabledTextInput">ID Usuario</label> 
                            <input type="number" id="idUsuario" value="1" class="form-control" placeholder="Escriba ID USUARIO" disabled=""> 
                        </div> 
                        <div class="form-group"> 
                            <label for="disabledTextInput">Nombre usuario</label> 
                            <input type="text" id="nombreUsuario" class="form-control" placeholder="Escriba NOMBRE USUARIO" autofocus=""> 
                        </div>
                        <div class="form-group"> 
                            <label for="disabledTextInput">Clave usuario</label> 
                            <input type="password" id="claveUsuario" class="form-control" placeholder="Escriba CLAVE USUARIO"> 
                        </div>
                        <button type="button"  onclick="cargarUsuarios();"class="btn btn-primary">Registrar Datos</button>
                    </fieldset> 
                </form> 
            </div>
            <h3>Tabla para mostrar datos</h3>
            <table id="js-tabla" border=1 class="table table-striped">
                <tbody>
                    <tr>
                        <td>idUsuario</td>
                        <td>Nombre Usuario</td>
                        <td>Clave Usuario</td>
                        <td>Accion </td>
                    </tr>
                </tbody>
            </table>

        </div>
<<<<<<< HEAD
         


=======

<h1>Actualizacion</h1>
<li>Tito</li>
<li>Deivy</li>
<<<<<<< HEAD
<li>Alizon</li>
<li>gabriel sossa</li>
>>>>>>> dc17b5e531989ae1c39b3c2945246b57a901a661
=======
<li>Alizon Cortez Escobar</li>
<li>JOnatan Montesino</li>
>>>>>>> fc62941363942e54b3b8d578d75c190aedc494e1

    </body>
    <script src="Librerias/js/jquery.js"></script>

    <script>
                            function cargarUsuarios() {
                                debugger;
                                var datos = '';
                                var dir = 'proceso/Usuario.php';
                                var usuario = {
                                    "idUsuario": $('#idUsuario').val(),
                                    "nombreUsuario": $('#nombreUsuario').val(),
                                    "claveUsuario": $('#claveUsuario').val()
                                };
                                console.log(usuario);
                                $.ajax({
                                    data: usuario,
                                    type: 'GET',
                                    url: dir,
                                    success: function (data) {
                                        debugger
                                        var datos = JSON.parse(data);
                                        debugger
                                        $('#js-tabla tr:last').after('<tr><td>' + datos.idUsuario + '</td><td>' + datos.nombreUsuario + '</td><td>' + datos.claveUsuario + '</td><td> <input type="button" value="Eliminar" onclick="Eliminar(this.parentNode.parentNode.rowIndex)"/> </td></tr>');
                                        $('#idUsuario').val(parseFloat(datos.idUsuario) + 1);
                                    }
                                });
                            }

                            function Eliminar(i) {
                                document.getElementById('js-tabla').deleteRow(i);
                            }
    </script>

</html>


<!DOCTYPE html>
<html lang="es">

<head>
    <title>Desafío 2</title>
     <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- My CSS -->
<!--    <link rel="stylesheet" href="css/styles.css" />-->
    <link rel="stylesheet" href="css/estilo.css" />
</head>

<body>
    <?php
    include 'cabecera.php';
    ?>
        <section class="row justify-content-center mt-5">
            <div class="col-md-9 mt-3">
                <div class="carousel slide" id="carrusel" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="w-80 d-block" src="imagenes/imagen1.png" alt="Primera foto">
                        </div>
                        <div class="carousel-item">
                            <img class="w-80 d-block" src="imagenes/imagen2.png" alt="Segunda foto">
                        </div>
                        <div class="carousel-item">
                            <img class="w-80 d-block" src="imagenes/imagen3.png" alt="Tercera foto">
                        </div>
                        <div class="carousel-item">
                            <img class="w-80 d-block" src="imagenes/imagen4.png" alt="Cuarta foto">
                            
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carrusel" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Anterior</span>
                    </a>
                    <a class="carousel-control-next" href="#carrusel" data-slide="next">
                        <span class="carousel-control-next-icon"></span>
                        <span class="sr-only">Posterior</span>
                    </a>
                    <ol class="carousel-indicators">
                        <li data-target="#carrusel" data-slide-to="0" class="active"></li>
                        <li data-target="#carrusel" data-slide-to="1"></li>
                        <li data-target="#carrusel" data-slide-to="2"></li>
                        <li data-target="#carrusel" data-slide-to="3"></li>
                    </ol>
                </div>
            </div>
        </section>
    <br>   
    <section>
        <p id="descripcionweb">En esta página web vas a encontrar un portal amplio sobre las flores y su significado.<br>
            El lenguaje de las flores, también llamado floriografía, fue un medio de comunicación en la época victoriana en donde las flores y los arreglos florales de las mismas se utilizaban para enviar mensajes secretos, sirviendo para que las personas pudieran expresar sus sentimientos sin necesidad de palabras.<br>
            El percusor de esto fue el rey Carlos II de Inglaterra, que fue recopilando datos desde Suecia hasta Persia durante el transcurso del siglo XVII<br>
            A parte de ofrecer aquí el significado que pueden tener las flores en dichos arreglos florales (hay que tener en cuenta que el leguaje ha ido cambiando con el transcurso de los años) también se ofrecen curiosidades sobre estas plantas como por ejemplo sus propiedades medicinales hasta el origen de las mismas.</p>
    </section>

       

<!--         VENTANA MODAL DE LOGIN -->
        <section class="modal" id="entrar">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header bg-primary text-white">
                        <div class="modal-title">
                            Entra en sesión
                        </div>
                        <span data-dismiss="modal">X</span>
                    </div>
                    <form>
                        <div class="modal-body">

                            <div class="form-group">
                                <label>Email:</label>
                                <input type="text" class="form-control" placeholder="Introduce tu email">
                            </div>
                            <div class="form-group">
                                <label>Contraseña:</label>
                                <input type="password" class="form-control" placeholder="Introduce tu contraseña">
                            </div>     
                        </div>
                        <div class="modal-footer text-right">
                            <input type="submit" class="btn btn-primary" value="Entrar">
                        </div>
                    </form>
                </div>
            </div>
        </section>

<!--         VENTANA MODAL DE REGISTRO -->
        <section class="modal" id="registro">
            <div class="modal-dialog">
                <form>
                    <div class="modal-content">
                        <div class="modal-header bg-primary text-white">
                            <div class="modal-title">
                                Registro de usuario
                            </div>
                            <span data-dismiss="modal">X</span>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <label>Nombre:</label>
                                <input type="text" class="form-control" placeholder="Introduce tu nombre" required>
                            </div>
                            <div class="form-group">
                                <label>Apellidos:</label>
                                <input type="text" class="form-control" placeholder="Introduce tus apellidos" required>
                            </div>
                            <div class="form-group">
                                <label>Email:</label>
                                <input type="email" class="form-control" placeholder="Introduce tu correo electrónico" required>
                            </div>
                            <div class="form-group">
                                <label>Contraseña:</label>
                                <input type="password" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>Sexo:</label>
                                <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                    <label class="btn btn-warning">
                                        <input type="radio" name="sexo" id="V">Hombre
                                    </label>
                                    <label class="btn btn-warning">
                                            <input type="radio" name="sexo" id="M">Mujer
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer text-right">
                            <input type="submit" class="btn btn-primary" value="Registrar">
                        </div>

                    </div>
                </form>
            </div>
        </section>

    </main>

    <!-- SCRIPT PARA QUE FUNCIONEN DETERMINADOS COMPONENTES -->
    <script>
        $(function () {
            $('[data-toggle="tooltip"]').tooltip({
                container: 'body'
            });
        });
    </script>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <?php
    include 'pie.php';
    ?>
</body>
</html>

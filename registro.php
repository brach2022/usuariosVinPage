<?php

    include_once('config/config.php');
    include_once('config/functions.php');
    include_once('php/usuarios.php');

    $mensaje = "";

    if(isset($_POST['nombres'])&& !empty ($_POST['nombres'])){

        $usuarios = new usuario();
        $save     = $usuarios->save($_POST);

        if($save){
            header('location: registro.php');
        }else{
            $mensaje = '<div class="alert alert danger" role="alert"> Error </div>';
        };
        
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuarios VIN</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="<?php echo ROOT ?>/css/style.css" rel="stylesheet">
    
    <link href="<?php echo ROOT ?>/css/animate.css" rel="stylesheet">
</head>
<body>
<?php
    include('php/nav.php')
?>
<div class="col-sm-12 row">
    
    <div class="col-sm-4 mt-3 slide wow bounceInDown  animated" data-wow-delay="0.12s" style="visibility: visible;-webkit-animation-delay: 0.8s; -moz-animation-delay: 0.8s; animation-delay: 0.12s;">
        <div class="card col-sm-12">
            <img src="img/vin-menu.jpg" width = "100%" height = "350px">
        </div>
    </div>
    
    <div class="col-sm-4 mt-1 slide wow bounceInDown  animated" data-wow-delay="0.8s" style="visibility: visible;-webkit-animation-delay: 0.8s; -moz-animation-delay: 0.8s; animation-delay: 0.8s;">
        <div class = "row">
            <p class="h3">Usuarios VIN Registro </p>
            <?php echo $mensaje ?>
        </div>
         <form action = "#" method="POST">
                    <div class = "row col-sm-12 mt-3">

                        <div class="row mb-2">
                            <div class="col">
                                <label for="Nombres">Nombres</label>
                                <input type="text" name="nombres" id="nombres" placeholder="Nombres" required class="form-control" />
                            </div>
                            
                            <div class="col">
                                <label for="Apellidos">Apellidos:</label>
                                <input type="text" name="apellidos" id="apellidos" placeholder="Apellidos" required class="form-control" />
                            </div>
                        </div>

                        <div class="row mb-2">
                            <div class="col">
                                <label for="celular">celular:</label>
                                <input type="number" name="celular" id="celular" placeholder="Celular" required class="form-control" />
                            </div>

                            <div class="col">
                                <label for="Email">Email:</label>
                                <input type="email" name="email" id="email" placeholder="Email" class="form-control" />
                            </div>
                        </div>

                        <div class="row mb-2">
                            <div class="col">
                                <label for="ciudad">ciudad:</label>
                                <input type="text" name="ciudad" id="ciudad" placeholder="Ciudad" class="form-control" />
                            </div>
                            <div class="col">
                                <label for="edad">Edad:</label>
                                <input type="number" name="edad" id="edad" placeholder="Edad"  class="form-control" />
                            </div>
                        </div>

                        <div class="row mb-2">
                            <div class="col">
                                <label for="Observaciones">Observaciones:</label>
                                <input type="text" name="observaciones" id="Observaciones" placeholder="Observaciones" class="form-control" />
                            </div>
                        </div>

                        <div class="col-sm-12 mt-3">
                            <button class=" col-sm-6 btn btn-success form-control" type="submit">Enviar</button>
                        </div>
        </form>
        </div>

    </div>
    <div class="col-sm-4 mt-3 slide wow bounceInDown  animated" data-wow-delay="0.4s" style="visibility: visible;-webkit-animation-delay: 0.8s; -moz-animation-delay: 0.8s; animation-delay: 0.4s;">
        <div class="card col-sm-12">
            <img src="img/vin.jpg"  width = "100%" height = "350px">
        </div>
        </div>
    </div>


    <div class="mt-3 col-sm-12  card slide wow bounceInDown  animated" data-wow-delay="1s" style="visibility: visible;-webkit-animation-delay: 0.8s; -moz-animation-delay: 0.8s; animation-delay: 1s;">
         <p class="col-sm-12 h3" style = "color:black;text-align: center;">PREGUNTAS FRECUENTES FAQS</p>
    </div>

        <div class = "row col-sm-12 mt-3 wow bounceInDown  animated" data-wow-delay="1s" style="visibility: visible;-webkit-animation-delay: 0.8s; -moz-animation-delay: 0.8s; animation-delay: 1s;">
               <div class = "row col-sm-12">
                    <div class="accordion"   id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            ¿Que es usuarios VIN?
                            </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                USUARIOS VIN es una pagina de consulta que te permite informarte sobre los diferentes aspectos sobre el número de identificación VIN de los autos mas populares
                                del mercado, tambien posee una parte de recursos que sirven para que los usuarios puedan consultar paginas donde pueden validar el VIN de un vehiculo.
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                               ¿Que infomación recibo si me registro en USUARIOS VIN?
                            </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Usuarios VIN  envia a tu correo la infomación más relevante que se encuentra del registro de tu atumovil como las mejores aseguradoas y tambien como encontrar 
                                el número VIN  en diferentes marcas.
                            </div>
                        </div>
                </div>
        </div>
        
        
    </div>

</div>
</div>
</div>

<?php
    include('php/footer.php')
?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="<?php echo ROOT ?>/js/jquery-3.6.0.min.js"></script>
<script src="<?php echo ROOT ?>/js/sweetalert2@11.js"></script>
<script>


        Swal.fire({
        position: 'top',
        title: 'Animate a registrarte',
        showConfirmButton: true
})

</script>
</body>
</html>
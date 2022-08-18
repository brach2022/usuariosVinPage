<?php
    include_once('config/config.php');
    include_once('config/functions.php');
    include_once('php/usuarios.php');

    $path = getFolderProyect();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuarios VIN inicio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="<?php echo ROOT ?>/css/carousel.css" rel="stylesheet">
    <link href="<?php echo ROOT ?>/css/carousel.rtl.css" rel="stylesheet">
    <link href="<?php echo ROOT ?>/css/style.css" rel="stylesheet">
    <link href="<?php echo ROOT ?>/css/animate.css" rel="stylesheet">
</head>
<body>
<?php
    include('php/nav.php')
?>

<div class="container">

<div id="myCarousel" class="carousel slide wow bounceInDown  animated" data-wow-delay="0.12s" style="visibility: visible;-webkit-animation-delay: 0.8s; -moz-animation-delay: 0.8s; animation-delay: 0.8s;" data-bs-ride="carousel">
<div class="carousel-indicators">
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="bd-placeholder-img"  width="100%" height="100%" src="<?php echo ROOT ?>img/portada/1.jpg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg>

        
        <div class="container" rel="stylesheet">
          <div class="carousel-caption text-start">
            <h1 class="btn btn-light">USUARIOS VIN</h1>
            <br>
            <p class="btn btn-light">Todo sobre el número de identificación de tu auto</p>
          </div>
        </div>
      </div>
      <div class="carousel-item" >
      <img class="bd-placeholder-img"  width="100%" height="100%" src="<?php echo ROOT ?>img/portada/2.png" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg>

        <div class="container">
          <div class="carousel-caption text-start">
            <br>
            <br>
            <br>
            <p><a class="btn btn btn-light" href="<?php echo ROOT; ?>/quees.php">Sabras ¿Qué es?</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item" >
      <img class="bd-placeholder-img"  width="100%" height="100%" src="<?php echo ROOT ?>img/portada/3.webp" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg>

        <div class="container">
          <div class="carousel-caption text-start">
          <br>
            <br>
            <br>
            <p><a class="btn btn btn-light" href="<?php echo ROOT; ?>/quees.php">Y muchas más recomendaciones</a></p>
          </div>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

<!---->

<hr class="featurette-divider text-light">

<div class="card mb-3 wow bounceInDown  animated" data-wow-delay="1s" style="visibility: visible;-webkit-animation-delay: 0.8s; -moz-animation-delay: 0.8s; animation-delay: 1;" >
      <p class="col-sm-12 h3 text-center" style = "color:black;">Te decimos todo como es ...</p>
</div>
<br><br>
<div class="container marketing mt-3 wow bounceInUp  animated">

    <!-- Three columns of text below the carousel -->
    <div class="row text-light mt-3 text-center" >
      <div class="col-lg-3 wow bounceInUp  animated" data-wow-delay="1s" style="visibility: visible;-webkit-animation-delay: 0.8s; -moz-animation-delay: 0.8s; animation-delay: 1s;" >

      <img class="bd-placeholder-img rounded-circle" width="140" height="140" src="<?php echo ROOT ?>img/rows/1.webp" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"></rect><text x="50%" y="50%" fill="#777" dy=".3em"></text></svg>
        <br><br>
        <h2>DEFINICIÓN DEL VIN</h2>
      </div><!-- /.col-lg-3 -->
      <div class="col-lg-3 wow bounceInUp  animated" data-wow-delay="1s" style="visibility: visible;-webkit-animation-delay: 0.8s; -moz-animation-delay: 0.8s; animation-delay: 1s;" >
      <img class="bd-placeholder-img rounded-circle" width="140" height="140" src="<?php echo ROOT ?>img/rows/2.jpg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"></rect><text x="50%" y="50%" fill="#777" dy=".3em"></text></svg>

        <h2>DONDE ENCONTRARLO</h2>
      </div><!-- /.col-lg-3 -->
      <div class="col-lg-3 wow bounceInUp  animated" data-wow-delay="1s" style="visibility: visible;-webkit-animation-delay: 0.8s; -moz-animation-delay: 0.8s; animation-delay: 1s;" >

      <img class="bd-placeholder-img rounded-circle" width="140" height="140" src="<?php echo ROOT ?>img/rows/3.jpeg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"></rect><text x="50%" y="50%" fill="#777" dy=".3em"></text></svg>
        <h2 class = "text-light">VIN / CHASIS / MOTOR de otras MARCAS</h2>
      </div><!-- /.col-lg-3 -->
      <div class="col-lg-3 wow bounceInUp  animated" data-wow-delay="1s" style="visibility: visible;-webkit-animation-delay: 0.8s; -moz-animation-delay: 0.8s; animation-delay: 1s;" >
      <img class="bd-placeholder-img rounded-circle" width="140" height="140" src="<?php echo ROOT ?>img/rows/4.jpg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"></rect><text x="50%" y="50%" fill="#777" dy=".3em"></text></svg>
        <br><br>
        <h2 class = "text-light">Registrate para más información</h2>
      </div><!-- /.col-lg-3 -->
    </div><!-- /.row -->


    <!-- START THE FEATURETTES -->

   

    <hr class="featurette-divider text-light">

    <div class="card mb-3 wow bounceInDown  animated" data-wow-delay="1s" style="visibility: visible;-webkit-animation-delay: 0.8s; -moz-animation-delay: 0.8s; animation-delay: 1;" >
      <p class="col-sm-12 h3 text-center" style = "color:black;">Información general</p>
    </div>
    <br><br>

    <div class="row featurette text-light">
      <div class="col-md-7">
        <h2 class="featurette-heading">DEFINICIÓN DEL VIN</span></h2>
        <p class="lead" >Al igual que las personas, los vehículos automotores también tienen su propia identificación, compuesta por diferentes series de números o códigos que se encuentran en lugares clave, como el motor o el chasis. Uno de los códigos que es fundamental conocer si tienes un carro es el número de motor. Tal como su nombre lo dice, esta información se encuentra gravado en el motor y corresponde al número de serie de su fabricación. En definitiva, el número de motor de un carro sirve para diferenciar al vehículo de muchos otros similares que existen y te será muy útil para realizar algunos trámites y cómo medida de seguridad. Pero ¿sabes dónde encontrar este dato de tu carro y en qué situaciones necesitarás saber el número de identificación de tu carro?</p>
        <p><a class="btn btn btn-light" href="<?php echo ROOT; ?>/quees.php">Leer Más</a></p>
      </div>
      <div class="col-md-5">
        <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" src="<?php echo ROOT ?>img/rows/1.webp" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"></rect><text x="50%" y="50%" fill="#aaa" dy=".3em"></text></svg>
      </div>
    </div>

    <hr class="featurette-divider text-light">

    <div class="row featurette  text-light">
      <div class="col-md-7 order-md-2">
        <h2 class="featurette-heading">¿Dónde buscar el número de identificación del vehículo (VIN)?</span></h2>
        <p class="lead">El número de identificación del vehículo (VIN) o el número de chasis es un código único que incluye el número de serie otorgado por el fabricante para identificar los autos y otros vehículos.
                        El VIN ahora es estándar en todos los vehículos, y los componentes del código tienen diferentes significados, como por ejemplo el país de fabricación, la marca y el modelo, etc. Colocar el VIN en los autos se convirtió una práctica estándar en 1954 gracias a la National Highway and Transit Safety Administration.
        </p>
        <p><a class="btn btn btn-light" href="<?php echo ROOT; ?>/tablaref.php">Leer Más</a></p>
      </div>
      <div class="col-md-5 order-md-1">
      <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" src="<?php echo ROOT ?>img/rows/2.jpg" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"></rect><text x="50%" y="50%" fill="#aaa" dy=".3em"></text></svg>
      </div>
    </div>

    <hr class="featurette-divider text-light">

    <div class="row featurette  text-light">
      <div class="col-md-7">
        <h2 class="featurette-heading">Qué es el VIN de un coche, dónde encontrarlo y qué significa</span></h2>
        <p class="lead">Todos los coches del mundo tienen nombre y apellidos, pero no nos estamos refiriendo a la marca y modelo sino al VIN. El Vehicle Identification Number (Número de Identificación del Vehículo) es un código alfanumérico que identifica de manera específica y única a cada coche. 
                        Hoy vamos a explicar qué es, dónde se encuentra normalmente y cómo se estructura el VIN en un coche, pues es el código utilizado para dar identidad a cada vehículo y el empleado para verificar su legalidad.
      </p>
      <p><a class="btn btn btn-light" href="<?php echo ROOT; ?>/tablaref.php">Leer Más</a></p>
      </div>
      <div class="col-md-5">
      <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" src="<?php echo ROOT ?>img/rows/3.jpeg" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"></rect><text x="50%" y="50%" fill="#aaa" dy=".3em"></text></svg>

      </div>
    </div>

    <hr class="featurette-divider text-light">

    <div class="row featurette  text-light">
      <div class="col-md-7 order-md-2">
        <h2 class="featurette-heading">Registrate </span></h2>
        <p class="lead">Te invitamos a que te registres y conozcas toda la información relacionada con el VIN y como esto te puede ayudar a la hora de cambiar de vehículo y a la hora de vender tu vehículo</p>
        <p><a class="btn btn btn-light" href="<?php echo ROOT; ?>/registro.php">Pasa a registrarte</a></p>
      </div>
      <div class="col-md-5 order-md-1">
      <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" src="<?php echo ROOT ?>img/rows/4.jpg" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"></rect><text x="50%" y="50%" fill="#aaa" dy=".3em"></text></svg>
      
      </div>
    </div>

    <hr class="featurette-divider text-light">


    <div class="row featurette  text-light">
      <div class="col-md-7">
        <h2 class="featurette-heading">Recursos de interés</span></h2>
        <p class="lead">En la parte de recursos encuentras los diferentes enlaces que te permiten consultar los datos de un auto y validar su información con bases de datos de consulta pública como son:
          <p class = "text-center h4">

              <a href="https://fasecolda.com/guia-de-valores/" target="_blank" rel="noopener noreferrer">Fasecolda </a>
              <br>
              Guía de valores de los vehículos
              <br><br>
              <a href="https://www.runt.com.co/consultaCiudadana/#/consultaVehiculo" target="_blank" rel="noopener noreferrer">Runt</a>
              <br>
              Información que reposa en el RUNT sobre su vehículo o motocicleta.
              <br><br>
              <a href="https://vivasegurofasecolda.com/inicio/directorio-de-aseguradoras/" target="_blank" rel="noopener noreferrer">Viva seguro fasecolda</a>
              <br>
              Directorio de aseguradoras

          </p>
        </p>
      </div>
      <div class="col-md-5">
      <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" src="<?php echo ROOT ?>img/recursos/1.png" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"></rect><text x="50%" y="50%" fill="#aaa" dy=".3em"></text></svg>

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
        Swal.fire
        ({
        position: 'top',
        title: 'Bienvenido \n a \n USUARIOS VIN',
        showConfirmButton: true
        })
</script>

</body>
</html>
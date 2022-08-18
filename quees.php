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
    <title>Usuarios VIN</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="<?php echo $path ?>/css/style.css" rel="stylesheet">
    
    <link href="<?php echo ROOT ?>/css/animate.css" rel="stylesheet">
</head>
<body style = "color:black;text-align: justify;">
<?php
    include('php/nav.php')
?>

<div class="card slide wow bounceInDown  animated" data-wow-delay="0.12s" style="visibility: visible;-webkit-animation-delay: 0.8s; -moz-animation-delay: 0.8s; animation-delay: 0.8s;">
  <p class="col-sm-12 h3" style = "color:black;text-align: center;">NÚMEROS DE IDENTIFICACION DE VEHICULOS EN COLOMBIA</p>
</div>

<div class = "containar slide wow bounceInDown  animated" data-wow-delay="0.12s" style="visibility: visible;-webkit-animation-delay: 0.8s; -moz-animation-delay: 0.8s; animation-delay: 0.8s;">

<div class="accordion mt-3"   id="accordionExample">
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingOne">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
      ¿QUÉ ES Y CUALES SON LOS NUMEROS DE IDENTIFICACIÓN DE UN VEHÍCULO? click para leer mas
      </button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
      <div class="accordion-body">
      <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading">¿QUÉ ES Y CUALES SON LOS NÚMEROS DE IDENTIFICACION DE UN VEHICULO?</h2>
        <p class="lead text-center">Al igual que las personas, los vehículos automotores también tienen su propia identificación, compuesta por diferentes series de números o códigos que se encuentran en lugares clave, como el motor o el chasis.
            Uno de los códigos que es fundamental conocer si tienes un carro es el número de motor. Tal como su nombre lo dice, esta información se encuentra gravado en el motor y corresponde al número de serie de su fabricación.
            En definitiva, el número de motor de un carro sirve para diferenciar al vehículo de muchos otros similares que existen y te será muy útil para realizar algunos trámites y cómo medida de seguridad.
            Pero ¿sabes dónde encontrar este dato de tu carro y en qué situaciones necesitarás saber el número de identificación de tu carro?</p>
      </div>
      <div class="col-md-5">
        <img src="<?php echo $path ?>img/portada/1.jpg" width="100%" height="auto" alt="">
      </div>
    </div>
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingTwo">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
      NÚMERO VIN / O DE CHASIS click para leer mas
      </button>
    </h2>
    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
      <div class="accordion-body">
      <div class="row featurette">
      <div class="col-md-7 order-md-2">
        <h2 class="featurette-heading">NÚMERO VIN / O DE CHASIS</h2>
        <p class="lead text-center">El número VIN de tu vehículo está integrado por 17 caracteres, estipulados y descritos por Organización Internacional para la Estandarización (ISO, por sus siglas en inglés), mismos que están subdivididos en diferentes categorías para identificar características específicas de un Auto, Camioneta SUV o Camión. Identificador Mundial del Fabricante (WMI, World Manufacturer Identifier). Integrado por los tres primeros caracteres del VIN. Estos dígitos alfanuméricos corresponden al país en donde fue manufacturado y a la marca a la cual pertenece el vehículo. Sección de Descripción del Vehículo (VDS, Vehicle Descriptor Section). Encargada de informar sobre las características específicas del auto, como el tipo de chasis o el motor que monta y está conformado por seis caracteres en el VIN. En el caso de las Camionetas SUV y Camiones, el primer carácter de esta sección se refiere al Sistema de Retención, al tipo de frenos o a la Masa Máxima Autorizada (GVWR, por sus siglas en inglés). El último dígito del VDS es un número verificador que otorga la Organización Internacional para la Estandarización (ISO). Sección de Indicador Vehicular (VIS, Vehicle Identifier Section). Consta de ocho caracteres. Los primeros dos se refieren al año del modelo y a la planta en donde fue fabricado el Auto, Camioneta SUV o Camión, mientras que los seis dígitos alfanuméricos restantes son el número secuencial de producción, que hacen a tu vehículo único e irrepetible. Dependiendo el tipo de vehículo y su marca varia la ubicación del número de chasis o número VIN.</p>
      </div>
      <div class="col-md-5 order-md-1">
        <!--<svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"></rect><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text></svg>-->
        <iframe width="100%" height="450" src="https://www.youtube.com/embed/ETiF8vYB3fY" title="Número de chasis o número VIN" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div>
    </div>
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingThree">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
      NÚMERO DE MOTOR click para leer mas
      </button>
    </h2>
    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
      <div class="accordion-body">
      <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading">NÚMERO DE MOTOR</h2>
        <p class="lead  text-center">El número de motor de un carro, moto o camión es como su huella digital 
          y permite identificar exactamente al vehículo y el motor que tiene. De esta forma, se puede
           obtener información sobre las características específicas del motor y, además, es un dato 
           esencial para obtener las improntas de tu vehículo. Los principales usos que tiene este 
           código que trae el motor son: Identificación para el registro legal del vehículo. Para
            el traspaso de propiedad por motivo de una compraventa. Para solicitar el levantamiento
             de prenda de un vehículo. En caso de reparaciones que necesiten repuestos específicos 
             para tu modelo o motor. Garantías de los fabricantes. Como herramienta de seguridad que
              dificulta la clonación y venta de piezas robadas. La manera más directa de verificar 
              el número de motor de un carro es abrir el compartimiento delantero del vehículo y
               acceder a la zona donde se encuentra esta la impresión del código. Generalmente,
               este número de serie está ubicado en el bloque, entre el bloque y la culata o 
               entre el bloque y la caja de transmisión. Una vez que encuentres el número de
                motor de tu carro, anótalo y guárdalo para que lo tengas a mano la próxima 
                vez que lo necesites, o para que compares con el que aparece registrado en el RUNT.</p>
      </div>
      <div class="col-md-5">
       <img src="<?php echo $path ?>img/old/numero motor.png" alt="número de motor" width="100%" height="auto">
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
</body>
</html>
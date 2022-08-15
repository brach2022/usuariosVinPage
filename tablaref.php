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
    <link href="<?php echo $path ?>/css/tablestyle.css" rel="stylesheet">
    
    <link href="<?php echo ROOT ?>/css/animate.css" rel="stylesheet">
</head>
<body style = "color:white;">
<?php
    include('php/nav.php');
?>
<div class="card row slide wow bounceInDown  animated" data-wow-delay="0.12s" style="visibility: visible;-webkit-animation-delay: 0.8s; -moz-animation-delay: 0.8s; animation-delay: 0.8s;">
  <p class="col-sm-12 h3 text-center" style = "color:black;">Marcas</p>
</div>

<br><br>


<hr class="featurette-divider text-light slide wow bounceInDown  animated" data-wow-delay="0.12s" style="visibility: visible;-webkit-animation-delay: 0.8s; -moz-animation-delay: 0.8s; animation-delay: 0.8s;">

  <div class="album py-5" style = "color:black;">
    <div class="container slide wow bounceInDown  animated" data-wow-delay="0.12s" style="visibility: visible;-webkit-animation-delay: 0.8s; -moz-animation-delay: 0.8s; animation-delay: 0.8s;">

      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        <div class="col">
          <div class="card shadow-sm">
          <iframe width="100%" height="250" src="https://www.youtube.com/embed/0Zsc4lsLPyg"  frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
            <div class="card-body">
              <p class="card-text">El número VIN esta ubicado debajo del asiento del copiloto corriendo la silla hacia atrás se visualiza en el piso  o la calcomanía del paral central, contiene 17 dígitos dígitos Alfanumericos</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                </div>
                <small class="text-black-50">Marca: Mercedes Benz</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
          <iframe width="100%" height="250" src="https://www.youtube.com/embed/zjFznaclwjA"  frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
            <div class="card-body">
              <p class="card-text">l  número VIN esta ubicado en la viga del chasis trasera derecha excatamente detrás de la llanta trasera derecha o  paral central  contiene 17 dígitos Alfanumericos</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                </div>
                <small class="text-black-50">Marca: Toyota</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
          <iframe width="100%" height="250" src="https://www.youtube.com/embed/YVWCMffzrsU"  frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
            <div class="card-body">
              <p class="card-text">El número VIN esta ubicado debajo del asiento del copiloto corriendo la silla hacia atrás se visualiza en el piso  o la calcomanía del paral central, contiene 17 dígitos dígitos Alfanumericos

              </p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                </div>
                <small class="text-black-50">Marca: Renault</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
          <iframe width="100%" height="250" src="https://www.youtube.com/embed/XlL2eQL9rUI"  frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
            <div class="card-body">
              <p class="card-text">El número VIN esta ubicado debajo del asiento del copiloto corriendo la silla hacia atrás se visualiza en el piso  o la calcomanía del paral central, contiene 17 dígitos dígitos Alfanumericos</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                </div>
                <small class="text-black-50">Marca: Mazda</small>
              </div>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card shadow-sm">
          <iframe width="100%" height="250" src="https://www.youtube.com/embed/1rawBY66lPQ"  frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
            <div class="card-body">
              <p class="card-text">El numero de VIN se puede encontrar en viga chasis trasera izquierda, ( JIMNY, En la cara interna del guardafango del derecho, (SWIFT,BALENO), Panel para llamas (scross),Panoramico delanatero inferior izquierdo(VITARA LIFE)  contiene 17 dígitos dígitos Alfanumericos</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                </div>
                <small class="text-black-50">Marcas: Suzuki</small>
              </div>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card shadow-sm">
          <iframe width="100%" height="250" src="https://www.youtube.com/embed/whWEIF1iH-0"  frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
            <div class="card-body">
              <p class="card-text">El número de VIN que se encuentra ubicado 1) En la esquina inferior izquierda del panorámico en un rectángulo de color blanco y letras negras, 2) en el marco frontal remachado, 3) En el panel para llamas,4) Viga chasis lateral derecha o calcomania paral, trae 17 dígitos alfanumericos.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                </div>
                <small class="text-black-50"> Marca: Chevrolet</small>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="card row">
      <p class="col-sm-12 h3 text-center" style = "color:black;">Directorio de aseguradoras</p>
  </div>

  <hr class="featurette-divider text-light">

  <div class="album py-5" style = "color:black;">
    <div class="container">
      <div class="row">

        <div class="col-sm-3">
          <div class="card shadow-sm">
          <img src="<?php echo $path ?>\img\aseguradoras\1.png" alt="" width="100%" height="100" >
            <div class="card-body">
              <p class="card-text">ALLIANZ SEGUROS S.A. - ALLIANZ SEGUROS DE VIDA S.A.
              <br>
              Bogotá: 291 68 68
              <br>
              Resto del país: 018000 512 021
              <br>
              Desde un celular: #789
              </p>
              <div class="d-flex justify-content-between align-items-center">
                <small class="text-black-50"><a href="https://www.allianz.co/" target="_blank" rel="noopener noreferrer">allianz.co</a></small>
              </div>
            </div>
          </div>
        </div>

        <div class="col-sm-3">
          <div class="card shadow-sm">
          <img src="<?php echo $path ?>\img\aseguradoras\2.png" alt="" width="100%" height="100" >
            <div class="card-body">
              <p class="card-text">ASEGURADORA SOLIDARIA DE COLOMBIA
              <br>
              Bogotá: 291 68 68
              <br>
              Resto del país: 018000 512 021
              <br>
              Desde un celular: #789
              </p>
              <div class="d-flex justify-content-between align-items-center">
                <small class="text-black-50"><a href="https://www.aseguradorasolidaria.com.co/" target="_blank" rel="noopener noreferrer">aseguradorasolidaria.com.co</a></small>
              </div>
            </div>
          </div>
        </div>

        <div class="col-sm-3">
          <div class="card shadow-sm">
          <img src="<?php echo $path ?>\img\aseguradoras\3.png" alt="" width="100%" height="100" >
            <div class="card-body">
              <p class="card-text">AXA COLPATRIA SEGUROS S.A. 
              <br>
              Bogotá: 423 57 57
              <br>
              Resto del país: 018000 512 620
              <br>
              Desde un celular: #247
              </p>
              <div class="d-flex justify-content-between align-items-center">
                <small class="text-black-50"><a href="https://www.axacolpatria.co/" target="_blank" rel="noopener noreferrer">axacolpatria.co</a></small>
              </div>
            </div>
          </div>
        </div>

        <div class="col-sm-3">
          <div class="card shadow-sm">
          <img src="<?php echo $path ?>\img\aseguradoras\4.png" alt="" width="100%" height="100" >
            <div class="card-body">
              <p class="card-text">BBVA SEGUROS COLOMBIA S.A. - BBVA 
              <br>
              Bogotá: 307 80 80
              <br>
              Resto del país: 018000 934 020
              </p>
              <div class="d-flex justify-content-between align-items-center">
                <small class="text-black-50"><a href="https://www.bbvaseguros.com.co/seguros/" target="_blank" rel="noopener noreferrer">bbvaseguros.com.co</a></small>
              </div>
            </div>
          </div>
        </div>

        <div class="col-sm-3 mt-3">
          <div class="card shadow-sm">
          <img src="<?php echo $path ?>\img\aseguradoras\5.png" alt="" width="100%" height="100" >
            <div class="card-body">
              <p class="card-text">BERKLEY INTERNATIONAL SEGUROS COLOMBIA S.A.
              <br>
              Bogotá: 357 27 27 Ext. 4444
              </p>
              <div class="d-flex justify-content-between align-items-center">
                <small class="text-black-50"><a href="http://www.berkley.com.co/" target="_blank" rel="noopener noreferrer">berkley.com.co</a></small>
              </div>
            </div>
          </div>
        </div>

        <div class="col-sm-3  mt-3">
          <div class="card shadow-sm">
          <img src="<?php echo $path ?>\img\aseguradoras\6.png" alt="" width="100%" height="100" >
            <div class="card-body">
              <p class="card-text">BMI COMPAÑIA DE SEGUROS
              <br>
              Bogotá: 518 77 00 Ext. 118
              </p>
              <div class="d-flex justify-content-between align-items-center">
                <small class="text-black-50"><a href="https://www.bmicos.com/" target="_blank" rel="noopener noreferrer">bmicos.com</a></small>
              </div>
            </div>
          </div>
        </div>

        <div class="col-sm-3  mt-3">
          <div class="card shadow-sm">
          <img src="<?php echo $path ?>\img\aseguradoras\7.png" alt="" width="100%" height="100" >
            <div class="card-body">
              <p class="card-text">CARDIF COLOMBIA SEGUROS GENERALES S.A
              <br>
              Bogotá: 744 40 40
              </p>
              <div class="d-flex justify-content-between align-items-center">
                <small class="text-black-50"><a href="http://www.bnpparibascardif.com.co/" target="_blank" rel="noopener noreferrer">bnpparibascardif.com.co</a></small>
              </div>
            </div>
          </div>
        </div>

        <div class="col-sm-3  mt-3">
          <div class="card shadow-sm">
          <img src="<?php echo $path ?>\img\aseguradoras\6.png" alt="" width="100%" height="100" >
            <div class="card-body">
              <p class="card-text">CHUBB SEGUROS COLOMBIA S.A.
              <br>
              Bogotá: 319 04 02
              <br>
              Resto del país: 018000 917 500
              </p>
              <div class="d-flex justify-content-between align-items-center">
                <small class="text-black-50"><a href="https://www.chubb.com/co-es/" target="_blank" rel="noopener noreferrer">chubb.com/co-es/</a></small>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
  
  <hr class="featurette-divider text-light">


<?php
    include('php/footer.php')
?>  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
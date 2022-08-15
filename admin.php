<?php
include_once('config/config.php');
include_once('config/functions.php');
include_once('php/usuarios.php');

    $path = getFolderProyect();
    $mensaje = "";

    if(isset($_POST['email']) && !empty ($_POST['email'])){

        if(isset($_POST['password']) && !empty ($_POST['password'])){

            if($_POST['password'] == "123" && $_POST['email'] == "abranchp@ibero.edu.co")
            {
                header('location: administrador.php');
                  
            }else{
            
                $mensaje = '<div class="alert alert danger" role="alert"> Clave y usuario incorrectos </div>';
                
            }

        }

    }


?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="<?php echo $path ?>/css/style.css" rel="stylesheet">
    
    <link href="<?php echo ROOT ?>/css/animate.css" rel="stylesheet">
</head>
<body>
<?php
  require('php/nav.php')
?>


    <div class = "row col-sm-12" >
        <div class = "col-sm-4" >

        <?php echo $mensaje;?>

        </div>
        
        <div class = "col-sm-4 mt-3" >
            <form action = "#" method = "POST">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label" >Email</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" name="email" id="email" aria-describedby="emailHelp">
                </div>

                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label" >Contraseña</label>
                    <input type="password" class="form-control" name="password" id="password" id="exampleInputPassword1">
                </div>

                <button type="submit" class="btn btn-primary form-control">Entrar</button>
            </form>
        </div>
    </div>

<br><br><br>
<?php
    require('php/footer.php')
?> 
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
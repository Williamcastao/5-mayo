<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap.min.css" >
</head>
<body>

    <?php
    
    @$fecha1 = $_GET['fecha1'];
    @$fecha2 = $_GET['fecha2'];

    $fechaantes = new DateTime($fecha1);
    $fechahoy = new DateTime($fecha2);
    $diferencia = $fechaantes -> diff($fechahoy)


    
    ?>
      <div class="container">
          <div class="row">
              <div class="col-md-12">
                <h1 class="text-center">Ingresar Fecha desde - Fecha hasta y calcular la cantidad de dias de diferencia </h1>
              </div>
              <div class="col-md-8 col-md-offset-2">
                  <form action="">
                      <div class="panel panel-primary">
                            <div class="panel-body">
                                <div class="form-group">
                                    <label for="">Fecha desde:</label>
                                    <input type="date" class="form-control" name="fecha1">
                                </div>
                                <div class="form-group">
                                    <label for="">Fecha hasta:</label>
                                    <input type="date" class="form-control" name="fecha2">
                                </div>
                                <button class="btn btn-primary pull-right">Enviar</button>
                            </div>
                      </div>
                  </form>

                  <div class="alert alert-success">
                         <?php
                        echo $diferencia ->format('%R%a dias');
                         ?>

                  </div>
                  <p class="text-center"><a href="../index.php">Ir al inicio</a></p>
              </div>
          </div>


      </div>
</body>
</html>
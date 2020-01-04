<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/999ad7145f.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/formstyle.css">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="css/normalize.css">
    <title>Contacto</title>
  </head>
  <body>
    <div class="container">

      <?php require_once "partials/nav.php" ?>

    <div class="row ">
      <div class="col-lg-10 col-xl-9 mx-auto entero">
        <div class="card card-signin flex-row my-5">

          <div class="card-body">
            <h5 class="card-title text-center">Contáctanos</h5>
            <form class="form-signin">

              <div class="form-label-group">
                <textarea id="comentario" rows="8" cols="80" class="form-control" placeholder="En qué podemos ayudarte?"></textarea>

              </div>

              <div class="form-label-group">
                <input type="text" id="inputUserame" class="form-control" placeholder="Username" required autofocus>
                <label for="inputUserame">Nombre Completo</label>
              </div>

              <div class="form-label-group">
                <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required>
                <label for="inputEmail">Dirección de Email</label>
              </div>

              <hr>

              <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Enviar</button>
              <a class="d-block text-center mt-2 small" href="login.php">Ingresar</a>
              <hr class="my-4">

            </form>
          </div>
        </div>
      </div>
    </div>

    <?php require_once "partials/footer.php" ?>

  </div>
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                             

<!DOCTYPE html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Fuentes De Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Calligraffitti|Open+Sans|Oswald|Roboto|Shadows+Into+Light+Two|Nunito+Sans" rel="stylesheet">

  <!-- Estilos -->
  <?php include "cosas-generales/links-generales.php"; ?>
  <link rel="stylesheet" href="css/index-estilos.css">

  <title>Inicio</title>
</head>
<body>
    <?php
     // include "cosas-generales/header_usuario.php";
     //   include "cosas-generales/footer.php";
     //   include "cosas-generales/scripts-generales.php";
     session_start();
     if (!isset($_SESSION["usuario"])) {
      header("Location: login.php");


    }else{
      //echo "Bienvenido ".$_SESSION["usuario"];
      include "cosas-generales/header_usuario.php";
      include "cosas-generales/footer.php";
      include "cosas-generales/scripts-generales.php";

    }
    // }

    ?>



</body>
</html>

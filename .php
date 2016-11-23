<!DOCTYPE html>
<html>
  <head>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="modalOnlyOnceKadaryan.css">
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <!--MODAL HTML-->
    <div id="modal">
      <div id="ventana">
        <form action="" method="POST">
        <input type="submit" value="Cerrar" name="cerrar" class="btn-cerrar">
        </form>
        <h1>Modal window</h1><br><hr><br>
        <img src="http://ericaargueta.neocities.org/Entregaoblig/html.jpg">
      </div>
    </div>

    <?php
    //Iniciamos nueva SESSION
    session_start();
    //Inicio con el #modal en HIDE
    $ventana = "hide";
    //Si existe el Form se crea una SESSION con el valor de "Hide"
    if(isset($_POST['cerrar'])){
      $_SESSION['saveModal']="hide";
    }
    //Si existe la SESSION que creamos en el Form se cambia el valor de $ventana a "Hide"
    if(isset($_SESSION['saveModal'])){
      $ventana = $_SESSION['saveModal'];
    }
    //Si no existe la SESSION el #modal es igual a "Show"
    else{
      $ventana = "show";
    }
    //Si ventana es igual a HiDE #modal = hide
      if($ventana == "hide"){
        echo "<style>#modal{display:none;}</style>";
      }
    //Si ventana es igual a SHOW #modal = show
      else if($ventana == "show"){
        echo "<style>#modal{display:block;}</style>";
      }
    ?>
  </body>
</html>

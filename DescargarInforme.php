
<?php

 
                                                 
                            $dateYear = date('Y');
                            $dateMonth = date('M');
                            $dateDay = date('d');

                             $ext =".txt";
                             $ini ="Faltantes-";
                             $ruta ="$ini$dateYear-$dateMonth-$dateDay$ext";
                             $imagen ="/fondos/descarga7.jpg";
                  
                    
                    if (is_file( $ruta ))
                    {
                   
                      //  echo "  <a href=".$ruta ." download>Descargue el informe </a> ";   
                      
                      
                       echo " <a href=".$ruta ." download> <img src="."fondos/descarga1.jpg"."> </a>  ";
                       
                       echo " <br> </br>  ";
                       echo " <br> </br>  ";
                       echo " <br> </br>  ";
                       echo " <br> </br>  ";
                       echo " <br> </br>  ";
                       echo " <br> </br>  ";
                       
                      // echo " <a href='MareasFor.php'> Volver <img src="."fondos/descarga1.jpg"."> </a>  ";
                    //   echo " <a href=".$ruta ." download> Descargar <img src='.$imagen ."> </a>  ";
                     //  "<img src = 'Image/".$row['image'].'" />';

                    }
                   else 
                   
                    {
                                         ?>
                                          <script type="text/javascript">
                                          alert('Aun no se genero el informe, vaya a Actualizar');
                                          window.location.href='index.php';
                                          </script>
                                          <?php
                   }
                 
 
 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Stock Farmacia Michelli</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="Description" content="Las Grutas - Tabla de mareas">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
   .jumbotron {
      background-color: #000;
       background: url("gris-oscuro.jpg") ;
      color: #fff;
      padding: 100px 25px;
      font-family: Montserrat, sans-serif;
  }
      .carousel-inner img {
  margin: auto;
}
   .jumbo {
      background-color: #000;
       background: url("negro.jpg") ;
      color: #fff;
      padding: 100px 25px;
      font-family: Montserrat, sans-serif;
  }
   
      .main {
          background-image: url(fondos/fondo1.jpg) !important;
          background-repeat: no-repeat !important;
          background-size: cover !important;
}   
  .descarga {
          background-image: url(fondos/fondo2.jpg) !important;
          background-repeat: no-repeat !important;
          background-size: cover !important;
}   
  .bg-4 { 
      background-color: #2f2f2f;
      color: #fff;
  }
  .container-fluid {
      padding: 60px 50px;
      background-color: #c8c6c5;
      background: url("fondo.jpg") ;
  }
       .container-fluid2 {
      padding: 60px 50px;
      background-color: #c8c6c5;
      
  }
   .container {
        background-color: #c8c6c;
  }
  .bg-grey {
      background-color: #b8b2b2;
  }
  .logo-small {
      color: #f4511e;
      font-size: 50px;
  }
  .logo {
      color: #f4511e;
      font-size: 200px;
  }
  .thumbnail {
      padding: 0 0 15px 0;
      border: none;
      border-radius: 0;
      background-color: #f4511e;
  }
  .thumbnail img {
      width: 100%;
      height: 100%;
      margin-bottom: 10px;
  }
  .carousel-control.right, .carousel-control.left {
      background-image: none;
      color: #f4511e;
  }
  .carousel-indicators li {
      border-color: #f4511e;
  }
  .carousel-indicators li.active {
      background-color: #f4511e;
  }
  .item h4 {
      font-size: 19px;
      line-height: 1.375em;
      font-weight: 400;
      font-style: italic;
      margin: 70px 0;
  }
  .item span {
      font-style: normal;
  }
  .panel {
      border: 1px solid #f4511e; 
      border-radius:0 !important;
      transition: box-shadow 0.5s;
  }
  .panel:hover {
      box-shadow: 5px 0px 40px rgba(0,0,0, .2);
  }
  .panel-footer .btn:hover {
      border: 1px solid #f4511e;
      background-color: #fff !important;
      color: #f4511e;
  }
  .panel-heading {
      color: #fff !important;
      background-color: #f4511e !important;
      padding: 25px;
      border-bottom: 1px solid transparent;
      border-top-left-radius: 0px;
      border-top-right-radius: 0px;
      border-bottom-left-radius: 0px;
      border-bottom-right-radius: 0px;
  }
  .panel-footer {
      background-color: #d9f00c !important;
  }
  .panel-footer h3 {
      font-size: 32px;
  }
  .panel-footer h4 {
      color: #aaa;
      font-size: 14px;
  }
  .panel-footer .btn {
      margin: 15px 0;
      background-color: #f4511e;
      color: #fff;
  }
  .navbar {
      margin-bottom: 0;
      background-color: #070e0e;
      z-index: 9999;
      border: 0;
      font-size: 12px !important;
      line-height: 1.42857143 !important;
      letter-spacing: 4px;
      border-radius: 0;
      font-family: Montserrat, sans-serif;
  }
  .navbar li a, .navbar .navbar-brand {
      color: #fff !important;
  }
      .dropdown-menu {
      color: #570e0e !important;
      background-color: #c8c6c5 !important;
  }
  .navbar-nav li a:hover, .navbar-nav li.active a {
      color: #570e0e !important;
      background-color: #c8c6c5 !important;
  }
  .navbar-default .navbar-toggle {
      border-color: transparent;
      color: #fff !important;
  }
  footer .glyphicon {
      font-size: 20px;
      margin-bottom: 20px;
      color: #f4511e;
  }
      .embed-responsive {
    position: relative;
    display: block;
    height: 0;
    padding: 0;
    overflow: hidden;
}
  @media screen and (max-width: 768px) {
    .col-sm-4 {
      text-align: center;
      margin: 25px 0;
    }
    .btn-lg {
        width: 100%;
        margin-bottom: 35px;
    }
  }
  @media screen and (max-width: 480px) {
    .logo {
        font-size: 150px;
    }
  }
  table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
  </style>
</head>

<body>
 
  <div class="row panels-row">
  <div class="col-xs-3 col-sm-3 col-md-3"></div>
   <div class="col-xs-3 col-sm-3 col-md-3">
      <a href="http://www.balneariolasgrutas.com/farmastock/Limpiar.php" class="btn btn-warning">Limpiar Negativos</a> 
      <br></br><br></br>
      <div class="col-xs-3 col-sm-3 col-md-3">
  <div class="col-xs-3 col-sm-3 col-md-3">
      <a href="http://www.balneariolasgrutas.com/farmastock/index.php" class="btn btn-info">Volver</a> 
      <div class="col-xs-3 col-sm-3 col-md-3">
      <div class="col-xs-3 col-sm-3 col-md-3">

</div></div></div></div>

<div class="row panels-row">

<br></br>

</div>
</body>
</html>

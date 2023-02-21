<?php

include_once 'dbconnect.php';
 
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
      background-color: #0F0;
       background: url("gris-oscuro.jpg") ;
      color: #f0f;
      padding: 100px 25px;
      font-family: Montserrat, sans-serif;
  }
      .carousel-inner img {
  margin: auto;
}
   .jumbo {
      background-color: #000;
       background: url("gris-oscuro.jpg") ;
      color: #fff;
      padding: 100px 25px;
      font-family: Montserrat, sans-serif;
  }
   
      .main {
          background-image: url(fondos/fondo2.jpg) !important;
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
      background-color: #18a18a;
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
      background-color: #18a18a !important;
  }
  .navbar-nav li a:hover, .navbar-nav li.active a {
      color: #570e0e !important;
      background-color: #18a18a !important;
  }
  .navbar-default .navbar-toggle {
      border-color: transparent;
      color: #00f !important;
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

<body class ="bg-4" id ="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#inicio">Inicio</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
         
                <li><a href="#c1">Guardar</a></li>
                <!--   Desde aqui pruebo codigo para el menu dinamico DBA  --->
               
                 
                
                
                
                
                
                
                
                
                 <!--    Hasta aqui la prueba de codico dropdown menu dba---> 
                <li><a href="index.php">Volver</a></li>
      </ul>
    </div>
  </div>
</nav>

  

<div class="main text-center" id="inicio">            
    <div class="jumbotron text-center main">
  <h2>  </h2> <br></br>     <h2>  </h2> 
       
       
    </div>
     
  <div id="contact" class="container-fluid text-center bg-grey">
     <h2>Stock por Laboratorios </h2>    
 <!-- Container (Contact Section)    XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX DESDE AQUI CADA CAJON--------------------------->
   <div class="row text-center">
         <div class="table-responsive table-bordered">          
 

<h3></h3>
<div class="row panels-row">
  <div class="col-xs-12 col-sm-12 col-md-12">
 
     


 <form action="guardarStockLab.php" method="post" style="bg-5" align="center"   ">    
  
 <!--<table class="table table-striped col3">-->
<table class="table"  >
          <caption></caption>
<thead>
  <tr> 
    <th>Producto</th>
    <th>Laboratorio</th>
    <th>Stock</th>
    <th>Nuevo</th>
      
    
     </tr>
</thead>

<tbody>

<tr>
 
 
 
 
 <?php
 
 
 
 
 
 
  //$query = " SELECT medicamentos.nombre, laboratorios.nombre, medicamentos.id, medicamentos.stock FROM medicamentos INNER JOIN laboratorios ON medicamentos.idlaboratorio = laboratorios.id order by laboratorios.nombre";
  //  $query = " SELECT medicamentos.nombre, laboratorios.nombre, medicamentos.id, medicamentos.stock FROM medicamentos INNER JOIN laboratorios ON medicamentos.idlaboratorio = laboratorios.id where medicamentos.nombre <> '' order by laboratorios.nombre";
 $query = " SELECT medicamentos.nombre, laboratorios.nombre, medicamentos.id, medicamentos.stock FROM medicamentos INNER JOIN laboratorios ON medicamentos.idlaboratorio = laboratorios.id where laboratorios.nombre = 'Andromaco' and medicamentos.nombre <> '' order by laboratorios.nombre";
    
     $result = mysql_query($query);
                            $count = mysql_num_rows($result);
                            
                            if($count > 0)
                                     {
                                          
                                    
                                          for($i=0; $i<$count; $i++)
                                              {
                                              $row = mysql_fetch_row($result);
                                               echo "  <td> ".$row[0] ." </td> ";
                                               echo "  <td> ".$row[1] ." </td> ";
                                               
                                                echo " <td> ".$row[3] ."</td> ";
                                               echo '<td><input class="text" onfocus="this.select();" type="text" maxlength="3" size="3" name="monto'.$row[2].'" value="'.$row[3] .'"style="background-color:grey;"></td>';
                                            // el proximo borrarlo
                                            
                                             
                                             echo " </tr> <tr>";
                                              //fwrite($archivo, "$row[1]    -   $row[0] \r\n");
                                                // fwrite($archivo, "$row[1] $row[2]\r\n");
                                               }
                              
                          //      fwrite($archivo, $row[1]);
                        //        fwrite($archivo, "\r\n");
                                    }

                        
                 
                   ?>
                   
                    </tr>

<tr>
<td CLASS="text-primary">

</td>
<td>GUARDAR </td>
<td> <button type="submit" name="btn-guardar1" class="btn btn-info"><strong>Guardar</strong></button></td>
</tr>

</tbody>
  </table>
</form>

            </DIV> 
  <a name="c1"></a>          
            
            
            
             </div>


 
   <footer class="container-fluid2 bg-4 text-center">
  <p>Southen Webs  </p> 
      <p>  Copyright © 2002-2021 farmastock - Todos los derechos reservados.</p>

        

</footer>
</body>
</html>
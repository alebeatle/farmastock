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
          background-image: url(fondos/fondo3.jpg) !important;
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
  .scrollable-menu {
    height: auto;
    max-height: 200px;
    overflow-x: hidden;
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
          <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Cajones <b class="caret"></b></a>
             <ul class="dropdown-menu scrollable-menu" role="menu">
                <li><a href="#c1">c1</a></li>
                <li><a href="#c2">c2</a></li>
                <li><a href="#c3">c3</a></li>
                <li><a href="#c4">c4</a></li>
                <li><a href="#c5">c5</a></li>
                <li><a href="#c6">c6</a></li>
                <li><a href="#c7">c7</a></li>
                <li><a href="#c8">c8</a></li>
                <li><a href="#c9">c9</a></li>
                <li><a href="#c10">c10</a></li>
                <li><a href="#c11">c11</a></li>
                <li><a href="#c12">c12</a></li>
                <li><a href="#c13">c13</a></li>
                <li><a href="#c14">c14</a></li>
                <li><a href="#c15">c15</a></li>
                <li><a href="#c16">c16</a></li>
                <li><a href="#c17">c17</a></li>
                <li><a href="#c18">c18</a></li>
                <li><a href="#cTEMP">cTEMP</a></li>
                <li><a href="#j1">J1</a></li>
                <li><a href="#j2">J2</a></li>
                <li><a href="#j3">J3</a></li>
                <li><a href="#j4">J4</a></li>
              
              </ul>
              
              
               <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Varios <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="#h1">Heladera</a></li>
                <li><a href="#m1">Mostrador</a></li>
                <li><a href="#b1">Blistera C.V.</a></li>
                <li><a href="#GP">Genericos Pami</a></li>
                <li><a href="#Genericos">Genericos</a></li>
                <li><a href="#Roemmers">Roemmers</a></li>
              </ul>
            </li>
               
                 
                
                <li><a href="index.php">Volver</a></li>
      </ul>
    </div>
  </div>
</nav>

  

<div class="main text-center" id="inicio">            
    <div class="jumbotron text-center main">
  <h2>  </h2> <br></br>     <h2>  </h2> 
       
       
    </div>
     
    
 <!-- Container (Contact Section)    XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX DESDE AQUI CADA CAJON--------------------------->
 

 <a name="c1"></a>
 <div id="contact" class="container-fluid text-center bg-grey">
     <h2>Stock Cajon 1 </h2> 
     
    <div class="row text-center">
         <div class="table-responsive table-bordered">          
 

<h3></h3>
<div class="row panels-row">
  <div class="col-xs-12 col-sm-12 col-md-12">

      <div class="panel-body">


 <form action="guardarStock1.php" method="post" style="bg-5" align="center"   ">    
  
 <!--<table class="table table-striped col3">-->
<table class="table"  >
          <caption></caption>
<thead>
  <tr> 
    <th>Producto</th>
    <th>Stock</th>
    <th>Nuevo</th>
    <th>Producto</th>
    <th>Stock</th>
    <th>Nuevo</th>
     <th>Producto</th>
    <th>Stock</th>
    <th>Nuevo</th>
  </tr>
</thead>

<tbody>






<tr>
  
 
   <?php  
              $it = 0;
              for($i=6; $i<66; $i++)     
              
                 {   //   $query = " SELECT id, Nombre, Cant_Max, Stock FROM `medicamentos` ";
                     $it++;
                       $query = "  SELECT * FROM `medicamentos` WHERE id = $i ";
                       $result = mysql_query($query);
                       $count = mysql_num_rows($result);

                   
                  
                      $row = mysql_fetch_row($result);
                      
                       echo "  <td> ".$row[1] ." </td> ";
                        echo " <td> ".$row[3] ."</td> ";
                     //  echo " <td>  ".$row[4] ."</td> ";
                      // echo "  <td><input type="text" name="monto10" maxlength="2" size="2" value="".$row[4] . " " style="background-color:grey;"/> </td>  ";
                      // echo "  <td><input type="text" name="monto10" maxlength="2" size="2"  style="background-color:grey;"/> </td> "; 
                       echo '<td><input class="text" onfocus="this.select();" type="text" maxlength="3" size="3" name="monto'.$i.'" value="'.$row[3] .'"style="background-color:grey;"></td>';
                      
                      
                        if ( fmod($it, 3) == 0 )
                             {echo " </tr> <tr>"; }
                                            
                    } 
                      ?>
 
 
 
  
 
  <!-- Hasta Aqui las filas armadas via el FOR------------------------------>
 
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
            </div>

        </div>

    </div>
    
 </div>   

 <!-- </div>    Pruebo no cerrar este div para ver si no se achica el proximo cajon y asi...-------->
 
 <!-- Hasta Aqui CAJON 1 VIA FORX------------------------------------------------------------------------------------------>
 
  <!-- DESDE Aqui CAJON 2---------------------<div id="contact" class="container-fluid text-center bg-grey"></div>--------------------------------------------------------------------->
 <a name="c2"></a>
 <br></br>
     <h2>Stock Cajon 2 </h2> 
     
    <div class="row text-center">
         <div class="table-responsive table-bordered">          
 

<h3></h3>
<div class="row panels-row">
  <div class="col-xs-12 col-sm-12 col-md-12">

      <div class="panel-body">


 <form action="guardarStock2.php" method="post" style="bg-5" align="center"   ">    
  
 <!--<table class="table table-striped col3">-->
<table class="table"  >
          <caption></caption>
<thead>
  <tr> 
   <th>Producto</th>
    <th>Stock</th>
    <th>Nuevo</th>
    <th>Producto</th>
    <th>Stock</th>
    <th>Nuevo</th>
     <th>Producto</th>
    <th>Stock</th>
    <th>Nuevo</th>
  </tr>
</thead>

<tbody>






<tr>
  
 
   <?php  
              $it = 0;
              for($i=100; $i<220; $i++)     
              
                 {   //   $query = " SELECT id, Nombre, Cant_Max, Stock FROM `medicamentos` ";
                     $it++;
                       $query = "  SELECT * FROM `medicamentos` WHERE id = $i ";
                       $result = mysql_query($query);
                       $count = mysql_num_rows($result);

                   
                  
                      $row = mysql_fetch_row($result);
                      
                       echo "  <td> ".$row[1] ." </td> ";
                        echo " <td> ".$row[3] ."</td> ";
                     //  echo " <td>  ".$row[4] ."</td> ";
                      // echo "  <td><input type="text" name="monto10" maxlength="2" size="2" value="".$row[4] . " " style="background-color:grey;"/> </td>  ";
                      // echo "  <td><input type="text" name="monto10" maxlength="2" size="2"  style="background-color:grey;"/> </td> "; 
                       echo '<td><input class="text" onfocus="this.select();" type="text" maxlength="3" size="3" name="monto'.$i.'" value="'.$row[3] .'"style="background-color:grey;"></td>';
                      
                      
                        if ( fmod($it, 3) == 0 )
                             {echo " </tr> <tr>"; }
                                            
                    } 
                      ?>
 
 
 
  
 
  <!-- Hasta Aqui las filas armadas via el FOR------------------------------>
 
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
            </div>

        </div>

    </div>

  </div>
 
 <!-- Hasta Aqui Stock CAJON 2 VIA FORX------------------------------------------------------------------------------------------>
 
 
  <!--  DESDE AQUI CADA CAJON  3   --------------------------->
 

 <a name="c3"></a>
 <br></br>
     <h2>Stock Cajon 3 </h2> 
     
    <div class="row text-center">
         <div class="table-responsive table-bordered">          
 

<h3></h3>
<div class="row panels-row">
  <div class="col-xs-12 col-sm-12 col-md-12">

      <div class="panel-body">


 <form action="guardarStock3.php" method="post" style="bg-5" align="center"   ">    
  
 <!--<table class="table table-striped col3">-->
<table class="table"  >
          <caption></caption>
<thead>
  <tr> 
    <th>Producto</th>
    <th>Stock</th>
    <th>Nuevo</th>
    <th>Producto</th>
    <th>Stock</th>
    <th>Nuevo</th>
     <th>Producto</th>
    <th>Stock</th>
    <th>Nuevo</th>
  </tr>
</thead>

<tbody>


<tr>
  
 
   <?php  
              $it = 0;
              for($i=220; $i<309; $i++)     
              
                 {   //   $query = " SELECT id, Nombre, Cant_Max, Stock FROM `medicamentos` ";
                     $it++;
                       $query = "  SELECT * FROM `medicamentos` WHERE id = $i ";
                       $result = mysql_query($query);
                       $count = mysql_num_rows($result);

                   
                  
                      $row = mysql_fetch_row($result);
                      
                       echo "  <td> ".$row[1] ." </td> ";
                        echo " <td> ".$row[3] ."</td> ";
                     //  echo " <td>  ".$row[4] ."</td> ";
                      // echo "  <td><input type="text" name="monto10" maxlength="2" size="2" value="".$row[4] . " " style="background-color:grey;"/> </td>  ";
                      // echo "  <td><input type="text" name="monto10" maxlength="2" size="2"  style="background-color:grey;"/> </td> "; 
                       echo '<td><input class="text" onfocus="this.select();" type="text" maxlength="3" size="3" name="monto'.$i.'" value="'.$row[3] .'"style="background-color:grey;"></td>';
                      
                      
                        if ( fmod($it, 3) == 0 )
                             {echo " </tr> <tr>"; }
                                            
                    } 
                      ?>
 
 
 
  
 
  <!-- Hasta Aqui las filas armadas via el FOR------------------------------>
 
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
            </div>

        </div>

    </div>

 </div>
 
 <!-- Hasta Aqui STOCK CAJON 3 VIA FOR ------------------------------------------------------------------------------------------>

 
  <!--  DESDE AQUI CADA CAJON  4   --------------------------->
 

 <a name="c4"></a>
 <br></br>
     <h2>Stock Cajon 4 </h2> 
     
    <div class="row text-center">
         <div class="table-responsive table-bordered">          
 

<h3></h3>
<div class="row panels-row">
  <div class="col-xs-12 col-sm-12 col-md-12">

      <div class="panel-body">


 <form action="guardarStock4.php" method="post" style="bg-5" align="center"   ">    
  
 <!--<table class="table table-striped col3">-->
<table class="table"  >
          <caption></caption>
<thead>
  <tr> 
    <th>Producto</th>
    <th>Stock</th>
    <th>Nuevo</th>
    <th>Producto</th>
    <th>Stock</th>
    <th>Nuevo</th>
     <th>Producto</th>
    <th>Stock</th>
    <th>Nuevo</th>
  </tr>
</thead>

<tbody>


<tr>
  
 
   <?php  
              $it = 0;
              for($i=3500; $i<3636; $i++)     
              
                 {   //   $query = " SELECT id, Nombre, Cant_Max, Stock FROM `medicamentos` ";
                     $it++;
                       $query = "  SELECT * FROM `medicamentos` WHERE id = $i ";
                       $result = mysql_query($query);
                       $count = mysql_num_rows($result);

                   
                  
                      $row = mysql_fetch_row($result);
                      
                       echo "  <td> ".$row[1] ." </td> ";
                        echo " <td> ".$row[3] ."</td> ";
                     //  echo " <td>  ".$row[4] ."</td> ";
                      // echo "  <td><input type="text" name="monto10" maxlength="2" size="2" value="".$row[4] . " " style="background-color:grey;"/> </td>  ";
                      // echo "  <td><input type="text" name="monto10" maxlength="2" size="2"  style="background-color:grey;"/> </td> "; 
                       echo '<td><input class="text" onfocus="this.select();" type="text" maxlength="3" size="3" name="monto'.$i.'" value="'.$row[3] .'"style="background-color:grey;"></td>';
                      
                      
                        if ( fmod($it, 3) == 0 )
                             {echo " </tr> <tr>"; }
                                            
                    } 
                      ?>
 
 
 
  
 
  <!-- Hasta Aqui las filas armadas via el FOR------------------------------>
 
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
            </div>

        </div>

    </div>

 </div>
 
 <!-- Hasta Aqui Stock CAJON 4 VIA FORX------------------------------------------------------------------------------------------>

 
  <!--  DESDE AQUI CADA CAJON  5   --------------------------->
 

 <a name="c5"></a>
 <br></br>
 <!-- <div id="contact" class="container-fluid text-center bg-grey">  --->
 
     <h2>Stock Cajon 5 </h2> 
     
    <div class="row text-center">
         <div class="table-responsive table-bordered">          
 

<h3></h3>
<div class="row panels-row">
  <div class="col-xs-12 col-sm-12 col-md-12">

      <div class="panel-body">


 <form action="guardarStock5.php" method="post" style="bg-5" align="center"   ">    
  
 <!--<table class="table table-striped col3">-->
<table class="table"  >
          <caption></caption>
<thead>
  <tr> 
    <th>Producto</th>
    <th>Stock</th>
    <th>Nuevo</th>
    <th>Producto</th>
    <th>Stock</th>
    <th>Nuevo</th>
     <th>Producto</th>
    <th>Stock</th>
    <th>Nuevo</th>
  </tr>
</thead>

<tbody>


<tr>
  
 
   <?php  
              $it = 0;
              for($i=3700; $i<3820; $i++)     
              
                 {   //   $query = " SELECT id, Nombre, Cant_Max, Stock FROM `medicamentos` ";
                     $it++;
                       $query = "  SELECT * FROM `medicamentos` WHERE id = $i ";
                       $result = mysql_query($query);
                       $count = mysql_num_rows($result);

                   
                  
                      $row = mysql_fetch_row($result);
                      
                       echo "  <td> ".$row[1] ." </td> ";
                        echo " <td> ".$row[3] ."</td> ";
                     //  echo " <td>  ".$row[4] ."</td> ";
                      // echo "  <td><input type="text" name="monto10" maxlength="2" size="2" value="".$row[4] . " " style="background-color:grey;"/> </td>  ";
                      // echo "  <td><input type="text" name="monto10" maxlength="2" size="2"  style="background-color:grey;"/> </td> "; 
                       echo '<td><input class="text" onfocus="this.select();" type="text" maxlength="3" size="3" name="monto'.$i.'" value="'.$row[3] .'"style="background-color:grey;"></td>';
                      
                      
                        if ( fmod($it, 3) == 0 )
                             {echo " </tr> <tr>"; }
                                            
                    } 
                      ?>
 
 
 
  
 
  <!-- Hasta Aqui las filas armadas via el FOR------------------------------>
 
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
            </div>

        </div>

    </div>

 </div>
 
 <!-- Hasta Aqui CAJON 5 VIA FORX------------------------------------------------------------------------------------------>

 
 <!--  DESDE AQUI CADA CAJON  6   --------------------------->
 

 <a name="c6"></a>
 <br></br>

     <h2>Stock Cajon 6 </h2> 
     
    <div class="row text-center">
         <div class="table-responsive table-bordered">          
 

<h3></h3>
<div class="row panels-row">
  <div class="col-xs-12 col-sm-12 col-md-12">

      <div class="panel-body">


 <form action="guardarStock6.php" method="post" style="bg-5" align="center"   ">    
  
 <!--<table class="table table-striped col3">-->
<table class="table"  >
          <caption></caption>
<thead>
  <tr> 
    <th>Producto</th>
    <th>Stock</th>
    <th>Nuevo</th>
    <th>Producto</th>
    <th>Stock</th>
    <th>Nuevo</th>
     <th>Producto</th>
    <th>Stock</th>
    <th>Nuevo</th>
  </tr>
</thead>

<tbody>


<tr>
  
 
   <?php  
              $it = 0;
              for($i=3900; $i<4011; $i++)     
              
                 {   //   $query = " SELECT id, Nombre, Cant_Max, Stock FROM `medicamentos` ";
                     $it++;
                       $query = "  SELECT * FROM `medicamentos` WHERE id = $i ";
                       $result = mysql_query($query);
                       $count = mysql_num_rows($result);

                   
                  
                      $row = mysql_fetch_row($result);
                      
                       echo "  <td> ".$row[1] ." </td> ";
                        echo " <td> ".$row[3] ."</td> ";
                     //  echo " <td>  ".$row[4] ."</td> ";
                      // echo "  <td><input type="text" name="monto10" maxlength="2" size="2" value="".$row[4] . " " style="background-color:grey;"/> </td>  ";
                      // echo "  <td><input type="text" name="monto10" maxlength="2" size="2"  style="background-color:grey;"/> </td> "; 
                       echo '<td><input class="text" onfocus="this.select();" type="text" maxlength="3" size="3" name="monto'.$i.'" value="'.$row[3] .'"style="background-color:grey;"></td>';
                      
                      
                        if ( fmod($it, 3) == 0 )
                             {echo " </tr> <tr>"; }
                                            
                    } 
                      ?>
 
 
 
  
 
  <!-- Hasta Aqui las filas armadas via el FOR------------------------------>
 
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
            </div>

        </div>

    </div>

 </div>
 
 <!-- Hasta Aqui stock CAJON 6 VIA FORX------------------------------------------------------------------------------------------>

 
 
  <!--  DESDE AQUI CADA CAJON  7  --------------------------->
 

 <a name="c7"></a>
 <br></br>

     <h2>Stock Cajon 7 </h2> 
     
    <div class="row text-center">
         <div class="table-responsive table-bordered">          
 

<h3></h3>
<div class="row panels-row">
  <div class="col-xs-12 col-sm-12 col-md-12">

      <div class="panel-body">


 <form action="guardarStock7.php" method="post" style="bg-5" align="center"   ">    
  
 <!--<table class="table table-striped col3">-->
<table class="table"  >
          <caption></caption>
<thead>
  <tr> 
    <th>Producto</th>
    <th>Stock</th>
    <th>Nuevo</th>
    <th>Producto</th>
    <th>Stock</th>
    <th>Nuevo</th>
     <th>Producto</th>
    <th>Stock</th>
    <th>Nuevo</th>
  </tr>
</thead>

<tbody>


<tr>
  
 
   <?php  
              $it = 0;
              for($i=6100; $i<6228; $i++)     
              
                 {   //   $query = " SELECT id, Nombre, Cant_Max, Stock FROM `medicamentos` ";
                     $it++;
                       $query = "  SELECT * FROM `medicamentos` WHERE id = $i ";
                       $result = mysql_query($query);
                       $count = mysql_num_rows($result);

                   
                  
                      $row = mysql_fetch_row($result);
                      
                       echo "  <td> ".$row[1] ." </td> ";
                        echo " <td> ".$row[3] ."</td> ";
                     //  echo " <td>  ".$row[4] ."</td> ";
                      // echo "  <td><input type="text" name="monto10" maxlength="2" size="2" value="".$row[4] . " " style="background-color:grey;"/> </td>  ";
                      // echo "  <td><input type="text" name="monto10" maxlength="2" size="2"  style="background-color:grey;"/> </td> "; 
                       echo '<td><input class="text" onfocus="this.select();" type="text" maxlength="3" size="3" name="monto'.$i.'" value="'.$row[3] .'"style="background-color:grey;"></td>';
                      
                      
                        if ( fmod($it, 3) == 0 )
                             {echo " </tr> <tr>"; }
                                            
                    } 
                      ?>
 
 
 
  
 
  <!-- Hasta Aqui las filas armadas via el FOR------------------------------>
 
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
            </div>

        </div>

    </div>

 </div>
 
 <!-- Hasta Aqui CAJON 7 VIA FORX------------------------------------------------------------------------------------------>

 
   <!--  DESDE AQUI CADA CAJON  8  --------------------------->
 

 <a name="c8"></a>
<br></br>
     <h2>Stock Cajon 8 </h2> 
     
    <div class="row text-center">
         <div class="table-responsive table-bordered">          
 

<h3></h3>
<div class="row panels-row">
  <div class="col-xs-12 col-sm-12 col-md-12">

      <div class="panel-body">


 <form action="guardarStock8.php" method="post" style="bg-5" align="center"   ">    
  
 <!--<table class="table table-striped col3">-->
<table class="table"  >
          <caption></caption>
<thead>
  <tr> 
    <th>Producto</th>
    <th>Stock</th>
    <th>Nuevo</th>
    <th>Producto</th>
    <th>Stock</th>
    <th>Nuevo</th>
     <th>Producto</th>
    <th>Stock</th>
    <th>Nuevo</th>
  </tr>
</thead>

<tbody>


<tr>
  
 
   <?php  
              $it = 0;
              for($i=6300; $i<6500; $i++)     
              
                 {   //   $query = " SELECT id, Nombre, Cant_Max, Stock FROM `medicamentos` ";
                     $it++;
                       $query = "  SELECT * FROM `medicamentos` WHERE id = $i ";
                       $result = mysql_query($query);
                       $count = mysql_num_rows($result);

                   
                  
                      $row = mysql_fetch_row($result);
                      
                       echo "  <td> ".$row[1] ." </td> ";
                        echo " <td> ".$row[3] ."</td> ";
                     //  echo " <td>  ".$row[4] ."</td> ";
                      // echo "  <td><input type="text" name="monto10" maxlength="2" size="2" value="".$row[4] . " " style="background-color:grey;"/> </td>  ";
                      // echo "  <td><input type="text" name="monto10" maxlength="2" size="2"  style="background-color:grey;"/> </td> "; 
                       echo '<td><input class="text" onfocus="this.select();" type="text" maxlength="3" size="3" name="monto'.$i.'" value="'.$row[3] .'"style="background-color:grey;"></td>';
                      
                      
                        if ( fmod($it, 3) == 0 )
                             {echo " </tr> <tr>"; }
                                            
                    } 
                      ?>
 
 
 
  
 
  <!-- Hasta Aqui las filas armadas via el FOR------------------------------>
 
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
            </div>

        </div>

    </div>

 </div>
 
 <!-- Hasta Aqui CAJON 8 VIA FORX------------------------------------------------------------------------------------------>

    <!--  DESDE AQUI CADA CAJON  9  --------------------------->
 

 <a name="c9"></a>
<br></br>
     <h2>Stock Cajon 9 </h2> 
     
    <div class="row text-center">
         <div class="table-responsive table-bordered">          
 

<h3></h3>
<div class="row panels-row">
  <div class="col-xs-12 col-sm-12 col-md-12">

      <div class="panel-body">


 <form action="guardarStock9.php" method="post" style="bg-5" align="center"   ">    
  
 <!--<table class="table table-striped col3">-->
<table class="table"  >
          <caption></caption>
<thead>
  <tr> 
    <th>Producto</th>
    <th>Stock</th>
    <th>Nuevo</th>
    <th>Producto</th>
    <th>Stock</th>
    <th>Nuevo</th>
     <th>Producto</th>
    <th>Stock</th>
    <th>Nuevo</th>
  </tr>
</thead>

<tbody>


<tr>
  
 
   <?php  
              $it = 0;
              for($i=6500; $i<6589; $i++)     
              
                 {   //   $query = " SELECT id, Nombre, Cant_Max, Stock FROM `medicamentos` ";
                     $it++;
                       $query = "  SELECT * FROM `medicamentos` WHERE id = $i ";
                       $result = mysql_query($query);
                       $count = mysql_num_rows($result);

                   
                  
                      $row = mysql_fetch_row($result);
                      
                       echo "  <td> ".$row[1] ." </td> ";
                        echo " <td> ".$row[3] ."</td> ";
                     //  echo " <td>  ".$row[4] ."</td> ";
                      // echo "  <td><input type="text" name="monto10" maxlength="2" size="2" value="".$row[4] . " " style="background-color:grey;"/> </td>  ";
                      // echo "  <td><input type="text" name="monto10" maxlength="2" size="2"  style="background-color:grey;"/> </td> "; 
                       echo '<td><input class="text" onfocus="this.select();" type="text" maxlength="3" size="3" name="monto'.$i.'" value="'.$row[3] .'"style="background-color:grey;"></td>';
                      
                      
                        if ( fmod($it, 3) == 0 )
                             {echo " </tr> <tr>"; }
                                            
                    } 
                      ?>
 
 
 
  
 
  <!-- Hasta Aqui las filas armadas via el FOR------------------------------>
 
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
            </div>

        </div>

    </div>

 </div>
 
 <!-- Hasta Aqui CAJON 9 VIA FORX------------------------------------------------------------------------------------------>


 <!--  DESDE AQUI CADA CAJON  10  --------------------------->
 

 <a name="c10"></a>
<br></br>
     <h2>Stock Cajon 10 </h2> 
     
    <div class="row text-center">
         <div class="table-responsive table-bordered">          
 

<h3></h3>
<div class="row panels-row">
  <div class="col-xs-12 col-sm-12 col-md-12">

      <div class="panel-body">


 <form action="guardarStock10.php" method="post" style="bg-5" align="center"   ">    
  
 <!--<table class="table table-striped col3">-->
<table class="table"  >
          <caption></caption>
<thead>
  <tr> 
   <th>Producto</th>
    <th>Stock</th>
    <th>Nuevo</th>
    <th>Producto</th>
    <th>Stock</th>
    <th>Nuevo</th>
     <th>Producto</th>
    <th>Stock</th>
    <th>Nuevo</th>
  </tr>
</thead>

<tbody>


<tr>
  
 
   <?php  
              $it = 0;
              for($i=6700; $i<6791; $i++)     
              
                 {   //   $query = " SELECT id, Nombre, Cant_Max, Stock FROM `medicamentos` ";
                     $it++;
                       $query = "  SELECT * FROM `medicamentos` WHERE id = $i ";
                       $result = mysql_query($query);
                       $count = mysql_num_rows($result);

                   
                  
                      $row = mysql_fetch_row($result);
                      
                       echo "  <td> ".$row[1] ." </td> ";
                        echo " <td> ".$row[3] ."</td> ";
                     //  echo " <td>  ".$row[4] ."</td> ";
                      // echo "  <td><input type="text" name="monto10" maxlength="2" size="2" value="".$row[4] . " " style="background-color:grey;"/> </td>  ";
                      // echo "  <td><input type="text" name="monto10" maxlength="2" size="2"  style="background-color:grey;"/> </td> "; 
                       echo '<td><input class="text" onfocus="this.select();" type="text" maxlength="3" size="3" name="monto'.$i.'" value="'.$row[3] .'"style="background-color:grey;"></td>';
                      
                      
                        if ( fmod($it, 3) == 0 )
                             {echo " </tr> <tr>"; }
                                            
                    } 
                      ?>
 
 
 
  
 
  <!-- Hasta Aqui las filas armadas via el FOR------------------------------>
 
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
            </div>

        </div>

    </div>

 </div>
 
 <!-- Hasta Aqui CAJON 10 VIA FORX------------------------------------------------------------------------------------------>

 
  <!--  DESDE AQUI CADA CAJON  11  --------------------------->
 

 <a name="c11"></a>
<br></br>
     <h2>Stock Cajon 11 </h2> 
     
    <div class="row text-center">
         <div class="table-responsive table-bordered">          
 

<h3></h3>
<div class="row panels-row">
  <div class="col-xs-12 col-sm-12 col-md-12">

      <div class="panel-body">


 <form action="guardarStock11.php" method="post" style="bg-5" align="center"   ">    
  
 <!--<table class="table table-striped col3">-->
<table class="table"  >
          <caption></caption>
<thead>
  <tr> 
    <th>Producto</th>
    <th>Stock</th>
    <th>Nuevo</th>
    <th>Producto</th>
    <th>Stock</th>
    <th>Nuevo</th>
     <th>Producto</th>
    <th>Stock</th>
    <th>Nuevo</th>
  </tr>
</thead>

<tbody>


<tr>
  
 
   <?php  
              $it = 0;
              for($i=4900; $i<4999; $i++)     
              
                 {   //   $query = " SELECT id, Nombre, Cant_Max, Stock FROM `medicamentos` ";
                     $it++;
                       $query = "  SELECT * FROM `medicamentos` WHERE id = $i ";
                       $result = mysql_query($query);
                       $count = mysql_num_rows($result);

                   
                  
                      $row = mysql_fetch_row($result);
                      
                       echo "  <td> ".$row[1] ." </td> ";
                        echo " <td> ".$row[3] ."</td> ";
                     //  echo " <td>  ".$row[4] ."</td> ";
                      // echo "  <td><input type="text" name="monto10" maxlength="2" size="2" value="".$row[4] . " " style="background-color:grey;"/> </td>  ";
                      // echo "  <td><input type="text" name="monto10" maxlength="2" size="2"  style="background-color:grey;"/> </td> "; 
                       echo '<td><input class="text" onfocus="this.select();" type="text" maxlength="3" size="3" name="monto'.$i.'" value="'.$row[3] .'"style="background-color:grey;"></td>';
                      
                      
                        if ( fmod($it, 3) == 0 )
                             {echo " </tr> <tr>"; }
                                            
                    } 
                      ?>
 
 
 
  
 
  <!-- Hasta Aqui las filas armadas via el FOR------------------------------>
 
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
            </div>

        </div>

    </div>

 </div>
 
 <!-- Hasta Aqui CAJON 11 VIA FORX------------------------------------------------------------------------------------------>


<!--  DESDE AQUI CADA CAJON  12  --------------------------->
 

 <a name="c12"></a>
<br></br>
     <h2>Stock Cajon 12 </h2> 
     
    <div class="row text-center">
         <div class="table-responsive table-bordered">          
 

<h3></h3>
<div class="row panels-row">
  <div class="col-xs-12 col-sm-12 col-md-12">

      <div class="panel-body">


 <form action="guardarStock12.php" method="post" style="bg-5" align="center"   ">    
  
 <!--<table class="table table-striped col3">-->
<table class="table"  >
          <caption></caption>
<thead>
  <tr> 
    <th>Producto</th>
    <th>Stock</th>
    <th>Nuevo</th>
    <th>Producto</th>
    <th>Stock</th>
    <th>Nuevo</th>
     <th>Producto</th>
    <th>Stock</th>
    <th>Nuevo</th>
  </tr>
</thead>

<tbody>


<tr>
  
 
   <?php  
              $it = 0;
              for($i=5100; $i<5205; $i++)     
              
                 {   //   $query = " SELECT id, Nombre, Cant_Max, Stock FROM `medicamentos` ";
                     $it++;
                       $query = "  SELECT * FROM `medicamentos` WHERE id = $i ";
                       $result = mysql_query($query);
                       $count = mysql_num_rows($result);

                   
                  
                      $row = mysql_fetch_row($result);
                      
                       echo "  <td> ".$row[1] ." </td> ";
                        echo " <td> ".$row[3] ."</td> ";
                     //  echo " <td>  ".$row[4] ."</td> ";
                      // echo "  <td><input type="text" name="monto10" maxlength="2" size="2" value="".$row[4] . " " style="background-color:grey;"/> </td>  ";
                      // echo "  <td><input type="text" name="monto10" maxlength="2" size="2"  style="background-color:grey;"/> </td> "; 
                       echo '<td><input class="text" onfocus="this.select();" type="text" maxlength="3" size="3" name="monto'.$i.'" value="'.$row[3] .'"style="background-color:grey;"></td>';
                      
                      
                        if ( fmod($it, 3) == 0 )
                             {echo " </tr> <tr>"; }
                                            
                    } 
                      ?>
 
 
 
  
 
  <!-- Hasta Aqui las filas armadas via el FOR------------------------------>
 
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
            </div>

        </div>

    </div>

 </div>
 
 <!-- Hasta Aqui CAJON 12 VIA FORX------------------------------------------------------------------------------------------>

 
 
 <!--  DESDE AQUI CADA CAJON  13  --------------------------->
 

 <a name="c13"></a>
<br></br>
     <h2>Stock Cajon 13 </h2> 
     
    <div class="row text-center">
         <div class="table-responsive table-bordered">          
 

<h3></h3>
<div class="row panels-row">
  <div class="col-xs-12 col-sm-12 col-md-12">

      <div class="panel-body">


 <form action="guardarStock13.php" method="post" style="bg-5" align="center"   ">    
  
 <!--<table class="table table-striped col3">-->
<table class="table"  >
          <caption></caption>
<thead>
  <tr> 
    <th>Producto</th>
    <th>Stock</th>
    <th>Nuevo</th>
    <th>Producto</th>
    <th>Stock</th>
    <th>Nuevo</th>
     <th>Producto</th>
    <th>Stock</th>
    <th>Nuevo</th>
  </tr>
</thead>

<tbody>


<tr>
  
 
   <?php  
              $it = 0;
              for($i=5300; $i<5390; $i++)     
              
                 {   //   $query = " SELECT id, Nombre, Cant_Max, Stock FROM `medicamentos` ";
                     $it++;
                       $query = "  SELECT * FROM `medicamentos` WHERE id = $i ";
                       $result = mysql_query($query);
                       $count = mysql_num_rows($result);

                   
                  
                      $row = mysql_fetch_row($result);
                      
                       echo "  <td> ".$row[1] ." </td> ";
                        echo " <td> ".$row[3] ."</td> ";
                     //  echo " <td>  ".$row[4] ."</td> ";
                      // echo "  <td><input type="text" name="monto10" maxlength="2" size="2" value="".$row[4] . " " style="background-color:grey;"/> </td>  ";
                      // echo "  <td><input type="text" name="monto10" maxlength="2" size="2"  style="background-color:grey;"/> </td> "; 
                       echo '<td><input class="text" onfocus="this.select();" type="text" maxlength="3" size="3" name="monto'.$i.'" value="'.$row[3] .'"style="background-color:grey;"></td>';
                      
                      
                        if ( fmod($it, 3) == 0 )
                             {echo " </tr> <tr>"; }
                                            
                    } 
                      ?>
 
 
 
  
 
  <!-- Hasta Aqui las filas armadas via el FOR------------------------------>
 
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
            </div>

        </div>

    </div>

 </div>
 
 <!-- Hasta Aqui CAJON 13 VIA FORX------------------------------------------------------------------------------------------>

 
  <!--  DESDE AQUI CADA CAJON  14  --------------------------->
 

 <a name="c14"></a>
<br></br>
     <h2>Stock Cajon 14 </h2> 
     
    <div class="row text-center">
         <div class="table-responsive table-bordered">          
 

<h3></h3>
<div class="row panels-row">
  <div class="col-xs-12 col-sm-12 col-md-12">

      <div class="panel-body">


 <form action="guardarStock14.php" method="post" style="bg-5" align="center"   ">    
  
 <!--<table class="table table-striped col3">-->
<table class="table"  >
          <caption></caption>
<thead>
  <tr> 
   <th>Producto</th>
    <th>Stock</th>
    <th>Nuevo</th>
    <th>Producto</th>
    <th>Stock</th>
    <th>Nuevo</th>
     <th>Producto</th>
    <th>Stock</th>
    <th>Nuevo</th>
  </tr>
</thead>

<tbody>


<tr>
  
 
   <?php  
              $it = 0;
              for($i=5500; $i<5595; $i++)     
              
                 {   //   $query = " SELECT id, Nombre, Cant_Max, Stock FROM `medicamentos` ";
                     $it++;
                       $query = "  SELECT * FROM `medicamentos` WHERE id = $i ";
                       $result = mysql_query($query);
                       $count = mysql_num_rows($result);

                   
                  
                      $row = mysql_fetch_row($result);
                      
                       echo "  <td> ".$row[1] ." </td> ";
                        echo " <td> ".$row[3] ."</td> ";
                     //  echo " <td>  ".$row[4] ."</td> ";
                      // echo "  <td><input type="text" name="monto10" maxlength="2" size="2" value="".$row[4] . " " style="background-color:grey;"/> </td>  ";
                      // echo "  <td><input type="text" name="monto10" maxlength="2" size="2"  style="background-color:grey;"/> </td> "; 
                       echo '<td><input class="text" onfocus="this.select();" type="text" maxlength="3" size="3" name="monto'.$i.'" value="'.$row[3] .'"style="background-color:grey;"></td>';
                      
                      
                        if ( fmod($it, 3) == 0 )
                             {echo " </tr> <tr>"; }
                                            
                    } 
                      ?>
 
 
 
  
 
  <!-- Hasta Aqui las filas armadas via el FOR------------------------------>
 
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
            </div>

        </div>

    </div>

 </div>
 
 <!-- Hasta Aqui CAJON 14 VIA FORX------------------------------------------------------------------------------------------>


 <!--  DESDE AQUI CADA CAJON  15  --------------------------->
 

 <a name="c15"></a>
<br></br>
     <h2>Stock Cajon 15 </h2> 
     
    <div class="row text-center">
         <div class="table-responsive table-bordered">          
 

<h3></h3>
<div class="row panels-row">
  <div class="col-xs-12 col-sm-12 col-md-12">

      <div class="panel-body">


 <form action="guardarStock15.php" method="post" style="bg-5" align="center"   ">    
  
 <!--<table class="table table-striped col3">-->
<table class="table"  >
          <caption></caption>
<thead>
  <tr> 
 <th>Producto</th>
    <th>Stock</th>
    <th>Nuevo</th>
    <th>Producto</th>
    <th>Stock</th>
    <th>Nuevo</th>
     <th>Producto</th>
    <th>Stock</th>
    <th>Nuevo</th>
  </tr>
</thead>

<tbody>


<tr>
  
 
   <?php  
              $it = 0;
              for($i=5700; $i<5785; $i++)     
              
                 {   //   $query = " SELECT id, Nombre, Cant_Max, Stock FROM `medicamentos` ";
                     $it++;
                       $query = "  SELECT * FROM `medicamentos` WHERE id = $i ";
                       $result = mysql_query($query);
                       $count = mysql_num_rows($result);

                   
                  
                      $row = mysql_fetch_row($result);
                      
                       echo "  <td> ".$row[1] ." </td> ";
                        echo " <td> ".$row[3] ."</td> ";
                     //  echo " <td>  ".$row[4] ."</td> ";
                      // echo "  <td><input type="text" name="monto10" maxlength="2" size="2" value="".$row[4] . " " style="background-color:grey;"/> </td>  ";
                      // echo "  <td><input type="text" name="monto10" maxlength="2" size="2"  style="background-color:grey;"/> </td> "; 
                       echo '<td><input class="text" onfocus="this.select();" type="text" maxlength="3" size="3" name="monto'.$i.'" value="'.$row[3] .'"style="background-color:grey;"></td>';
                      
                      
                        if ( fmod($it, 3) == 0 )
                             {echo " </tr> <tr>"; }
                                            
                    } 
                      ?>
 
 
 
  
 
  <!-- Hasta Aqui las filas armadas via el FOR------------------------------>
 
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
            </div>

        </div>

    </div>

 </div>
 
 <!-- Hasta Aqui CAJON 15 VIA FORX------------------------------------------------------------------------------------------>

  <!--  DESDE AQUI CADA CAJON  16  --------------------------->
 

 <a name="c16"></a>
<br></br>
     <h2>Stock Cajon 16 </h2> 
     
    <div class="row text-center">
         <div class="table-responsive table-bordered">          
 

<h3></h3>
<div class="row panels-row">
  <div class="col-xs-12 col-sm-12 col-md-12">

      <div class="panel-body">


 <form action="guardarStock16.php" method="post" style="bg-5" align="center"   ">    
  
 <!--<table class="table table-striped col3">-->
<table class="table"  >
          <caption></caption>
<thead>
  <tr> 
    <th>Producto</th>
    <th>Stock</th>
    <th>Nuevo</th>
    <th>Producto</th>
    <th>Stock</th>
    <th>Nuevo</th>
     <th>Producto</th>
    <th>Stock</th>
    <th>Nuevo</th>
  </tr>
</thead>

<tbody>


<tr>
  
 
   <?php  
              $it = 0;
              for($i=5900; $i<5990; $i++)     
              
                 {   //   $query = " SELECT id, Nombre, Cant_Max, Stock FROM `medicamentos` ";
                     $it++;
                       $query = "  SELECT * FROM `medicamentos` WHERE id = $i ";
                       $result = mysql_query($query);
                       $count = mysql_num_rows($result);

                   
                  
                      $row = mysql_fetch_row($result);
                      
                       echo "  <td> ".$row[1] ." </td> ";
                        echo " <td> ".$row[3] ."</td> ";
                     //  echo " <td>  ".$row[4] ."</td> ";
                      // echo "  <td><input type="text" name="monto10" maxlength="2" size="2" value="".$row[4] . " " style="background-color:grey;"/> </td>  ";
                      // echo "  <td><input type="text" name="monto10" maxlength="2" size="2"  style="background-color:grey;"/> </td> "; 
                       echo '<td><input class="text" onfocus="this.select();" type="text" maxlength="3" size="3" name="monto'.$i.'" value="'.$row[3] .'"style="background-color:grey;"></td>';
                      
                      
                        if ( fmod($it, 3) == 0 )
                             {echo " </tr> <tr>"; }
                                            
                    } 
                      ?>
 
 
 
  
 
  <!-- Hasta Aqui las filas armadas via el FOR------------------------------>
 
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
            </div>

        </div>

    </div>

 </div>
 
 <!-- Hasta Aqui CAJON 16 VIA FORX------------------------------------------------------------------------------------------>

 


  <!--  DESDE AQUI CADA CAJON  17  --------------------------->
 

 <a name="c17"></a>
<br></br>
     <h2>Stock Cajon 17 </h2> 
     
    <div class="row text-center">
         <div class="table-responsive table-bordered">          
 

<h3></h3>
<div class="row panels-row">
  <div class="col-xs-12 col-sm-12 col-md-12">

      <div class="panel-body">


 <form action="guardarStock17.php" method="post" style="bg-5" align="center"   ">    
  
 <!--<table class="table table-striped col3">-->
<table class="table"  >
          <caption></caption>
<thead>
  <tr> 
    <th>Producto</th>
    <th>Stock</th>
    <th>Nuevo</th>
    <th>Producto</th>
    <th>Stock</th>
    <th>Nuevo</th>
     <th>Producto</th>
    <th>Stock</th>
    <th>Nuevo</th>
  </tr>
</thead>

<tbody>


<tr>
  
 
   <?php  
              $it = 0;
              for($i=6900; $i<7030; $i++)     
              
                 {   //   $query = " SELECT id, Nombre, Cant_Max, Stock FROM `medicamentos` ";
                     $it++;
                       $query = "  SELECT * FROM `medicamentos` WHERE id = $i ";
                       $result = mysql_query($query);
                       $count = mysql_num_rows($result);

                   
                  
                      $row = mysql_fetch_row($result);
                      
                       echo "  <td> ".$row[1] ." </td> ";
                        echo " <td> ".$row[3] ."</td> ";
                     //  echo " <td>  ".$row[4] ."</td> ";
                      // echo "  <td><input type="text" name="monto10" maxlength="2" size="2" value="".$row[4] . " " style="background-color:grey;"/> </td>  ";
                      // echo "  <td><input type="text" name="monto10" maxlength="2" size="2"  style="background-color:grey;"/> </td> "; 
                       echo '<td><input class="text" onfocus="this.select();" type="text" maxlength="3" size="3" name="monto'.$i.'" value="'.$row[3] .'"style="background-color:grey;"></td>';
                      
                      
                        if ( fmod($it, 3) == 0 )
                             {echo " </tr> <tr>"; }
                                            
                    } 
                      ?>
 
 
 
  
 
  <!-- Hasta Aqui las filas armadas via el FOR------------------------------>
 
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
            </div>

        </div>

    </div>

 </div>
 
 <!-- Hasta Aqui CAJON 17 VIA FORX------------------------------------------------------------------------------------------>

 
   <!--  DESDE AQUI CADA CAJON  18  --------------------------->
 

 <a name="c18"></a>
<br></br>
     <h2>Stock Cajon 18 </h2> 
     
    <div class="row text-center">
         <div class="table-responsive table-bordered">          
 

<h3></h3>
<div class="row panels-row">
  <div class="col-xs-12 col-sm-12 col-md-12">

      <div class="panel-body">


 <form action="guardarStock18.php" method="post" style="bg-5" align="center"   ">    
  
 <!--<table class="table table-striped col3">-->
<table class="table"  >
          <caption></caption>
<thead>
  <tr> 
    <th>Producto</th>
    <th>Stock</th>
    <th>Nuevo</th>
    <th>Producto</th>
    <th>Stock</th>
    <th>Nuevo</th>
     <th>Producto</th>
    <th>Stock</th>
    <th>Nuevo</th>
  </tr>
</thead>

<tbody>


<tr>
  
 
   <?php  
              $it = 0;
              for($i=2000; $i<2126; $i++)     
              
                 {   //   $query = " SELECT id, Nombre, Cant_Max, Stock FROM `medicamentos` ";
                     $it++;
                       $query = "  SELECT * FROM `medicamentos` WHERE id = $i ";
                       $result = mysql_query($query);
                       $count = mysql_num_rows($result);

                   
                  
                      $row = mysql_fetch_row($result);
                      
                       echo "  <td> ".$row[1] ." </td> ";
                        echo " <td> ".$row[3] ."</td> ";
                     //  echo " <td>  ".$row[4] ."</td> ";
                      // echo "  <td><input type="text" name="monto10" maxlength="2" size="2" value="".$row[4] . " " style="background-color:grey;"/> </td>  ";
                      // echo "  <td><input type="text" name="monto10" maxlength="2" size="2"  style="background-color:grey;"/> </td> "; 
                       echo '<td><input class="text" onfocus="this.select();" type="text" maxlength="3" size="3" name="monto'.$i.'" value="'.$row[3] .'"style="background-color:grey;"></td>';
                      
                      
                        if ( fmod($it, 3) == 0 )
                             {echo " </tr> <tr>"; }
                                            
                    } 
                      ?>
 
 
 
  
 
  <!-- Hasta Aqui las filas armadas via el FOR------------------------------>
 
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
            </div>

        </div>

    </div>

 </div>
 
 <!-- Hasta Aqui CAJON 18 VIA FORX------------------------------------------------------------------------------------------>

   <!--  DESDE AQUI CADA CAJON  TEMP --------------------------->
 

 <a name="cTEMP"></a>
<br></br>
     <h2>Stock Cajon TEMP </h2> 
     
    <div class="row text-center">
         <div class="table-responsive table-bordered">          
 

<h3></h3>
<div class="row panels-row">
  <div class="col-xs-12 col-sm-12 col-md-12">

      <div class="panel-body">


 <form action="guardarStockTEMP.php" method="post" style="bg-5" align="center"   ">    
  
 <!--<table class="table table-striped col3">-->
<table class="table"  >
          <caption></caption>
<thead>
  <tr> 
    <th>Producto</th>
    <th>Stock</th>
    <th>Nuevo</th>
    <th>Producto</th>
    <th>Stock</th>
    <th>Nuevo</th>
     <th>Producto</th>
    <th>Stock</th>
    <th>Nuevo</th>
  </tr>
</thead>

<tbody>


<tr>
  
 
   <?php  
              $it = 0;
              for($i=7100; $i<7300; $i++)     
              
                 {   //   $query = " SELECT id, Nombre, Cant_Max, Stock FROM `medicamentos` ";
                     $it++;
                       $query = "  SELECT * FROM `medicamentos` WHERE id = $i ";
                       $result = mysql_query($query);
                       $count = mysql_num_rows($result);

                   
                  
                      $row = mysql_fetch_row($result);
                      
                       echo "  <td> ".$row[1] ." </td> ";
                        echo " <td> ".$row[3] ."</td> ";
                     //  echo " <td>  ".$row[4] ."</td> ";
                      // echo "  <td><input type="text" name="monto10" maxlength="2" size="2" value="".$row[4] . " " style="background-color:grey;"/> </td>  ";
                      // echo "  <td><input type="text" name="monto10" maxlength="2" size="2"  style="background-color:grey;"/> </td> "; 
                       echo '<td><input class="text" onfocus="this.select();" type="text" maxlength="3" size="3" name="monto'.$i.'" value="'.$row[3] .'"style="background-color:grey;"></td>';
                      
                      
                        if ( fmod($it, 3) == 0 )
                             {echo " </tr> <tr>"; }
                                            
                    } 
                      ?>
 
 
 
  
 
  <!-- Hasta Aqui las filas armadas via el FOR------------------------------>
 
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
            </div>

        </div>

    </div>

 </div>
 
 <!-- Hasta Aqui CAJON TEMP VIA FORX------------------------------------------------------------------------------------------>

 
 
   <!--  DESDE AQUI JARABE J1  --------------------------->
 

 <a name="j1"></a>
<br></br>
     <h2>Stock Jarabe 1 </h2> 
     
    <div class="row text-center">
         <div class="table-responsive table-bordered">          
 

<h3></h3>
<div class="row panels-row">
  <div class="col-xs-12 col-sm-12 col-md-12">

      <div class="panel-body">


 <form action="guardarStockJ1.php" method="post" style="bg-5" align="center"   ">    
  
 <!--<table class="table table-striped col3">-->
<table class="table"  >
          <caption></caption>
<thead>
  <tr> 
   <th>Producto</th>
    <th>Stock</th>
    <th>Nuevo</th>
    <th>Producto</th>
    <th>Stock</th>
    <th>Nuevo</th>
     <th>Producto</th>
    <th>Stock</th>
    <th>Nuevo</th>
  </tr>
</thead>

<tbody>


<tr>
  
 
   <?php  
              $it = 0;
              for($i=2150; $i<2250; $i++)     
              
                 {   //   $query = " SELECT id, Nombre, Cant_Max, Stock FROM `medicamentos` ";
                     $it++;
                       $query = "  SELECT * FROM `medicamentos` WHERE id = $i ";
                       $result = mysql_query($query);
                       $count = mysql_num_rows($result);

                   
                  
                      $row = mysql_fetch_row($result);
                      
                       echo "  <td> ".$row[1] ." </td> ";
                        echo " <td> ".$row[3] ."</td> ";
                     //  echo " <td>  ".$row[4] ."</td> ";
                      // echo "  <td><input type="text" name="monto10" maxlength="2" size="2" value="".$row[4] . " " style="background-color:grey;"/> </td>  ";
                      // echo "  <td><input type="text" name="monto10" maxlength="2" size="2"  style="background-color:grey;"/> </td> "; 
                       echo '<td><input class="text" onfocus="this.select();" type="text" maxlength="3" size="3" name="monto'.$i.'" value="'.$row[3] .'"style="background-color:grey;"></td>';
                      
                      
                        if ( fmod($it, 3) == 0 )
                             {echo " </tr> <tr>"; }
                                            
                    } 
                      ?>
 
 
 
  
 
  <!-- Hasta Aqui las filas armadas via el FOR------------------------------>
 
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
            </div>

        </div>

    </div>

 </div>
 
 <!-- Hasta Aqui JARABE J1 VIA FORX------------------------------------------------------------------------------------------>

 
 
    <!--  DESDE AQUI JARABE J2  --------------------------->
 

 <a name="j2"></a>
<br></br>
     <h2>Stock Jarabe 2 </h2> 
     
    <div class="row text-center">
         <div class="table-responsive table-bordered">          
 

<h3></h3>
<div class="row panels-row">
  <div class="col-xs-12 col-sm-12 col-md-12">

      <div class="panel-body">


 <form action="guardarStockJ2.php" method="post" style="bg-5" align="center"   ">    
  
 <!--<table class="table table-striped col3">-->
<table class="table"  >
          <caption></caption>
<thead>
  <tr> 
   <th>Producto</th>
    <th>Stock</th>
    <th>Nuevo</th>
    <th>Producto</th>
    <th>Stock</th>
    <th>Nuevo</th>
     <th>Producto</th>
    <th>Stock</th>
    <th>Nuevo</th>
     <th>Producto</th>
    <th>Stock</th>
    <th>Nuevo</th>
  </tr>
</thead>

<tbody>


<tr>
  
 
   <?php  
              $it = 0;
              for($i=2250; $i<2350; $i++)     
              
                 {   //   $query = " SELECT id, Nombre, Cant_Max, Stock FROM `medicamentos` ";
                     $it++;
                       $query = "  SELECT * FROM `medicamentos` WHERE id = $i ";
                       $result = mysql_query($query);
                       $count = mysql_num_rows($result);

                   
                  
                      $row = mysql_fetch_row($result);
                      
                       echo "<td> ".$row[1] ." </td>";
                        echo "<td> ".$row[3] ."</td>";
                     //  echo " <td>  ".$row[4] ."</td> ";
                      // echo "  <td><input type="text" name="monto10" maxlength="2" size="2" value="".$row[4] . " " style="background-color:grey;"/> </td>  ";
                      // echo "  <td><input type="text" name="monto10" maxlength="2" size="2"  style="background-color:grey;"/> </td> "; 
                       echo '<td><input class="text" onfocus="this.select();" type="text" maxlength="3" size="3" name="monto'.$i.'" value="'.$row[3] .'"style="background-color:grey;"></td>';
                      
                      
                        if ( fmod($it, 4) == 0 )
                             {echo " </tr> <tr>"; }
                                            
                    } 
                      ?>
 
 
 
  
 
  <!-- Hasta Aqui las filas armadas via el FOR------------------------------>
 
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
            </div>

        </div>

    </div>

 </div>
 
 <!-- Hasta Aqui JARABE J2 VIA FORX------------------------------------------------------------------------------------------>

 
     <!--  DESDE AQUI JARABE J3  --------------------------->
 

 <a name="j3"></a>
<br></br>
     <h2>Stock Jarabe 3 </h2> 
     
    <div class="row text-center">
         <div class="table-responsive table-bordered">          
 

<h3></h3>
<div class="row panels-row">
  <div class="col-xs-12 col-sm-12 col-md-12">

      <div class="panel-body">


 <form action="guardarStockJ3.php" method="post" style="bg-5" align="center"   ">    
  
 <!--<table class="table table-striped col3">-->
<table class="table"  >
          <caption></caption>
<thead>
  <tr> 
   <th>Producto</th>
    <th>Stock</th>
    <th>Nuevo</th>
    <th>Producto</th>
    <th>Stock</th>
    <th>Nuevo</th>
     <th>Producto</th>
    <th>Stock</th>
    <th>Nuevo</th>
     <th>Producto</th>
    <th>Stock</th>
    <th>Nuevo</th>
  </tr>
</thead>

<tbody>


<tr>
  
 
   <?php  
              $it = 0;
              for($i=2350; $i<2450; $i++)     
              
                 {   //   $query = " SELECT id, Nombre, Cant_Max, Stock FROM `medicamentos` ";
                     $it++;
                       $query = "  SELECT * FROM `medicamentos` WHERE id = $i ";
                       $result = mysql_query($query);
                       $count = mysql_num_rows($result);

                   
                  
                      $row = mysql_fetch_row($result);
                      
                       echo "<td> ".$row[1] ." </td>";
                        echo "<td> ".$row[3] ."</td>";
                     //  echo " <td>  ".$row[4] ."</td> ";
                      // echo "  <td><input type="text" name="monto10" maxlength="2" size="2" value="".$row[4] . " " style="background-color:grey;"/> </td>  ";
                      // echo "  <td><input type="text" name="monto10" maxlength="2" size="2"  style="background-color:grey;"/> </td> "; 
                       echo '<td><input class="text" onfocus="this.select();" type="text" maxlength="3" size="3" name="monto'.$i.'" value="'.$row[3] .'"style="background-color:grey;"></td>';
                      
                      
                        if ( fmod($it, 4) == 0 )
                             {echo " </tr> <tr>"; }
                                            
                    } 
                      ?>
 
 
 
  
 
  <!-- Hasta Aqui las filas armadas via el FOR------------------------------>
 
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
            </div>

        </div>

    </div>

 </div>
 
 <!-- Hasta Aqui JARABE J3 VIA FORX------------------------------------------------------------------------------------------>

 
 
 
     <!--  DESDE AQUI JARABE J4  --------------------------->
 

 <a name="j4"></a>
<br></br>
     <h2>Stock Jarabe 4 </h2> 
     
    <div class="row text-center">
         <div class="table-responsive table-bordered">          
 

<h3></h3>
<div class="row panels-row">
  <div class="col-xs-12 col-sm-12 col-md-12">

      <div class="panel-body">


 <form action="guardarStockJ4.php" method="post" style="bg-5" align="center"   ">    
  
 <!--<table class="table table-striped col3">-->
<table class="table"  >
          <caption></caption>
<thead>
  <tr> 
    <th>Producto</th>
    <th>Stock</th>
    <th>Nuevo</th>
    <th>Producto</th>
    <th>Stock</th>
    <th>Nuevo</th>
     <th>Producto</th>
    <th>Stock</th>
    <th>Nuevo</th>
     <th>Producto</th>
    <th>Stock</th>
    <th>Nuevo</th>
  </tr>
</thead>

<tbody>


<tr>
  
 
   <?php  
              $it = 0;
              for($i=2450; $i<2550; $i++)     
              
                 {   //   $query = " SELECT id, Nombre, Cant_Max, Stock FROM `medicamentos` ";
                     $it++;
                       $query = "  SELECT * FROM `medicamentos` WHERE id = $i ";
                       $result = mysql_query($query);
                       $count = mysql_num_rows($result);

                   
                  
                      $row = mysql_fetch_row($result);
                      
                       echo "<td> ".$row[1] ." </td>";
                        echo "<td> ".$row[3] ."</td>";
                     //  echo " <td>  ".$row[4] ."</td> ";
                      // echo "  <td><input type="text" name="monto10" maxlength="2" size="2" value="".$row[4] . " " style="background-color:grey;"/> </td>  ";
                      // echo "  <td><input type="text" name="monto10" maxlength="2" size="2"  style="background-color:grey;"/> </td> "; 
                       echo '<td><input class="text" onfocus="this.select();" type="text" maxlength="3" size="3" name="monto'.$i.'" value="'.$row[3] .'"style="background-color:grey;"></td>';
                      
                      
                        if ( fmod($it, 4) == 0 )
                             {echo " </tr> <tr>"; }
                                            
                    } 
                      ?>
 
 
 
  
 
  <!-- Hasta Aqui las filas armadas via el FOR------------------------------>
 
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
            </div>

        </div>

    </div>

 </div>
 
 <!-- Hasta Aqui JARABE J4 VIA FORX------------------------------------------------------------------------------------------>



<!--  DESDE AQUI CADA Roemmers  --------------------------->
 

 <a name="Roemmers"></a>
<br></br>
     <h2>Stock Roemmers </h2> 
     
    <div class="row text-center">
         <div class="table-responsive table-bordered">          
 

<h3></h3>
<div class="row panels-row">
  <div class="col-xs-12 col-sm-12 col-md-12">

      <div class="panel-body">


 <form action="guardarStockR.php" method="post" style="bg-5" align="center"   ">    
  
 <!--<table class="table table-striped col3">-->
<table class="table"  >
          <caption></caption>
<thead>
  <tr> 
   <th>Producto</th>
    <th>Stock</th>
    <th>Nuevo</th>
    <th>Producto</th>
    <th>Stock</th>
    <th>Nuevo</th>
     <th>Producto</th>
    <th>Stock</th>
    <th>Nuevo</th>
      
  </tr>
</thead>

<tbody>


<tr>
  
 
   <?php  
              $it = 0;
              for($i=2550; $i<2700; $i++)     
              
                 {   //   $query = " SELECT id, Nombre, Cant_Max, Stock FROM `medicamentos` ";
                     $it++;
                       $query = "  SELECT * FROM `medicamentos` WHERE id = $i ";
                       $result = mysql_query($query);
                       $count = mysql_num_rows($result);

                   
                  
                      $row = mysql_fetch_row($result);
                      
                       echo "  <td> ".$row[1] ." </td> ";
                        echo " <td> ".$row[3] ."</td> ";
                     //  echo " <td>  ".$row[4] ."</td> ";
                      // echo "  <td><input type="text" name="monto10" maxlength="2" size="2" value="".$row[4] . " " style="background-color:grey;"/> </td>  ";
                      // echo "  <td><input type="text" name="monto10" maxlength="2" size="2"  style="background-color:grey;"/> </td> "; 
                       echo '<td><input class="text" onfocus="this.select();" type="text" maxlength="3" size="3" name="monto'.$i.'" value="'.$row[3] .'"style="background-color:grey;"></td>';
                      
                      
                        if ( fmod($it, 3) == 0 )
                             {echo " </tr> <tr>"; }
                                            
                    } 
                      ?>
 
 
 
  
 
  <!-- Hasta Aqui las filas armadas via el FOR------------------------------>
 
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
            </div>

        </div>

    </div>

 </div>
 
 <!-- Hasta Aqui ROEMMERS VIA FORX------------------------------------------------------------------------------------------>

<!--  DESDE AQUI CADA GENERICOS  --------------------------->
 

 <a name="Genericos"></a>
<br></br>
     <h2>Stock Genericos </h2> 
     
    <div class="row text-center">
         <div class="table-responsive table-bordered">          
 

<h3></h3>
<div class="row panels-row">
  <div class="col-xs-12 col-sm-12 col-md-12">

      <div class="panel-body">


 <form action="guardarStockG.php" method="post" style="bg-5" align="center"   ">    
  
 <!--<table class="table table-striped col3">-->
<table class="table"  >
          <caption></caption>
<thead>
  <tr> 
  <th>Producto</th>
    <th>Stock</th>
    <th>Nuevo</th>
    <th>Producto</th>
    <th>Stock</th>
    <th>Nuevo</th>
     <th>Producto</th>
    <th>Stock</th>
    <th>Nuevo</th>
     
  </tr>
</thead>

<tbody>


<tr>
  
 
   <?php  
              $it = 0;
              for($i=2700; $i<2856; $i++)     
              
                 {   //   $query = " SELECT id, Nombre, Cant_Max, Stock FROM `medicamentos` ";
                     $it++;
                       $query = "  SELECT * FROM `medicamentos` WHERE id = $i ";
                       $result = mysql_query($query);
                       $count = mysql_num_rows($result);

                   
                  
                      $row = mysql_fetch_row($result);
                      
                       echo "  <td> ".$row[1] ." </td> ";
                        echo " <td> ".$row[3] ."</td> ";
                     //  echo " <td>  ".$row[4] ."</td> ";
                      // echo "  <td><input type="text" name="monto10" maxlength="2" size="2" value="".$row[4] . " " style="background-color:grey;"/> </td>  ";
                      // echo "  <td><input type="text" name="monto10" maxlength="2" size="2"  style="background-color:grey;"/> </td> "; 
                       echo '<td><input class="text" onfocus="this.select();" type="text" maxlength="3" size="3" name="monto'.$i.'" value="'.$row[3] .'"style="background-color:grey;"></td>';
                      
                      
                        if ( fmod($it, 3) == 0 )
                             {echo " </tr> <tr>"; }
                                            
                    } 
                      ?>
 
 
 
  
 
  <!-- Hasta Aqui las filas armadas via el FOR------------------------------>
 
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
            </div>

        </div>

    </div>

 </div>
 
 <!-- Hasta Aqui GENERICOS VIA FORX------------------------------------------------------------------------------------------>

<!--  DESDE AQUI CADA GENERICOS  --------------------------->
 

 <a name="GP"></a>
<br></br>
     <h2>Stock Genericos Pami </h2> 
     
    <div class="row text-center">
         <div class="table-responsive table-bordered">          
 

<h3></h3>
<div class="row panels-row">
  <div class="col-xs-12 col-sm-12 col-md-12">

      <div class="panel-body">


 <form action="guardarStockGP.php" method="post" style="bg-5" align="center"   ">    
  
 <!--<table class="table table-striped col3">-->
<table class="table"  >
          <caption></caption>
<thead>
  <tr> 
  <th>Producto</th>
    <th>Stock</th>
    <th>Nuevo</th>
    <th>Producto</th>
    <th>Stock</th>
    <th>Nuevo</th>
     <th>Producto</th>
    <th>Stock</th>
    <th>Nuevo</th>
     
  </tr>
</thead>

<tbody>


<tr>
  
 
   <?php  
              $it = 0;
              for($i=3300; $i<3420; $i++)     
              
                 {   //   $query = " SELECT id, Nombre, Cant_Max, Stock FROM `medicamentos` ";
                     $it++;
                       $query = "  SELECT * FROM `medicamentos` WHERE id = $i ";
                       $result = mysql_query($query);
                       $count = mysql_num_rows($result);

                   
                  
                      $row = mysql_fetch_row($result);
                      
                       echo "  <td> ".$row[1] ." </td> ";
                        echo " <td> ".$row[3] ."</td> ";
                     //  echo " <td>  ".$row[4] ."</td> ";
                      // echo "  <td><input type="text" name="monto10" maxlength="2" size="2" value="".$row[4] . " " style="background-color:grey;"/> </td>  ";
                      // echo "  <td><input type="text" name="monto10" maxlength="2" size="2"  style="background-color:grey;"/> </td> "; 
                       echo '<td><input class="text" onfocus="this.select();" type="text" maxlength="3" size="3" name="monto'.$i.'" value="'.$row[3] .'"style="background-color:grey;"></td>';
                      
                      
                        if ( fmod($it, 3) == 0 )
                             {echo " </tr> <tr>"; }
                                            
                    } 
                      ?>
 
 
 
  
 
  <!-- Hasta Aqui las filas armadas via el FOR------------------------------>
 
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
            </div>

        </div>

    </div>

 </div>
 
 <!-- Hasta Aqui GENERICOS PAMI FORX------------------------------------------------------------------------------------------>



 <!--  DESDE AQUI HELADERA  --------------------------->
 

 <a name="h1"></a>
<br></br>
     <h2>Stock Heladeras </h2> 
     
    <div class="row text-center">
         <div class="table-responsive table-bordered">          
 

<h3></h3>
<div class="row panels-row">
  <div class="col-xs-12 col-sm-12 col-md-12">

      <div class="panel-body">


 <form action="guardarStockH.php" method="post" style="bg-5" align="center"   ">    
  
 <!--<table class="table table-striped col3">-->
<table class="table"  >
          <caption></caption>
<thead>
  <tr> 
  <th>Producto</th>
    <th>Stock</th>
    <th>Nuevo</th>
    <th>Producto</th>
    <th>Stock</th>
    <th>Nuevo</th>
     <th>Producto</th>
    <th>Stock</th>
    <th>Nuevo</th>
     
  </tr>
</thead>

<tbody>


<tr>
  
 
   <?php  
              $it = 0;
              for($i=2900; $i<3010; $i++)     
              
                 {   //   $query = " SELECT id, Nombre, Cant_Max, Stock FROM `medicamentos` ";
                     $it++;
                       $query = "  SELECT * FROM `medicamentos` WHERE id = $i ";
                       $result = mysql_query($query);
                       $count = mysql_num_rows($result);

                   
                  
                      $row = mysql_fetch_row($result);
                      
                       echo "  <td> ".$row[1] ." </td> ";
                        echo " <td> ".$row[3] ."</td> ";
                     //  echo " <td>  ".$row[4] ."</td> ";
                      // echo "  <td><input type="text" name="monto10" maxlength="2" size="2" value="".$row[4] . " " style="background-color:grey;"/> </td>  ";
                      // echo "  <td><input type="text" name="monto10" maxlength="2" size="2"  style="background-color:grey;"/> </td> "; 
                       echo '<td><input class="text" onfocus="this.select();" type="text" maxlength="3" size="3" name="monto'.$i.'" value="'.$row[3] .'"style="background-color:grey;"></td>';
                      
                      
                        if ( fmod($it, 3) == 0 )
                             {echo " </tr> <tr>"; }
                                            
                    } 
                      ?>
 
 
 
  
 
  <!-- Hasta Aqui las filas armadas via el FOR------------------------------>
 
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
            </div>

        </div>

    </div>

 </div>
 
 <!-- Hasta Aqui HELADERA VIA FORX------------------------------------------------------------------------------------------>


 <!--  DESDE AQUI MOSTRADOR  --------------------------->
 

 <a name="m1"></a>
<br></br>
     <h2>Stock Mostrador </h2> 
     
    <div class="row text-center">
         <div class="table-responsive table-bordered">          
 

<h3></h3>
<div class="row panels-row">
  <div class="col-xs-12 col-sm-12 col-md-12">

      <div class="panel-body">


 <form action="guardarStockM.php" method="post" style="bg-5" align="center"   ">    
  
 <!--<table class="table table-striped col3">-->
<table class="table"  >
          <caption></caption>
<thead>
  <tr> 
  <th>Producto</th>
    <th>Stock</th>
    <th>Nuevo</th>
    <th>Producto</th>
    <th>Stock</th>
    <th>Nuevo</th>
     <th>Producto</th>
    <th>Stock</th>
    <th>Nuevo</th>
     
  </tr>
</thead>

<tbody>


<tr>
  
 
   <?php  
              $it = 0;
              for($i=3100; $i<3190; $i++)     
              
                 {   //   $query = " SELECT id, Nombre, Cant_Max, Stock FROM `medicamentos` ";
                     $it++;
                       $query = "  SELECT * FROM `medicamentos` WHERE id = $i ";
                       $result = mysql_query($query);
                       $count = mysql_num_rows($result);

                   
                  
                      $row = mysql_fetch_row($result);
                      
                       echo "  <td> ".$row[1] ." </td> ";
                        echo " <td> ".$row[3] ."</td> ";
                     //  echo " <td>  ".$row[4] ."</td> ";
                      // echo "  <td><input type="text" name="monto10" maxlength="2" size="2" value="".$row[4] . " " style="background-color:grey;"/> </td>  ";
                      // echo "  <td><input type="text" name="monto10" maxlength="2" size="2"  style="background-color:grey;"/> </td> "; 
                       echo '<td><input class="text" onfocus="this.select();" type="text" maxlength="3" size="3" name="monto'.$i.'" value="'.$row[3] .'"style="background-color:grey;"></td>';
                      
                      
                        if ( fmod($it, 3) == 0 )
                             {echo " </tr> <tr>"; }
                                            
                    } 
                      ?>
 
 
 
  
 
  <!-- Hasta Aqui las filas armadas via el FOR------------------------------>
 
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
            </div>

        </div>

    </div>

 </div>
 
 <!-- Hasta Aqui Mostrador VIA FORX------------------------------------------------------------------------------------------>



<!--  DESDE AQUI Blistera  --------------------------->
 

 <a name="b1"></a>
<br></br>
     <h2>Stock Blistera Comp Vit</h2> 
     
    <div class="row text-center">
         <div class="table-responsive table-bordered">          
 

<h3></h3>
<div class="row panels-row">
  <div class="col-xs-12 col-sm-12 col-md-12">

      <div class="panel-body">


 <form action="guardarStockB.php" method="post" style="bg-5" align="center"   ">    
  
 <!--<table class="table table-striped col3">-->
<table class="table"  >
          <caption></caption>
<thead>
  <tr> 
  <th>Producto</th>
    <th>Stock</th>
    <th>Nuevo</th>
    <th>Producto</th>
    <th>Stock</th>
    <th>Nuevo</th>
     <th>Producto</th>
    <th>Stock</th>
    <th>Nuevo</th>
     
  </tr>
</thead>

<tbody>


<tr>
  
 
   <?php  
              $it = 0;
              for($i=3200; $i<3290; $i++)     
              
                 {   //   $query = " SELECT id, Nombre, Cant_Max, Stock FROM `medicamentos` ";
                     $it++;
                       $query = "  SELECT * FROM `medicamentos` WHERE id = $i ";
                       $result = mysql_query($query);
                       $count = mysql_num_rows($result);

                   
                  
                      $row = mysql_fetch_row($result);
                      
                       echo "  <td> ".$row[1] ." </td> ";
                        echo " <td> ".$row[3] ."</td> ";
                     //  echo " <td>  ".$row[4] ."</td> ";
                      // echo "  <td><input type="text" name="monto10" maxlength="2" size="2" value="".$row[4] . " " style="background-color:grey;"/> </td>  ";
                      // echo "  <td><input type="text" name="monto10" maxlength="2" size="2"  style="background-color:grey;"/> </td> "; 
                       echo '<td><input class="text" onfocus="this.select();" type="text" maxlength="3" size="3" name="monto'.$i.'" value="'.$row[3] .'"style="background-color:grey;"></td>';
                      
                      
                        if ( fmod($it, 3) == 0 )
                             {echo " </tr> <tr>"; }
                                            
                    } 
                      ?>
 
 
 
  
 
  <!-- Hasta Aqui las filas armadas via el FOR------------------------------>
 
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
            </div>

        </div>

    </div>

 </div>
 
 <!-- Hasta Aqui Blistera VIA FORX------------------------------------------------------------------------------------------>







 
  </div>
    </div>
 </div>


 
   <footer class="container-fluid2 bg-4 text-center">
  <p>Southen Webs  </p> 
      <p>  Copyright © 2002-2021 farmastock - Todos los derechos reservados.</p>

        

</footer>
</body>
</html>
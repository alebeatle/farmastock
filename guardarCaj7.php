

<?php

include_once 'dbconnect.php';
    
    ?>
          <script type="text/javascript">
          alert('Vine a guardar  GuardarCAJ7.php');
          </script>
          <?php
   
  
    for($i=6100; $i<6228; $i++)  // Aqui radica la magia que lo hace para el CAJON 3, pues sabemos el "rango de id que usa ese cajon 220 a 300
    {
     // $i = 2;
      $mon = "monto";
      $ruta ="$mon$i";
    $monto = $_POST[$ruta];
    $sql_query = "UPDATE medicamentos SET faltan = '$monto' WHERE id=$i"; 
       if(mysql_query($sql_query))
          {   
         
          }
       else
       {
          ?>
          <script type="text/javascript">
          //alert('Ocurrio un ERROR en GuardarcAJON7');
          alert('Ocurrio un ERROR en GuardarCajon 7 con msj' . mysql_error());
          </script>
          <?php
       }
     }  
         ?>
  <script type="text/javascript">
  alert('Cajon 7 Salvado');
  window.location.href='index.php';
  </script>
  <?php// sql query execution function
 






?>
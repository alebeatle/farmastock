


<?php

include_once 'dbconnect.php';
    
    ?>
          <script type="text/javascript">
          alert('Vine a guardar en GuardarC18.php');
          </script>
          <?php
   
  
    for($i=2000; $i<2150; $i++)  // Aqui radica la magia que lo hace para el CAJON 3, pues sabemos el "rango de id que usa ese cajon 220 a 300
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
          alert('Ocurrio un ERROR en GuardarC18');
          </script>
          <?php
       }
     }  
         ?>
  <script type="text/javascript">
  //alert('Cajon X Salvado');
  window.location.href='index.php';
  </script>
  <?php// sql query execution function
 






?>



<?php

include_once 'dbconnect.php';
    
    ?>
  <script type="text/javascript">
  alert('Comenzamos a guardar Stock de cajon 4 ');
  
  </script>
  <?php
  
    for($i=3500; $i<3636; $i++)  // Aqui radica la magia que lo hace para el CAJON 1, pues sabemos el "rango de id que usa ese cajon 1 a 100
    {
     // $i = 2;
      $mon = "monto";
      $ruta ="$mon$i";
    $monto = $_POST[$ruta];
    $sql_query = "UPDATE medicamentos SET stock = '$monto' WHERE id=$i";  // 
       if(mysql_query($sql_query))
          {   
         
          }
       else
       {
          ?>
          <script type="text/javascript">
          alert('Ocurrio un ERROR en GuardarStock4');
          </script>
          <?php
       }
     }  
         ?>
  <script type="text/javascript">
  alert('Stock Cajon 4 Salvado');
  window.location.href='EdicionStock.php';
  </script>
  <?php// sql query execution function
 






?>



<?php

include_once 'dbconnect.php';
    
    ?>
  <script type="text/javascript">
  alert('Comenzamos a guardar Max de Heladera ');
  
  </script>
  <?php
  
    for($i=2900; $i<3010; $i++)  // Aqui radica la magia que lo hace para el CAJON 1, pues sabemos el "rango de id que usa ese cajon 1 a 100
    {
     // $i = 2;
      $mon = "monto";
      $ruta ="$mon$i";
    $monto = $_POST[$ruta];
    $sql_query = "UPDATE medicamentos SET Cant_Max = '$monto' WHERE id=$i";  // 
       if(mysql_query($sql_query))
          {   
         
          }
       else
       {
          ?>
          <script type="text/javascript">
          alert('Ocurrio un ERROR en GuardarMaxH');
          </script>
          <?php
       }
     }  
         ?>
  <script type="text/javascript">
  alert('Max Heladera Salvado');
  window.location.href='EdicionMax.php';
  </script>
  <?php// sql query execution function
 






?>
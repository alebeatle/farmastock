<?php

include_once 'dbconnect.php';
    
    ?>
  <script type="text/javascript">
  alert('Comenzamos a guardar cajon 1 desde archivo remoto');
  
  </script>
  <?php
  
   $monto = $_POST['monto2'];
   $sql_query = "UPDATE medicamentos SET faltan = '$monto' WHERE id=2"; 
   if(mysql_query($sql_query))
    {   ?>
        <script type="text/javascript">
        alert('actualizamos con id 2 en guardar1.php');
  
        </script>
        <?php
        $monto = $_POST['monto3'];
        $sql_query = "UPDATE medicamentos SET faltan = '$monto' WHERE id=3"; 
        if(mysql_query($sql_query))
        {    
            ?>
            <script type="text/javascript">
            alert('actualizamos con id 3');
  
            </script>
            <?php
            $monto = $_POST['monto4'];
            $sql_query = "UPDATE medicamentos SET faltan = '$monto' WHERE id=4"; 
            if(mysql_query($sql_query))
            {
  
            }
        }
    
 }
 else
 {
  ?>
  <script type="text/javascript">
  alert('Ocurrio un ERROR en Guardar1');
  </script>
  <?php
 }
 ?>
  <script type="text/javascript">
  alert('Cajon 1 Salvado');
  window.location.href='mareas.php';
  </script>
  <?php// sql query execution function
 






?>
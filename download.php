
<?php

  $dateYear = date('Y');
                            $dateMonth = date('M');
                            $dateDay = date('d');

                             $ext =".txt";
                             $ini ="Faltantes-";
                             $ruta ="$ini$dateYear-$dateMonth-$dateDay$ext";
    $fileName =  $ruta;
  //  $filePath = 'files/'.$fileName;
  //  $filePath = $fileName;
   $filePath = $fileName;
    if(!empty($fileName) && file_exists($filePath)){
        // Define headers
       
        // Read the file
        readfile($filePath);
        exit;
    }else{
        echo 'El archivo que desa descargar no existe.';
    }


?>
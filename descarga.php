<?php


$dateYear = date('Y');
                            $dateMonth = date('M');
                            $dateDay = date('d');

                             $ext =".txt";
                             $ini ="Faltantes-";
                             $ruta ="$ini$dateYear-$dateMonth-$dateDay$ext";
   
       $f= $ruta;  

       $file = ("FarmaStock/$f");

       $filetype=filetype($file);

       $filename=basename($file);

       header ("Content-Type: ".$filetype);

       header ("Content-Length: ".filesize($file));

       header ("Content-Disposition: attachment; filename=".$filename);

       readfile($file);

  ?>	
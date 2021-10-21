<?php

   header("Content-type: application/vnd.ms-word");
   header("Content-Disposition: attachment; Filename=nombreDelArchivo.doc");

   $week_days = array ("Domingo", "Lunes", "Martes", "Miercoles", "Jueves", "Viernes", "Sabado");  
   $months = array ("", "Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre");  
   $year_now = date ("Y");  
   $month_now = date ("n");  
   $day_now = date ("j");  
   $week_day_now = date ("w");  
   //$date = $week_days[$week_day_now] . ", " . $day_now . " de " . $months[$month_now] . " de " . $year_now;
   $date = $day_now . " de " . $months[$month_now] . " de " . $year_now;
   
?>
 
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
 
   <head>
      <meta charset="utf-8" />
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" >
   </head>
 
   <body>
      
      <h2><strong>COMPUTECK </strong></h2>

      <h3 style="margin-top: 50px;">San José de Cúcuta <?php echo $date; ?></h3>
      
      <h3 style="text-align: center; margin-top: 50px;">Certifica</h3>
      <p style="text-align: justify; margin-top: 50px;">El señor, <strong><?php echo "$nombre"; ?></strong> identificado con <?php echo "cédula de ciudadanía"; ?> No. <strong><?php echo "1.090.474.784"; ?></strong>, labora en esta empresa desde el <?php echo "2021-10-19"?>, desempeñando el cargo de <strong><?php echo "INGENIERO DE SISTEMAS"; ?></strong>, con contrato a Término indefinido.</p>
      <p style="text-align: justify;">Durante su permanecía en el cargo ha demostrado buen desempeño y excelentes relaciones humanas.</p>
      <p style="text-align: justify;">Se expide la presente a petición del interesado el <?php echo $date; ?></p>
      <p style="margin-top: 100px;">Atentamente,</p>

      <p style="margin-top: 100px;">Ricardo</p>
      <hr align="left" noshade="noshade" size="2" width="15%" color="black">
      <p>Gerente General</p>
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
   </body>
</html>
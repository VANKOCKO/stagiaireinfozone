<?php 

     

?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>
           
         <table width="100%" border="2" cellspacing="2" cellspading="15" >
             <thead>
                       <th>A</th>
                       <th>B</th>
                       <th>C</th>
                       <th>D</th>
                       <th>E</th>
                       <th>F</th>
                       <th>G</th>
             </thead>     
             <tbody>
                     <?php for($k=0; $k<=10; $k++) { ?>
                            <tr>
                                     <?php for($k=0; $k<7; $k++) { ?>
                                             <td><input type="number" name="" id=""></td>
                                      <?php } ?>        
                            </tr>
                     <?php } ?>   
             </tbody>
        </table>
        <script src="" async defer></script>
    </body>
</html>
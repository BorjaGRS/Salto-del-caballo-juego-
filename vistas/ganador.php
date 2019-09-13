<?php 
if($resultado==1){
    $resultado="Enhorabuena has ganado";
}
else if($resultado==2){
    $resultado="Te ha ganado la IA, prueba otra vez";
}
 else {
    $resultado="Eso es trampa, tienes que reiniciar la partida";
}
?>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
            <style>
            form{
            
                width: 1600px;
                margin-left: 200px;
            }
            .nueva{
                margin-top: 100px;
                margin-left: 650px;
                text-decoration: none;
                padding: 10px;
                font-weight: 600;
                font-size: 20px;
                color: #ffffff;
                background-color: #1883ba;
                border-radius: 6px;
                border: 2px solid #0016b0;
                cursor: pointer;
            }
            h1{
                text-align: center;
                padding: 50px;
            }
        </style>
    </head>
    <body>
                
        <form action="/index.php" method="POST">
                
        <h1><?=$resultado?></h1>   
        <?php
       foreach ($tabla as $indfila => $columna) {
           foreach ($columna as $indcolumna => $casilla) { 
              if($casilla!=""){ ?>
        <input type="text" name="<?="tabla[$indfila][$indcolumna]"?>" value="<?=$casilla ?>" size="10" style="height: 40px; text-align:center; font-size: 25px;" />
              
              <?php }else { ?>
          <input type="text" name="<?="tabla[$indfila][$indcolumna]"?>" size="10" style="height: 40px; text-align:center; font-size: 25px;"/> 
      <?php }}}
       
        ?>
          <input class="nueva" type="submit" name="volver" value="Empezar nueva partida"/>
        </form>
    </body>
</html>

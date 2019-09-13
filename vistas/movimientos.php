<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
            <style>
            form{
            
                width: 1600px;
                margin-left: 200px;
            }
            .mov{
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
        </style>
    </head>
    <body>
          
        <form action="/index.php" method="POST">
               
        <?php
        foreach ($tablero as $fil => $column) { 
            foreach($column as $col => $casilla){
                if($tablero[$fil][$col]=="*"){ ?>
                  
            <input type="hidden" value="<?=$fil?>" name="fila"/>
            <input type="hidden" value="<?=$col?>" name="colum"/>
            <?php 
        }}} ?>
        <div class="normas">
            <h2>*Normas del Juego*</h2>
            <p>- Movimiento clasico del caballo de ajedrez.</p>
            <p>- Marca con un * donde quieras moverte y valida el movimiento.</p>
            <p>- Intenta comer al otro caballo para ganar.</p>           
            <p>- Si haces movimiento falso tienes que empezar otra partida.</p>

        </div>
        <?php
       foreach ($tablero as $indfila => $columna) {
           foreach ($columna as $indcolumna => $casilla) { 
              if($casilla!=""){ ?>
        <input type="text" name="<?="tabla[$indfila][$indcolumna]"?>" value="<?=$casilla ?>" size="10" style="height: 40px; text-align:center; font-size: 25px;"/>
              
              <?php }else { ?>
          <input type="text" name="<?="tabla[$indfila][$indcolumna]"?>" size="10" style="height: 40px; text-align:center; font-size: 25px;"/> 
      <?php }}}
       
        ?>
          <br>
          <input class="mov" type="submit" name="jugada" value="Validar movimiento"/>
        </form>
    </body>
</html>

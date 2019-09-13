<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <style>
            body{
                border: 1px solid;
            }
            h1{
                text-align: center;
                margin-top: 50px;
                font-size: 80px;
            }
            img{
                padding-left: 50px;
            }
            .caballo{
                margin-left: 650px; 
            }
            .jugar{
                margin-top: 150px;
                margin-left: 870px;
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
        <h1>Juego salto del caballo</h1>
        <img class="caballo" src="../img/caballo2.png">
        <img src="../img/caballo1.png">
        <form action="/index.php" method="POST">
        <?php
        foreach ($tablero as $indfila => $columna) {
            foreach ($columna as $indcolumna => $casilla) { ?>
            <input type="hidden" name=<?="tablero[$indfila][$indcolumna]"?>/>
           <?php }
        }
        ?>
            <input class="jugar" type="submit" name="jugar" value="Empezar a jugar"/>
        </form>
    </body>
</html>

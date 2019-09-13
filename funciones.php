<?php

function generacaballojugador($tablero, $jugador) {
    $posicion = [];
    $posicion[] = rand(0, 7);
    $posicion[] = rand(0, 7);


    if ($tablero[$posicion[0]][$posicion[1]] === "") {
        $tablero[$posicion[0]][$posicion[1]] = $jugador;
    }
    return $tablero;
}

function generacaballoia($tablero, $ia) {

    foreach ($tablero as $fila => $columna) {
        foreach ($columna as $colum => $casilla) {

            $fila = rand(0, 7);
            $colum = rand(0, 7);

            if ($tablero[$fila][$colum] != "*") {
                $tablero[$fila][$colum] = $ia;
                return $tablero;
            }
        }
    }
}

function comprobarmovimiento($tablero, $pos) {
    $nuevaPos = [[$pos[0]], [$pos[1]]];

    $movimientos[] = [[$pos[0] + 2], [$pos[1] + 1]];
    $movimientos[] = [[$pos[0] + 2], [$pos[1] - 1]];
    $movimientos[] = [[$pos[0] - 2], [$pos[1] + 1]];
    $movimientos[] = [[$pos[0] - 2], [$pos[1] - 1]];
    $movimientos[] = [[$pos[0] - 1], [$pos[1] + 2]];
    $movimientos[] = [[$pos[0] + 1], [$pos[1] + 2]];
    $movimientos[] = [[$pos[0] + 1], [$pos[1] - 2]];
    $movimientos[] = [[$pos[0] - 1], [$pos[1] - 2]];

    foreach ($tablero as $indfila => $columna) {
        foreach ($columna as $indcolum => $casilla) {

            if ($indfila != $pos[0] && $indcolum != $pos[1] && $tablero[$indfila][$indcolum] == "*") {
                $nuevaPos = [[$indfila], [$indcolum]];
            }
        }
    }

    return in_array($nuevaPos, $movimientos);
}

function compruebaganador($tablero, $marca) {
    $resultado = true;

    foreach ($tablero as $indfila => $columna) {
        foreach ($columna as $indcolum => $casilla) {
            if ($casilla == $marca) {
                $resultado = false;
            }
        }
    }
    return $resultado;
}

function mueveia($tablero) {
    $movimientos;
    $movimientosvalidos;

    foreach ($tablero as $indfila => $columna) {
        foreach ($columna as $indcolum => $casilla) {
            if ($tablero[$indfila][$indcolum] == "+") {
                $pos = [$indfila, $indcolum];
                
                
    $movimientos[] = [$pos[0] + 2, $pos[1] + 1];
    $movimientos[] = [$pos[0] + 2, $pos[1] - 1];
    $movimientos[] = [$pos[0] - 2, $pos[1] + 1];
    $movimientos[] = [$pos[0] - 2, $pos[1] - 1];
    $movimientos[] = [$pos[0] - 1, $pos[1] + 2];
    $movimientos[] = [$pos[0] + 1, $pos[1] + 2];
    $movimientos[] = [$pos[0] + 1, $pos[1] - 2];
    $movimientos[] = [$pos[0] - 1, $pos[1] - 2];
    
    
    $movimientosvalidos= array_filter(array_map(function($a){
            if($a[0]>=0 && $a[1]<=7 && $a[0]<=7 && $a[1]>=0){
               return $a;
            }
    },$movimientos));
                
                
               /* if ($pos[0] <= 5 && $pos[1] <= 6) {
                    $movimientos[] = [$pos[0] + 2, $pos[1] + 1];
                }if ($pos[0] <= 5 && $pos[1] >= 1) {
                    $movimientos[] = [$pos[0] + 2, $pos[1] - 1];
                }
                if ($pos[0] >= 2 && $pos[1] <= 6) {
                    $movimientos[] = [$pos[0] - 2, $pos[1] + 1];
                }
                if ($pos[0] >= 2 && $pos[1] >= 1) {
                    $movimientos[] = [$pos[0] - 2, $pos[1] - 1];
                }
                if ($pos[1] <= 5 && $pos[0] >= 1) {
                    $movimientos[] = [$pos[0] - 1, $pos[1] + 2];
                }if ($pos[1] <= 5 && $pos[0] <= 6) {
                    $movimientos[] = [$pos[0] + 1, $pos[1] + 2];
                }
                if ($pos[1] >= 2 && $pos[0] <= 6) {
                    $movimientos[] = [$pos[0] + 1, $pos[1] - 2];
                }if ($pos[1] >= 2 && $pos[0] >= 1) {
                    $movimientos[] = [$pos[0] - 1, $pos[1] - 2];
                }*/


                foreach ($movimientosvalidos as $value) {
                     if ($tablero[$value[0]][$value[1]] === "*") {
                        $tablero[$value[0]][$value[1]] = "+";
                        $tablero[$pos[0]][$pos[1]] = "";
                        return $tablero;
                    }
                }
                foreach ($movimientosvalidos as $valor) {
                   if ($tablero[$valor[0]][$valor[1]] === "") {
                        $tablero[$valor[0]][$valor[1]] = "+";
                        $tablero[$pos[0]][$pos[1]] = "";
                        return $tablero;
                    }
                }
            }
        }
    }
}

function eliminarPos($tablero, $pos) {
    $tablero[$pos[0]][$pos[1]] = "";
    return $tablero;
}

?>
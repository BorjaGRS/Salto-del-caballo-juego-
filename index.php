<?php
include 'funciones.php';
if(empty($_POST) || isset($_POST['volver'])){
    
   $tablero= array_fill(0, 8, array_fill(0, 8, ""));
   
   include 'vistas/inicio.php'; 
    
}else if(isset ($_POST["jugar"])){
    $tablero=$_POST["tablero"];
    $tablero=generacaballojugador($tablero,"*");
    $tablero=generacaballoia($tablero, "+");
    
    include 'vistas/movimientos.php';
    
}else if(isset ($_POST["jugada"])){

$tabla=$_POST["tabla"];
$posicionjugador=[$_POST["fila"],$_POST["colum"]];
$resultado;

if(comprobarmovimiento($tabla,$posicionjugador)){
    $tabla=eliminarPos($tabla, $posicionjugador);
    if(compruebaganador($tabla, "+")){
        $resultado=1;
        include 'vistas/ganador.php';
    }
    else{
       $tablero=mueveia($tabla);
      if(compruebaganador($tablero,"*")){
        $resultado=2;
        include 'vistas/ganador.php';
      }else{
          include 'vistas/movimientos.php';
      }
    }
}else{
    $resultado=3;
    include 'vistas/ganador.php'; 
}

 }


<?php

//Respetando la arquitectura propuesta en clase.
//La función date() con el parametro 'D' nos devuelve las tres primeras letras del día
// de la semana en inglés: Mon, Tue, Wed, Thu, Fri, Sat, Sun.
//Con este pequeño código $dia_ingles = date('D'); tendremos el día en 
//la variable $dia_ingles.
//Mostrar el día en español por pantalla con el mensaje: "El día de la semana es: XXXX".


$dia_ingles = date('D');

$dia_ingles = date('D');
if ( $dia_ingles == 'Mon' ) {
    echo 'Lunes';
} else if ( $dia_ingles == 'Tue' ) {
   echo 'Martes';
} else if ( $dia_ingles == 'Wed' ) {
   echo 'Miércoles';
} else if ( $dia_ingles == 'Thu' ) {
   echo 'Jueves';
} else if ( $dia_ingles == 'Fri' ) {
   echo 'Viernes';
} else if ( $dia_ingles == 'Sat' ) {
   echo 'Sábado';
} else { //por descarte es domingo
   echo 'Domingo';
}

//switch ($dia_ingles) {
    //case 'Mon':
        //echo 'El día de la semana es:LUNES ';
        //break;
    // case 'Tue':
    //     echo 'El día de la semana es:MARTES ';
    //     break;
    // case 'Wed':
    //     echo 'El día de la semana es:MIERCOLES ';
    //     break;
    // case 'Thu':
    //     echo 'El día de la semana es:JUEVES ';
    //     break;
    // case 'Fri':
    //     echo 'El día de la semana es:VIERNES ';
    //     break;
    // case 'Sat':
    //     echo 'El día de la semana es:SABADO ';
    //     break;

    // default:
    //     echo 'El día de la semana es:Domingo ';
    //     break;
//}

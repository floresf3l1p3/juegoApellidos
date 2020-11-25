<?php
/**
 * Genera un arreglo de palabras para jugar
 * @return array
 */
function cargarPalabras(){
    //array $coleccionPalabras
     $coleccionPalabras = array(); //iicializamos el arreglo vacio
   $coleccionPalabras[0]= array("palabra"=> "papa" , "pista" => "se cultiva bajo tierra \n", "puntosPalabra"=>7);
   $coleccionPalabras[1]= array("palabra"=> "hepatitis" , "pista" => "enfermedad que inflama el higado \n", "puntosPalabra"=> 7);
   $coleccionPalabras[2]= array("palabra"=> "volkswagen" , "pista" => "marca de vehiculo \n", "puntosPalabra"=> 10);
   $coleccionPalabras[3]= array("palabra"=> "guitarra" , "pista" => " instrumento de cuerdas \n" , "puntosPalabra"=>10);
   $coleccionPalabras[4]= array("palabra"=> "raton" , "pista" => "  animal que le encanta el queso.. \n" , "puntosPalabra"=>10);
   $coleccionPalabras[5]= array("palabra"=> "fernet" , "pista" => " se toma con amigos \n" , "puntosPalabra"=>7);
   $coleccionPalabras[6]= array("palabra"=>  "internet" , "pista" => " conecta a las personas y es global \n" , "puntosPalabra"=>8);
   return $coleccionPalabras;
}




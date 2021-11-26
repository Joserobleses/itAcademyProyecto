<?php

namespace App\Http\Controllers;

//use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
//use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

use Illuminate\Http\Request;

class Controller extends BaseController
{
//    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    /**
     * Show the profile for a given user.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */


    public function datosSalida(Request $request)
    {
        // Validamos valores que aportan del formulario    
        $validated = $request->validate([
            'tamano_cuadrado_anchura' => 'numeric|required|max:100',
            'tamano_cuadrado_altura' => 'numeric|required|max:100',
            'coordenadas_iniciales_x' => 'numeric|required|max:100',
            'coordenadas_iniciales_y' => 'numeric|required|max:100',
            'orientacion_salida' => 'required|alpha|max:5',
            'ordenes' => 'required|alpha',
        ]);

        // guardamos valores de formulario para manipularlos

        $minput = $request->tamano_cuadrado_anchura;
        $minput2 = $request->tamano_cuadrado_altura;
        $minput3 = $request->coordenadas_iniciales_x;
        $minput4 = $request->coordenadas_iniciales_y;
        $minput5 = $request->orientacion_salida;
        $minput6 = $request->ordenes;

        // Convertimos cadena de formulario en un array
        
        $array = str_split(strtoupper($minput6));
        $acumula_orientacion_posicion_final="";
        $direccion="";
        $direccion=strtoupper($minput5);
        $pos_x=$minput3;
        $pos_y=$minput4;
        $coordenadas_finales_x="";
        $coordenadas_finales_y="";
        $fuera_cuadro="";
        
        
        //dd($minput);//if ($minput3 < 0) || ($minput3 > $minput) //$matriz = $minput6;        //$matriz[]= implode($minput6);
        //comprobar direccionalidad        // comprobar avance
        
        foreach ($array as &$valor) {
            switch ($valor) { 
                case "L":

                    
                    switch(strtoupper($direccion)){
                        case "NORTE" :
                            $direccion = "OESTE";
                            break;
        
                        case "ESTE" :
                            $direccion = "NORTE";
                            break;
                        case "SUR" :
                            $direccion = "ESTE";
                            break;
                        case "OESTE" :
                            $direccion = "SUR";
                            break;
                    }
                    break;
                case "R":
                    $orientacion_final = strtoupper($direccion);
                    switch($orientacion_final){
                        case "NORTE" :
                            $direccion = "ESTE";
                            break;

                        case "ESTE" :
                            $direccion = "SUR";
                            break;
                        case "SUR" :
                            $direccion = "OESTE";
                            break;
                        case "OESTE" :
                            $direccion = "NORTE";
                            break;
                    }

                    $acumula_orientacion_posicion_final .= "[ ".$pos_x." , ".$pos_y." ](".$direccion.") /// ";//dd($posicion_final.$orientacion_final);                    
                    
                    break;
                case "A": 
                    switch(strtoupper($direccion)){
                        case "NORTE" :
                            $pos_y+=1;
                            $direccion = "NORTE";
                            break;
    
                        case "ESTE" :
                            $pos_x+=1;
                            $direccion = "ESTE";
                            break;
                        case "SUR" :
                            $pos_y-=1;
                            $direccion = "SUR";
                            break;
                        case "OESTE" :
                            $pos_x-=1;
                            $direccion = "OESTE";
                            break;
                    }
                    
                    $acumula_orientacion_posicion_final .= "[ ".$pos_x." , ".$pos_y." ](".$direccion.") /// ";//dd($posicion_final.$orientacion_final);                    
                    $coordenadas_finales_x = $pos_x;
                    $coordenadas_finales_y = $pos_y;
                //return "[ ".$pos_x." , ".$pos_y." ] "."//".$direccion; 
                    break;        
            } //end switch valor

        } // end foreach


        unset($valor); 
        
        if ($coordenadas_finales_x < 0 || $coordenadas_finales_x > $minput) $fuera_cuadro="ERROR, ROVER FUERA DE CUADRO";
        if ($coordenadas_finales_y < 0 || $coordenadas_finales_y > $minput2) $fuera_cuadro="ERROR, ROVER FUERA DE CUADRO";
        if ($fuera_cuadro=="") $fuera_cuadro ="POSICION CORRECTA, ROVER DENTRO DE CUADRO";
        return view('welcome', [
            'tamano_cuadrado_anchura' => $minput,
            'tamano_cuadrado_altura' => $minput2,
            'coordenadas_iniciales_x' => $minput3,
            'coordenadas_iniciales_y' => $minput4,
            'orientacion_salida' => $minput5,
            'ordenes' => $minput6,
        //    'orientacion_final' => $orientacion_final,
        //    'posicion_final' => $posicion_final,
            'direccion' => $direccion,
            'pos_x' => $pos_x,
            'pos_y' => $pos_y,
            'acumula_orientacion_posicion_final' => $acumula_orientacion_posicion_final,
            
            'coordenadas_finales_x' => $coordenadas_finales_x,
            'coordenadas_finales_y' => $coordenadas_finales_y,
            'fuera_cuadro' => $fuera_cuadro/*,
            'movimientos1' => $movimientos1 */
        ]);
       
    } //end function data salida

} // end class

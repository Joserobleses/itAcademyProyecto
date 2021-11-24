<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

use Illuminate\Http\Request;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    /**
     * Show the profile for a given user.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */

    
    public function index()
    {
        
        /* 
        $bienvenido = 'Hola que tal';
        return view('welcome', [
            'bienvenido' => $bienvenido
        ]);
        */
       // return view('welcome');
    }

    public function datosSalida(Request $request)
    {
        
        $validated = $request->validate([
            'tamano_cuadrado_anchura' => 'numeric|required|max:100',
            'tamano_cuadrado_altura' => 'numeric|required|max:100',
            'coordenadas_iniciales_x' => 'numeric|required|max:100',
            'coordenadas_iniciales_y' => 'numeric|required|max:100',
            'orientacion_salida' => 'required|alpha|max:1',
            'ordenes' => 'required|alpha',
        ]);

    
        $orientacion = ["N","E","S","O"];
        $orientacion_final="";
        $posicion_actual="";
        $matriz[]="";

        $minput = $request->tamano_cuadrado_anchura;
        $minput2 = $request->tamano_cuadrado_altura;
        $minput3 = $request->coordenadas_iniciales_x;
        $minput4 = $request->coordenadas_iniciales_y;
        $minput5 = $request->orientacion_salida;
        $minput6 = $request->ordenes;//->all();
        
        //dd($minput);//if ($minput3 < 0) || ($minput3 > $minput) //$matriz = $minput6;        //$matriz[]= implode($minput6);
        //comprobar direccionalidad        // comprobar avance

        $array = str_split($minput6);
        
        $coordenadas_finales_x=0;
        $coordenadas_finales_y=0;

        $coordenadas_intermedias_x=$minput3;
        $coordenadas_intermedias_y=$minput4;

        $fuera_cuadro = "";




        foreach ($array as &$valor) {
            switch ($valor) { 
                case "l":
        
                    switch (strtoupper($minput5)){
                        case "N":
                            $puntoCardinal=3;
                            break;
                        case "E":
                            $puntoCardinal=0;
                            break;
                        case "S":
                            $puntoCardinal=1;
                            break;
                        case "O":
                            $puntoCardinal=2;
                            break;
                    }    
                    $orientacion_final = $orientacion[$puntoCardinal];
                    if ($orientacion_final=="") $orientacion_final = $minput5;
                    $coordenadas_finales_x = $coordenadas_intermedias_x;
                    $coordenadas_finales_y = $coordenadas_intermedias_y;
                    break;
                case "r":
                    switch (strtoupper($minput5)){
                        case "N":
                            $puntoCardinal=1;
                            break;
                        case "E":
                            $puntoCardinal=2;
                            break;
                        case "S":
                            $puntoCardinal=3;
                            break;
                        case "O":
                            $puntoCardinal=0;
                            break;
                    }    
                    $orientacion_final = $orientacion[$puntoCardinal];
                    if ($orientacion_final=="") $orientacion_final = $minput5;
                    $coordenadas_finales_x = $coordenadas_intermedias_x;
                    $coordenadas_finales_y = $coordenadas_intermedias_y;
                    break;
                case "a": 
                    if ($orientacion_final=="") $orientacion_final = $minput5;
                    switch (strtoupper($orientacion_final)){
            
                        case "E":
                            $coordenadas_finales_x = $coordenadas_intermedias_x;//dd($coordenadas_finales_x);
                            $coordenadas_finales_x = $coordenadas_finales_x + 1;
                            $coordenadas_intermedias_x=$coordenadas_finales_x;
                            $coordenadas_finales_y = $coordenadas_intermedias_y;
                            break;
                
                        case "O":
                
                            $coordenadas_finales_x = $coordenadas_intermedias_x;
                            $coordenadas_finales_x = $coordenadas_finales_x - 1;
                            $coordenadas_intermedias_x=$coordenadas_finales_x;
                            $coordenadas_finales_y = $coordenadas_intermedias_y;
                            break; 
                        default:
                            if ($orientacion_final=="") {
                                $orientacion_final = strtoupper($minput5);
                                $coordenadas_finales_x = $coordenadas_intermedias_x;
                                $coordenadas_finales_y = $coordenadas_intermedias_y;
                            }
                    } // end switch
                    switch (strtoupper($orientacion_final)){
                        case "N":
                        
                            $coordenadas_finales_y = $coordenadas_intermedias_y;//dd($coordenadas_finales_y);
                            $coordenadas_finales_y = $coordenadas_finales_y + 1;
                            $coordenadas_intermedias_y=$coordenadas_finales_y;
                            $coordenadas_finales_x = $coordenadas_intermedias_x;
                            break;
                    
                        case "S":
                        
                            $coordenadas_finales_y = $coordenadas_intermedias_y;
                            $coordenadas_finales_y = $coordenadas_finales_y - 1;
                            $coordenadas_intermedias_y=$coordenadas_finales_y;
                            $coordenadas_finales_x = $coordenadas_intermedias_x;
                            break;
                        default:
                            if ($orientacion_final=="") {
                                $orientacion_final = strtoupper($minput5);
                                $coordenadas_finales_x = $coordenadas_intermedias_x;
                                $coordenadas_finales_y = $coordenadas_intermedias_y;
                            }

                    } // end switch
                } // end switch valor
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
            'orientacion_final' => $orientacion_final,
            'matriz' => $matriz,
            'coordenadas_finales_x' => $coordenadas_finales_x,
            'coordenadas_finales_y' => $coordenadas_finales_y,
            'fuera_cuadro' => $fuera_cuadro
        ]);
       
    } //end function data salida

} // end class

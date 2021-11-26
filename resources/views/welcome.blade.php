<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
    <div class="container-fluid">
    <h1>IT ACADEMY - Prueba Técnica (Rover)</h1>
    <h2>iteración 8 Noviembre 2021  </h2>
    <div id="cuadro" style="width:100%;display:inline-block;border:1px solid black; padding: 10px">
      <table width="100%">
     
        <tr><td>Dimensiones del cuadrado Anchura</td>
            <td> @isset($tamano_cuadrado_anchura) {{ $tamano_cuadrado_anchura }} @endisset</td>
            
            <td>Dimensiones del cuadrado Altura</td>
            <td> @isset($tamano_cuadrado_altura) {{ $tamano_cuadrado_altura }} @endisset</td>
        </tr>
        
        <tr><td>Coordenadas Iniciales X</td>
            <td> @isset($coordenadas_iniciales_x) {{ $coordenadas_iniciales_x }} @endisset</td>
            
            <td>Coordenadas Iniciales Y</td>
            <td>@isset($coordenadas_iniciales_y) {{ $coordenadas_iniciales_y }} @endisset</td>
        </tr>
        
        <tr>
            <td>Orientación de salida ( N, S, E, W)</td>
            <td> @isset($orientacion_salida) {{ $orientacion_salida }} @endisset </td><td></td><td></td>
        </tr>
        <tr>
            <td></td><td></td><td></td><td></td>
        </tr>
        <tr>
            <td>Ordenes - A (Avanzar) , L (Izquierda) , R (Derecha)</td>
            <td> @isset($ordenes) {{ $ordenes }} @endisset</td><td></td><td></td>
        </tr>
        <tr>
            <td>Orientacion final</td><td>@isset($orientacion_final) {{ $orientacion_final }} @endisset</td><td></td><td></td>
        </tr>
        <tr>
        <tr>
            <td>Matriz</td><td>@isset($matriz) @foreach ($matriz as $ma) {{ $ma }} @endforeach @endisset</td><td></td><td></td>
        </tr>
        <tr>
            <td>coordenadas_finales_x</td><td>@isset($coordenadas_finales_x)  {{ $coordenadas_finales_x }}  @endisset</td><td></td><td></td>
        </tr>
        <tr>
            <td>coordenadas_finales_y</td><td>@isset($coordenadas_finales_y)  {{ $coordenadas_finales_y }}  @endisset</td><td></td><td></td>
        </tr>
        <tr>
            <td>La posición es : </td><td>@isset($fuera_cuadro) @if($fuera_cuadro=="ERROR, ROVER FUERA DE CUADRO") <p class="alert alert-danger" role="alert"> {{ $fuera_cuadro }} </p> @else <p class="alert alert-success" role="alert"> {{ $fuera_cuadro }} </p> @endif @endisset</td><td></td><td></td>
        </tr>
        <tr>
            <td>Posiciones : </td><td>@isset($acumula_orientacion_posicion_final) {{$acumula_orientacion_posicion_final}} @endisset  @isset($posicion_final) [ {{ $posicion_final }} ] @endisset @isset($orientacion_final) {{ $orientacion_final }} @endisset /// </td><td></td><td></td>
        </tr>
        <tr>
            <td><a href="{{ url('/') }}" class="btn btn-primary">Nuevas ordenes</a></td>
        </tr>
      </table>
    </div>
    

    <div id="inputs" style="width:100%;display:inline-block;border:1px solid black; padding: 10px">
    <form
      id="form_jugar"
      action="{{url('/rover')}}"
      method="post"
    >
    @csrf
    
    @if ($errors->any())
    <div class="alert alert-danger">
    <p>Corrige los siguientes errores:</p>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    
    
    <label>Dimensiones del cuadrado Anchura:</label>
    <input type="number" 
            id="tamano_cuadrado_anchura" 
            class="form-control" style="width:100px"
            name="tamano_cuadrado_anchura"
            min="0" max="128"
    >
    <br><br>
    <label>Dimensiones del cuadrado Altura:</label>
    <input type="number" 
            id="tamano_cuadrado_altura" 
            class="form-control" style="width:100px"
            name="tamano_cuadrado_altura" 
            min="0" max="128"
    >
    <br><br>
    <label>Coordenadas Iniciales X:</label>
    <input  type="number" 
            id="coordenadas_iniciales_x" 
            class="form-control" style="width:100px"
            name="coordenadas_iniciales_x"
>
    <br><br>
    <label>Coordenadas Iniciales Y:</label>
    <input  type="number"  
            id="coordenadas_iniciales_y" 
            name="coordenadas_iniciales_y"
            class="form-control" style="width:100px"
>
    <br><br>
    <label>Orientacion de salida :</label>
    <input  type="text"
            id="orientacion_salida"
            class="form-control" style="width:50px"
            name="orientacion_salida"
            maxlength="5"
    >
    <br><br>
    <label>Ordenes :</label>
    <input  type="text"
            id="ordenes"
            class="form-control"
            name="ordenes"

            
    >
    <br><br>
    <!--<button v-on:click="jugar">Jugar</button>-->
    <input  class="btn btn-primary" type="submit" value="Jugar">
    </form>
    </div>
  <div>
      <h1>Instrucciones</h1>
      <pre>
        Se necesita un programa que valide las instrucciones que serán utilizadas por un Coche en Marte
        Cada rover está incluido en un cuadrado y puede recibir las siguientes ordenes A (Avanzar) , L (Izquierda) , R (Derecha)
        El programa tiene que validar que el rover está dentro de el cuadrado y debe indicarnos su orientación final ( N, S, E, W)
        El programa recibirá las dimensiones del cuadrado ( anchura y altura)
        y se asume que las coordenadas ( 0, 0) es la esquina de abajo a la izquierda.

        Adicionalmente recibirá las coordenadas del rover y su orientacion inicial (N, S, E, W)
        También puede recibir un conjunto de ordenes, por ejemplo 'AALAARALA'
        No hay limite de ordenes, se puede meter 1 o 40 o 100 0 1000
        Se asume que no hay ningún obstáculo dentro del cuadro.
        El programa debe validar si todas las ordenes pueden ser ejecutadas dentro del cuadrado
        y debe devolver true or false si los comandos son validos.
        Debe devolverme también la orientación y coordenadas finales

        El proyecto hay que subirlo a github y me teneis que enviarl el link para que yo haga un git clone en mi ordenador
        y me teneis que enviar en el email la orden que tengo que ejecutar para iniciar el programa
        Angular o Vue o PHP
        La solución debe ser ejecutada en una única instrucción npm


        Cuanto tiempo habeis invertido en la solución.
        <code>
        const object = {
            square: {
            width: 0,
            height: 2,
        },
        rover: {
            initialOrientation: 'N',
            initialPosition: {
              x: 1,
              y: 2
            }
        }
        }
        composer install
        .env
        php artisan key:generate
        https://parzibyte.me/blog/2017/05/29/hacer-despues-clonar-proyecto-laravel/
        </code>
      </pre> 
    </div>
  </div>
</div>
    </body>
</html>

<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
    //echo 'Proyecto laravel';
});

Route::get('mi-ruta',function(){
    return 'Esta es mi ruta';
});

//parametros


Route::get('saludo/{person}',function($name)
{
    return 'Hola '.$name; 

});

Route::get('Saludo2/{persona?}',function($name='gente del futuro')
{
    return 'Hola '.$name;
});

Route::get('pares-hasta-{number}',function($number){
    $out=[];
    for ($i=0; $i < $number; $i++) { 
            if($i%2 === 0)
            {
                $out[]=$i;
            }
      
    }
    return json_encode($out);
})->where(['number'=>'[\d]+']);
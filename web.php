<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;



Route::get('/', function () {
    return view('welcome');
});

/*  ****************INICIO DO CIRCULO *************************/
Route::get('/circulo/perimetro/diametro/{diametro}/', function ($diametro) {
    $resultado = $diametro * pi();
    return view('resultado', ['result' => $resultado, 'objeto' => 'Círculo', 'operacao' => 'Perímetro']);
});

Route::get('/circulo/area/raio/{raio}/', function ($raio) {
    $resultado = pi() * $raio * $raio;
    return view('resultado', ['result' => $resultado, 'objeto' => 'Círculo', 'operacao' => 'Área']);
});

Route::get('/circulo/diametro/{raio}/', function ($raio) {
    $resultado = 2 * $raio;
    return view('resultado', ['result' => $resultado, 'objeto' => 'Círculo', 'operacao' => 'Diâmetro']);
});

Route::get('/circulo/raio/{diametro}/', function ($diametro) {
    $resultado = $diametro / 2;
    return view('resultado', ['result' => $resultado, 'objeto' => 'Círculo', 'operacao' => 'Raio']);
});



/*  **************** FIM DO CIRCULO *****************************/

/*  ****************INICIO DO CILINDRO **************************/
Route::get('/cilindro/area/raio/{raio}/', function ($raio) {
    $resultado = pi() * pow($raio, 2);
    return view('resultado', ['result' => $resultado, 'objeto' => 'Cilindro', 'operacao' => 'Área']);
});

 Route::get('/cilindro/perimetro/diametro/{diametro}/', function ($diametro) {
    $resultado = $diametro * pi();
    return view('resultado', ['result' => $resultado, 'objeto' => 'Cilindro', 'operacao' => 'Perímetro']);
 });

Route::get('/cilindro/volume/raio/{raio}/altura/{altura}/', function ($raio, $altura) {

    $resultado = pi() * pow($raio, 2) * $altura;
    return view('resultado', ['result' => $resultado, 'objeto' => 'Cilindro', 'operacao' => 'Volume']);
});

Route::get('/cilindro/diametro/raio/{raio}/', function ($raio) {

    $resultado = 2 * $raio;
    return view('resultado', ['result' => $resultado, 'objeto' => 'Cilindro', 'operacao' => 'Diâmetro']);
});
/*  **************** FIM CILINDRO *****************************/

/*  **************** INICIO DO LOSANGO *****************************/
Route::get('/losango/perimetro/{lado}/', function ($lado) {
    $resultado = $lado * 4;
    return view('resultado', ['result' => $resultado, 'objeto' => 'Losango', 'operacao' => 'Perímetro']);
});

Route::get('/losango/area/{lado}/{altura}/', function ($lado, $altura) {
    $resultado = $lado * $altura;
    return view('resultado', ['result' => $resultado, 'objeto' => 'Losango', 'operacao' => 'Área']);
});
/*  **************** FIM DO LOSANGO ********************************/

/*  **************** INICIO DO PARALELOGRAMO ********************************/
Route::get('/paralelogramo/perimetro/{lado1}/{lado2}/', function ($lado1, $lado2) {
    $resultado = ($lado1 * $lado2) * 2;
    return view('resultado', ['result' => $resultado, 'objeto' => 'Paralelogramo', 'operacao' => 'Perímetro']);
});
Route::get('/paralelogramo/area/{lado}/{altura}/', function ($lado, $altura) {
    $resultado = $lado * $altura;
    return view('resultado', ['result' => $resultado, 'objeto' => 'Paralelogramo', 'operacao' => 'Área']);
});
/*  **************** FIM DO PARALELOGRAMO ********************************/

/*  **************** INICIO DO QUADRADO ********************************/
Route::get('/quadrado/perimetro/{lado}/', function ($lado) {
    $resultado = $lado * 4;
    return view('resultado', ['result' => $resultado, 'objeto' => 'Quadrado', 'operacao' => 'Perímetro']);
});
Route::get('/quadrado/area/{lado}/', function ($lado) {
    $resultado = $lado * 2;
    return view('resultado', ['result' => $resultado, 'objeto' => 'Quadrado', 'operacao' => 'Área']);
});
/*  **************** FIM DO QUADRADO ********************************/

/*  **************** INICIO DO RETANGULO ********************************/
Route::get('/retangulo/perimetro/{lado1}/{lado2}/', function ($lado1, $lado2) {
    $resultado = ($lado1 * $lado2) * 2;
    return view('resultado', ['result' => $resultado, 'objeto' => 'Retângulo', 'operacao' => 'Perímetro']);
});
Route::get('/retangulo/area/{lado1}/{lado2}/', function ($lado1, $lado2) {
    $resultado = $lado1 * $lado2;
    return view('resultado', ['result' => $resultado, 'objeto' => 'Retângulo', 'operacao' => 'Área']);
});
/*  **************** FIM DO RETANGULO ********************************/

/*  **************** INICIO DO ELIPSE ********************************/
Route::get('/elipse/perimetro/{valor1}/{valor2}/', function ($valor1, $valor2) {
    $resultado = pi() * (3 * ($valor1 + $valor2) - sqrt((3 * $valor1 + $valor2) * ($valor1 + 3 * $valor2)));
    return view('resultado', ['result' => $resultado, 'objeto' => 'Elipse', 'operacao' => 'Área']);
});
Route::get('/elipse/area/{eixoh}/{eixov}/', function ($eixoh, $eixov) {
    $resultado = pi() * $eixoh * $eixov;
    return view('resultado', ['result' => $resultado, 'objeto' => 'Elipse', 'operacao' => 'Área']);
});
/*  **************** FIM DO ELIPSE ********************************/

/*  **************** INICIO DO TRIANGULO ********************************/
Route::get('/triangulo/perimetro/{lado1}/{lado2}/{lado3}/', function ($lado1, $lado2, $lado3) {
    $resultado = $lado1 + $lado2 + $lado3;
    return view('resultado', ['result' => $resultado, 'objeto' => 'Triângulo', 'operacao' => 'Perímetro']);
});
Route::get('/triangulo/equilatero/area/{lado}/', function ($lado) {
    $resultado = (sqrt(3) / 4) * ($lado * 2);
    return view('resultado', ['result' => $resultado, 'objeto' => 'Triângulo Equilátero', 'operacao' => 'Área']);
});
Route::get('/triangulo/isosceles/area/{base}/{altura}/', function ($base, $altura) {
    $resultado = ($base * $altura) / 2;
    return view('resultado', ['result' => $resultado, 'objeto' => 'Triângulo Isósceles', 'operacao' => 'Área']);
});
Route::get('/triangulo/isosceles/altura/{lado}/{base}/', function ($lado, $base) {
    $resultado = sqrt(($lado ** 2) - ($base ** 2));
    return view('resultado', ['result' => $resultado, 'objeto' => 'Triângulo Isósceles', 'operacao' => 'Altura']);
});
Route::get('/triangulo/retangulo/area/{base}/{altura}/', function ($base, $altura) {
    $resultado = ($base * $altura) / 2;
    return view('resultado', ['result' => $resultado, 'objeto' => 'Triângulo Retângulo', 'operacao' => 'Área']);
});
/*  **************** FIM DO TRIANGULO ********************************/

/*  **************** INICIO DO TRAPÉZIO ********************************/
Route::get('/trapezio/perimetro/{baseH}/{baseL}/{lado1}/{lado2}/', function ($baseH, $baseL, $lado1, $lado2) {
    $resultado = $baseH + $baseL + $lado1 + $lado2;
    return view('resultado', ['result' => $resultado, 'objeto' => 'Trapézio', 'operacao' => 'Perímetro']);
});
Route::get('/trapezio/area/{baseH}/{baseL}/{altura}/', function ($baseH, $baseL, $altura) {
    $resultado = ($baseH + $baseL / 2) * $altura;
    return view('resultado', ['result' => $resultado, 'objeto' => 'Trapézio', 'operacao' => 'Área']);
});
/*  **************** FIM DO TRAPÉZIO ********************************/

/*  **************** INICIO DO ESFERA ********************************/
Route::get('/esfera/volume/{raio}/', function ($raio) {
    $resultado = (4/3) * pi() * ($raio * 3);
    return view('resultado', ['result' => $resultado, 'objeto' => 'Esfera', 'operacao' => 'Volume']);
});
Route::get('/esfera/area/{raio}/', function ($raio) {
    $resultado = 4 * pi() * ($raio ** 2);
    return view('resultado', ['result' => $resultado, 'objeto' => 'Esfera', 'operacao' => 'Área']);
});
Route::get('/esfera/diametro/{raio}/', function ($raio) {
    $resultado = 2 * $raio;
    return view('resultado', ['result' => $resultado, 'objeto' => 'Esfera', 'operacao' => 'Diâmetro']);
});
Route::get('/esfera/area/{diametro}/', function ($diametro) {
    $resultado = $diametro / 2;
    return view('resultado', ['result' => $resultado, 'objeto' => 'Esfera', 'operacao' => 'Raio']);
});
/*  **************** FIM DO ESFERA ********************************/

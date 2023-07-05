
  <?php

//Declara una variable por cada tipo de dato y asignar un valor

//boolean

$rubia = FALSE;
var_dump((bool)$rubia);

//Integer

$number=21;
echo $number;

$anotherNumber = -3;
echo $anotherNumber;

//Float

$price= 20.5;
echo $price;

//String

$bienvenida = "Hola, bienvenida a mis ejercicios de código ";
echo $bienvenida;

//Numeric String

$edad = "treinta ";
echo $edad;

//Array

$coche = array (
  "color" => "azul",
  "marca" => "Citroen",
  "puertas" => 4,
  "año de matriculación" => 2021,
);

var_dump($coche);

//Iterable


//Objeto

class Pelicula {
  public $titulo;
  public $estreno;
  public $director;
  public $protagonista;
  public $recaudacion;
}

$Pelicula = new Pelicula ();
$Pelicula -> titulo = "Titanic";
$Pelicula -> estreno = 1997;
$Pelicula -> director = "James Cameron";
$Pelicula -> protagonista = "Leonardo Dicaprio";
$Pelicula -> recaudacion = 2264743305;

var_dump($Pelicula);

$vacia = null;
var_dump($vacia);

//¿QUÉ TIPO DE DATO SON LAS SIGUIENTES VARIABLES?

//Fácil
$nombre = "Luna"; //STRING
$apellido = "Lovegood"; //STRING
$edad = 42; //INTEGER
$Ravenclaw = true; //BOOLEAN

//Medio
$promedio = (8 + 9.5 + 9 + 10 + 8) / 5; // float
$nombre_completo = $nombre ." " . //string (concatenación)
$apellido; //string
$presento_examen = (bool) 1; //boolean

//Avanzado
$numero_preguntas = 5 + "5"; //integer
$numero_respuestas = "5" + 5; //integer
$promedio_maximo = //null
$numero_respuestas / 1.0; //integer
$nargles = 3 + "5 nargles"; //integer - pero da alerta de caracteres no numéricos



//Suponiendo estas variables
$es_un_michi_grande = true;
$le_gusta_comer = true;
$sabe_volar = false;
$tiene_2_patas = false;

// ¿Cuál es el resultado según las tablas de verdad?

$es_un_michi_grande && $le_gusta_comer; // true
$es_un_michi_grande || $sabe_volar; // true
$sabe_volar || $tiene_2_patas; // false
!$le_gusta_comer; // false
!$le_gusta_comer || $es_un_michi_grande; // true


//Convierte todos los caracteres del string a mayúsculas e imprimir en pantalla, sin modificar la
//variable original

$bienvenida = strtoupper($bienvenida);
echo $bienvenida;
var_dump($bienvenida)  ;

//Imprime en pantalla la longitud de la variable tipo string.

echo strlen ($bienvenida);

//Imprime en pantalla la cantidad de palabras de la variable tipo string.

echo str_word_count ($bienvenida);


?>

 

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

$bienvenidaMayusculas = strtoupper($bienvenida);
echo $bienvenidaMayusculas;
var_dump($bienvenidaMayusculas)  ;

//Imprime en pantalla la longitud de la variable tipo string.

echo strlen ($bienvenida);

//Imprime en pantalla la cantidad de palabras de la variable tipo string.

echo str_word_count ($bienvenida);

//Cambia a orden inverso los caracteres de la variable string e imprime en pantalla, sin modificar la
//variable original.

$bienvenidaInverso = strrev($bienvenida);
echo $bienvenidaInverso;

//Reemplaza la palabra 'Michi' de tu variable original a 'Gato' e imprime en pantalla.

$gato = str_replace ("michi", "gato", $es_un_michi_grande); 
var_dump((bool)$gato);

//Declara dos variables y dale un valor de tipo integer e imprime ambas en pantalla

$a=21;
$b=4;

echo $a, $b;

//Suma ambas variables de tipo integer e imprime en pantalla.

$sumaDeVariables = $a + $b;
echo $sumaDeVariables;

//Declara dos variables y dale un valor de 1 y 0 tipo integer e imprime el tipo de dato en pantalla y
//consola

$c=1;
$d= 0;

var_dump($c, $d);

//a las variables anteriores cambiales el tipo de dato a Booleano e imprime en el nuevo tipo de dato
//en pantalla y consola.

$nuevoC = (bool)$c;
var_dump($nuevoC);

$nuevoD = (bool)$d;
var_dump($nuevoD);

//Crear función que reciba como parámetros dos números y que retorne la suma de ellos. Imprime
//en pantalla y por consola el resultado

function sumar($a, $b){
  return $a + $b;

}

$suma = sumar ($a, $b);
echo $suma;

//Crear función que determine si un número es par o impar. Imprime por consola y pantalla

function ParImpar ($numero){
  if ($numero %2 === 0){;
    return "El número es par";

  } else {
    return "El número es impar";
  }
};

$resultado = ParImpar(5);
echo $resultado;

//Crear un array de 10 números

$numbers = array (1,2,3,4,5,6,7,8,9,0);
print_r($numbers);

//Obtén el largo del array e imprime en pantalla y consola.

$numbersLengh = count($numbers);
echo $numbersLengh;

//Agrega un valor tipo string al array que creaste anteriormente e imprime en pantalla

$newItem = "esto es un añadido al array";

$array4 = array_push($numbers, array($newItem));
print_r($array4);

//Ahora agrega 2 elementos más a tu array e imprime en pantalla.

$array3 = array_push($numbers, array($bienvenida, $coche));
print_r($array3);

//Crea un nuevo array y concaténalo con el anterior e imprime en pantalla.

$array2 = array ("Madrid", "Barcelona", "Córdoba", "Cádiz", "A Coruña");

$newArray = array_merge($numbers, $array2);
print_r($newArray);

//Crear una función que imprima en consola y pantalla todos los números de un array en una lista

$arrayPares = array (2, 4, 6, 8, 10, 12, 14, 19, 7);

function Arraylist($arrayPares){
  foreach ($arrayPares as $val) {
  echo($val)."<br>" ;
}
};
Arraylist($arrayPares);

//Crear una función que añade un número al array

function sumarNumero($array){
  array_push($array, 3);
  print_r($array);
}
sumarNumero($arrayPares);

//Crear una función que elimine los números pares de ese array.

// function eliminarPares($array){
//   $sinPares = array (if ($numero %2 !=== 0))
  
// };
  
// eliminarPares($arrayPares);

function impar($var){
  return $var & 1;
}

print_r (array_filter($arrayPares, "impar"));

//Crear una función que devuelva el número mayor de un array

function maxArray($array){
  return max($array);
}

print_r(maxArray($arrayPares));

//Crear una función que devuelva el número menor de un array.

function minArray($array){
  return min($array);
}

print_r(minArray($arrayPares));

//Crear un función que convierta en minúsculas todas las letras de un texto.

$textoMayusculas = "ESTE TEXTO ESTA ESCRITO EN MAYUSCULAS";

function minusculas ($text){
  return $text=strtolower($text);
  
}

print_r(minusculas($textoMayusculas));

//Crear una función que convierta en mayúsculas todas las letras de un texto.

$textoMinusculas = "este texto esta escrito en minusculas";
function mayusculas($text){
  return $text=strtoupper($text);

};

mayusculas($textoMinusculas);
print_r(mayusculas($textoMinusculas));

//Crear una función que reciba un array de nombres y que convierta la primera letra de cada nombre
//en mayúscula.

$arrayDeNombres = array ("ana", "luis", "isabel", "antonio", "maría");

function ponerMayusculas ($array){
  $array2 = array_map('ucfirst', $array);
  return $array2;
}

print_r(ponerMayusculas($arrayDeNombres));

// Crear una clase coche con sus atributos y un atributo puede ser de tipo array

class Coche {
  public $marca;
  public $color;
  public $año;
  public $interior;
  public $numeroPuertas;
}

$citroen = new Coche;
$citroen ->marca = "citroen";
$citroen ->color = "azul";
$citroen ->año = 2023;
$citroen ->interior = array("volante", "navegador", "asientos", "freno");
$citroen ->numeroPuertas = 5;



//Crear una función que devuelva la marca del carro.

function DevuelveMarca($coche){
  return $coche->marca;
};

DevuelveMarca($citroen);
print_r(DevuelveMarca($citroen));


//Crear una función que devuelva la cantidad de puertas que tiene el carro.

function DevuelvePuertas($coche){
  return $coche->numeroPuertas;
};

DevuelvePuertas($citroen);
print_r(DevuelvePuertas($citroen));


//Crear una función que devuelva un atributo del array.

function DevuelveItem($coche){
  return $coche ->interior[2];
};

DevuelveItem($citroen);
print_r(DevuelveItem($citroen));





















?>

 
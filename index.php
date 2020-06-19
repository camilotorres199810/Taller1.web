<?php
//Primer punto, Calculadora aritmetica.
    if ($_POST ["valor1"] !="" and $_POST ["valor2"]!=""){
		if ($_POST["operador"] == "suma") {
			print ($resultado = $_POST ["valor1"] + $_POST ["valor2"]);
			print ('<br /><a href="calculadora.php">Volver</a>');
		} elseif ($_POST["operador"] == "resta") {
			print ($resultado = $_POST ["valor1"] - $_POST ["valor2"]);
			print ('<br /><a href="calculadora.php">Volver</a>');
		} elseif ($_POST["operador"] == "multiplicacion") {
			print ($resultado = $_POST ["valor1"] * $_POST ["valor2"]);
			print ('<br /><a href="calculadora.php">Volver</a>');
		} elseif ($_POST["operador"] == "division") {
			print ($resultado = $_POST ["valor1"] / $_POST ["valor2"]);
			print ('<br /><a href="calculadora.php">Volver</a>');
		}
	} else {
		print("Ingresa alg&uacute;n valor");
		print ('<br /><a href="calculadora.php">Volver</a>');
	}
 
	






/*Segundo punto, IMC,El gimnasio Bodytech, lo contrata para desarrollar una aplicación web que permita a sus usuarios calcular el índice de masa corporal,
basado en la formula 𝐈𝐌𝐂 =
𝑷𝒆𝒔𝒐
𝑨𝒍𝒕𝒖𝒓𝒂𝒙𝑨𝒍𝒕𝒖𝒓𝒂
La clasificación del IMC, es la siguiente:
• IMC <= 18,4 (Insuficiencia de peso)
• 18,5<=IMC<=24,9 (Peso normal)
• 25<=IMC<=29,9 (Sobrepeso)
• 30<=IMC<=34,9 (Obesidad 1)
• 35<=IMC<=39,9 (Obesidad 2)
• IMC>=40 (Obesidad 3)*/

/*$peso=40;
$altura=1.60;

$imc= $peso / ($altura * $altura);

if( $imc<= 18.4){

    echo("Insuficiencia de peso");
}
else if ($imc >= 18.5 && $imc<=24.9) {
   
    echo("Peso normal");

}

else if ($imc >= 25 && $imc<=29.9){

    echo("Sobrepeso");

}

else if($imc >= 30 && $imc<=34.9){
 
    echo("Obesidad 1");

}

else if($imc >= 35 && $imc<=39.9){

  echo("Obesidad2");

}

else if($imc>=40){

    echo("Obesidad 3");

}
*/

/*$cantzapatos=5;
$precio=150000;
$descuento;
$totalcompra=($cantzapatos * $precio);


if ($cantzapatos ==3){
    $descuento=$totalcompra - 0.10;
   echo("Usted tiene un descuento del 10%");

}else {
    if ($cantzapatos >3 && $cantzapatos <= 5){
	  $descuento=$totalcompra - 0.20;
	   echo("Usted tiene un descuento del 20%");
}

}if ($cantzapatos >5){
	$descuento=$totalcompra - 0.40;
	echo("Usted tiene un descuento del 40%");


}if ($cantzapatos <= 0){	
echo("Usted no tiene  ningun descuento");
 }*/

	

/*4.Hacer un programa en PHP para ayudar a un trabajador de Postobón a saber cuál será su sueldo semanal, se sabe que si trabaja 40 horas o
menos, se le pagará $20000 por hora, pero si trabaja más de 40 horas entonces las horas extras se le pagarán a $25000 por hora. Ejecute su
código para calcular el salario con 36 horastrabajadas.*/

/*$horas=45;
$horastrabajadas=20000;
$horasextra=25000;

$horasnormales=($horastrabajadas * $horas);
$horasextras=($horasnormales + $horasextra);

if ($horas <=40){
    $horasnormales=($horastrabajadas * $horas);
	echo("Su sueldo semanal es " .  $horasnormales);

}

else {
if ($horas > 40){
	$horasextras=($horasnormales + $horasextra);
	echo("Su sueldo semanal es " . $horasextras);
}

}
*/

/*5. Después de realizar una consulta en la base de datos DE LA JUGOSA SAS se tienen almacenados los valores de dicha consulta en un
arreglo denominado salpicón, el cual presenta la siguiente configuración:
[dulce1]=>”Banano”
[dulce2]=>”Manzana”
[dulce3]=>”Durazno”
[acido1]=>”Piña”
[acido2]=>”Naranja”
[acido3]=>”Lulo”
Defina el arreglo salpicón e imprima utilizando un ciclo foreach el contenido deeste.
*/


/*$salpicon=array('dulce1'=>"banano",'dulce2'=>"manzana",'dulce3'=>"durazno",'acido1'=>"piña",'acido2'=>"naranja",'acido3'=>"lulo");
// Print_r ($salpicon); 

foreach ($salpicon as $clave =>$valor){


echo "[$clave] => $valor.<br>";
}
*/


?> 

















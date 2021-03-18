let peso;
let estatura;
let imc;

peso=prompt("Ingrese su Peso en Kg:");
estatura=prompt("Ingrese su Estatura en Mt:");

imc=(peso/Math.pow(estatura,2));

if (imc<18.5){
	alert("Se Encuentra Bajo de Peso, su IMC es:"+imc);
} else if (imc<25){
	alert("Se Encuentra en Peso Normal,su IMC es:"+imc);
} else if (imc<30){
	alert("Se Encuentra en Sobrepeso,su IMC es:"+imc);
}else{
	alert("Tiene Obesidad,su IMC es:"+imc);
}
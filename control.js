//Funcion descuento-------------------------------------------

var banco;
var monto;
var jubilado;
var fecha;

function calcDiscount(){
	banco = document.getElementById("banco").value;
	monto = document.getElementById("monto").value;
	if(document.getElementById("no").checked){
		jubilado = false;
	}else if(document.getElementById("si").checked){
		jubilado = true;
	}
	fecha	= document.getElementById("fecha").valueAsDate.getDay();

	if(!jubilado){
		if(fecha >=0 && fecha <= 3){
			calcSegunBanco();
		}
	}else{
		calcSegunBanco();
	}

	document.getElementById("resultado").innerHTML = "El monto con descuento es de <strong>$" + monto + "</strong>";
}

function calcSegunBanco(){
	if(banco == "banco1"){
		monto = monto - (monto*0.1);
	}else if(banco == "banco2"){
		monto = monto - (monto*0.05);
	}	
}

//Funcion salario-------------------------------------------
var fechaIngreso, fechaActual, antiguedad, horas;
var categoria;
var salario;

function calcSalary(){
	fechaIngreso = document.getElementById("fechaIngreso").valueAsDate;
	fechaActual = new Date();
	fechaActual.setDate(fechaActual.getDate() - 1);
	antiguedad = fechaActual.getFullYear() - fechaIngreso.getFullYear();
	horas = document.getElementById("horas").value;
	categoria = document.getElementById("categoria").value;
	document.getElementById("salario").innerHTML = "Tu salario es de $" + parametrosSalary(categoria, horas, antiguedad) + ".-";
}

function parametrosSalary(categoria, horas, antiguedad){
	switch(categoria){
		case 'A':
		case 'B':
				if(horas >= 8){
					salario = 420;
				}else{
					salario = 400;
				}
		break;
		case 'C':
				if(horas >= 8){
					salario = 220;
				}else{
					salario = 200;
				}
		break;
		case 'D':
		case 'E':
				if(horas >= 8){
					salario = 120;
				}else{
					salario = 100;
				}
	}

	if(antiguedad >= 5 && antiguedad < 15){
		salario = salario + (salario*0.3);
	}else if(antiguedad >= 15){
		if(categoria == 'A' || categoria == 'B' || categoria == 'C'){
			salario = salario + (salario*0.6);
		}else if(categoria == 'D' || categoria == 'E'){
			salario = salario + (salario*0.5);
		}
	}
	return salario;
}
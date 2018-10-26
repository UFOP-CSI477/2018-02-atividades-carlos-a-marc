function calculoIMC(){

	var peso = parseFloat(document.dados.peso.value);
	var altura = parseFloat(document.dados.altura.value) / 100;
	var imc = peso / (altura * altura);

	document.dados.imc.value = imc;
	
	if (imc < 18.5) {document.dados.estado.value = "Subnutrição";}
	else if(imc >= 18.5 && imc <= 24.9){document.dados.estado.value = "Peso Saudável";}
	else if(imc >= 25 && imc <= 29.9){document.dados.estado.value = "Sobrepeso";}
	else if(imc >= 30 && imc <= 34.9){document.dados.estado.value = "Obesidade grau 1";}
	else if(imc >= 35 && imc <= 39.9){document.dados.estado.value = "Obesidade grau 2";}
	else if(imc >= 40){document.dados.estado.value = "Obesidade grau 3";}

}
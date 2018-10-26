function carregamento(){
	document.getElementById("processar").disabled = true;
	$("#tbEntrada").hide();
	$("#tbSaida").hide();

}

//Declaração de variaveis
var listaCompetidor = [];

//Entrada de dados
function entradaDados(){

	var c1 = {largada: document.dados.largada.value, competidor: document.dados.competidor.value, tempo: parseInt(document.dados.tempo.value)};
	listaCompetidor.push(c1);

	document.getElementById("larg").value = "";
	document.getElementById("comp").value = "";
	document.getElementById("temp").value = "";

	if (listaCompetidor.length == 6) {
			impressao();
			$("#campos").hide();
			document.getElementById("inserir").disabled = true;
			document.getElementById("processar").disabled = false;
		}

}

function impressao(){
	document.getElementById("la1").innerHTML = listaCompetidor[0].largada;
	document.getElementById("co1").innerHTML = listaCompetidor[0].competidor;
	document.getElementById("te1").innerHTML = listaCompetidor[0].tempo;

	document.getElementById("la2").innerHTML = listaCompetidor[1].largada;
	document.getElementById("co2").innerHTML = listaCompetidor[1].competidor;
	document.getElementById("te2").innerHTML = listaCompetidor[1].tempo;

	document.getElementById("la3").innerHTML = listaCompetidor[2].largada;
	document.getElementById("co3").innerHTML = listaCompetidor[2].competidor;
	document.getElementById("te3").innerHTML = listaCompetidor[2].tempo;

	document.getElementById("la4").innerHTML = listaCompetidor[3].largada;
	document.getElementById("co4").innerHTML = listaCompetidor[3].competidor;
	document.getElementById("te4").innerHTML = listaCompetidor[3].tempo;

	document.getElementById("la5").innerHTML = listaCompetidor[4].largada;
	document.getElementById("co5").innerHTML = listaCompetidor[4].competidor;
	document.getElementById("te5").innerHTML = listaCompetidor[4].tempo;

	document.getElementById("la6").innerHTML = listaCompetidor[5].largada;
	document.getElementById("co6").innerHTML = listaCompetidor[5].competidor;
	document.getElementById("te6").innerHTML = listaCompetidor[5].tempo;

	$("#tbEntrada").show();

}

//Faz o processamento dos dados

function processaDados(){
	$("#tbEntrada").hide();
	$("#tbSaida").show();

	ordenacao();
	impremeResultado();
	resultados();
	
}

function ordenacao() {
	if (listaCompetidor.length == 0) {
		console.log("Informe os dados dos competidores!");
	}else{
		listaCompetidor.sort(function(a, b){return a.tempo - b.tempo});
	}   
}

function impremeResultado(){
	document.getElementById("l1").innerHTML = listaCompetidor[0].largada;
	document.getElementById("c1").innerHTML = listaCompetidor[0].competidor;
	document.getElementById("t1").innerHTML = listaCompetidor[0].tempo;

	document.getElementById("l2").innerHTML = listaCompetidor[1].largada;
	document.getElementById("c2").innerHTML = listaCompetidor[1].competidor;
	document.getElementById("t2").innerHTML = listaCompetidor[1].tempo;

	document.getElementById("l3").innerHTML = listaCompetidor[2].largada;
	document.getElementById("c3").innerHTML = listaCompetidor[2].competidor;
	document.getElementById("t3").innerHTML = listaCompetidor[2].tempo;

	document.getElementById("l4").innerHTML = listaCompetidor[3].largada;
	document.getElementById("c4").innerHTML = listaCompetidor[3].competidor;
	document.getElementById("t4").innerHTML = listaCompetidor[3].tempo;

	document.getElementById("l5").innerHTML = listaCompetidor[4].largada;
	document.getElementById("c5").innerHTML = listaCompetidor[4].competidor;
	document.getElementById("t5").innerHTML = listaCompetidor[4].tempo;

	document.getElementById("l6").innerHTML = listaCompetidor[5].largada;
	document.getElementById("c6").innerHTML = listaCompetidor[5].competidor;
	document.getElementById("t6").innerHTML = listaCompetidor[5].tempo;

}


function resultados(){
	var resultado = ["Vencedor(a)"];
	var posicao = [1];

	for (var i = 1; i < listaCompetidor.length; i++) {
		if (listaCompetidor[0].tempo == listaCompetidor[i].tempo) {
			resultado.push("Vencedor(a)");
			posicao.push(1);
		}else{
			resultado.push("");
			posicao.push(i+1);
		}
	}

	document.getElementById("p1").innerHTML = posicao[0];
	document.getElementById("r1").innerHTML = resultado[0];

	document.getElementById("p2").innerHTML = posicao[1];
	document.getElementById("r2").innerHTML = resultado[1];

	document.getElementById("p3").innerHTML = posicao[2];
	document.getElementById("r3").innerHTML = resultado[2];

	document.getElementById("p4").innerHTML = posicao[3];
	document.getElementById("r4").innerHTML = resultado[3];

	document.getElementById("p5").innerHTML = posicao[4];
	document.getElementById("r5").innerHTML = resultado[4];

	document.getElementById("p6").innerHTML = posicao[5];
	document.getElementById("r6").innerHTML = resultado[5];

}
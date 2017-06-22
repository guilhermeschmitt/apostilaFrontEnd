var $input_quantidade = document.querySelector("#qt");
var $output_total = document.querySelector("#total");

$input_quantidade.oninput = calculaEMostraTotal;

function numberParaReal(numero) {
    var formatado = "R$" + numero.toFixed(2).replace(".", ",");
    return formatado;
}

function realParaNumber(texto) {
    var valor = parseFloat(texto.replace("R$", "").replace(",", "."));
    return valor;
}

function calculaEMostraTotal(){
	var quantidade = $input_quantidade.value;
	var valorUnitarioTexto = document.querySelector("#preco").textContent;
	var valorUnitarioNumero = realParaNumber(valorUnitarioTexto);
	var total = numberParaReal(quantidade * valorUnitarioNumero);
	$output_total.value = total;
}

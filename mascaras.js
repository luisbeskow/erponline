   	jQuery(function($){ // INICIO MASCARAS TELEFONES E CPF
   $("#tel").mask("9999-9999");
   $("#cel").mask("99999-9999");
   $("#cep").mask("99999-999");
   $("#cpf").mask("999.999.999-99");

	}); // FIM MASCARAS TELEFONES E CPF
	
	jQuery(function($){
	$("#valor").mask("000.000.000.000.000,00", {reverse: true});
	 }); 
	
	
	
	
	
	
	
	
$(document).ready(function() { // INICIO MASCARA OPCIONAL DE CNPJ E CPF

 
$('#tipo').change(function() {
 
if($(this).val()=="CPF") { 
$("#cpf").mask("999.999.999-99");
}
if($(this).val()=="CNPJ") {
$("#cpf").mask("99.999.999/9999-99");
}

if($(this).val()=="CPF") { 
$("#cpfa").mask("999.999.999-99");
}
if($(this).val()=="CNPJ") {
$("#cpfa").mask("99.999.999/9999-99");
}
 
});




$('#cate').change(function() {
 

if($(this).val()=="nome"){
	$("#pesquisa").unmask();
}
 
if($(this).val()=="CPF") { 
$("#pesquisa").mask("999.999.999-99");
}

if($(this).val()=="CNPJ") { 
$("#pesquisa").mask("99.999.999/9999-99");
}

if($(this).val()=="sobrenome"){
	$("#pesquisa").unmask();
}

if($(this).val()=="email"){
	$("#pesquisa").unmask();
}

if($(this).val()=="tel") { 
$("#pesquisa").mask("9999-9999");
}

if($(this).val()=="cel") { 
$("#pesquisa").mask("99999-9999");
}

if($(this).val()=="logra"){
	$("#pesquisa").unmask();
}

if($(this).val()=="cidade"){
	$("#pesquisa").unmask();
}

if($(this).val()=="uf") { 
$("#pesquisa").mask("aa", {reverse: true});
}

if($(this).val()=="cep") { 
$("#pesquisa").mask("99999-999");
}

});






 
});// FIM MASCARA OPCIONAL DE CNPJ E CPF

 

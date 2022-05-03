//SETA DATA
var data = new Date();
var hoje = data.getDate()+"/"+data.getMonth()+"/"+data.getFullYear();
var expire_date = (data.getDate()+2)+"/"+data.getMonth()+"/"+data.getFullYear();

// VERIFICA SE É O PRIMEIRO ACESSO, SE FOR NULL O PRIMEIRO ACESSO É TRUE POIS A VARIAVEL NAO FOI SETADA NO LOCALSTORAGE
if (localStorage.getItem("acesso") === null) {
    var vendidos = $("#vendidos").html();
    
    localStorage.setItem('expire_date',expire_date);
} else {
    if(hoje === localStorage.getItem("expire_date")){
        localStorage.setItem('vendidos',484);
        localStorage.setItem('expire_date',expire_date);
    }
    var vendidos = localStorage.getItem("vendidos");
    $("#vendidos").html(localStorage.getItem("vendidos"))
}

//SETA O ACESSO NO LOCALSTORAGE, ENTÃO SE REGARREGADO A PÁGINA O A VARIAVEL VAI EXISTIR

localStorage.setItem('acesso', true);

var total = $("#total").html();

var width = vendidos / total * 100;
var rest = total - vendidos;

$("#unidades").html(rest);
$("#porcentagem").html(width.toFixed(1) + "%");
$("#progress").css('width', width + "%");

// FUNCAO PARA INCREMENTAR O VENDIDOS
function add() {
    var add = vendidos++;
    return add;
}
// FUNCAO PARA SUBTRAIR A QUANTIDADE RESTANTE
function sub() {
    var sub = total - $("#vendidos").html();
    return sub;
}
// VERIFCA SE AS UNIDADES RESTANTES PARA NÃO FAZER UM CÁLCULO NEGATIVO
function checkInterval() {
    if ($("#unidades").html() >= 5) {
        return true;
    } else {
        return false;
    }
}

// DIMINUI O CONTDOWN
function diminuirCoutdown() {
    if (checkInterval()) {
        bar = $("#vendidos").html();
        var barra = bar / total * 100;
        $("#vendidos").html(add());
        $("#unidades").html(sub());
        localStorage.setItem("vendidos", $("#vendidos").html());
        formatBarra = barra.toFixed(1);
        $("#porcentagem").html(formatBarra + "%");
        $("#progress").css('width', barra + "%");
    }
}

// MOSTRA A BARRA
$(window).on('load', function () {

    $(".estoque").show();

});

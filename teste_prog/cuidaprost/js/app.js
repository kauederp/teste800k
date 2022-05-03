var noticia = document.getElementsByClassName('noticia')
let i = 0;
Array.prototype.forEach.call(noticia, (e) => {
    e.innerText = dataAtualFormatada() + ' ' + i++ + 'h atrás'
})

var footer = document.getElementById('footer')
var data = new Date()
footer.innerHTML = "Saude Masculina " + "&copy;" + data.getFullYear();



function dataAtualFormatada() {
    var data = new Date(),
        dia = data.getDate().toString(),
        diaF = (dia.length == 1) ? '0' + dia : dia,
        mes = (data.getMonth() + 1).toString(), //+1 pois no getMonth Janeiro começa com zero.
        mesF = (mes.length == 1) ? '0' + mes : mes,
        anoF = data.getFullYear();
    return diaF + "/" + mesF + "/" + anoF;
}


var menu = document.getElementById('menu')
var menuBtn = document.getElementById('menuBtn')


menuBtn.onclick = () => {
    console.log("ok")
    if (menu.classList.contains('d-none')) {
        menu.classList.remove('d-none')
        menu.classList.add('d-block')
    } else {
        menu.classList.remove('d-block')
        menu.classList.add('d-none')
    }
}
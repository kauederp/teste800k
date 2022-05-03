$('a.smoth-scroll').on('click', function (e) {
    var anchor = $(this);
    $('html, body').stop().animate({
        scrollTop: $(anchor.attr('href')).offset().top - 100
    }, 1000);
    e.preventDefault();
});
$(".pergunta").click(function () {
    $pergunta = $(this);
    $resposta = $pergunta.next();
    $resposta.slideToggle(500, function () {
        $pergunta.text(function () { });
    });
});
$(".btn-chamada").click(function(){
    fbq('track','AddToCart');
});
$("#whats").click(function(){
    fbq('track','WhatsApp');
});
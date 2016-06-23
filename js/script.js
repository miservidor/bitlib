$("#sitemap").click(function() {
    $("#detail1").toggle();
});
$("#kunden").click(function() {
    $("#intranet").toggle(500);
});
$("#ww").click(function() {
    $("#waren").toggle(500);
    $("#rechnung").hide(500);
    $("#lohn").hide(500);
});
$("#rw").click(function() {
    $("#rechnung").toggle(500);
    $("#waren").hide(500);
    $("#lohn").hide(500);
});
$("#lg").click(function() {
    $("#lohn").toggle(500);
    $("#rechnung").hide(500);
    $("#waren").hide(500);
});

$("#pri").click(function() {
    $("#primera").toggle(300);

});

$("#pri-vid").click(function() {
    $("#primera-vid").toggle(300);
});

$("#pri-dok").click(function() {
    $("#primera-dok").toggle(300);
});

$("#seg").click(function() {
    $("#segunda").toggle(300);
});

$("#seg-vid").click(function() {
    $("#segunda-vid").toggle(300);
});

$("#seg-dok").click(function() {
    $("#segunda-dok").toggle(300);
});

$("#ter").click(function() {
    $("#tercera").toggle(300);
});

$("#ter-vid").click(function() {
    $("#tercera-vid").toggle(300);
});

$("#ter-dok").click(function() {
    $("#tercera-dok").toggle(300);
});



// efecto

$("#bot-besch").click(function() {
    $("#besch-1").toggle(300);
    $("#vid-1").toggle(300);
});

$("#bot-vid").click(function() {
    $("#besch-1").toggle(300);
    $("#vid-1").toggle(300);
});
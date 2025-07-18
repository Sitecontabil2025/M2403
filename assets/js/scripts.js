//MENU
$(document).ready(function(){
    $('.botao-responsivo').click(function(){
        if ($(".main-menu").hasClass("d-none")) {
            $(".main-menu").hide().removeClass("d-none").slideDown(300);
        } else {
            $(".main-menu").slideUp(300, function(){
                $(".main-menu").addClass("d-none");
            });
        }
    });
});

//BANNER
$(document).ready(function() {
    $(".owl-banner").owlCarousel({
        autoplay: true,
        autoplayTimeOut: 4000,
        items: 1,
        mouseDrag : false,
        loop: true,
        nav: true,
        navText: ['<i class="fas fa-2x fa-chevron-left"></i>', '<i class="fas fa-2x fa-chevron-right"></i>'],
        dots: false
    });

    $(".owl-cliente").owlCarousel({
        autoplay: true,
        autoplayTimeout: 7000,
        autoplayHoverPause: true,
        responsiveClass:true,
        items: 1,
        loop: true,
        nav: true,
        dots: false,
        margin: 20,
        navText: ['<i class="fas fa-fw fa-lg fa-angle-left"></i>', '<i class="fas fa-fw fa-lg fa-angle-right"></i>'],
        responsive:{
            540:{
                items:1,
            },
            720:{
                items:2,
            },
            960:{
                items:4,
            },
        }
    });
});

// FORMULÁRIO DE CONTATO
// Mascara de TELEFONE
$(document).ready(function() {
    var SPMaskBehavior = function (val) {
        return val.replace(/\D/g, '').length === 11 ? '(00) 00000-0000' : '(00) 0000-00009';
    },
    spOptions = {
        onKeyPress: function(val, e, field, options) {
            field.mask(SPMaskBehavior.apply({}, arguments), options);
        }
    };
    $('.celular-mask').mask(SPMaskBehavior, spOptions);
});

function reloadcaptcha(){
    $('#imgcaptcha').attr('src','captcha.php?l=130&a=35&tf=20&ql=5&new='+(new Date()).getTime());
}
function reloadcaptcha_contato(){
    $('#imgcaptcha-contato').attr('src','captcha-contato.php?l=130&a=35&tf=20&ql=5&new='+(new Date()).getTime());
}

function reloadcaptcha_curriculo(){
    $('#imgcaptcha-curriculo').attr('src','captcha-curriculo.php?l=130&a=35&tf=20&ql=5&new='+(new Date()).getTime());
}

//Função para abrir pop up
function popup(url){
    varWindow = window.open (
        url,
        'Compartilhar',
        'width=500, height=650, top=100, left=200, scrollbars=no'
    );
}

//Constrói a URL depois que o DOM estiver pronto        
document.addEventListener("DOMContentLoaded", function() {
    var url = encodeURIComponent(window.location.href);
    var titulo = encodeURIComponent(document.title).replace(/'|"|%25/g, "");
    //var via = encodeURIComponent("usuario-twitter"); //nome de usuário do twitter do seu site
    
    document.getElementById("share-facebook").href = "javascript:popup('https://www.facebook.com/sharer/sharer.php?u=" + url+"')";//altera a URL do botão facebook
    document.getElementById("share-twitter").href = "javascript:popup('https://twitter.com/intent/tweet?url="+url+"&text="+titulo+"')";//altera a URL do botão
    //document.getElementById("share-twitter").href = "javascript:popup(https://twitter.com/intent/tweet?url="+url+"&text="+titulo+"&via="+via+"')"; //se for usar o atributo via, utilize a seguinte url
    
    //tenta obter o conteúdo da meta tag description
    var summary = document.querySelector("meta[name='description']");
    summary = (!!summary)? summary.getAttribute("content") : null;
    
    //se a meta tag description estiver ausente...
    if(!summary){
        //...tenta obter o conteúdo da meta tag og:description
        summary = document.querySelector("meta[property='og:description']");
        summary = (!!summary)? summary.getAttribute("content") : null;
    }
    //altera o link do botão
    linkedinLink = (!!summary)? "https://www.linkedin.com/shareArticle?mini=true&url="+url+"&title="+titulo + "&summary=" + encodeURIComponent(summary) : "https://www.linkedin.com/shareArticle?mini=true&url="+url+"&title="+titulo;
    document.getElementById("share-linkedin").href = "javascript:popup('"+linkedinLink+"')";
}, false);
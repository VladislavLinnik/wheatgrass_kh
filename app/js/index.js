$(document).ready(function(){
    
    // popup for contact
    $('.menu-toggle').on('click', function(){
        $('body').addClass('open');
    });
    $('.menu-toggle-close').on('click', function(){
        $('body').removeClass('open');
    });

    // popup for nav menu
    $('.menu-nav-toggle').on('click', function(){
        $('body').addClass('open-nav');
    });
    $('.menu-nav-toggle-close').on('click', function(){
        $('body').removeClass('open-nav');
    });

    $('.popup-nav').on('click', 'a', function(event){
        event.preventDefault();
        
        $('body').removeClass('open-nav');

        var id  = $(this).attr('href'),
            top = $(id).offset().top;
        
        $('body,html').animate({scrollTop: top}, 500);
    });
    
    // Smooth transition by anchors
    $("#smooth").on("click","a", function (event) {
        //отменяем стандартную обработку нажатия по ссылке
        event.preventDefault();
    
        //забираем идентификатор блока с атрибута href
        var id  = $(this).attr('href'),
    
        //узнаем высоту от начала страницы до блока на который ссылается якорь
            top = $(id).offset().top;
        
        //анимируем переход на расстояние - top за 500 мс
        $('body,html').animate({scrollTop: top}, 500);
    });


    $(window).scroll(function() {
        if ($(this).scrollTop() > 100){
            $('.menu-nav-toggle').addClass("active");
        }
        else{
            $('.menu-nav-toggle').removeClass("active");
        }
    });

});
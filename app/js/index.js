$(document).ready(function(){

    // popup contact
    // $('.js-popupContact').click(function(){
    //     $('.popup_contact, .popup_overlay').fadeIn(400); //показываем всплывающее окно
    // });
    // $('.popup_contact-close, .popup_overlay').click(function(){
    //     $('.popup_contact, .popup_overlay').fadeOut(400); //скрываем всплывающее окно
    // });

    
    $('.menu-toggle').on('click', function(){
        $('body').toggleClass('open');
    });

    $('.menu-toggle-close').on('click', function(){
        $('body').toggleClass('open');
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

});
$('.fa-bars').on('click', function(){
    let bars = $(this)
    let head = bars.parent().parent().find('.header-wrapper')
    console.log(head)
    if(bars.hasClass('closed')){
        bars.next().slideDown(900);
        bars.parent().next().next().find('.hero-content').fadeOut(700);
        bars.removeClass('closed').addClass('open');
        head.parent().parent().transition({'background-color':'rgba(24, 59, 72, .9)'}, 500)
        head.parent().parent().find('h2').transition({'color':'#ece7ef', 'background-color':'rgba(24, 59, 72, .9)'}, 500);
        head.parent().transition({'background-color':'rgba(24, 59, 72, .9)'}, 500);
        bars.transition({'color':'#c2e1c9'},200);
    }
    else if (bars.hasClass('open')){
        bars.next().slideUp(900);
        bars.parent().next().next().find('.hero-content').fadeIn(700);
        bars.removeClass('open').addClass('closed');
        head.parent().parent().transition({'background-color':'#ece7ef'}, 500)
        head.parent().parent().find('h2').transition({'color':'#183b48','background-color':'#ece7ef'}, 500);
        head.parent().transition({'background-color':'#ece7ef'}, 500);
        bars.transition({'color':'#ece7ef'},200);
    }
});

$('.tablet-nav').find('a').on('mouseenter', function(){
    let button = $(this);
    button.transition({'border-top':'2px solid #c2e1c9', 'border-bottom': '2px solid #c2e1c9'}, 200)
});
$('.tablet-nav').find('a').on('mouseleave', function(){
    let button = $(this);
    if (button.hasClass('current')){
        button.transition({'border-top':'2px solid transparent'}, 100)
    }
    else{
    button.transition({'border-top':'2px solid transparent', 'border-bottom': '2px solid transparent'}, 100)
    }
});


$(window).on('resize', function(){

    let pHeight= $('.story div:first-of-type').height();
    let pTop= $('.story div:first-of-type').position().top;
    let pBottom= pHeight-pTop;

    let imgTop= $('.story div:last-of-type').position().top;
    let imgHeight = $('.story div:last-of-type').height();
    let imgBottom = imgHeight-imgTop;

    let newTop= pBottom - 110;
    
    if( $(window).width() < 900){
    $('.story div:last-of-type').css({'top':newTop+'px'});
    }

    if ($(window).width() < 300){
        $('footer').removeAttr('style').css({'top':626+'px'})
    }
    else if( $(window).width() < 730){
        $('footer').css({'top':newTop+490+'px'})
    }
    else if ( $(window).width() < 900){
        $('footer').css({'top':newTop+530+'px'})
    }
    else if ($(window).width() > 900){
        $('footer').removeAttr('style').css({'top':'800px'})
        $('.story div:last-of-type').removeAttr('style');
    }
});
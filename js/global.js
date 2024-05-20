jQuery(document).ready($ => {
    const navHeight = $('#header').outerHeight()
    const navScrolled = () => {
        if(window.pageYOffset > navHeight) {
            $('#header').addClass('scrolled')
        }
    }
    $(':root').css('--nav-height', `${navHeight}px`)
    navScrolled()
    $(window).on('scroll', navScrolled)

    $('.hamburger').on('click', function() {
        if($(this).hasClass('active')) {
            $(this).removeClass('active')
            $('aside#mobile-menu').removeClass('active')
        } else {
            $(this).addClass('active')
            $('aside#mobile-menu').addClass('active')
        }
    })
})

/*=========SCROLL REVEAL ANIMATION===========*/
let sr = ScrollReveal({
    origin: 'top',
    distance: '30px',
    duration: 2000,
    reset: true
});

sr.reveal(`.section_banners_container, .boton_atras_banners,
            .banners_content, .boton_siguiente_banners,
            .titulo_categorias, .container_cuadros_servicios,
            .productos_content_principales_slider, .cuadro_texto_nosotros, 
            .scroll_titulo_valores, .scroll_cuadros_nosotros,
            .cuadro_texto_contactos, .formulario_contacto,
            .container_cuadros_footer`, {
    interval: 200
});


/*=======SCROLL TOP==========*/
function scrollTop() {
    const scrollTop = document.getElementById('scroll-top');
    if (this.scrollY >= 560) scrollTop.classList.add('show-scroll');
    else scrollTop.classList.remove('show-scroll')
}
window.addEventListener('scroll', scrollTop)


/*=======SHOW MENU=====*/

jQuery('document').ready(function($) {
    var btn = $('.bx-menu'),
        show_menu = $('.menu_content');

    btn.click(function() {
        if (show_menu.hasClass('show')) {
            show_menu.removeClass('show');
        } else {
            show_menu.addClass('show');


        }

    });

});


/*=======SHOW PANEL USER=====*/

jQuery('document').ready(function($) {
    var btn = $('.btn_iniciar_session'),
        show_panel_user = $('.panel_user');

    btn.click(function() {
        if (show_panel_user.hasClass('show')) {
            show_panel_user.removeClass('show');
        } else {
            show_panel_user.addClass('show');


        }

    });

});


/*==========SHOW PASSWD PANEL USER=========*/

function hideOrShowPassword(){
    var input_contraseña,icon_password;
  
    input_contraseña=document.getElementById("input_contraseña");
    icon_password=document.getElementById("panel_user_icon_password");

    if(input_contraseña.type == "password") {
        input_contraseña.type = "text";
    } else {
        input_contraseña.type = "password";
    }

  }


  /*==========SHOW PASSWD REGISTRO=========*/

/*function hideOrShowPasswordResgitro(){
    var input_contraseña,icon_password;
  
    input_contraseña=document.getElementById("input_contraseña");
    icon_password=document.getElementById("panel_user_icon_password");

    if(input_contraseña.type == "password") {
        input_contraseña.type = "text";
    } else {
        input_contraseña.type = "password";
    }

  }*/
<!DOCTYPE html=es>
<html lang="es">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
        <a href="#" class="scrolltop" id="scroll-top">
        <script src="https://unpkg.com/scrollreveal"></script>
        <script src="./js/jquery-3.6.0.min.js"></script>
            <i class='bx bx-chevron-up scrolltop__icon'></i>
        </a>
        <link rel="stylesheet" href="./css/estilo.css">
        <script src="js/main.js"></script>
        <title>Tienda virtual</title>
    </head>

<body>
    
    <header class="header" id="header">
        <div class="barra_nav" id="barra_nav">
            <div class="logo_content">
                <a href="./index.php" class="logo" id="logo">Tienda virtual</a>
            </div>
            <nav class="menu_container" id="menu_container">
                <div class="icon_menu">
                    <i class='bx bx-menu'></i>
                </div>
                <ul class="menu_content">
                    <li class="menu_item"><a href="">Alimentos y despensa</a><i class='bx bx-chevron-right'></i></li>
                    <li class="menu_item"><a href="">Hogar</a><i class='bx bx-chevron-right'></i></li>
                    <li class="menu_item"><a href="">Aseo y cuidado personal</a><i class='bx bx-chevron-right'></i></li>
                    <li class="menu_item"><a href="">Bebé</a><i class='bx bx-chevron-right'></i></li>
                    <li class="menu_item"><a href="">Bebidas</a><i class='bx bx-chevron-right'></i></li>
                    <li class="menu_item"><a href="">Congelados</a><i class='bx bx-chevron-right'></i></li>
                    <li class="menu_item"><a href="">Extraordinarios</a><i class='bx bx-chevron-right'></i></li>
                    <li class="menu_item"><a href="">Lácteos</a><i class='bx bx-chevron-right'></i></li>
                    <li class="menu_item"><a href="">Lo nuevo</a><i class='bx bx-chevron-right'></i></li>
                    <li class="menu_item"><a href="">Mascotas</a><i class='bx bx-chevron-right'></i></li>
                    <li class="menu_item"><a href="">Otros</a><i class='bx bx-chevron-right'></i></li>
                </ul>
            </nav>
            <div class="search_container">
                <div class="search_content">
                    <input class="search" type="search" placeholder="Buscar" name="search" id="search">
                </div>
            </div>
            <div class="user_container">
                <div class="user_content">
                    <a class="btn_iniciar_session">Ingresar/Registrarse</a>
                    <div class="panel_user">
                        <form class="fomrulario_de_ingreso" action="#">
                            <input class="id_user" type="user" required="" placeholder="Usuario / correo" autocomplete name="id_user"></input>
                            <input class="contraseña" id="input_contraseña" type="password" required="" placeholder="Contraseña" name="contraseña">
                            <img src="./imagenes/icons/icon_passwd_black.png" alt="" class="panel_user_icon_password" id="panel_user_icon_password" onClick="hideOrShowPassword()">
                            <button class="iniciar_session" type="submit">Iniciar sesión</button>
                        </form>    
                        <button class="registrarse" type="submit"><a href="./registro.php">Registrarse</a></button>
                    </div>
                </div>
            </div>
            <div class="carrito_container">
                <div class="carrito_content"></div>
                <i class='bx bx-cart'></i>
                <div class="panel_de_compras"></div>
            </div>
        </div>
    </header>

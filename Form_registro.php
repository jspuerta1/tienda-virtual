<?php require('./layout/header.php');
  include("registro.php")?>

    <main>
        <section class="section_registro">
            <form class="container_formulario_registro" action="registro.php" method="post">
                <div class="content_formulario_registro">
                    <div class="registro_lado_izquierdo">
                        <input class="nombre_de_usuario" name= "nombre" type="text" required="" placeholder="Nombre completo">
                        <input class="correo_electronico" name= "correo" type="text" required="" placeholder="Correo electronico">
                        <input class="telefono" type="number" name= "telefono" required="" placeholder="Telefono/Celular">
                        <input class="direccion" type="text" name= "direccion" require="" placeholder="Dirección">
                    </div>
                    <div class="registro_lado_derecho">
                        <select class="tipo_documento" name="tipo_documento">
                            <option disabled selected>Tipo de documento</option>
                            <option>Cedula de ciudadanía</option>
                            <option>Cedula de extranjería</option>
                            <option>Pasaporte</option>
                        </select>
                        <input class="numero_de_documento" name= "documento" type="number" require="" placeholder="Número de documento">
                        <input class="crear_contraseña" name= "contraseña1"type="password" required="" placeholder="Contraseña">
                            <img src="./imagenes/icons/icon_passwd_black.png" alt="" class="registro_icon_password" id="registro_icon_password" onClick="hideOrShowPasswordResgitro()">
                        </input>    
                        <input class="repetir_crear_contraseña" name= "contraseña2" type="password" required="" placeholder="Repetir contraseña">
                            <img src="./imagenes/icons/icon_passwd_black.png" alt="" class="registro_repetir_icon_password" id="registro_repetir_icon_password" onClick="hideOrShowPasswordResgitro()">
                        </input>    
                    </div>
                </div>
                <div class="g-recaptcha" data-sitekey="TU CLAVE DEL SITIO AQUÍ" data-callback="correctCaptcha"></div>
                    <?php
                        if (isset($_POST['submitForm'])) {
                            $captcha_response = true;
                            $recaptcha = $_POST['g-recaptcha-response'];
                        
                            $url = 'https://www.google.com/recaptcha/api/siteverify';
                            $data = array(
                                'secret' => '6LcPn6MUAAAAAGMPw-wB4AXjlj0eDFA-8IMobSj0',
                                'response' => $recaptcha
                            );
                            $options = array(
                                'http' => array (
                                    'method' => 'POST',
                                    'content' => http_build_query($data)
                                )
                            );
                            $context  = stream_context_create($options);
                            $verify = file_get_contents($url, false, $context);
                            $captcha_success = json_decode($verify);
                            $captcha_response = $captcha_success->success;
                            if ($captcha_response) {
                                echo '<p class="alert alert-success">Procesar datos...</p>';
                            } else {
                                echo '<p class="alert alert-danger">Debes indicar que no eres un robot.';
                            }
                        }
                    ?>
                    <button input type="submit" name="registrar"> registrar </button>
            </form>
        </section>
    </main>
    <script src="https://www.google.com/recaptcha/api.js"></script>

<?php require('./layout/footer.php');
     ?>
<?php require('./layout/header.php') ?>

    <main>
        <section class="section_registro">
            <form class="formulario_registro" action="#">
                <input class="nombre_de_usuario" type="text" required="" placeholder="Nombre completo">
                <input class="correo_electronico" type="text" required="" placeholder="Correo electronico">
                <input class="telefono" type="number" required="" placeholder="Telefono/Celular">
                <select class="tipo_documento" name="tipo_documento">
                    <option disabled selected>Tipo de documento</option>
                    <option>Cedula de ciudadanía</option>
                    <option>Cedula de extranjería</option>
                    <option>Pasaporte</option>
                </select>
                <input class="crear_contraseña" type="password" required="" placeholder="Contraseña">
                <input class="repetir_crear_contraseña" type="password" required="" placeholder="Repetir contraseña">
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
            </form>
        </section>
    </main>

    <script src="https://www.google.com/recaptcha/api.js"></script>

<?php require('./layout/footer.php') ?>
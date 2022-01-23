<?php

include("sql.php");

if (isset($_POST['registrar'])) {
    if (
        strlen($_POST['nombre']) >= 1 && strlen($_POST['documento']) >= 1 && strlen($_POST['direccion']) >= 1 && strlen($_POST['telefono']) >= 1
        && strlen($_POST['tipo_documento']) >= 1 && strlen($_POST['contraseña1']) >= 1 && strlen($_POST['contraseña2']) >= 1 && strlen($_POST['correo']) >= 1
        && strlen($_POST['cedula']) >= 1 && strlen($_POST['fecha']) >= 1 && strlen($_POST['usuario']) >= 1) {
        $fecha= $_POST['fecha'];
        $usuario=$_POST['usuario'];
        $cedula=$_POST['cedula'];
        $nombre = $_POST['nombre'];
        $tipo_documento = $_POST['tipo_documento'];
        $documento = $_POST['documento'];
        $direccion = $_POST['direccion'];
        $correo = $_POST['correo'];
        $telefono = $_POST['telefono'];
        $contraseña1 = $_POST['contraseña1'];
        $contraseña2 = $_POST['contraseña2'];
        $consulta="INSERT INTO usuario (id ,nombre, usuario, contraseña, correo, telefono,direcion,fecha_nacimineto,tipo_documento) VALUES
         ('$nombre','$usuario','$contraseña1','$correo','$telefono','$direccion','$fecha','$tipo_documento')"; //se requiere hacer modificacion en esta consulta  con respecto a las tablas de la base de datos
        $resultado= mysqli_query($conexion,$consulta);
        if($resultado){


            ?>
            <h3> inscripcion exitosa  </h3>
            <?php
        }else{

            ?>
            <h3> ha ocurrido un error   </h3>
            <?php
        }
    }
} else {

    echo "se deben llenar todos los campos";
}

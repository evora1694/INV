<?php

    $nombre = $_POST["nombre"];
    $correo = $_POST["email"];
    $telefono = $_POST["telefono"];
    $mensaje = $_POST["mensaje"];
    $opciones = $_POST["opciones"];

    // Conectar con la base de datos
$mysqli = new mysqli('localhost', 'root', '', 'login');

// Verificar si hay algún error
if ($mysqli->connect_errno) {
  echo "Error al conectar con la base de datos: " . $mysqli->connect_error;
  exit();
}

// Preparar la consulta SQL para insertar los datos
$sql = "INSERT INTO usuarios(nombre, correo, telefono, mensaje, opciones) VALUES ($nombre, $correo, $contacto, $mensaje, $opciones)";
$stmt = $mysqli->prepare($sql);

// Verificar si hay algún error
if (!$stmt) {
  echo "Error al preparar la consulta: " . $mysqli->error;
  exit();
}

// Vincular los parámetros con los valores del formulario
$stmt->bind_param('sss', $nombre, $correo, $telefono, $mensaje, $opciones);

// Ejecutar la consulta
if ($stmt->execute()) {
  echo "Datos guardados correctamente";
} else {
  echo "Error al guardar los datos: " . $stmt->error;
}

// Cerrar la conexión
$stmt->close();
$mysqli->close();

?>
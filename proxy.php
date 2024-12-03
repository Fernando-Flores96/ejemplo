<?php
// Datos de conexión a la base de datos de InfinityFree
$host = 'sql105.infinityfree.com';  // Reemplaza con tu host de base de datos
$database = 'if0_37831633_db_tiendavirtual';       // Reemplaza con el nombre de tu base de datos
$user = 'if0_37831633';           // Reemplaza con tu usuario de base de datos
$password = 'cielotkmtkm123';     // Reemplaza con tu contraseña

// Conectar a la base de datos
$conn = new mysqli($host, $user, $password, $database);

// Verificar si hay errores de conexión
if ($conn->connect_error) {
    die(json_encode(["error" => "Error de conexión: " . $conn->connect_error]));
}

// Obtener los datos enviados desde la aplicación Android
$usuario = $_POST['usuario'];
$password = $_POST['password'];

// Ejecutar una consulta SQL para validar el usuario
$sql = "SELECT * FROM persona WHERE usuario = ? AND password = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param('ss', $usuario, $password);
$stmt->execute();
$result = $stmt->get_result();

// Verificar si se encontró el usuario
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    echo json_encode(["idpersona" => $row['idpersona']]);
} else {
    echo json_encode(["error" => "Usuario o contraseña incorrectos"]);
}

// Cerrar la conexión
$stmt->close();
$conn->close();
?>

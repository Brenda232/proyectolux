<?php 
include("config.php"); 
include("includes/header.php"); 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $sql = "INSERT INTO usuarios (nombre, correo, password) VALUES ('$nombre', '$correo', '$password')";

    if ($conn->query($sql) === TRUE) {
        echo "<div class='alert alert-success text-center'>Registro exitoso. <a href='login.php'>Inicia sesión aquí</a></div>";
    } else {
        echo "<div class='alert alert-danger text-center'>Error: " . $conn->error . "</div>";
    }
}
?>

<div class="container mt-5">
    <h2 class="text-center">Registro</h2>
    <form method="POST" class="col-md-6 mx-auto mt-4">
        <div class="mb-3">
            <label class="form-label">Nombre:</label>
            <input type="text" name="nombre" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Correo:</label>
            <input type="email" name="correo" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Contraseña:</label>
            <input type="password" name="password" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-dark w-100">Registrarse</button>
    </form>
</div>

<?php include("includes/footer.php"); ?>

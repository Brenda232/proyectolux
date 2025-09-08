<?php 
include("config.php"); 
include("includes/header.php"); 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $correo = $_POST['correo'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM usuarios WHERE correo='$correo'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $usuario = $result->fetch_assoc();
        if (password_verify($password, $usuario['password'])) {
            $_SESSION['usuario'] = $usuario['nombre'];
            header("Location: index.php");
            exit;
        } else {
            echo "<div class='alert alert-danger text-center'>Contraseña incorrecta</div>";
        }
    } else {
        echo "<div class='alert alert-danger text-center'>No existe este correo</div>";
    }
}
?>

<div class="container mt-5">
    <h2 class="text-center">Iniciar Sesión</h2>
    <form method="POST" class="col-md-6 mx-auto mt-4">
        <div class="mb-3">
            <label class="form-label">Correo:</label>
            <input type="email" name="correo" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Contraseña:</label>
            <input type="password" name="password" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-dark w-100">Ingresar</button>
    </form>
</div>

<?php include("includes/footer.php"); ?>

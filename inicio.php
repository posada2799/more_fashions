<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>More Fashions - Crear Cuenta</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <header class="navbar">
    <div class="logo">
      <div class="logo-circle">B</div>
      <h1>More Fashions</h1>
    </div>
    <nav>
      <a href="#">Inicio</a>
      <a href="#">Catálogo</a>
      <a href="#">Ofertas</a>
      <a href="#">Contacto</a>
    </nav>
  </header>

  <main class="main-container">
    <section class="left">
      <div class="card">
        <div class="icon">
          <img src="https://cdn-icons-png.flaticon.com/512/892/892458.png" alt="Moda">
        </div>
        <h2>Moda Femenina</h2>
        <p>Descubre tu estilo único</p>
      </div>
    </section>

    <section class="right">
      <div class="form-container">
        <h2>Crear Cuenta</h2>
        <p>Únete a nuestra comunidad de moda</p>
        
        <form action="registro.php" method="POST">
          <div class="form-group">
            <input type="text" name="nombre" placeholder="Nombre" required>
            <input type="text" name="apellido" placeholder="Apellido" required>
          </div>
          <input type="email" name="correo" placeholder="Correo Electrónico" required>
          <input type="tel" name="telefono" placeholder="Teléfono">
          <input type="password" name="password" placeholder="Contraseña" required>
          <input type="password" name="confirm_password" placeholder="Confirmar Contraseña" required>
          <input type="date" name="fecha_nacimiento" placeholder="Fecha de Nacimiento">
          <button type="submit">Registrarse</button>
        </form>

      </div>
    </section>
  </main>
</body>
</html>

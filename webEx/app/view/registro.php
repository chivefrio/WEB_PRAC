<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="style.css">
   <title>Registro de Usuario</title>
</head>
<body>
   <div class="container">
      <h2>Registro</h2>
      <form action="../controller/registrar_controller.php" method="post">
         <input type="email" name="email" placeholder="Email" required><br>
         <input type="password" name="password" placeholder="Contraseña" required><br>
         <input type="password" name="confirm_password" placeholder="Confirmar Contraseña" required><br>
         <button type="submit">Registrarse</button>
      </form>
   </div>
</body>
</html>

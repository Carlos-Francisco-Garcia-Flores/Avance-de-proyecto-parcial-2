<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>TECHUEJUTLA</title>
    <link rel="stylesheet" href="APP/view/Style.css" />
  </head>
  <body>
    <header class="header">
    <nav class="navegation_bar">
    <ul>
          <li><a href="http://localhost/php/sitio">Inicio</a></li>
          <li><a href="http://localhost/php/sitio/">Proyectos</a></li>
          <li><a href="http://localhost/php/sitio/?C=PresentsController&M=Index">solicitudes</a></li>
          <li><a href="http://localhost/php/sitio/?C=UserController&M=Index">Usuarios</a></li>
          <li><a href="http://localhost/php/sitio/?C=UserController&M=CallFormLogin">Iniciar sesion</a></li>
        </ul>

      </nav>

      <h1>TECHUEJUTLA</h1>

    </header>
    <section class="content">
      <?php include_once($vista); ?>
    </section>

  </body>
</html>
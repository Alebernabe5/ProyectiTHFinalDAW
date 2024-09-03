<!DOCTYPE html>
<html lang="es">
<head>
    <!-- METADATOS -->
    <meta charset="UTF-8">
    <meta name="author" content="Alejandro Bernabé Guerrero, Francisco Jose Castillo Cid, Francisco Javier Carrillo Luque">
    <meta name="description" content="Web tareHome cuida de sus hijos/as">
    <meta name="keywords" content="Cuidar, hijos, hijas, canguros, padres, madres, cuidadores">
    <meta name="viewport" content="witdh=device-width, initial-scale=1">
      <!-- Titulo -->
      <title>TareHome | Cuida de vuestros hijos/as</title>
      <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="/img/logotipo.png">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- Iconos de Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!-- CSS -->
    <link href="./assets/css/style.css" rel="stylesheet">
    <!-- Google fonds -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&family=Quicksand:wght@300..700&family=Rubik+Dirt&family=Share+Tech+Mono&display=swap" rel="stylesheet">
</head>

<body>
   <!-- Barra de navegacion -->
   <nav class="navbar navbar-expand-md navbar-light fixed-top">
    <div class="container">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
            <a class="navbar-brand" href="#">
                <i class="bi bi-house"></i>
            </a>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#sobre-mi">Sobre mí</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#quienSomos">Acerca de nosotros</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#busqueda">Búsqueda de canguros</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#contacto">Contacto</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#trabajaConNosotros">Trabaja con nosotros</a>
                </li>
            </ul>
        </div>
    </div>
</nav>


<!-- AUTENTICACION -->
  <section class="fondo">
<form class="autenticacion hero" method="POST" action="index.php?controlador=inicio&accion=validar">
      <!-- Email input -->
      <div class="form-outline mb-4">
        <input type="email" id="form2Example1" name="email" class="form-control borde-caja" />
        <label class="form-label" for="form2Example1">E-mail</label>
      </div>

      <!-- Password input -->
      <div class="form-outline mb-4">
        <input type="password" id="form2Example2" name="contrasena" class="form-control borde-caja" />
        <label class="form-label" for="form2Example2">Contraseña</label>
      </div>

      <!-- 2 column grid layout for inline styling -->
      <div class="row mb-4">
        <div class="col d-flex justify-content-center">
          <!-- Checkbox -->
          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="form2Example31" checked />
            <label class="form-check-label" for="form2Example31"> Recuerdame </label>
          </div>
        </div>
        <!-- Mensaje de error de usuario o contraseña  -->
        <div class="alert">
        <?php

            if (isset($data["errorvalidacion"]))
            {
              ?>
              <div class="alert alert-danger">
                <?php echo $data["errorvalidacion"];?>
              </div>
              <?php
            }
            ?>
        </div>
        <div class="col">
          <!-- Simple link -->
          <a href="#!">Olvidaste tu contraseña?</a>
        </div>
      </div>

      <!-- Submit button -->
      <button type="submit" class="btn btn-primary btn-block mb-4">Iniciar Sesión</button>

      <!-- Register buttons -->
      <div class="text-center">
        <p>Registrate <a href="#!">Registrarse</a></p>
        <button type="button" class="btn btn-link btn-floating mx-1">
          <i class="fab fa-facebook-f"></i>
        </button>

        <button type="button" class="btn btn-link btn-floating mx-1">
          <i class="fab fa-google"></i>
        </button>

        <button type="button" class="btn btn-link btn-floating mx-1">
          <i class="fab fa-twitter"></i>
        </button>

        <button type="button" class="btn btn-link btn-floating mx-1">
          <i class="fab fa-github"></i>
        </button>
      </div>
    </form>
  </section>
    
    

      <!-- SOBRE MI -->
      <section id="sobre-mi" class="sobre-mi seccion-oscura">
            <div class="contenedor">
                <h2 class="seccion-titulo">
              Bienvenido a TareHome: Tu Solución para Encontrar Canguros de Confianza</h2>
                <p class="seccion-texto">En un mundo donde el equilibrio entre la vida laboral y familiar es crucial, TareHome se presenta como tu aliado confiable para hacer que la búsqueda de cuidadores para tus hijos sea más sencilla y segura que nunca. Nos dedicamos a conectar a padres ocupados con canguros cualificados y confiables en su área local, brindando tranquilidad y comodidad en cada paso del camino.</div>
        </section>

    <!-- EXPERIENCIA -->
    <section  id="quienSomos" class="experiencia seccion-clara">
        <div class="container text-center">
            <div class="row">
                <!-- ¿Quiénes Somos? -->
                <div class="columna col-12 col-md-3">
                  <i class="bi bi-question-circle"></i>
                  <p class="experiencia-titulo">¿Quiénes Somos?</p>
                  <p>En TareHome, entendemos las demandas modernas de la vida cotidiana y cómo pueden afectar la capacidad de los padres para encontrar cuidadores confiables para sus hijos. Nuestra empresa nació de la necesidad de crear una plataforma que simplifique este proceso, brindando acceso a una red de canguros de calidad que cumplan con los más altos estándares de seguridad y profesionalismo.</p>
                   <div class="badges-contenedor">
                   </div> 
                </div>
                    
                <!-- Nuestra Misión-->
                <div class="columna col-12 col-md-3">
                  <i class="bi bi-calendar2-check"></i>
                  <p class="experiencia-titulo">Nuestra Misión</p>
                  <p>Nuestra misión en TareHome es proporcionar a los padres la tranquilidad que merecen al dejar a sus hijos al cuidado de otra persona. Nos esforzamos por ofrecer un servicio excepcional que no solo simplifique la búsqueda de canguros, sino que también garantice la seguridad y el bienestar de los niños en todo momento.</p>
                   <div class="badges-contenedor">
                   </div> 

                </div>
                    
                <!-- ¿Qué Ofrecemos?-->
                <div class="columna col-12 col-md-3">
                  <i class="bi bi-geo-alt-fill"></i>
                  <p class="experiencia-titulo">¿Qué Ofrecemos?</p>
                  <p>En nuestra plataforma, los padres pueden explorar perfiles detallados de canguros cercanos, que incluyen información sobre su experiencia, calificaciones, y reseñas de otros padres. Utilizando nuestro sistema de búsqueda intuitivo, los usuarios pueden filtrar por ubicación, disponibilidad y habilidades específicas para encontrar el canguro perfecto para sus necesidades únicas.</p>
                   <div class="badges-contenedor">
                   </div> 
                </div>  

                <div class="columna col-12 col-md-3">
                  <i class="bi bi-key-fill"></i>
                  <p class="experiencia-titulo">¿Por Qué Elegir TareHome?</p>
                  <p>En TareHome, estamos comprometidos a hacer que la experiencia de encontrar un canguro sea lo más libre de estrés posible, permitiéndote dedicar más tiempo a lo que realmente importa: pasar tiempo de calidad con tu familia. Únete a nuestra comunidad hoy y descubre cómo podemos ayudarte a simplificar tu vida cotidiana.</p>
                   <div class="badges-contenedor">
                   </div> 
                </div>    
            </div>
        </div>


    </section>

    

    <!-- CONTACTO  -->

    <section id="contacto" class="testimonios seccion-clara">
      <h2 class="seccion-titulo">
        Contacto
      </h2>
      <h3 class="seccion-descripcion">Información de contacto</h3>

 <!-- Bloque contacto -->
 <section  id="quienSomos" class="experiencia seccion-clara">
  <div class="container text-center">
      <div class="row">
           <!-- Contacto -->
           <div class="columna col-12 col-md-4">
            <i class="bi bi-telephone-inbound-fill"></i>
            <h3 class="contacto-titulo">Contacto</h3>
            <p>Nombre comercial: TareHome</p>
            <p>NIF: A-05496624</p>
            <p>Población: Sevilla</p>
            <p>E-mail: tarehome@gmail.com</p>
            <p>WEB: www.tarehome.com</p>
          </div>
              
          <!-- FAQ (Preguntas Frecuentes)-->
          <div class="columna col-12 col-md-4">
            <i class="bi bi-question-lg"></i>
            <p class="contacto-titulo">FAQ (Preguntas Frecuentes)</p>
            <p>¿Que es TareHome?</p>
            <p>¿El hecho de registrarse en TareHome conlleva alguna obligación?</p>
            <p>¿TareHome hace entrevistas previas a los cuidadores?</p>
          </div>
              
          <!-- Centro de ayuda -->
          <div class="columna col-12 col-md-4">
            <i class="bi bi-info-lg"></i>
            <p class="contacto-titulo">Centro de ayuda</p>
            <p>¿En qué podemos ayudarte?</p>
            <i class="bi bi-headset"></i>
             <div class="badges-contenedor">
              <div class="container mt-5">
                <!-- Botón con el número de teléfono -->
                <a href="tel:+34 955660916" class="btn btn-success">Llamar a atención al cliente</a>
              </div>
             </div> 
          </div>   
          
           <!-- FORMULARIO DE CONTACTO  -->
    <section>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="well well-sm">
              <form id="contactForm" class="form-horizontal" method="post" action="vistas\enviar_email.php" onsubmit="return validarFormulario()">
                <fieldset>
                  <h1 class="text-center header">Formulario de Contacto</h1>
    
                  <div class="form-group">
                    <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>
                    <div class="col-md-8">
                      <input id="nombre" name="name" type="text" placeholder="Nombre" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>
                    <div class="col-md-8">
                      <input id="apellidos" name="lastname" type="text" placeholder="Apellidos" class="form-control">
                    </div>
                  </div>
    
                  <div class="form-group">
                    <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-envelope-o bigicon"></i></span>
                    <div class="col-md-8">
                      <input id="email" name="email" type="email" placeholder="Correo electrónico" class="form-control">
                    </div>
                  </div>
    
                  <div class="form-group">
                    <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-phone-square bigicon"></i></span>
                    <div class="col-md-8">
                      <input id="telefono" name="phone" type="text" placeholder="Número de teléfono" class="form-control">
                    </div>
                  </div>
    
                  <div class="form-group">
                    <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-pencil-square-o bigicon"></i></span>
                    <div class="col-md-8">
                      <textarea class="form-control" id="mensaje" name="message" placeholder="Introduzca aquí su mensaje. Nos pondremos en contacto con usted" rows="7"></textarea>
                    </div>
                  </div>
    
                  <div class="form-group">
                    <div class="col-md-12 text-center">
                      <button type="submit" class="btn btn-primary btn-lg">Enviar</button>
                    </div>
                  </div>
                </fieldset>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
  </section>
    </div>    
  </div>
 </div>


</section>
    
<!-- CONTACTO  -->
<section id="trabajaConNosotros" class="contacto seccion-oscura" style="margin-top: 100px;>
<div class="container">
  <div class="container text-center rectangulo d-flex justify-content-evenly">
    <div class="row">
      <div class="col-12 col-md-4 seccion-titulo">
        ¡Hablemos!
      </div>
      <div class="col-12 col-md-4 descripcion">   
¡Únete a Nuestra Red de Canguros Confiables en TareHome!
      </div>
      <div class="col-12 col-md-4">
        <a href="">
          <button type="button">
            ÚNETE!!
            <i class="bi bi-arrow-right"></i>
          </button>
        </a>
      </div>
    </div>
  </div>
</div>
</section>

<!-- PIE DE PAGINA  -->

<?php
    include "./vistas/inc/footer.php"
  ?>

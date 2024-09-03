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
      <title>TareHome | Búsqueda de canguros</title>
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
  <?php
    include "./vistas/inc/header.php"
  ?>


<body>
   <!-----CUERPO --->
   
        <?php
       

        // // Incluye el archivo GestorBD.php para poder usar la clase GestorBD
        // include "../lib/GestorBD.php";

        // // Crea una instancia de la clase GestorBD
        // $gestorBD = new GestorBD();

        // // Obtiene los canguros de la base de datos
        // $canguros = $gestorBD->getCanguros();
        // if (isset($_GET['localidad'])) {
        //     // Obtiene la localidad proporcionada por el usuario
        //     $localidad = $_GET['localidad'];
            
        //     // Filtra los canguros por la localidad proporcionada
        //     $canguros = $gestorBD->getCangurosPorLocalidad($localidad);
        // } else {
        //     // Si no se ha proporcionado una localidad, obtén todos los canguros
        //     $canguros = $gestorBD->getCanguros();
        // }
        ?>
        <?php
// if ($canguros) {
//     foreach ($canguros as $canguro) {
//         // Mostrar los detalles del canguro
//     }
// } else {
//     // Mostrar un mensaje si no se encontraron canguros para la localidad proporcionada
//     echo "No se encontraron canguros para la localidad proporcionada.";
// }
?>

        <!-----LISTADO DE CANGUROS --->
        <form id="filtroForm" method="GET" action="">
    <input type="text" id="localidadInput" name="localidad" placeholder="Ingresa la localidad">
    <button type="submit">Filtrar por localidad</button>
</form>

        <h2 class="display-6 text-center mb-4">Listado de Canguros</h2>
        <div class="table-responsive">
            <table class="table text-center">
                <thead>
                <tr>
                    <th style="width: 25%;">Nombre</th>
                    <th style="width: 25%;">Localidad</th>
                    <th style="width: 25%;">Experiencia</th>
                    <th style="width: 25%;">Formación</th>
                </tr>
                </thead>
                <tbody>
                <?php
                // Verifica si hay canguros antes de iterar sobre ellos
               if($data){
                for ($i=0; $i < count($data); $i++)
                {
                        ?>
                        <tr class="alert alert-light">
                            <td><?php echo $data[$i]["usuario_id"]; ?></td>
                            <td><?php echo $data[$i]["localidad"]; ?></td>
                            <td><?php echo $data[$i]["experiencia"]; ?></td>
                            <td><?php echo $data[$i]["formacion"]; ?></td>
                        </tr>
                        <?php
                }
                ?>
                 <?php
                   } 
                else {
                    ?>
                    <tr>
                        <td colspan="4" class="text-center">No se encontraron canguros.</td>
                    </tr>
                    <?php
                }
                ?>
                </tbody>
            </table>
        </div>
        <!-----FIN LISTADO DE CANGUROS --->

        <?php
    include "./vistas/inc/footer.php"
  ?>

</body>
</html>
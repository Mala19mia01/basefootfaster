<!-- Esta parte es del admin para que inserte y elimine lo que se encuentra en el catalogo -->

<?php 
    require '../config/conexion.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/css/all.min.css">

    <title>CRUD-CATALÓGO</title>
</head>
<body>
    
    <div class="container py-3">

        <h2 class="text-center">Catalogo</h2>


        <div class="row justify-content-end">
            <div class="col-auto">
                <a href="" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#nuevoModal"> <i class="fa-solid fa-circle-plus"></i> Nuevo Registro</a>
            </div>
        </div>

        <table class="table table-sm table-striped table-hover mt-4">

            <thead class="table-dark">
                <tr>
                    <th>#</th>
                    <th>Nombre</th>
                    <th>Descripción</th>
                    <th>Categoria</th>
                    <th>Imagen</th>
                    <th>Precio</th>
                    <th>Acción</th>
                </tr>
            </thead>

            <tbody>

            </tbody>

        </table>


    </div>

    <?php 
    
        // $sqlCategoria = "SELECT id_categoria, nombre From categoria";
        // $categorias = $conexion->query($sqlCategoria)
    ?>

    <?php include 'nuevoModal.php';  ?>


    <script src="/assets/js/bootstrap.bundle.min.js"></script>

</body>
</html>
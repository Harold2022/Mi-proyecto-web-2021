<?php require_once 'partes/head.php'; ?>

<?php #require_once 'partes/menu.php'; ?>

<div class="bg-light">
    <div class="container">
        <h1 class="display-1 py-5"> <?php echo $pagina; ?> </h1>
    </div>
</div>

<!-- Formulario -->

<div class="container">
    <form action="">
        <div class="form-group">
            <input type="search" name="nombre" id="" class="form-control">
            <button name="buscar" class="btn btn-primary">Buscar</button>
        </div>
    </form>
</div>

<div class="container">
<form action="" method="post">
    <div>
        <label for="">Nombre</label>
        <input type="text" name="nombre">
    </div>
    
    <div>
        <label for="">apellido</label>
        <input type="text" name="apellido">
    </div>

    <div>
        <button name="guardar">Guardar</button>
    </div>
</form>


<?php echo $_SESSION['mensaje'] ?? ""; ?>
</div>


<div class="container">
    <table class="table">
        <thead>
            <tr>
            <th scope="col">#</th>
                <th scope="col">First</th>
                <th scope="col">Last</th>
                <th scope="col">Handle</th>
            </tr>
        </thead>
        <tbody>

<?php

    while($datos = mysqli_fetch_assoc($resultado)) {
     
        echo "<tr>
                <th scope='row'>{$datos['actor_id']}</th>

                <th scope='row'>{$datos['first_name']}</th>
                <td>{$datos['last_name']}</td>
                <td>{$datos['last_update']}</td>
                <td></td>
            </tr>";
    }

    ?>

</tbody>
</table>

<?php require_once 'partes/foot.php'; ?>
<?php

$categoria = $_SESSION['categoria'];
$query = $conexion->query("SELECT * FROM producto where id_categoria = '$categoria' ORDER BY nom_producto ASC");
?>


<div class="wrapper">
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Ver productos</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="dashboard">Inicio</a></li>
                            <li class="breadcrumb-item"><a href="Ver-categoria-cliente">Ver categorias</a></li>
                            <li class="breadcrumb-item active">
                                <?php
                                $sql = $conexion->query("SELECT desc_categoria FROM categoria where id_categoria = '$categoria'");
                                $rown = mysqli_fetch_array($sql);
                                echo $rown["desc_categoria"];
                                ?>
                            </li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h4 class="card-title">Productos</h4>
                            </div>
                            <div class="card-body">
                                <div>
                                    <div class="btn-group w-100 mb-2">
                                        <a class="btn btn-info active" href="javascript:void(0)" data-filter="all"> Todos los items </a>
                                        <a class="btn btn-info" href="javascript:void(0)" data-filter="1"> Category 1 (WHITE) </a>
                                        <a class="btn btn-info" href="javascript:void(0)" data-filter="2"> Category 2 (BLACK) </a>
                                        <a class="btn btn-info" href="javascript:void(0)" data-filter="3"> Category 3 (COLORED) </a>
                                        <a class="btn btn-info" href="javascript:void(0)" data-filter="4"> Category 4 (COLORED, BLACK) </a>
                                    </div>
                                    <div class="mb-2">

                                        <div class="float-right">
                                            <select class="custom-select" style="width: auto;" data-sortOrder>
                                                <option value="index"> Alfabeticamente </option>
                                                <option value="sortData"> Precio </option>
                                            </select>
                                            <div class="btn-group">
                                                <a class="btn btn-default" href="javascript:void(0)" data-sortAsc> Ascendente </a>
                                                <a class="btn btn-default" href="javascript:void(0)" data-sortDesc> Descendente </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="filter-container p-3 row">
                                        <?php

                                        while ($row = mysqli_fetch_array($query)) {
                                            echo "
                                            <div class='contenedor'>
                                                <div class='filtr-item col-sm-2' data-category='1' data-sort='".$row['precio']."'>
                                                    <a data-toggle='lightbox' data-title='2'>
                                                        <figure>
                                                            <img src='model/" . $row['ruta_imagen'] . "' class='img-fluid mb-2' width='100px' height='100px' alt='" . $row['nom_producto'] . "' />
                                                            <div class='capa'>
                                                                <h3>" . $row['nom_producto'] . "</h3>
                                                                <p>
                                                                    <a onclick='verProducto(" . $row["id_producto"] . ")'><button type='button' class='btn btn-block btn-primary '>Ir</button></a>
                                                                </p>

                                                                <h3>$" . $row['precio'] . "</h3>
                                                            </div>
                                                        </figure>
                                                    </a>
                                                </div>
                                            </div>";
                                        }
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
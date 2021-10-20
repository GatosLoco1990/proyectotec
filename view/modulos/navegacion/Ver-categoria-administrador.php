<div class="wrapper">
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Ver categorias</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="dashboard">Inicio</a></li>
                            <li class="breadcrumb-item active">Ver categorias</li>
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
                                <h4 class="card-title">Categor&iacute;as</h4>
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
                                                <option value="index"> Seleccionar </option>
                                                <option value="sortData"> Alfabeticamente </option>
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
                                        $query = $conexion->query("SELECT * FROM `categoria` ORDER BY `desc_categoria` ASC");
                                        while ($row = mysqli_fetch_array($query)) {
                                            echo "
                                            <div class='contenedor'>
                                                <div class='filtr-item col-sm-2' data-category='1' data-sort='Computadores'>
                                                    <a href='Registrar-producto' data-toggle='lightbox' data-title='2'>
                                                        <figure>
                                                            <img src='model/".$row['ruta_imagen'] ."' class='img-fluid mb-2' alt='Computadores' />
                                                            <div class='capa'>
                                                                <h3>".$row['desc_categoria'] ."</h3>
                                                                <p>
                                                                    <a onclick='verCategoria(" . $row["id_categoria"] . ")'><button type='button' class='btn btn-block btn-primary'>Ir</button></a>
                                                                    <a href='Categoria'><button type='button' class='btn btn-block btn-danger'>Editar</button></a>
                                                                </p>
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
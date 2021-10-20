<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Registrar producto</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="dashboard">Inicio</a></li>
                        <li class="breadcrumb-item active">Registrar producto</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Registrar producto</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form id="FormRegistrarProducto" name="FormRegistrarProducto" method="POST">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="nombre">C&oacute;digo</label>
                                    <input type="text" class="form-control" id="codigoProd" name="codigoProd" placeholder="C&oacute;digo">
                                </div>
                                <div class="form-group">
                                    <label for="apellido">Nombre</label>
                                    <input type="text" class="form-control" id="nombreProducto" name="nombreProducto" placeholder="Nombre">
                                </div>
                                <div class="form-group">
                                    <label for="apellido">Descripci&oacute;n</label>
                                    <input type="text" class="form-control" id="descripcionProducto" name="descripcionProducto" placeholder="Descripci&oacute;n">
                                </div>
                                <div class="form-group">
                                    <label for="doc">Precio</label>
                                    <input type="number" class="form-control" id="precioProducto" name="precioProducto" placeholder="Precio">
                                </div>
                                <div class="form-group">
                                    <label for="doc">Stock</label>
                                    <input type="number" class="form-control" id="stock" name="stock" placeholder="Stock">
                                </div>
                                <div class="form-group">
                                    <label for="apellido">Marca</label>
                                    <input type="text" class="form-control" id="marcaProducto" name="marcaProducto" placeholder="Marca">
                                </div>
                                <div class="form-group">
                                    <label>Categor&iacute;a</label>
                                    <select class="custom-select" id="categoriaProducto" name="categoriaProducto">
                                        <?php
                                        $query = $conexion->query("SELECT categoria.id_categoria, categoria.desc_categoria FROM categoria");
                                        while ($valores = mysqli_fetch_array($query)) {
                                            echo '<option value="' . $valores['id_categoria'] . '">' . utf8_encode($valores['desc_categoria']) . '</option>';
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="fecha de nacimiento">Fecha de ingreso</label>
                                    <input type="date" class="form-control" id="fechaProducto" name="fechaProducto">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFile">Imagen</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="fotoProducto" name="fotoProducto">
                                            <label class="custom-file-label" for="exampleInputFile">Selecciona la imagen</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Registrar</button>
                            </div>
                        </form>
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </div>


    </section>
</div>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Registrar Venta</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="dashboard">Inicio</a></li>
                        <li class="breadcrumb-item active">Registrar Venta</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Registrar venta</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->

                        <form id="FormRegistrarCompra" name="FormRegistrarCompra" method="POST">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="nombre">Empleado</label>
                                    <input value="<?php echo $_SESSION['idemp']; ?>" type="text" class="form-control" id="Empleado" name="Empleado" disabled>
                                </div>
                                <div class="form-group">
                                    <label for="apellido">Cliente</label>
                                    <select class="custom-select" id="Cliente" name="Cliente">
                                        <?php
                                        $query = $conexion->query("SELECT id_cliente , nom_cliente, ape_cliente FROM cliente");
                                        while ($valores = mysqli_fetch_array($query)) {
                                            echo '<option value="' . $valores['id_cliente'] . '">' . utf8_encode($valores['nom_cliente']) . " " . utf8_encode($valores['ape_cliente']) . '</option>';
                                        }
                                        ?>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="apellido">Modo pago</label>
                                    <select class="custom-select" id="ModoPago" name="ModoPago">
                                        <?php
                                        $query = $conexion->query("SELECT * FROM modopago");
                                        while ($valores = mysqli_fetch_array($query)) {
                                            echo '<option value="' . $valores['id_modopago'] . '">' . utf8_encode($valores['metodo']) . '</option>';
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Producto</label>
                                    <select class="custom-select" id="Producto" name="Producto">
                                        <?php
                                        $query = $conexion->query("SELECT * FROM producto");
                                        while ($valores = mysqli_fetch_array($query)) {
                                            echo '<option value="' . $valores['id_producto'] . '">' . utf8_encode($valores['cod_producto']) . " - " . utf8_encode($valores['nom_producto']) . '</option>';
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="tel">Cantidad</label>
                                    <input type="number" class="form-control" id="Cantidad" name="Cantidad" placeholder="Cantidad">
                                </div>
                                <div class="form-group">
                                    <label for="nombre">Precio</label>
                                    <input value="<?php ?>" type="number" class="form-control" id="Precio" name="Precio" disabled>
                                </div>

                                <div class="form-group">
                                    <label for="nombre">Total a pagar</label>
                                    <input value="" type="text" class="form-control" id="totalPago" name="totalPago" disabled>
                                </div>


                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Registrar</button>
                            </div>
                        </form>
                        <form id="FormRegistrarCompra" name="FormRegistrarCompra" method="POST">
                                                                    <div class="card-body">
                                                                        <div class="form-group">
                                                                            <label for="nombre">Empleado</label>
                                                                            <input value="<?php echo $_SESSION['idemp'];?>" type="text" class="form-control" id="Empleado" name="Empleado" disabled>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label for="apellido">Cliente</label>
                                                                            <select class="custom-select" id="Cliente" name="Cliente">
                                                                                <?php
                                                                                $query = $conexion->query("SELECT id_cliente , nom_cliente, ape_cliente FROM cliente");
                                                                                while ($valores = mysqli_fetch_array($query)) {
                                                                                    echo '<option value="' . $valores['id_cliente'] . '">' . utf8_encode($valores['nom_cliente']) . " " . utf8_encode($valores['ape_cliente']) . '</option>';
                                                                                }
                                                                                ?>
                                                                            </select>
                                                                        </div>

                                                                        <div class="form-group">
                                                                            <label for="apellido">Modo pago</label>
                                                                            <select class="custom-select" id="ModoPago" name="ModoPago">
                                                                                <?php
                                                                                $query = $conexion->query("SELECT * FROM modopago");
                                                                                while ($valores = mysqli_fetch_array($query)) {
                                                                                    echo '<option value="' . $valores['id_modopago'] . '">' . utf8_encode($valores['metodo']) . '</option>';
                                                                                }
                                                                                ?>
                                                                            </select>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label for="nombre">Producto</label>
                                                                            <input value="15" type="number" class="form-control" id="Producto" name="Producto" disabled>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label for="tel">Cantidad</label>
                                                                            <input type="number" class="form-control" id="Cantidad" name="Cantidad" placeholder="Cantidad">
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label for="nombre">Precio</label>
                                                                            <input value="<?php echo $precio; ?>" type="number" class="form-control" id="Precio" name="Precio" disabled>
                                                                        </div>

                                                                        <div class="form-group">
                                                                            <label for="nombre">Total a pagar</label>
                                                                            <input value="" type="text" class="form-control" id="totalPago" name="totalPago" disabled>
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

                <div class="col-md-6">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Datos de venta</h3>
                        </div>
                        <form>
                            <div class="card-body">
                                <div class="form-group">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Valor unitario</label>
                                        <input type="number" class="form-control" id="exampleInputEmail1" disabled>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Subtotal</label>
                                        <input type="number" class="form-control" id="exampleInputEmail1" disabled>
                                    </div>
                                </div>

                            </div>
                            <!-- /.card-body -->



                        </form>


                    </div>
                </div>
    </section>
</div>
<!-- Site wrapper -->
<div class="wrapper">


    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Contactanos</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="dashboard">Inicio</a></li>
                            <li class="breadcrumb-item active">Contactanos</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="card">
                <div class="card-body row">
                    <div class="col-5 text-center d-flex align-items-center justify-content-center">
                        <div class="">
                            <h2>Olimpica<strong>RGV</strong></h2>
                            <p class="lead mb-5">Comenta que pregunta o problema tienes<br>
                                L&iacute;neas telef&oacute;nicas: +57 318 4827442
                            </p>
                        </div>
                    </div>
                    <div class="col-7">
                        <div class="cnt_form">
                            <form id="FormContacto" name="FormContacto" class="contact" method="POST" action="model/enviar.php">
                                <div class="form-group">
                                    <label for="inputName">Nombre</label>
                                    <input type="text" id="nombre" name="nombre" class="form-control" />
                                </div>
                                <div class="form-group">
                                    <label for="inputEmail">Correo</label>
                                    <input type="email" id="correo" name="correo" class="form-control" />
                                </div>
                                <div class="form-group">
                                    <label for="inputSubject">Asunto</label>
                                    <input type="text" id="asunto" name="asunto" class="form-control" />
                                </div>
                                <div class="form-group">
                                    <label for="inputMessage">Mensaje</label>
                                    <textarea id="mensaje" name="mensaje" class="form-control" rows="4"></textarea>
                                </div>
                                <div class="form-group">
                                    <input type="submit" class="btn btn-primary" value="Enviar">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>

</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->
</div>
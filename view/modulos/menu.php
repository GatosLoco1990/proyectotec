  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="dashboard" class="brand-link">
      <img src="view/presentacion/dist/img/logo_small_icon_only.png" alt="OlimpicaRGV Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">COMPUTECK</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <?php
          if ($_SESSION['rol'] == 1 || ($_SESSION['rol'] == 2)) {
            echo "<img src='model/" . $_SESSION['imagen'] . "' class='img-circle elevation-2'  alt='profile foto'>";
          } else
            echo "<img src='view/presentacion/dist/img/AdminLTELogo.png' class='img-circle elevation-2'  alt='profile foto'>";
          ?>
        </div>
        <div class="info">

          <?php
          echo "<a href='Perfil' class='d-block'>" . $_SESSION['nombre'] . "</a>";
          ?>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

          <!-- Menu empleado -->
          <?php

          if ($_SESSION['rol'] == '2') { ?>

            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-th-large"></i>
                <p>
                  Categorias
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="Registrar-producto" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Registrar producto</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="Ver-categoria" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Ver</p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-tags  "></i>
                <p>
                  Ventas
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="Registrar-venta" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Registrar</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="Historial-venta" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Ver historial</p>
                  </a>
                </li>
              </ul>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-hammer"></i>
                <p>
                  Servicios
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="Ver-servicios" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Ver servicios</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="Registrar-servicios" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Registrar servicios</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="Ver-entrega" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Ver entregas</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="Registrar-entrega" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Registrar entregas</p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item">
              <a href="certificado" class="nav-link">
                <i class="far fa-id-card nav-icon"></i>
                <p>Generar certificado</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="Registrar-cliente" class="nav-link">
                <i class="nav-icon fa fa-user fa-fw"></i>
                <p>
                  Registrar Cliente
                </p>
              </a>
            </li>
            </li>
            <!-- Menu cliente -->
          <?php } else if ($_SESSION['rol'] == '3') { ?>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-th-large"></i>
                <p>
                  Categorias
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="Ver-categoria-cliente" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Ver</p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-store"></i>
                <p>
                  Compras
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="Historial-compra" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Historial</p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-hands-helping"></i>
                <p>
                  Ayuda
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="Contactanos" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Contacto</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="faq" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Preguntas frecuentes</p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-info-circle"></i>
                <p>
                  Acerca
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="Quienes" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>¿Qui&eacute;nes somos?</p>
                  </a>
                </li>
              </ul>
            </li>

            <!-- Menu admin -->
          <?php } else if ($_SESSION['rol'] == '1') { ?>
            <li class="nav-header">Administrador</li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-th-large"></i>
                <p>
                  Categorias
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="Registrar-categoria" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Registrar categorias</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="Registrar-producto" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Registrar producto</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="Ver-categoria-administrador" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Ver Categorias</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="Ver-productos" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Ver Productos</p>
                  </a>
                </li>
              </ul>
            </li>

            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fa fa-id-card fa-fw"></i>
                <p>
                  Empleado
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="Registrar-empleado" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>
                      Registrar Empleado
                    </p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="certificado" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Generar certificado</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="Ver-empleados" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Ver empleados</p>
                  </a>
                </li>

              </ul>
            </li>

            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fa fa-users fa-fw"></i>
                <p>
                  Cliente
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="Registrar-cliente" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>
                      Registrar Cliente
                    </p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="Ver-clientes" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>
                      Ver clientes
                    </p>
                  </a>
                </li>

              </ul>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-hammer"></i>
                <p>
                  Servicios
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="Ver-servicios" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Ver servicios</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="Registrar-servicios" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Registrar servicios</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="Ver-servicios" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Ver entregas</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="Registrar-servicios" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Registrar entregas</p>
                  </a>
                </li>
              </ul>
            </li>


            <li class="nav-item">
              <a href="model/Reporte-Clientes.php" class="nav-link" target="_blank">
                <i class="nav-icon fa fa-scroll fa-fw"></i>
                <p>
                  Reporte clientes
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="model/respaldo.php" class="nav-link">
                <i class="nav-icon fa fa-database fa-fw"></i>
                <p>
                  Respaldo base de datos
                </p>
              </a>
            </li>

          <?php } ?>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
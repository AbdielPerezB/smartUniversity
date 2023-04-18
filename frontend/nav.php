            <nav class="navbar navbar-expand-md navbar-light bg-light">
                <div class="container-fluid">
                    <div class="d-flex justify-content-between d-md-none d-block">
                        <button class="btn px-1 py-0 open-btn me-2"><i class="fa-solid fa-bars-staggered"></i></button>
                        <a class="navbar-brand fs-4" href="#"><span class="bg-buap rounded px-2 py-0 text-white">BI</span></a>
                    </div>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                            aria-controls="navbarSupportedContent"
                            aria-expanded="false"
                            aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end me-5" id="navbarSupportedContent">
                        <ul class="navbar-nav mb-2 mb-lg-0">
                            <li class="nav-item dropdown ">
                                <a class="nav-link active dropdown-toggle" href="#"
                                id="navbarDropdown"
                                role="button"
                                data-bs-toggle="dropdown"><i class="fa-solid fa-user pe-1 color-buap"></i>Mi perfil</a>
                                <!-- Creando un submenu. POr eso se les pone dropdown, dropdown-toggle, id, role y data-bs-toggle-->
                                <ul class="dropdown-menu bs-success-text-emphasis"> <!-- le indicamos que es un submenu con dropdown-menu -->
                                    <!-- A continuación tambipen le ponemos las clases a las etiquetas a -->
                                    <li><a class="dropdown-item" href="">Mi perfil</a></li>
                                    <li><a class="dropdown-item" href="">Ver usuarios</a></li>
                                    <li><a class="dropdown-item" href="">Cerrar sesión</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
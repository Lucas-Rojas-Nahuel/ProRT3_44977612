<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <title>GymFit</title> -->
    <title><?php echo ($titulo); ?></title>

    <!-- Agrege un css para modificar a mi gusto-->
    <!-- <link href="assets/css-mi-Estilo/style.css" rel="stylesheet"> -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css-mi-Estilo/style.css') ?>">

    <!-- <link href="assets/css/bootstrap.min.css" rel="stylesheet"> -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css') ?>">

</head>

<body>
    <headers>

        <!-- creo el navbar -->

        <?php
        $session = session();
        $nombre = $session->get('nombre');
        $perfil = $session->get('perfil_id');
        ?>

        <nav class="navbar navbar-expand-lg nav-fondo">
            <div class="container-fluid">
                <!-- imagen y nombre de la marca de mi pagina -->
                <img src="assets/img/header/logo.jpg" class="rounded-4 mx-2" alt="Bootstrap" width="46" height="45">
                <h1 class="navbar-brand  text-light">GymFit</h1>
                <button class="navbar-toggler text-warning" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="yellow" class="bi bi-list" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5" />
                    </svg>
                </button>


                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- listado de botones -->

                    <!-- vistas del admin -->
                    <?php if (session()->perfil_id == 1) : ?>
                        <div class="btn btn-secondary active btnUser btn-sm">
                            <a href="">ADMIN: <?php echo session('nombre'); ?></a>
                        </div>

                        <ul class="navbar-nav  mb-2 mb-lg-0">
                            <li class="nav-item btn-hover mx-1 rounded-4">
                                <a class="nav-link active text-light" aria-current="page" href='section_principal'>Inicio</a>
                            </li>
                            <li class="nav-item btn-hover mx-1 rounded-4">
                                <a class="nav-link text-light" href='lista_usuario'>Listas de usuario</a>
                            </li>
                            <li class="nav-item btn-hover mx-1 rounded-4">
                                <a class="nav-link text-light" href="<?php echo base_url('logout') ?>" tabindex="-1" aria-disabled="true">Cerrar sesión</a>
                            </li>
                        </ul>

                        <!-- vista del cliente -->
                    <?php elseif (session()->perfil_id == 2) : ?>
                        <div class="btn btn-info active btnUser btn-sm">
                            <a href="">CLIENTE: <?php echo session('nombre'); ?></a>
                        </div>

                        <ul class="navbar-nav  mb-2 mb-lg-0">
                            <li class="nav-item btn-hover mx-1 rounded-4">
                                <a class="nav-link active text-light" aria-current="page" href='section_principal'>Inicio</a>
                            </li>
                            <li class="nav-item btn-hover mx-1 rounded-4">
                                <a class="nav-link text-light" href='section_quienes_somos'>Quienes Somos</a>
                            </li>
                            <li class="nav-item btn-hover mx-1 rounded-4">
                                <a class="nav-link text-light" href='section_servicios'>Servicios</a>
                            </li>
                            <li class="nav-item btn-hover mx-1 rounded-4">
                                <a class="nav-link text-light" href="<?php echo base_url('logout') ?>" tabindex="-1" aria-disabled="true">Cerrar sesión</a>
                            </li>
                        </ul>

                        <!-- usuario no registrado -->
                    <?php else : ?>

                        <ul class="navbar-nav  mb-2 mb-lg-0">
                            <li class="nav-item btn-hover mx-1 rounded-4">
                                <a class="nav-link active text-light" aria-current="page" href='section_principal'>Inicio</a>
                            </li>
                            <li class="nav-item btn-hover mx-1 rounded-4">
                                <a class="nav-link text-light" href='section_quienes_somos'>Quienes Somos</a>
                            </li>
                            <li class="nav-item btn-hover mx-1 rounded-4">
                                <a class="nav-link text-light" href='section_servicios'>Servicios</a>
                            </li>
                            <li class="nav-item btn-hover mx-1 rounded-4">
                                <a class="nav-link text-light" href='section_registrarme'>Registrarme</a>
                            </li>
                            <li class="nav-item btn-hover mx-1 rounded-4">
                                <a class="nav-link text-light" href='section_iniciar_sesion'>Iniciar Sesión</a>
                            </li>
                        </ul>
                        <!-- buscador -->
                        <form class="d-flex buscador mx-1" role="search">
                            <input class="form-control  me-2" type="search" placeholder="Buscar" aria-label="Search">
                            <button class="btn btn-warning text-light" type="submit">Buscar</button>
                        </form>
                    <?php endif; ?>
                </div>
            </div>
        </nav>
    </headers>
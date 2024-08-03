<section class="principal d-flex flex-column justify-content-between">
    <!-- seccion de registrar usuario -->
    <section class=" p-2 py-5 d-flex justify-content-center align-items-center">

        <?php $validation = \Config\Services::validation(); ?>

        <form class="row g-3 ancho-form px-2 rounded-5 fondo-img text-warning" method="post" action="<?= base_url('update') ?>" autocomplete="off">

            


            <div class="col-md-12">
                <h3 class="text-center ">Editar Usuario</h3>

            </div>
            <div class="col-md-6">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="nombre" required placeholder="Nombre" name="nombre" value="<?= $dato['nombre']?>">

                <!-- error -->
                <?php if ($validation->getError('nombre')) { ?>
                    <div class="alert alert-danger mt-2">
                        <?= $error = $validation->getError('nombre'); ?>
                    </div>
                <?php } ?>
            </div>
            <div class="col-md-6">
                <label for="inputPassword4" class="form-label">Apellido</label>
                <input type="text" class="form-control" required id="inputPassword4" name="apellido" value="<?= $dato['apellido'] ?>">

                <!-- error -->
                <?php if ($validation->getError('apellido')) { ?>
                    <div class="alert alert-danger mt-2">
                        <?= $error = $validation->getError('apellido'); ?>
                    </div>
                <?php } ?>
            </div>
            <div class="col-12">
                <label for="inputAddress" class="form-label">Email</label>
                <input type="email" class="form-control" id="inputAddress" placeholder="Email" name="email" value="<?= $dato['email'] ?>" readonly>

                <!-- error -->
                <?php if ($validation->getError('email')) { ?>
                    <div class="alert alert-danger mt-2">
                        <?= $error = $validation->getError('email'); ?>
                    </div>
                <?php } ?>
            </div>
            <div class="col-md-6">
                <label for="inputAddress2" class="form-label">Usuario</label>
                <input type="text" class="form-control" required id="inputAddress2" placeholder="Usuario" name="usuario" value="<?= $dato['usuario'] ?>">

                <!-- error -->
                <?php if ($validation->getError('usuario')) { ?>
                    <div class="alert alert-danger mt-2">
                        <?= $error = $validation->getError('usuario'); ?>
                    </div>
                <?php } ?>
            </div>
            <div class="col-md-6">
                <label for="inputCity" class="form-label">Contraseña</label>
                <input type="password" class="form-control" id="inputCity" placeholder="Contraseña" name="pass" value="<?= $dato['pass'] ?>" readonly>

                <!-- error -->
                <?php if ($validation->getError('pass')) { ?>
                    <div class="alert alert-danger mt-2">
                        <?= $error = $validation->getError('pass'); ?>
                    </div>
                <?php } ?>
            </div>

            <div class="col-12 d-flex justify-content-center">
                <input type="submit" value="Editar" class="btn btn-success">
                <input type="hidden" name="id_usuario" value="<?= $dato['id_usuario'] ?>">
                <a class="btn btn-warning text-light mx-1" href="<?= base_url('lista_usuario') ?>">Cancelar</a>
            </div>

        </form>

        <?php if (session()->getFlashdata('errors') !== null) : ?>
            <div class="alert alert-danger my-3" role="alert">
                <?= session()->getFlashdata('errors'); ?>
            </div>
        <?php endif; ?>
    </section>
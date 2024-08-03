<section class="principal d-flex flex-column justify-content-between ">
    <!-- seccion de iniciar sesión -->
    <section class="medida-login d-flex justify-content-center align-items-center">



        <form class="ancho row g-3 ancho-form px-4 rounded-5 fondo-img text-warning" method="post" action="<?= base_url('auth'); ?>" autocomplete="off">

            <?= csrf_field(); ?>

            <div class="col-md-12">
                <h3 class="text-center ">Iniciar Sesión</h3>
            </div>
            <div class="col-12">
                <label for="inputAddress2" class="form-label">Email</label>
                <input type="email" class="form-control" name="email" id="inputAddress2" placeholder="Email">
            </div>
            <div class="col-md-12">
                <label for="inputCity" class="form-label">Contraseña</label>
                <input type="password" class="form-control" name="pass" id="inputCity" placeholder="Contraseña">
            </div>
            <?php if (session()->getFlashdata('msg')) : ?>
                <div class="alert alert-warning">
                    <?= session()->getFlashdata('msg') ?>
                </div>
            <?php endif; ?>
            <div class="col-12 d-flex justify-content-center">
                <button type="submit" class="btn btn-warning text-light mx-1" name="registrar">Aceptar</button>
                <button type="reset" class="btn btn-warning text-light mx-1">Cancelar</button>
            </div>
            <div class="col-md-12">
                <p>¿Aún no se registro? <a href="section_registrarme">Registrarse aquí</a></p>
            </div>
        </form>

        <?php if (session()->getFlashdata('errors') !== null) : ?>
            <div class="alert alert-danger my-3" role="alert">
                <?= session()->getFlashdata('errors'); ?>
            </div>
        <?php endif; ?>
    </section>
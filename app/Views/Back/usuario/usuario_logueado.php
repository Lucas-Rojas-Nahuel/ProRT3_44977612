<section class="principal  d-flex flex-column justify-content-between">
    <div class="container section-usuario mt-5">
        <div class="row d-flex flex-column justify-content-center align-items-center">
            <div class="col-5">
                <?php if (session()->getFlashdata('msg')) : ?>
                    <div class="alert alert-warning">
                        <?= session()->getFlashdata('msg') ?>
                    </div>
                <?php endif; ?>
                <br><br>
                <?php if (session()->perfil_id == 1) : ?>
                    <div class="d-flex justify-content-center">
                        <img src="<?= base_url('assets/img/usuario-logeado/admin.jpg'); ?>" height="300px" width="400px" class="center rounded-5">
                    </div>
                <?php endif; ?>
                <?php if (session()->perfil_id == 2) : ?>
                    <div class="d-flex justify-content-center">
                        <img src="<?= base_url('assets/img/usuario-logeado/cliente.jpg') ?>" height="300px" width="400px" class="center rounded-5">
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
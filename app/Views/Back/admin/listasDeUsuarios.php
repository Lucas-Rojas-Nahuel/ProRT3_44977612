<section class="principal">

    <!-- listas de usuarios -->
    <div class="card m-3 " style="height: 550px;">
        <div class="card-header">
            Listado de Usuarios
        </div>
        <?php if (!empty(session()->getFlashdata('fail'))) : ?>
            <div class="alert alert-danger"><?= session()->getFlashdata('fail'); ?></div>
        <?php endif ?>
        <?php if (!empty(session()->getFlashdata('success'))) : ?>
            <div class="alert alert-success"><?= session()->getFlashdata('success'); ?></div>
        <?php endif ?>
        <div class="card-body table-scroll">
            <table class="table   ">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Apellido</th>
                        <th scope="col">Usuario</th>
                        <th scope="col">Email</th>
                        <th  scope="col">Contraseña</th>
                        <th scope="col">Perfil-id</th>
                        <th scope="col">Acción</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($datos as $dato) : ?>
                        <tr>
                            <th scope="row"><?php echo $dato['id_usuario']; ?></th>
                            <th><?php echo $dato['nombre']; ?></th>
                            <th><?php echo $dato['apellido']; ?></th>
                            <th><?php echo $dato['usuario']; ?></th>
                            <th><?php echo $dato['email']; ?></th>
                            <th><?php echo $dato['pass']; ?></th>
                            <th><?php echo $dato['perfil_id']; ?></th>
                            <td class="d-flex gap-1"><a class="btn btn-primary " href="<?= base_url('edit'.$dato['id_usuario'])?>">Editar</a><a class="btn btn-danger" href="<?= base_url('delete'.$dato['id_usuario'])?>">Borrar</a></td>
                            
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            
        </div>
        <a href="<?= base_url('createe') ?>" class="btn btn-success">Añadir</a>
    </div>
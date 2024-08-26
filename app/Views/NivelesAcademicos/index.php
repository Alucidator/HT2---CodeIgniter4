<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>

<div class="container">

        <!-- Mensajes de éxito o error -->
    <?php if (session()->getFlashdata('success')): ?>
        <div class="alert alert-success">
            <?= session()->getFlashdata('success') ?>
        </div>
    <?php endif; ?>

    <?php if (session()->getFlashdata('error')): ?>
        <div class="alert alert-danger">
            <?= session()->getFlashdata('error') ?>
        </div>
    <?php endif; ?>
    
    <h1>Niveles Académicos</h1>
    <a href="/nivelesacademicos/create" class="btn btn-primary mb-3">Agregar <i class="fa fa-plus"></i></a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Descripción</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($niveles as $nivel): ?>
            <tr>
                <td><?= $nivel['nombre'] ?></td>
                <td><?= $nivel['descripcion'] ?></td>
                <td>
                    <a href="/nivelesacademicos/edit/<?= $nivel['cod_nivel_acad'] ?>" class="btn btn-warning"><i class="fa fa-edit"></i></a>
                    <a href="/nivelesacademicos/delete/<?= $nivel['cod_nivel_acad'] ?>" class="btn btn-danger" onclick="return confirm('¿Está seguro?')"><i class="fa fa-trash"></i></a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<?= $this->endSection() ?>

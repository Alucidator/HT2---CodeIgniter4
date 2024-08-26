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
    
    <h1>Regiones</h1>
    <a href="/regiones/create" class="btn btn-primary mb-3">Agregar <i class="fa fa-plus"></i></a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Descripción</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($regiones as $region): ?>
            <tr>
                <td><?= $region['nombre'] ?></td>
                <td><?= $region['descripcion'] ?></td>
                <td>
                    <a href="/regiones/edit/<?= $region['cod_region'] ?>" class="btn btn-warning"><i class="fa fa-edit"></i></a>
                    <a href="/regiones/delete/<?= $region['cod_region'] ?>" class="btn btn-danger" onclick="return confirm('¿Está seguro?')"><i class="fa fa-trash"></i></a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<?= $this->endSection() ?>

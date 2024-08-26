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

    <h1>Ciudadanos</h1>
    <a href="/ciudadanos/create" class="btn btn-primary mb-3">Agregar <i class="fa fa-plus"></i></a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Edad</th>
                <th>Municipio</th>
                <th>Nivel Académico</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($ciudadanos as $ciudadano): ?>
            <tr>
                <td><?= $ciudadano['nombre'] ?></td>
                <td><?= $ciudadano['apellido'] ?></td>
                <td><?= $ciudadano['edad'] ?></td>
                <td><?= $ciudadano['nombre_municipio'] ?></td>
                <td><?= $ciudadano['nombre_nivel_acad'] ?></td>
                <td>
                    <a href="/ciudadanos/edit/<?= $ciudadano['cod_ciudadano'] ?>" class="btn btn-warning"><i class="fa fa-edit"></i></a>
                    <a href="/ciudadanos/delete/<?= $ciudadano['cod_ciudadano'] ?>" class="btn btn-danger" onclick="return confirm('¿Está seguro?')"><i class="fa fa-trash"></i></a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<?= $this->endSection() ?>

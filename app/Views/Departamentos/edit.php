<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>

<div class="container">
    <h1>Editar Departamento</h1>
    <form action="/departamentos/update/<?= $departamento['cod_depto'] ?>" method="post">
        <div class="form-group">
            <label for="nombre_depto">Nombre</label>
            <input type="text" class="form-control" id="nombre_depto" name="nombre_depto" value="<?= $departamento['nombre_depto'] ?>" required>
        </div>
        <div class="form-group">
            <label for="cod_region">Región</label>
            <select class="form-control" id="cod_region" name="cod_region" required>
                <?php foreach ($regiones as $region): ?>
                    <option value="<?= $region['cod_region'] ?>" <?= $departamento['cod_region'] == $region['cod_region'] ? 'selected' : '' ?>><?= $region['nombre'] ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>
</div>

<?= $this->endSection() ?>

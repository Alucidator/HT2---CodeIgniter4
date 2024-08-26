<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>

<div class="container">
    <h1>Agregar Municipio</h1>
    <form action="/municipios/store" method="post">
        <div class="form-group">
            <label for="nombre_municipio">Nombre</label>
            <input type="text" class="form-control" id="nombre_municipio" name="nombre_municipio" required>
        </div>
        <div class="form-group">
            <label for="cod_depto">Departamento</label>
            <select class="form-control" id="cod_depto" name="cod_depto" required>
                <?php foreach ($departamentos as $departamento): ?>
                    <option value="<?= $departamento['cod_depto'] ?>"><?= $departamento['nombre_depto'] ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
</div>

<?= $this->endSection() ?>

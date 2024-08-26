<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>

<div class="container">
    <h1>Agregar Ciudadano</h1>
    <form action="/ciudadanos/store" method="post">
        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre" required>
        </div>
        <div class="form-group">
            <label for="apellido">Apellido</label>
            <input type="text" class="form-control" id="apellido" name="apellido" required>
        </div>
        <div class="form-group">
            <label for="edad">Edad</label>
            <input type="number" class="form-control" id="edad" name="edad" required>
        </div>
        <div class="form-group">
            <label for="municipio">Municipio</label>
            <select class="form-control" id="municipio" name="cod_municipio" required>
                <?php foreach ($municipios as $municipio): ?>
                    <option value="<?= $municipio['cod_municipio'] ?>"><?= $municipio['nombre'] ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="form-group">
            <label for="nivel_academico">Nivel Académico</label>
            <select class="form-control" id="nivel_academico" name="cod_nivel_acad" required>
                <?php foreach ($niveles as $nivel): ?>
                    <option value="<?= $nivel['cod_nivel_acad'] ?>"><?= $nivel['nombre'] ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
</div>

<?= $this->endSection() ?>

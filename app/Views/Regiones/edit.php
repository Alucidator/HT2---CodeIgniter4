<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>

<div class="container">
    <h1>Editar Región</h1>
    <form action="/regiones/update/<?= $region['cod_region'] ?>" method="post">
        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre" value="<?= $region['nombre'] ?>" required>
        </div>
        <div class="form-group">
            <label for="descripcion">Descripción</label>
            <textarea class="form-control" id="descripcion" name="descripcion" required><?= $region['descripcion'] ?></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>
</div>

<?= $this->endSection() ?>

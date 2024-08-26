<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>

<div class="container">
    <h1>Agregar Región</h1>
    <form action="/regiones/store" method="post">
        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre" required>
        </div>
        <div class="form-group">
            <label for="descripcion">Descripción</label>
            <textarea class="form-control" id="descripcion" name="descripcion" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
</div>

<?= $this->endSection() ?>

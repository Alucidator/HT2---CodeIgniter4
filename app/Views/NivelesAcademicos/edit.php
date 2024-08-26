<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>

<div class="container">
    <h1>Editar Nivel Académico</h1>
    <form action="/nivelesacademicos/update/<?= $nivel['cod_nivel_acad'] ?>" method="post">
        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre" value="<?= $nivel['nombre'] ?>" required>
        </div>
        <div class="form-group">
            <label for="descripcion">Descripción</label>
            <textarea class="form-control" id="descripcion" name="descripcion" required><?= $nivel['descripcion'] ?></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>
</div>

<?= $this->endSection() ?>

<?php

namespace App\Models;

use CodeIgniter\Model;

class NivelAcademicoModel extends Model {
    protected $table = 'nivelesacademicos'; // Nombre de la tabla
    protected $primaryKey = 'cod_nivel_acad'; // Llave primaria de la tabla
    protected $allowedFields = ['nombre', 'descripcion']; // Campos que se pueden modificar
}

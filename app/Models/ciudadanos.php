<?php

namespace App\Models;

use CodeIgniter\Model;

class CiudadanoModel extends Model {
    protected $table = 'ciudadanos';
    protected $primaryKey = 'dpi';
    protected $allowedFields = ['apellido', 'nombre', 'direccion', 'tel_casa', 'tel_movil', 'email', 'fechanac', 'cod_nivel_acad', 'cod_muni', 'contra'];
}

<?php

namespace App\Models;

use CodeIgniter\Model;

class MunicipioModel extends Model {
    protected $table = 'municipios';
    protected $primaryKey = 'cod_muni';
    protected $allowedFields = ['nombre_municipio', 'cod_depto'];
}

<?php

namespace App\Models;

use CodeIgniter\Model;

class RegionModel extends Model {
    protected $table = 'regiones';
    protected $primaryKey = 'cod_region';
    protected $allowedFields = ['nombre', 'descripcion'];
}

<?php

namespace App\Controllers;

use App\Models\RegionModel;
use CodeIgniter\Controller;

class Regiones extends Controller {
    public function index() {
        $model = new RegionModel();
        $data['regiones'] = $model->findAll(); // Obtiene todos los registros de la tabla
        return view('regiones/index', $data); // Carga la vista con los datos
    }

    public function create() {
        return view('regiones/create'); // Muestra el formulario de creación
    }

    public function store() {
        $model = new RegionModel();
        $data = $this->request->getPost(); // Obtiene los datos del formulario
        if ($model->save($data)) { // Guarda los datos en la base de datos
            return redirect()->to('/regiones')->with('success', 'Registro agregado exitosamente'); // Mensaje de éxito
        } else {
            return redirect()->back()->with('error', 'Error al agregar el registro'); // Mensaje de error
        }
    }

    public function edit($id) {
        $model = new RegionModel();
        $data['region'] = $model->find($id); // Obtiene el registro específico por ID
        return view('regiones/edit', $data); // Muestra el formulario de edición
    }

    public function update($id) {
        $model = new RegionModel();
        $data = $this->request->getPost(); // Obtiene los datos del formulario
        if ($model->update($id, $data)) { // Actualiza los datos en la base de datos
            return redirect()->to('/regiones')->with('success', 'Registro actualizado exitosamente'); // Mensaje de éxito
        } else {
            return redirect()->back()->with('error', 'Error al actualizar el registro'); // Mensaje de error
        }
    }

    public function delete($id) {
        $model = new RegionModel();
        if ($model->delete($id)) { // Elimina el registro de la base de datos
            return redirect()->to('/regiones')->with('success', 'Registro eliminado exitosamente'); // Mensaje de éxito
        } else {
            return redirect()->back()->with('error', 'Error al eliminar el registro'); // Mensaje de error
        }
    }
}

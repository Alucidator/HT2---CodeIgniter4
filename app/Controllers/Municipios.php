<?php

namespace App\Controllers;

use App\Models\MunicipioModel;
use CodeIgniter\Controller;

class Municipios extends Controller {
    public function index() {
        $model = new MunicipioModel();
        $data['municipios'] = $model->findAll(); // Obtiene todos los registros de la tabla
        return view('municipios/index', $data); // Carga la vista con los datos
    }

    public function create() {
        return view('municipios/create'); // Muestra el formulario de creación
    }

    public function store() {
        $model = new MunicipioModel();
        $data = $this->request->getPost(); // Obtiene los datos del formulario
        if ($model->save($data)) { // Guarda los datos en la base de datos
            return redirect()->to('/municipios')->with('success', 'Registro agregado exitosamente'); // Mensaje de éxito
        } else {
            return redirect()->back()->with('error', 'Error al agregar el registro'); // Mensaje de error
        }
    }

    public function edit($id) {
        $model = new MunicipioModel();
        $data['municipio'] = $model->find($id); // Obtiene el registro específico por ID
        return view('municipios/edit', $data); // Muestra el formulario de edición
    }

    public function update($id) {
        $model = new MunicipioModel();
        $data = $this->request->getPost(); // Obtiene los datos del formulario
        if ($model->update($id, $data)) { // Actualiza los datos en la base de datos
            return redirect()->to('/municipios')->with('success', 'Registro actualizado exitosamente'); // Mensaje de éxito
        } else {
            return redirect()->back()->with('error', 'Error al actualizar el registro'); // Mensaje de error
        }
    }

    public function delete($id) {
        $model = new MunicipioModel();
        if ($model->delete($id)) { // Elimina el registro de la base de datos
            return redirect()->to('/municipios')->with('success', 'Registro eliminado exitosamente'); // Mensaje de éxito
        } else {
            return redirect()->back()->with('error', 'Error al eliminar el registro'); // Mensaje de error
        }
    }
}

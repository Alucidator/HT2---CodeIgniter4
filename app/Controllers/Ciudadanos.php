<?php

namespace App\Controllers;

use App\Models\CiudadanoModel;
use CodeIgniter\Controller;

class Ciudadanos extends Controller {
    public function index() {
        $model = new CiudadanoModel();
        $data['ciudadanos'] = $model->findAll(); // Obtiene todos los ciudadanos
        return view('ciudadanos/index', $data); // Carga la vista con los datos
    }

    public function create() {
        return view('ciudadanos/create'); // Muestra el formulario de creación
    }

    public function store() {
        $model = new CiudadanoModel();
        $data = $this->request->getPost(); // Obtiene los datos del formulario
        
        // Intentar guardar el registro
        if ($model->save($data)) {
            return redirect()->to('/ciudadanos')->with('success', 'Registro agregado exitosamente'); // Mensaje de éxito
        } else {
            return redirect()->back()->with('error', 'Error al agregar el registro'); // Mensaje de error
        }
    }

    public function edit($id) {
        $model = new CiudadanoModel();
        $data['ciudadano'] = $model->find($id); // Obtiene el registro específico por ID
        return view('ciudadanos/edit', $data); // Carga la vista de edición
    }

    public function update($id) {
        $model = new CiudadanoModel();
        $data = $this->request->getPost(); // Obtiene los datos del formulario

        // Intentar actualizar el registro
        if ($model->update($id, $data)) {
            return redirect()->to('/ciudadanos')->with('success', 'Registro actualizado exitosamente'); // Mensaje de éxito
        } else {
            return redirect()->back()->with('error', 'Error al actualizar el registro'); // Mensaje de error
        }
    }

    public function delete($id) {
        $model = new CiudadanoModel();
        
        // Intentar eliminar el registro
        if ($model->delete($id)) {
            return redirect()->to('/ciudadanos')->with('success', 'Registro eliminado exitosamente'); // Mensaje de éxito
        } else {
            return redirect()->back()->with('error', 'Error al eliminar el registro'); // Mensaje de error
        }
    }
}

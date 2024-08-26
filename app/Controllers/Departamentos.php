<?php

namespace App\Controllers;

use App\Models\DepartamentoModel;
use CodeIgniter\Controller;

class Departamentos extends Controller {
    public function index() {
        $model = new DepartamentoModel();
        $data['departamentos'] = $model->findAll(); // Obtiene todos los registros de la tabla
        return view('departamentos/index', $data); // Carga la vista con los datos
    }

    public function create() {
        return view('departamentos/create'); // Muestra el formulario de creación
    }

    public function store() {
        $model = new DepartamentoModel();
        $data = $this->request->getPost(); // Obtiene los datos del formulario
        if ($model->save($data)) { // Guarda los datos en la base de datos
            return redirect()->to('/departamentos')->with('success', 'Registro agregado exitosamente'); // Mensaje de éxito
        } else {
            return redirect()->back()->with('error', 'Error al agregar el registro'); // Mensaje de error
        }
    }

    public function edit($id) {
        $model = new DepartamentoModel();
        $data['departamento'] = $model->find($id); // Obtiene el registro específico por ID
        return view('departamentos/edit', $data); // Muestra el formulario de edición
    }

    public function update($id) {
        $model = new DepartamentoModel();
        $data = $this->request->getPost(); // Obtiene los datos del formulario
        if ($model->update($id, $data)) { // Actualiza los datos en la base de datos
            return redirect()->to('/departamentos')->with('success', 'Registro actualizado exitosamente'); // Mensaje de éxito
        } else {
            return redirect()->back()->with('error', 'Error al actualizar el registro'); // Mensaje de error
        }
    }

    public function delete($id) {
        $model = new DepartamentoModel();
        if ($model->delete($id)) { // Elimina el registro de la base de datos
            return redirect()->to('/departamentos')->with('success', 'Registro eliminado exitosamente'); // Mensaje de éxito
        } else {
            return redirect()->back()->with('error', 'Error al eliminar el registro'); // Mensaje de error
        }
    }
}

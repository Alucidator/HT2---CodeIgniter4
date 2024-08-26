<?php

namespace App\Controllers;

use App\Models\NivelAcademicoModel;
use CodeIgniter\Controller;

class NivelesAcademicos extends Controller {
    
    // Método para mostrar todos los niveles académicos
    public function index() {
        $model = new NivelAcademicoModel();
        $data['niveles'] = $model->findAll(); // Obtiene todos los registros de la tabla
        return view('nivelesacademicos/index', $data); // Carga la vista con los datos
    }

    // Método para mostrar el formulario de creación
    public function create() {
        return view('nivelesacademicos/create');
    }
    
    // Método para guardar un nuevo nivel académico en la base de datos
    public function store() {
        $model = new NivelAcademicoModel();
        $data = $this->request->getPost(); // Obtiene los datos del formulario
        if ($model->save($data)) { // Guarda los datos en la base de datos
            return redirect()->to('/nivelesacademicos')->with('success', 'Registro agregado exitosamente'); // Mensaje de éxito
        } else {
            return redirect()->back()->with('error', 'Error al agregar el registro'); // Mensaje de error
        }
    }

    // Método para mostrar el formulario de edición
    public function edit($id) {
        $model = new NivelAcademicoModel();
        $data['nivel'] = $model->find($id); // Obtiene el registro específico por ID
        return view('nivelesacademicos/edit', $data);
    }

    // Método para actualizar un nivel académico en la base de datos
    public function update($id) {
        $model = new NivelAcademicoModel();
        $data = $this->request->getPost(); // Obtiene los datos del formulario
        if ($model->update($id, $data)) { // Actualiza los datos en la base de datos
            return redirect()->to('/nivelesacademicos')->with('success', 'Registro actualizado exitosamente'); // Mensaje de éxito
        } else {
            return redirect()->back()->with('error', 'Error al actualizar el registro'); // Mensaje de error
        }
    }

    // Método para eliminar un nivel académico de la base de datos
    public function delete($id) {
        $model = new NivelAcademicoModel();
        if ($model->delete($id)) { // Elimina el registro de la base de datos
            return redirect()->to('/nivelesacademicos')->with('success', 'Registro eliminado exitosamente'); // Mensaje de éxito
        } else {
            return redirect()->back()->with('error', 'Error al eliminar el registro'); // Mensaje de error
        }
    }
}

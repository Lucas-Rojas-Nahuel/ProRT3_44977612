<?php

namespace App\Controllers;

use App\Models\usuario_Model;

class lista_Usuarios extends BaseController
{


    public function lista_usuario()
    {
        $model = new usuario_Model;
        $datos = $model->getUsuarios();

        $data['titulo'] = 'Listas de usuarios';
        echo view('front/header', $data);
        echo view('Back/admin/listasDeUsuarios', compact('datos'));
        echo view('front/footer');
    }

    public function createe()
    {
        $data['titulo'] = 'Añanadir Usuario';
        echo view('front/header', $data);
        echo view('Back/admin/register');
        echo view('front/footer');
    }

    /* Añadimos nuevos usuarios en la vista del administrador */
    public function add()
    {

        $input = $this->validate([
            'nombre' => 'required|min_length[3]',
            'apellido' => 'required|min_length[3]|max_length[25]',
            'usuario' => 'required|min_length[3]',
            'email' => 'required|min_length[4]|max_length[100]valid_email|is_unique[usuarios.email]',
            'pass' => 'required|min_length[3]|max_length[10]'
        ]);


        $formModel = new usuario_Model();

        if (!$input) {
            $data['titulo'] = 'Añanadir Usuario';
            echo view('front/header', $data);
            echo view('Back/admin/register', ['validation' => $this->validator]);
            echo view('front/footer');
        } else {
            $formModel->save([
                'nombre' => $this->request->getVar('nombre'),
                'apellido' => $this->request->getVar('apellido'),
                'usuario' => $this->request->getVar('usuario'),
                'email' => $this->request->getVar('email'),
                'pass' => password_hash($this->request->getVar('pass'), PASSWORD_DEFAULT)
            ]);

            session()->setFlashdata('success', 'Usuario registrado con exito');
            return redirect()->to(base_url('lista_usuario'));
        }
    }

    /* Editamos usuarios en la vista del administrador */
    public function edit($id_usuario)
    {

        $model = new usuario_Model();
        $dato = $model->getUsuario($id_usuario);

        $data['titulo'] = 'Editar Usuario';
        echo view('front/header', $data);
        echo view('Back/admin/edit', compact('dato'));
        echo view('front/footer');
    }

    /* Actualizamos datos cambiados del usuarios en la vista del administrador */
    public function update()
    {
        
        $user = new usuario_Model();
        $id_usuario = $_POST['id_usuario'];
        $data = [
            'nombre' => $_POST['nombre'],
            'apellido' => $_POST['apellido'],
            'email' => $_POST['email'],
            'usuario' => $_POST['usuario'],
            'pass' => $_POST['pass'],
        ];


        $user->updateDatos($id_usuario, $data);

        session()->setFlashdata('success', 'Usuario editado con exito');
        return redirect()->to(base_url('lista_usuario'));
    }


    /* Eliminamos usuarios en la vista del administrador */
    public function delete($id_usuario = null)
    {

        $user = new usuario_Model();
        $user->delete($id_usuario);
        session()->setFlashdata('success', 'Usuario eliminado con exito');
        return redirect()->to(base_url('lista_usuario'));
    }
}

<?php
namespace App\Models;
use CodeIgniter\Model;

class usuario_Model extends Model{

    protected $table='usuarios';
    protected $primaryKey='id_usuario';
    protected $allowedFields=['nombre','apellido','usuario', 'email', 'pass', 'perfil_id', 'baja','created_at'];


    //Validamos Usuarios 
    public function validateUser($email, $pass){

        $email = $this->where(['email'=> $email])->first();
        if($email && password_verify($pass, $email['pass'])){
            return $email;
        }

        return null;

    }

    //Filtramos todos los usuarios para la tabla de usuarios
    public function getUsuarios(){
        return $this->findAll();
    }

    public function add($dato){
        return $this->save($dato);
    }

    //traemos los datos del usuario a travez del id
    public function getUsuario($id_usuario){
        return $this->where('id_usuario', $id_usuario)->first($id_usuario);
    }

    //actualizamos los datos del usuario
    public function updateDatos($id_usuario, $datos){
        return $this->update($id_usuario, $datos);
    }

}
?>
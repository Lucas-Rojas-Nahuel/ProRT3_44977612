<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data['titulo']='GymFit';
        echo view('front/header',$data);
        echo view('front/section_principal');
        echo view('front/footer');
    }

    public function section_quienes_somos()
    {
        $data['titulo']='Quienes Somos';
        echo view('front/header',$data);
        echo view('front/section_quienes_somos');
        echo view('front/footer');
    }

    public function section_servicios()
    {
        $data['titulo']='Servicios';
        echo view('front/header',$data);
        echo view('front/section_servicios');
        echo view('front/footer');
    }

    public function section_registrarme()
    {
        $data['titulo']='Registrarme';
        echo view('front/header',$data);
        echo view('Back/usuario/register');
        echo view('front/footer');
    }

    public function section_iniciar_sesion()
    {
        $data['titulo']='Iniciar Sesión';
        echo view('front/header',$data);
        echo view('Back/usuario/login');
        echo view('front/footer');
    }

    
}

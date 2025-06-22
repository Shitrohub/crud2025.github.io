<?php

namespace App\Controllers;
use App\Models\Modelo;

class Home extends BaseController
{
    public function index(): string
    {
        return view('header')
            
        . view('login')
        . view('footer');
    }


    public function login()
    {
        $this->Modelo = new Modelo();
        $usuario25 = $this->request->getPost('usuario');
        $clave25 = $this->request->getPost('clave');
    
        $resultado = $this->Modelo->preguntalogin($usuario25, $clave25);
    
        if ($resultado != 0) {
            // Login exitoso
            return $this->response->setJSON(['status' => 'ok']);
        } else {
            // Credenciales incorrectas
            return $this->response->setJSON([
                'status' => 'error',
                'message' => 'Usuario o contraseña incorrectos'
            ]);
        }
    }
    

    public function cargarvistainicio()
    {
        
  

            return view('header')
            
            . view('menu')
            . view('inicio')
            . view('footer');
       
          
      
    }

    public function cargaragregarusuario()
    {
        
  

            return view('header')
            
            . view('menu')
            . view('agregarusuario')
            . view('footer');
       
          
      
    }

    public function cargaragregarmotocicleta()
    {
        
  

            return view('header')
            
           
            . view('agregarmotocicleta')
            . view('footer');
       
          
      
    }


    public function agregarusuario()
    {
        $this->Modelo = new Modelo();
        $usuario = $this->request->getPost('usuario');
        $clave = $this->request->getPost('clave');
    
        $resultado = $this->Modelo->agregaruser($usuario, $clave);

        if ($resultado != 0) {
            
            return $this->response->setJSON(['status' => 'ok']);
        } else {
           
            return $this->response->setJSON([
                'status' => 'error',
                'message' => 'Usuario o contraseña incorrectos'
            ]);
        }
    
      
    }

    public function agregarmotocicleta()
    {
        $this->Modelo = new Modelo();
        $marca = $this->request->getPost('marca');
        $modelo = $this->request->getPost('modelo');
        $año = $this->request->getPost('año');
        $precio = $this->request->getPost('precio');

    
        $resultado = $this->Modelo->agregarmotocicleta($marca, $modelo, $año, $precio);

        if ($resultado != 0) {
            
            return $this->response->setJSON(['status' => 'ok']);
        } else {
           
            return $this->response->setJSON([
                'status' => 'error',
                'message' => 'Usuario o contraseña incorrectos'
            ]);
        }
    
      
    }


    public function mostraruser()
    {

      $this->Modelo = new Modelo();

        $data = $this->Modelo->mostrarusuario();

        echo json_encode($data);

    }
    public function mostrarmotocicleta()
    {

      $this->Modelo = new Modelo();

        $data = $this->Modelo->mostrarmotocicleta();

        echo json_encode($data);

    }
    

    
public function cargaragregarimagen()
{
    $imagenes = [];
    $ruta = FCPATH . 'uploads/';
    if (is_dir($ruta)) {
        $archivos = scandir($ruta);
        foreach ($archivos as $archivo) {
            if ($archivo != '.' && $archivo != '..') {
                $imagenes[] = $archivo;
            }
        }
    }
    return view('header')
        . view('AgregarImagen', ['imagenes' => $imagenes])
        . view('footer');
}

public function subirimagen()
{
    $file = $this->request->getFile('imagen');
    if ($file && $file->isValid() && !$file->hasMoved()) {
        $newName = $file->getRandomName();
        $file->move(FCPATH . 'uploads/', $newName);
    }
    return redirect()->to('/cargaragregarimagen');
}

public function eliminarimagen()
{
    $nombre = $this->request->getPost('imagen');
    $ruta = FCPATH . 'uploads/' . $nombre;
    if (is_file($ruta)) {
        unlink($ruta);
    }
    return redirect()->to('/cargaragregarimagen');
}
}

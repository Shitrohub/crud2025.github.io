<?php
namespace App\Models;
use CodeIgniter\Model;

class Modelo extends Model { 


   
    public function preguntalogin($usuario25, $clave25)
    {
        $query = "SELECT usuario FROM users WHERE usuario = '$usuario25' AND clave = '$clave25'";
        $result = $this->db->query($query)->getResult();

        if (count($result) > 0) {
            return $result[0]->usuario;
        } else {
            return 0;
        }
    }


    


    public function agregaruser($usuario, $clave)
    {
        $sql = "INSERT INTO users (usuario, clave) VALUES (?, ?)";
        $this->db->query($sql, [$usuario, $clave]);
        $result = "ok";
        return $result;
    

    }

    public function agregarmotocicleta($marca, $modelo, $año, $precio)
    {
        $sql = "INSERT INTO motocicleta (marca, modelo, año, precio) VALUES (?, ?, ?, ?)";
        $this->db->query($sql, [$marca, $modelo, $año, $precio]);
        $result = "ok";
        return $result;
    

    }

    function mostrarusuario()  {
     
        $query = "SELECT * FROM `users`";
        $result = $this->db->query($query);
        return $result->getResult();
    }



    function mostrarmotocicleta ()  {
     
        $query = "SELECT * FROM `motocicleta`";
        $result = $this->db->query($query);
        return $result->getResult();
    }
}
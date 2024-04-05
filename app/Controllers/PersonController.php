<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Entities\CategoriaEntity;
use App\Models\ProductoModel;

class PersonController extends BaseController
{

    public function index():string
    {
      $categoria = new CategoriaEntity();
      $categoria->setNombre("Categoria uno");
      $categoria->setId(3);
      $productoModel = new ProductoModel();
      $data['productos'] = $productoModel->findAll();
      $data['categoria'] = $categoria;
    
     
      return  view("person_view",$data);
    }

    public function buscarNombre($nombre)
    {
        $req = $this->request->getGet('nombre');
        print_r($req);
        echo $nombre;
    }

}
<?php

namespace App\Entities;

use CodeIgniter\Entity\Entity;

class CategoriaEntity extends Entity{
      private $id;
      private $nombre;



   public function getId(){
    return $this->id;
   }

   public function setId($id){
     $this->id=$id;
   }

   public function getNombre(){
    return $this->nombre;
   }

   public function setNombre($nombre){
     $this->nombre=$nombre;
   }

}
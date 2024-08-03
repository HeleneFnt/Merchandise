<?php
namespace App\Models;

//Category class creation with attributes
class Category{
    public $id;
    public $name;

    //Category class constructor
    public function __construct($id, $name){
        $this->id = $id;
        $this->name = $name;
    }
}
<?php
namespace App\Models;

// Category class creation with attributes
class Category
{
    public $id;
    public $name;
    public $image;

    // Category class constructor
    public function __construct($id, $name, $image = null)
    {
        $this->id = $id;
        $this->name = $name;
        $this->image = $image;
    }
}
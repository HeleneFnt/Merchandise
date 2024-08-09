<?php
namespace App\Models;

class Category
{
    public $id;
    public $name;
    public $image;

    public function __construct($id = null, $name = null, $image = null)
    {
        $this->id = $id;
        $this->name = $name;
        $this->image = $image;
    }

}

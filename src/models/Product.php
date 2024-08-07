<?php
namespace App\models;

// Product class creation with attributes
class Product
{
    public $id;
    public $title;
    public $price;
    public $description;
    public $category;
    public $image;

    // Product class constructor
    public function __construct($id, $title, $price, $description, $category, $image)
    {
        $this->id = $id;
        $this->title = $title;
        $this->price = $price;
        $this->description = $description;
        $this->category = $category;
        $this->image = $image;
    }
}
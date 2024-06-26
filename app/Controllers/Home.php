<?php

namespace App\Controllers;

use App\Models\ProductModel;

class Home extends BaseController
{
    protected $product;

    function __construct()
    {
        helper('form');
        helper('number');
        $this->product = new ProductModel();
    }

    public function index(): string
    {
        $product = $this->product->findAll();
        $data['product'] = $product;
        
        // return view('welcome_message');
        return view('v_home', $data);
    }

    // public function contact(): string
    // {
    //     // return view('welcome_message');
    //     return view('v_contact');
    // }

}

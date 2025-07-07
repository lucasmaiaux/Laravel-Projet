<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function show(int $id): string
    {
        return "Fiche du produit " . $id;
    }
}

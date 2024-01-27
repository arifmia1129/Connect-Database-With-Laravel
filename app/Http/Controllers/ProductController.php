<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index() {
        $res = Category::with('products')->find(2);
        echo $res->name.'<br><br><br>';
        foreach($res->products as $product) {
            echo $product->name.'<br>';
            echo $product->price.'<br>';
            echo '<br><br>';
        }
    }
}

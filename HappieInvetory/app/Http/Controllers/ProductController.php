<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Productslist;

class ProductController extends Controller
{

    // public function ProductView()
    // {
    //     return view('productForm');
    // }
    public function productForm(Request $request)
    {
        //validaTION
        $validateProducts = $request->validate([
            'Product_Category' => 'required',
            'ProductName' => 'required',
            'Quantity' => 'required',
            'BuyPrice' => 'required',
            'SalePrice' => 'required',

        ]);
        $products = new Productslist();
        $products->Product_Category =  $validateProducts ['Product_Category'];
        $products->ProductName =   $validateProducts['ProductName'];
        $products->Quantity =   $validateProducts['Quantity'];
        $products->BuyPrice=   $validateProducts['BuyPrice'];
        $products->SalePrice =   $validateProducts['SalePrice'];
        $products->save();
        return redirect()->back()->with('success', 'Product added successfully');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Productslist;
use App\Models\SaleList;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ProductController extends Controller
{

    public function ProductView()
    {
        return view('productForm');
    }
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

        // saving data to database
        $products = new Productslist();
        $products->Product_Category =  $validateProducts ['Product_Category'];
        $products->ProductName =   $validateProducts['ProductName'];
        $products->Quantity =   $validateProducts['Quantity'];
        $products->BuyPrice=   $validateProducts['BuyPrice'];
        $products->SalePrice =   $validateProducts['SalePrice'];
        $products->save();
        return redirect()->back()->with('success', 'Product added successfully');
    }


    //retrieving data


    public function productFetch(){
     $products = Productslist::all();
     return view('ProductList',compact('products'));
    }


    public function edit($id){
        $products = Productslist::find($id);
        return view('editProduct',compact('products'));
    }

 public function update(Request $request, $id){
 //validaTION
 $validateProducts = $request->validate([
    'Product_Category' => 'required',
    'ProductName' => 'required',
    'Quantity' => 'required',
    'BuyPrice' => 'required',
    'SalePrice' => 'required',

]);




// saving data to database
$products =  Productslist::find($id);
$products->Product_Category =  $validateProducts ['Product_Category'];
$products->ProductName =   $validateProducts['ProductName'];
$products->Quantity =   $validateProducts['Quantity'];
$products->BuyPrice=   $validateProducts['BuyPrice'];
$products->SalePrice =   $validateProducts['SalePrice'];
$products->update();
return redirect()->route('productList')->with('success', 'Product updated successfully');
    }


    public function destroyProduct($id){
        $product = Productslist::find($id);
        $product->delete();
        return redirect()->route('productList')->with('success', 'Product deleted successfully');
    }


    public function SalesView()
    {
        return view('SaleForm');
    }


    public function SalesForm(Request $request)
    {
        //validaTION
        $validateSale = $request->validate([
            'Product_Category' => 'required',
            'ProductName' => 'required',
            'Quantity' => 'required',
            'BuyPrice' => 'required',
            'SalePrice' => 'required',
            'TotalSales' => 'required|numeric|min:0',
            'TotalProfit' => 'required|numeric',
            'SaleDate' => 'required|date',

        ]);


        $productCategory = $request->input('Product_Category');
        $productName = $request->input('ProductName');
        $quantitySold = $request->input('Quantity');

        $product = Productslist::where('Product_Category', $productCategory)
                                ->where('ProductName', $productName)
                                ->first();


        // Check if product exists
    $product = Productslist::where('ProductName', $validateSale['ProductName'])->first();
    
    if (!$product) {
        return redirect()->back()->with('error', 'Product not found.');
    }

    // Check if quantity being sold is greater than available quantity
    if ($validateSale['Quantity'] > $product->Quantity) {
        return redirect()->back()->with('error', 'Cannot sell more than available quantity.');
    }

        // saving data to database
        $sales = new SaleList();
        $sales->Product_Category =  $validateSale ['Product_Category'];
        $sales->ProductName =    $validateSale ['ProductName'];
        $sales->Quantity =   $validateSale ['Quantity'];
        $sales->BuyPrice=   $validateSale ['BuyPrice'];
        $sales->SalePrice =    $validateSale ['SalePrice'];
        $sales->TotalSales =  $validateSale ['TotalSales'];
        $sales->TotalProfit =  $validateSale ['TotalProfit'];
        $sales->sale_date =  $validateSale['SaleDate'];
        $sales->save();
        $product->Quantity -= $quantitySold;
        $product->save();

        return redirect()->route('viewSales')->with('success', 'Sales record added successfully');
    }




    public function SalesFetch(){
        $sales = SaleList::all();
        return view('salesList',compact('sales'));
       }

       public function salesEdit($id){
        $sales = SaleList::find($id);
      
        return view('editSales',compact('sales'));
    }

    public function SalesUpdate(Request $request ,$id){
         //validaTION
         $validateSale = $request->validate([
            'Product_Category' => 'required',
            'ProductName' => 'required',
            'Quantity' => 'required',
            'BuyPrice' => 'required',
            'SalePrice' => 'required',
            'TotalSales' => 'required|numeric|min:0',
            'TotalProfit' => 'required|numeric',

        ]);

        // saving data to database
        $sales = SaleList::find($id);
        $sales->Product_Category =  $validateSale ['Product_Category'];
        $sales->ProductName =    $validateSale ['ProductName'];
        $sales->Quantity =   $validateSale ['Quantity'];
        $sales->BuyPrice=   $validateSale ['BuyPrice'];
        $sales->SalePrice =    $validateSale ['SalePrice'];
        $sales->TotalSales =  $validateSale ['TotalSales'];
        $sales->TotalProfit =  $validateSale ['TotalProfit'];
        $sales->update();

        return redirect()->route('viewSales')->with('success', 'Sales record added successfully');
    }
    


    public function destroySales($id){
        $sales = SaleList::find($id);
        $sales->delete();
        return redirect()->route('salesList')->with('success', 'Product deleted successfully');
    }

    

    public function calculateProfits(Request $request) {
        $today = Carbon::now()->toDateString();
        $startOfWeek = Carbon::now()->startOfWeek()->toDateString();
        $startOfMonth = Carbon::now()->startOfMonth()->toDateString();
        $startOfYear = Carbon::now()->startOfYear()->toDateString();
    
        $profits = [
            'today' => $this->calculateProfitForDateRange($today),
            'this_week' => $this->calculateProfitForDateRange($startOfWeek),
            'this_month' => $this->calculateProfitForDateRange($startOfMonth),
            'this_year' => $this->calculateProfitForDateRange($startOfYear),
        ];
    
        return view('profitCards', compact('profits'));
    }


    private function calculateProfitForDateRange($startDate) {
        $endDate = Carbon::parse($startDate)->endOfDay();
        $startDate = Carbon::parse($startDate)->startOfDay();
    
        $totalProfit = DB::table('sale_lists')
            ->whereBetween('sale_date', [$startDate, $endDate])
            ->sum('TotalProfit');
    
        return $totalProfit;
    }
   
    }

    


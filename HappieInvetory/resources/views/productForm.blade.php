@extends('app')

@section('title')

    Products
    
@endsection 

@section('content')

    <div class="container mt-5 pt-5 d-flex justify-content-center">
        <div class="body" style="width: 70%; height: 80vh; box-shadow: 5px 5px 10px grey;">
            <h1 class="m-3"><b>Add Product</b></h1>
            @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
            <form action=" {{ route('addProduct') }}" method="POST" style="" class="p-3">
                @csrf
                <div class="form-group">
                    <label for="category">Product Category:</label>
                    <select class="form-control" id="Product_Category" name="Product_Category">
                        <option value="soda">Soda</option>
                        <option value="juice">Juice</option>
                        <option value="counterbook">Counter Book</option>
                        <option value="maji">Maji</option>
                        <option value="nazi">Nazi</option>
                        <option value="mchele">Mchele</option>
                        <option value="unga">Unga</option>
                        <option value="pipi">Pipi</option>
                        <option value="karanga">Karanga</option>
                        <option value="blueband">Blue Band</option>
                    </select>
                </div>
            
                <div class="form-group">
                    <label for="name">Product Name:</label>
                    <input type="text" class="form-control" id="ProductName" name="ProductName" required>
                </div>

                <div class="form-group">
                    <label for="quantity">Quantity:</label>
                    <input type="number" class="form-control" id="Quantity" name="Quantity" min="1" required>
                </div>

                <div class="form-group">
                    <label for="buyingPrice">Buying Price:</label>
                    <input type="number" class="form-control" id="BuyPrice" name="BuyPrice" min="0" step="0.01" required>
                </div>

                <div class="form-group">
                    <label for="sellingPrice">Selling Price:</label>
                    <input type="number" class="form-control" id="SalePrice" name="SalePrice" min="0" step="0.01" required>
                </div>

                <button type="submit" class="btn btn-primary mt-4">Add Product</button>
            </form>
        </div> 
    </div>

@endsection
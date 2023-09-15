
@extends('app')

@section('title')

    Products
    
@endsection 

@section('content')

    <div class="container mt-5">
        <h1 class="mb-4">Add Product</h1>
        {{ $products }}
        <form action="{{ route('updateProduct',['id' => $products->id]) }}"  method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="category">Product Category:</label>
                <select class="form-control" id="Product_Category" name="Product_Category">
                    <option value="soda" {{ $products->Product_Category == 'soda' ? 'selected' : '' }}>Soda</option>
                    <option value="Juice" {{ $products->Product_Category == 'Juice' ? 'selected' : '' }}>Juice</option>
                    <option value="Counter Book" {{ $products->Product_Category == 'Counter Book' ? 'selected' : '' }}>Counter Book</option>
                    <option value="Maji" {{ $products->Product_Category == 'soda' ? 'selected' : '' }}>Maji</option>
                    <option value="Nazi" {{ $products->Product_Category == 'Nazi' ? 'selected' : '' }}>Nazi</option>
                    <option value="Unga" {{ $products->Product_Category == 'Unga' ? 'selected' : '' }}>Unga</option>
                    <option value="Pipi" {{ $products->Product_Category == 'Pipi' ? 'selected' : '' }}>Pipi</option>
                    <option value="Karanga" {{ $products->Product_Category == 'Karanga' ? 'selected' : '' }}>Karanga</option>
                    <option value="Blue Band" {{ $products->Product_Category == 'Blue Band' ? 'selected' : '' }}>Blue Band</option>
                </select>
            </div>
          
            <div class="form-group">
                <label for="name">Product Name:</label>
                <input type="text" class="form-control" id="ProductName" name="ProductName" value="{{ $products->ProductName }}" required>
            </div>

            <div class="form-group">
                <label for="quantity">Quantity:</label>
                <input type="number" class="form-control" id="Quantity" name="Quantity"  value="{{ $products->Quantity }}" min="1" required>
            </div>

            <div class="form-group">
                <label for="buyingPrice">Buying Price:</label>
                <input type="number" class="form-control" id="BuyPrice" name="BuyPrice" value="{{ $products->BuyPrice }}" min="0" step="0.01" required>
            </div>

            <div class="form-group">
                <label for="sellingPrice">Selling Price:</label>
                <input type="number" class="form-control" id="SalePrice" name="SalePrice" value="{{ $products->SalePrice}}" min="0" step="0.01" required>
            </div>

            <button type="submit" class="btn btn-primary">Update Product</button>
        </form>
    </div>

   
</body>
</html>

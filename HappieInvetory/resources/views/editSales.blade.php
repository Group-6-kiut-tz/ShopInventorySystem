@extends('app')

@section('title')
    sales
@endsection 

@section('content')
    <div class="container mt-5">
        <h1 class="mb-4">Add Sales</h1>
        <form action="{{ route('updateSales',['id' => $sales->id]) }}" method="POST" id="salesForm">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="category">Product Category:</label>
                <select class="form-control" id="Product_Category" name="Product_Category">
                    <option value="soda" {{ $sales->Product_Category == 'soda' ? 'selected' : '' }}>Soda</option>
                    <option value="Juice" {{ $sales->Product_Category == 'Juice' ? 'selected' : '' }}>Juice</option>
                    <option value="Counter Book" {{ $sales->Product_Category == 'Counter Book' ? 'selected' : '' }}>Counter Book</option>
                    <option value="Maji" {{ $sales->Product_Category == 'soda' ? 'selected' : '' }}>Maji</option>
                    <option value="Nazi" {{ $sales->Product_Category == 'Nazi' ? 'selected' : '' }}>Nazi</option>
                    <option value="Unga" {{ $sales->Product_Category == 'Unga' ? 'selected' : '' }}>Unga</option>
                    <option value="Pipi" {{ $sales->Product_Category == 'Pipi' ? 'selected' : '' }}>Pipi</option>
                    <option value="Karanga" {{ $sales->Product_Category == 'Karanga' ? 'selected' : '' }}>Karanga</option>
                    <option value="Blue Band" {{ $sales->Product_Category == 'Blue Band' ? 'selected' : '' }}>Blue Band</option>
                </select>
            </div>
          
            <div class="form-group">
                <label for="name">Product Name:</label>
                <input type="text" class="form-control" id="ProductName" name="ProductName" value="{{ $sales->ProductName }}" required>
            </div>

            <div class="form-group">
                <label for="quantity">Quantity:</label>
                <input type="number" class="form-control" id="Quantity" name="Quantity" value="{{ $sales->Quantity }}" min="1" required>
            </div>
          

            <div class="form-group">
                <label for="buyingPrice">Buying Price:</label>
                <input type="number" class="form-control" id="BuyPrice" name="BuyPrice" value="{{ $sales->BuyPrice }}" min="0" step="0.01" required>
            </div>

            <div class="form-group">
                <label for="sellingPrice">Selling Price:</label>
                <input type="number" class="form-control" id="SalePrice" name="SalePrice" value="{{ $sales->SalePrice }}" min="0" step="0.01" required>
            </div>

            <!-- Display total sales -->
            <div class="form-group">
                <label for="totalSales">Total Sales Amount:</label>
                <input type="text" class="form-control" id="TotalSales" name="TotalSales" value="{{ $sales->TotalSales }}" readonly>
            </div>

            <!-- Display total profit -->
            <div class="form-group">
                <label for="totalProfit">Total Profit:</label>
                <input type="text" class="form-control" id="TotalProfit" name="TotalProfit"  value="{{ $sales->TotalProfit }}"readonly>
            </div>

            <button type="submit" class="btn btn-primary">Update Sales</button>
        </form>
    </div>

    <script>
        // Calculate total sales and total profit
        document.getElementById('salesForm').addEventListener('input', function() {
            const quantity = document.getElementById('Quantity').value;
            const salePrice = document.getElementById('SalePrice').value;
            const buyPrice = document.getElementById('BuyPrice').value;

            const totalSales = quantity * salePrice;
            const totalProfit = totalSales - (quantity * buyPrice);

            document.getElementById('TotalSales').value = totalSales.toFixed(2);
            document.getElementById('TotalProfit').value = totalProfit.toFixed(2);
        });
    </script>
</body>
</html>

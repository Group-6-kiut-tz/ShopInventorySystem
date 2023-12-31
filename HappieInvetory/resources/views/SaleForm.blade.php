@extends('app')

@section('title')
    Products
@endsection 

@section('content')
<style>
    * {
        /* outline: 2px solid red; */
        overflow-x: hidden;
    }
</style>

    <div class="container d-flex justify-content-center mt-5 pt-5" style=" overflow-x: hidden;">
        <div class="body" style="width: 70%; height: auto; box-shadow: 5px 5px 10px grey;">
            <h1 class="p-3"><b>Add Sales</b></h1>
            <!-- Display error message if it exists -->
        @if(session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif
            <form action="{{ route('addSales') }}" method="POST" id="salesForm" class="p-4">
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

                <!-- Display total sales -->
                <div class="form-group">
                    <label for="totalSales">Total Sales Amount:</label>
                    <input type="text" class="form-control" id="TotalSales" name="TotalSales" readonly>
                </div>

                <!-- Display total profit -->
                <div class="form-group">
                    <label for="totalProfit">Total Profit:</label>
                    <input type="text" class="form-control" id="TotalProfit" name="TotalProfit" readonly>
                </div>
                <div class="form-group">
                    <label for="saleDate">Sale Date:</label>
                    <input type="date" class="form-control" id="SaleDate" name="SaleDate" required>
                </div>

                <button type="submit" class="btn btn-primary mt-3">Add sell</button>
            </form>
        </div>
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
@endsection
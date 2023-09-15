
@extends('app')

@section('title')

    Products
    
@endsection 

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wonderful Table with Icons</title>
  
</head>
<body>
    <div class="container mt-5">
        <h1>Product List</h1>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Product Category</th>
                    <th scope="col">Product Name</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Buying Price</th>
                    <th scope="col">Selling Price</th>
                    <th scope="col">Actions</th>
                    <th scope="col">TotalSales</th>
                    <th scope="col">TotalProfit</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($sales as $sale)
                    
                
                <tr>
                    <th scope="row">{{ $sale->id }}</th>
                    <td>{{ $sale->	Product_Category }}</td>
                    <td>{{ $sale->	ProductName}}</td>
                    <td>{{ $sale->	Quantity }}</td>
                    <td>{{ $sale->	BuyPrice}}</td>
                    <td>{{ $sale->	SalePrice}}</td>
                    <td>{{ $sale->	TotalSales}}</td>
                    <td>{{ $sale->	TotalProfit}}</td>
                    <td>
                        <a href="{{ route('editSales',['id' => $sale->id]) }}" class="btn btn-info btn-sm"><i class="fas fa-edit"></i> Edit</a>
                    </td>
                    <td>
                        <form action="{{ route('deleteSales', ['id' => $sale->id]) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i> Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <!-- Bootstrap and Font Awesome scripts -->
   
</body>
</html>

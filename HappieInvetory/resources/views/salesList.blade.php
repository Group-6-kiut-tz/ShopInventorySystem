
@extends('app')

@section('title')

    sells
    
@endsection 

@section('content')

    <div class="container mt-5">
        <div class="container" style="width: 90%; height: auto; box-shadow: 5px 5px 10px grey; margin-top: 15vh;">
            <h1 class="p-3"><b>Sales List</b></h1>
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Product Category</th>
                        <th scope="col">Product Name</th>
                        <th scope="col">Quantity</th>
                        <th scope="col">Buying Price</th>
                        <th scope="col">Selling Price</th>
                        <th scope="col">Total sales</th>
                        <th scope="col">Total Profit</th>
                        <th scope="col">Action</th>
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
                        <td class="d-flex">
                            <a href="{{ route('editSales',['id' => $sale->id]) }}" class="btn btn-info btn-sm me-2"><i class="fas fa-edit"></i> Edit</a>
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
    </div>

@endsection
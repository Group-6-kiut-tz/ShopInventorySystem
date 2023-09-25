@extends('app')

@section('title')

    Admin
    
@endsection 

@section('content')

    <div class="container d-flex justify-content-center flex-wrap" style="padding-top: 8%;">
        <div class="card bg-danger-subtle m-3" style="width: 18rem;">
            <div class="card-body">
                <h2 class="card-title"><b>12,456</b></h2>
                <h5 class="mt-3">Products</h5>
            </div>
        </div>
        <div class="card bg-primary m-3" style="width: 18rem;">
            <div class="card-body">
                <h2 class="card-title"><b>12,456</b></h2>
                <h5 class="mt-3">Products</h5>
            </div>
        </div>
        <div class="card bg-info-subtle m-3" style="width: 18rem;">
            <div class="card-body">
                <h2 class="card-title"><b>12,456</b></h2>
                <h5 class="mt-3">Products</h5>
            </div>
        </div>
        <div class="card bg-secondary m-3" style="width: 18rem;">
            <div class="card-body">
                <h2 class="card-title"><b>12,456</b></h2>
                <h5 class="mt-3">Products</h5>
            </div>
        </div>
        <div class="card bg-danger m-3" style="width: 18rem;">
            <div class="card-body">
                <h2 class="card-title"><b>12,456</b></h2>
                <h5 class="mt-3">Products</h5>
            </div>
        </div>
        <div class="card bg-success m-3" style="width: 18rem;">
            <div class="card-body">
                <h2 class="card-title"><b>12,456</b></h2>
                <h5 class="mt-3">Products</h5>
            </div>
        </div>
    </div>
    <div class="container d-flex mt-5 pt-5" style="border-top: 4px solid black; max-width: 80%;">
        <div class="container">
             <h1>Statistic</h1>
            <h6>Costomer/Day</h6> 
            <img src="{{ asset('asset/image/imaes.png')}}" alt="" style=" width: 30vw; height: 50vh;">
        </div>
        <div class="container">
            <h3>Top sell</h3>
            <table class="table table-success table-striped">
                            <thead>
                    <tr>
                    <th scope="col">First</th>
                    <th scope="col">Last</th>
                    <th scope="col">Handle</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                    </tr>
                    <tr>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                    </tr>
                    <tr>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                    </tr>
                    <tr>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                    </tr>
                    <tr>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                    </tr>
                    
                </tbody>
            </table>
        </div>
    </div>
    <footer classstyle=" height: 10vh;">

    </footer>
    <style>
        tr {
            height: 55px;
        }
    </style>

@endsection
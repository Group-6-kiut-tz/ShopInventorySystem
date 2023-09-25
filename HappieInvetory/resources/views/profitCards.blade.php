@extends('app')

@section('title')
    Profit Summary
@endsection

@section('content')
    <div class="container mt-5">
        <div class="row">
            @foreach($profits as $range => $profit)
                <div class="col-md-3 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">{{ ucfirst($range) }}</h5>
                            <h6 class="card-subtitle mb-2 text-muted">Total Profit</h6>
                            <p class="card-text">$ {{ $profit }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection

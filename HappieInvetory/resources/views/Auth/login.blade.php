

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>
<body>
    <div class="container ">
   <div class="row justify-content-center" style="margin-top:10%">
    <div class="card " style="width: 35%">
        <div class="card-header">
            LOGIN TO YOUR ACCOUNT
        </div>
        <div class="card-body">
           <center>
            <img src="{{asset('logo.webp')}}" class="img img-fluid" style="height: 250px" alt="">
           </center>
            <form action="{{route('welcome')}}" method="POST">
                @csrf
            <div class="form-group">
                 <label for="">UserName</label>
                 <input type="text" class="form-control" name="username" placeholder="rajaby">
            </div>
            <div class="form-group">
                <label for="">Password</label>
                <input type="password" class="form-control" name="password"  >
           </div>

           <button  class="btn btn-success mt-3 form-control">
             Login
           </button>
           {{-- <a href="{{route('register')}}">Don't have account? Register.</a> --}}
            </form>
        </div>
    </div>
   </div>
</div>
</body>
</html>



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
   <div class="row justify-content-center" style="margin-top:5%">
    <div class="card mt-5" style="width: 30%">
        <div class="card-header">
            GET YOUR NEW ACCOUNT
        </div>
        <div class="card-body">
           <center>
            <img src="{{asset('logo.webp')}}" class="img img-fluid" style="height: 250px" alt="">
           </center>
            <form action="{{route('register')}}" method="POST">
                @csrf
            <div class="form-group">
                 <label for="">UserName</label>
                 <input type="text" class="form-control" name="username" placeholder="eg Neema Zepson">
            </div>
            <div class="form-group">
                <label for="">email</label>
                <input type="text" class="form-control" name="email" placeholder="xx@xx.com">
           </div>
            <div class="form-group">
                <label for="">Password</label>
                <input type="password" class="form-control" name="password"  >
           </div>
           <div class="form-group">
            <label for="">Confirm Password</label>
            <input type="password" class="form-control" name="password_confirmation"  >
       </div>

           <button  class="btn btn-success mt-3 form-control">
             Register
           </button>
           <a href="{{route('login')}}">have account? Login.</a>
            </form>
        </div>
    </div>
   </div>
</div>



</body>
</html>
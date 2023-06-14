<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="{{asset('DataTables/DataTables-1.13.4/css/jquery.dataTables.css')}}" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/fontawesome.min.css">
    <script type="text/javascript" src="{{asset('DataTables/DataTables-1.13.4/js/jquery.dataTables.js')}}"></script>
        <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.min.css')}}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin login</title>
    <style>
        .card-header{
            height: 20vh;
            background: url(images/car.jpg);
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
        }
    </style>
</head>
<body>
    <div class="container col-md-6 mt-5">
        <div class="card">
            <div class="card-header">
          <h4 class="text-center font-weight-bold mt-5 text-white">LOGIN HERE</h4>
            </div>
          <div class="card-body">
            <form action="{{url('admin/login')}}" method="GET">
                @if(session()->has('success'))
                <span class="text-danger">{{session()->get('success')}}</span><br>
                @endif
            @csrf
            <label for="phone" class="font-weight-bold">Phone no :</label>
            <input type="number" name="phone" class="form-control" placeholder="Enter your phone number">
            @if ($errors->has('phone'))
            <span class="text-danger">{{ $errors->first('phone') }}</span><br>
            @endif
            <label for="password" class="font-weight-bold">Password :</label>
            <input type="password" name="password" class="form-control" placeholder="Enter password">
            @if ($errors->has('password'))
            <span class="text-danger">{{ $errors->first('password') }}</span>
            @endif
            <input type="submit" value="L O G I N" class="font-weight-bold btn btn-primary form-control mt-2">
            <p>Forgot password ?. <a href="{{url('reset/pass')}}">Reset Here</a></p>
            <p>Not registered ?. <a href="{{url('register')}}">Register Here</a> </p>
            </form>
          </div>
        </div>
    </div>
    
</body>
<script src="{{asset('bootstrap/jquery/jquery-3.5.1.min.js')}}"></script>
    <script src="{{asset('bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('bootstrap/popper/popper.min.js')}}"></script>
</html>
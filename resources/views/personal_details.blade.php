<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="../images/car.jpg" type="text/css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{asset('DataTables/DataTables-1.13.4/css/jquery.dataTables.css')}}" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/fontawesome.min.css">
<script type="text/javascript" src="{{asset('DataTables/DataTables-1.13.4/js/jquery.dataTables.js')}}"></script>
    <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>personal details page</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg col-md-12 navbar-dark bg-dark sticky-top">
        <img src="../images/car.jpg" class="img-fluid" width="150px"  style="">
         <a class="navbar-brand font-weight-bold" id="index" href="#">SIMPSONS RENTS</a>
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
            <div class="collapse navbar-collapse" id="navbarNav">
           <ul class="navbar-nav mx-5">
               <li class="nav-item active">
                    <a class="nav-link" href="{{url('index')}}" style="font-size: 20px">HOME</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('brands')}}" style="font-size: 20px">Brands/Models</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('types')}}" style="font-size: 20px">Car Types</a>
                </li>
                    <li class="nav-item">
                    <a class="nav-link" href="{{url('listings')}}" style="font-size: 20px">Car Listing</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('bookings')}}" style="font-size: 20px">My Bookings</a>
                </li>
            </ul>
</div>
</nav>
<div class="container col-6 mt-5">
    <div class="card">
     <div class="card-header">
        <h4 class="text-center font-weight-bold">Your Personal Details</h4>
     </div>
      <div class="card-body">
        @if(session('details'))
        @foreach(session('details') as $item)
       <form action="{{url('user/register')}}" method="post">
    @csrf
    <label for="" class="font-weight-bold">Fullname :</label>
    <p>{{$item->car_type}}</p>
    <input type="text" name="fullname" class="form-control" placeholder="Enter your fullname" id="" value="">
    <label for="" class="font-weight-bold">Number :</label>
    <input type="number" name="phone" class="form-control" placeholder="Enter your number" id="">
    <label for="" class="font-weight-bold">Email :</label>
    <input type="email" name="email" class="form-control" placeholder="Enter your email" id="">
    <label for="" class="font-weight-bold">Location :</label>
    <input type="text" name="location" class="form-control" placeholder="Where are you from..." id="">
    <input type="submit" value="SUBMIT" class="btn btn-primary">
    </form>
    @endforeach
    @endif
      </div>
    </div>
</div>
</body>
<script src="{{asset('bootstrap/jquery/jquery-3.5.1.min.js')}}"></script>
    <script src="{{asset('bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('bootstrap/popper/popper.min.js')}}"></script>
</html>
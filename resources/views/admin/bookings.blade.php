<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="{{asset('images/car.jpg')}}" type="text/css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{asset('DataTables/DataTables-1.13.4/css/jquery.dataTables.css')}}" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/fontawesome.min.css">
    <script type="text/javascript" src="{{asset('DataTables/DataTables-1.13.4/js/jquery.dataTables.js')}}"></script>
    <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>All bookings</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg col-md-12 navbar-dark bg-dark sticky-top">
        <img src="../images/car.jpg" class="img-fluid" width="150px"  style="">
         <a class="navbar-brand font-weight-bold" id="index" href="{{url('admin/index')}}">SIMPSONS RENTS</a>
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
            <div class="collapse navbar-collapse" id="navbarNav">
           <ul class="navbar-nav mx-5">
               <li class="nav-item active">
                    <a class="nav-link" href="{{url('/admin/index')}}" style="font-size: 20px">HOME</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/admin/charts')}}" style="font-size: 20px">Revenue charts</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('admin/bookings')}}" style="font-size: 20px">Bookings</a>
                </li>
                    <li class="nav-item">
                    <a class="nav-link" href="{{url('listings')}}" style="font-size: 20px">Car Listing</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/admin/transactions')}}" style="font-size: 20px">Transaction</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/admin/clients')}}" style="font-size: 20px">Clients</a>
                </li>
            </ul>
                <div class="dropdown">
            <a class="font-weight-bold dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="" style="text-decoration:none;color:teal">{{Auth::user()->firstname}}  <i class="fa fa-user" style="color:white;font-size:20px"></i></a>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="{{url('settings')}}">Settings</a>
    <a class="dropdown-item" href="{{url('profile')}}">Profile</a>
    <a class="dropdown-item" href="{{url('logout')}}">Logout</a>
  </div>
</div>
</div>
</nav>
<div class="table-responsive">
    <table class="table table-bordered table-dark table-hover" id="bookings">
        <thead>
            <tr>
                <th class="font-weight-bold text-center">#</th>
                <th class="font-weight-bold text-center">BOOKING ID</th>
                <th class="font-weight-bold text-center">FULLNAME</th>
                <th class="font-weight-bold text-center">PHONE</th>
                <th class="font-weight-bold text-center">CAR_NAME</th>
                <th class="font-weight-bold text-center">HIRE_DURATION</th>
                <th class="font-weight-bold text-center">STATUS</th>
                <th class="font-weight-bold text-center">TOTAL_PRICE</th>
                <th class="font-weight-bold text-center">BOOKED_TO</th>
            </tr>
        </thead>
        <tbody>
            @foreach($bookings as $data)
            <tr>
                <td scope="row">{{$data->id}}</td>
                <td>{{$data->booking_id}}</td>
                <td>{{$data->fullname}}</td>
                <td>{{$data->phone}}</td>
                <td>{{$data->car_name}}</td>
                <td>{{$data->hire_duration}}</td>
                @if($data->status == 'Active')
                <td class="text-success font-weight-bold">{{$data->status}}</td>
                @else
                <td class="text-danger font-weight-bold">{{$data->status}}</td>
                @endif
                <td>{{$data->total_price}}</td>
                <td>{{$data->booked_to}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
<script src="{{asset('bootstrap/jquery/jquery-3.5.1.min.js')}}"></script>
    <script src="{{asset('bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('bootstrap/popper/popper.min.js')}}"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script type="text/javascript" src="{{asset('DataTables/DataTables-1.13.4/js/jquery.dataTables.js')}}"></script>
    <script>
    jQuery(document).ready(function($) {
        $('#bookings').DataTable();
    } );
    </script>
</html>
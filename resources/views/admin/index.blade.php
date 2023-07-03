<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="{{asset('images/car.jpg')}}" type="text/css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{asset('DataTables/DataTables-1.13.4/css/jquery.dataTables.css')}}" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/fontawesome.min.css">
<script type="text/javascript" src="{{asset('DataTables/DataTables-1.13.4/js/jquery.dataTables.js')}}"></script>
    <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CAR::HIRE</title>
    <style>
        header{
            background:url(images/car.jpg);
            background-position: center;
            background-size: cover;
            background-repeat: no-repeat;
        }
        </style>
</head>
<body >
    {{-- <header>
        <div id="logo" class="col-md-12">
            
        </div>
        <h1 class="head text-center font-weight-bold text-dark" st> 4X4s</h1>
    </header> --}}
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
                    <a class="nav-link" href="{{url('types')}}" style="font-size: 20px">Car Types</a>
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
<div class="container-fluid" >
    <h3 class="font-weight-bold">Dashboard</h3>
    <div class="row contents">
        <div class="col-md-3 mb-4">
        <div class="card" style="border-top-right-radius:2em;border-top-left-radius:2em;">
            <div class="card-body" style="background-color:rgb(4, 46, 63);border-top-right-radius:2em;border-top-left-radius:2em;">
                <div class="row justify-content-between">
                    <div>
                        <i class="text-white fa-solid fa-users"></i>
                    </div>
                    <div class="column">
<p class="text-light font-weight-bold">Total Clients</p>
{{-- @foreach($clienta as $data) --}}
<p class="text-light font-weight-bold">{{$clients}}</p>
                    </div>
                </div>
                
            </div>
            <div class="card-footer">
                <p>Today :</p>
            </div>
        </div>
        </div>
        <div class="col-md-3">
            <div class="card" style="border-top-right-radius:2em;border-top-left-radius:2em;">
                <div class="card-body" style="background-color: brown;border-top-right-radius:2em;border-top-left-radius:2em;">
                    <div class="row justify-content-between">
                        <div>
                            <i class="text-white fa-solid fa-car"></i>
                        </div>
                        <div class="column">
<p class="text-light font-weight-bold">Total Rented cars</p>
<p class="text-light font-weight-bold">{{$rented_cars}}</p>
                        </div>
                    </div>
                
                </div>
                <div class="card-footer">
                    <p>Today :</p>
                </div>
            </div>
            </div>
            <div class="col-md-3">
                <div class="card" style="border-top-right-radius:2em;border-top-left-radius:2em;">
                    <div class="card-body" style="background-color: gray;border-top-right-radius:2em;border-top-left-radius:2em;">
                        <div class="row justify-content-between">
                            <div>
                                <i class="text-white fa-solid fa-car" style="font-size: 20pxx"></i>
                            </div>
                            <div class="column">
                            <p class="text-light font-weight-bold">Total Cars</p>
<p class="text-light font-weight-bold">{{$cars}}</p>
                            </div>
                        </div>
                
                    </div>
                    <div class="card-footer">
                    </div>
                </div>
                </div>
                <div class="col-md-3">
                    <div class="card" style="border-top-right-radius:2em;border-top-left-radius:2em;">
                        <div class="card-body" style="background-color: rgb(4, 52, 4);border-top-right-radius:2em;border-top-left-radius:2em;">
                            <div class="row justify-content-between">
                                <div>
                                    <i class="text-white fa-solid fa-sack-dollar"></i>
                                </div>
                                <div class="column">
<p class="text-light font-weight-bold">Total Transaction</p>
<p class="text-light font-weight-bold"> 50</p>
                                </div>
                            </div>
                
                        </div>
                        <div class="card-footer">
                            <p>Today :</p>
                        </div>
                    </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card" style="border-top-right-radius:2em;border-top-left-radius:2em;">
                            <div class="card-body" style="background-color: rgb(69, 13, 13);border-top-right-radius:2em;border-top-left-radius:2em;">
                                <div class="row justify-content-between">
                                    <div>
                                        <i class="text-white fa-solid fa-file-lines"></i>
                                    </div>
                                    <div class="column">
<p class="text-light font-weight-bold">Reports</p>
<p class="text-light font-weight-bold"> 112</p>
                                    </div>
                                </div>
                
                            </div>
                            <div class="card-footer">
                                <p>Today : 5</p>
                            </div>
                        </div>
                        </div>
    </div>
</div>
<div class="container-fluid mt-5 mb-4">
    <h4 style="text-decoration: underline">Filter Bookings</h4>
    <div class="row">
        <div class="col-md-12">
        <form action="{{route('admin.filter')}}" method="post">
            @csrf
            <label for="from">Date From :</label>
            <input type="date" class="form-control col-md-4" name="from" id="">
            <label for="to">Date To :</label>
            <input type="date" class="form-control col-md-4" name="to" id="">
            <input type="submit" class="form-control col-md-4 mt-3 btn btn-primary font-weight-bold" name="submit" value="F I L T E R" id="">
        </form>
    </div>
    </div>
</div>
<div class="container-fluid mt-5">
    <h4 class="font-weight-bold" style="text-decoration: underline">Recent Car Bookings</h4>
    <div class="table-responsive">
        <table class="table table-bordered table-hover" id="sample">
            <thead>
                <tr>
                    <th class="text-center font-weight-bold">BOOKING-CODE</th>
                    <th class="text-center font-weight-bold">CLIENT</th>
                    <th class="text-center font-weight-bold">PHONE</th>
                    <th class="text-center font-weight-bold">CAR-NAME</th>
                    <th class="text-center font-weight-bold">STATUS</th>
                    <th class="text-center font-weight-bold">DATE-FROM</th>
                    <th class="text-center font-weight-bold">DATE-TO</th>
                    <th class="text-center font-weight-bold">AMOUNT</th>
                    <th class="text-center font-weight-bold">ACTIONS</th>

                </tr>
            </thead>
            <tbody>
                @foreach($bookings as $data)
                <tr>
                    <td>{{$data->booking_id}}</td>
                    <td>{{$data->fullname}}</td>
                    <td>{{$data->phone}}</td>
                    <td>{{$data->car_name}}</td>
                    <div class="column">
                    <td class=""><p class="badge badge-pill badge-success"> {{$data->status}}</p>
                        <p class="badge badge-pill badge-primary">Pending approval..</p>
                    </td>
                 
                    </div>
                    <td class="text-success font-weight-bold">{{$data->created_at}}</td>
                    <td class="text-danger">{{$data->booked_to}}</td>
                    <td>{{$data->total_price}}</td>
                    <td>
                <div class="dropdown">
                    <a href="" class="btn btn-secondary dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" >View Actions</a>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="{{url('settings')}}">Settings</a>
                        <a class="dropdown-item" href="{{url('profile')}}">Profile</a>
                        <a class="dropdown-item" href="{{url('logout')}}">Logout</a>
                      </div>
                    </div>
                </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>


    
</body>
<script src="{{asset('bootstrap/jquery/jquery-3.5.1.min.js')}}"></script>
    <script src="{{asset('bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('bootstrap/popper/popper.min.js')}}"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script type="text/javascript" src="{{asset('DataTables/DataTables-1.13.4/js/jquery.dataTables.js')}}"></script>
    <script>
    jQuery(document).ready(function($) {
        $('#sample').DataTable();
    } );
    </script>
</html>
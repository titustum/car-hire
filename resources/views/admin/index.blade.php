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
    
        @if(session()->has('message'))
        <div class="alert alert-warning alert-dismissible fade show text-center"  role="alert" style="position:sticky">
        <span class="font-weight-bold">{{session()->get('message')}}</span>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
             <span aria-hidden="true">&times;</span>
             </button>
             </div>
        @endif
   
            
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
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/admin/notifications')}}" style="font-size: 20px"><i class="fa-solid fa-bell"></i><sub class="text-white">{{$notifications}}</sub></a>
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
<?php 
$now = date('Y-m-d');
// echo $now;
?>
@foreach($Cars as $details)
{{$details->car_id}}
@endforeach


<div class="container-fluid" >
    <h3 class="font-weight-bold">Dashboard</h3>
    <div class="row contents">
        <div class="col-md-4">
        <div class="column">
            {{-- <div class="col-md-4"> --}}
                <div class="card">
                    <div class="card-header bg-dark">
                        <h4 class="text-center font-weight-bold text-white">ADD NEW CARS HERE</h4>
                    </div>
                    <div class="card-body">
                        @if(session()->has('success'))
                        <span class="text-success font-weight-bold">{{session()->get('success')}}</span>
                        @endif
                <form action="{{route('admin.add')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <label for="image" class="font-weight-bold">Car Image :</label>
                    <input type="file" class="form-control" name="car_image" id="">
                    @if ($errors->has('car_image'))
                    <span class="text-danger font-weight-bold">{{ $errors->first('car_image') }}</span><br>
                    @endif
                    <label for="name" class="font-weight-bold">Car Name :</label>
                    <input type="text" class="form-control" name="car_name" id="" value="">
                    @if ($errors->has('car_name'))
                    <span class="text-danger font-weight-bold">{{ $errors->first('car_name') }}</span><br>
                    @endif
                    <label for="name" class="font-weight-bold">Car Brand :</label>
                    <select name="car_brand" class="form-control" id="">
                    <option value="">-- Select a brand --</option>
                    <option >Toyota</option>
                    <option >Nissan</option>
                    <option >Subaru</option>
                    <option >Audi</option>
                    <option >Mitsubishi</option>
                    <option >Ford</option>
                    <option >Isuzu</option>
                    </select>
                    @if ($errors->has('car_brand'))
                    <span class="text-danger font-weight-bold">{{ $errors->first('car_brand') }}</span><br>
                    @endif
                    <label for="name" class="font-weight-bold">Car Type :</label>
                    <select name="car_type" class="form-control" id="">
                        <option value="">-- Select the type</option>
                        <option >4X4</option>
                        <option >Trucks</option>
                        <option >Saloon</option>
                        <option >Bikes</option>
                    </select>
                    @if ($errors->has('car_type'))
                    <span class="text-danger font-weight-bold">{{ $errors->first('car_type') }}</span><br>
                    @endif
                    <label for="name" class="font-weight-bold">Car Price :</label>
                    <input type="number" class="form-control" name="car_price" id="">
                    <p>Per/hr.</p>
                    @if ($errors->has('car_price'))
                    <span class="text-danger font-weight-bold">{{ $errors->first('car_price') }}</span><br>
                    @endif
                    <input type="submit" class="form-control mt-3 btn btn-success font-weight-bold" name="submit" value="A D D. N E W" id="">
                </form>
                    </div>
                </div>
            {{-- </div> --}}
            {{-- <div class="col-md-4"> --}}
                <div class="card mt-3">
                    <div class="card-header">
                        <h4 style="text-decoration: underline" class="text-center">Filter Bookings</h4>
                    </div>
                    <div class="card-body">
            <form action="{{route('admin.index')}}" method="post">
                @csrf
                <label for="from" class="font-weight-bold">Date From :</label>
                <input type="date" class="form-control" name="from" id="">
                @if($errors->has('from'))
                <span class="text-danger font-weight-bold">{{$errors->first('from')}}</span><br>
                @endif
                <label for="to" class="font-weight-bold">Date To :</label>
                <input type="date" class="form-control" name="to" id="">
                @if($errors->has('to'))
                <span class="text-danger font-weight-bold">{{$errors->first('to')}}</span>
                @endif
                <input type="submit" class="form-control mt-3 btn btn-primary font-weight-bold" name="submit" value="F I L T E R" id="">
            </form>
                    </div>
                </div>
        {{-- </div> --}}
            </div>
        </div>
        <div class="col-md-8">
            <div class="row">
        <div class="col-md-6 mb-4">
        <div class="card" style="border-top-right-radius:2em;border-top-left-radius:2em;">
            <div class="card-body" style="background-color:rgb(4, 46, 63);border-top-right-radius:2em;border-top-left-radius:2em;">
                <div class="row justify-content-between">
                    <div>
                        <i class="text-white fa-solid fa-users" style="font-size: 35px"></i>
                    </div>
                    <div class="column">
<p class="text-light font-weight-bold">Total Clients</p>
{{-- @foreach($clienta as $data) --}}
<p class="text-light font-weight-bold">{{$clients}}</p>
                    </div>
                </div>
                
            </div>
        </div>
        </div>
        <div class="col-md-6">
            <div class="card" style="border-top-right-radius:2em;border-top-left-radius:2em;">
                <div class="card-body" style="background-color: brown;border-top-right-radius:2em;border-top-left-radius:2em;">
                    <div class="row justify-content-between">
                        <div>
                            <i class="text-white fa-solid fa-car" style="font-size: 35px"></i>
                        </div>
                        <div class="column">
<p class="text-light font-weight-bold">Total Rented cars</p>
<p class="text-light font-weight-bold">{{$rented_cars}}</p>
                        </div>
                    </div>
                
                </div>
                <div class="card-footer">
                    <p class="font-weight-bold" style="font-size: 17px">Today : {{$rented_cars_today}}</p>
                </div>
            </div>
            </div>
            <div class="col-md-6">
                <div class="card" style="border-top-right-radius:2em;border-top-left-radius:2em;">
                    <div class="card-body" style="background-color: gray;border-top-right-radius:2em;border-top-left-radius:2em;">
                        <div class="row justify-content-between">
                            <div>
                                <i class="text-white fa-solid fa-car" style="font-size: 35px"></i>
                            </div>
                            <div class="column">
                            <p class="text-light font-weight-bold">Total Cars</p>
<p class="text-light font-weight-bold">{{$cars}}</p>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
                <div class="col-md-6">
                    <div class="card" style="border-top-right-radius:2em;border-top-left-radius:2em;">
                        <div class="card-body" style="background-color: rgb(4, 52, 4);border-top-right-radius:2em;border-top-left-radius:2em;">
                            <div class="row justify-content-between">
                                <div>
                                    <i class="text-white fa-solid fa-sack-dollar"style="font-size: 35px"></i>
                                </div>
                                <div class="column">
<p class="text-light font-weight-bold">Total Transaction</p>
<p class="text-light font-weight-bold"> 50</p>
                                </div>
                            </div>
                
                        </div>
                        <div class="card-footer">
                            <p class="font-weight-bold" style="font-size: 17px">Today :</p>
                        </div>
                    </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card" style="border-top-right-radius:2em;border-top-left-radius:2em;">
                            <div class="card-body" style="background-color: rgb(69, 13, 13);border-top-right-radius:2em;border-top-left-radius:2em;">
                                <div class="row justify-content-between">
                                    <div>
                                        <i class="text-white fa-solid fa-file-lines"style="font-size: 35px"></i>
                                    </div>
                                    <div class="column">
<p class="text-light font-weight-bold">Reports</p>
<p class="text-light font-weight-bold"> 112</p>
                                    </div>
                                </div>
                
                            </div>
                            <div class="card-footer">
                                <p class="font-weight-bold" style="font-size: 17px">Today : 5</p>
                            </div>
                        </div>
                        </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid mt-5 mb-4">
 
</div>
<div class="container-fluid mt-5">
    <h4 class="font-weight-bold" style="text-decoration: underline">Recent Car Bookings</h4>
    <div class="table-responsive">
        <table class="table table-bordered table-hover table-dark" id="sample">
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
                        @if($data->status == 'Active')
                    <td class=""><p class="badge badge-pill badge-success">Active</p>
                        <p class="badge badge-pill badge-warning">{{$data->status_state}}</p>
                    </td>
                  @else
                 <td class=""><p class="badge badge-pill badge-danger">Inactive</p>
                    <p class="badge badge-pill badge-danger">{{$data->status_state}}</p>
                </td>
              @endif
                
                    </div>
                    <td class="text-success font-weight-bold">{{$data->updated_at}}</td>
                    <td class="text-danger">{{$data->booked_to}}</td>
                    <td>{{$data->total_price}}</td>
                    <td>
                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" id="menu1"  data-toggle="dropdown" >View Actions</button>
                    <div class="dropdown-menu" role="menu"  aria-labelledby="menu1">
                        <a class="dropdown-item bg-warning mb-1 font-weight-bold" href="{{url('admin/approve/'.$data->booking_id)}}" onClick="return confirm('Are you sure you want to apporve this booking?')">APPROVE</a>
                        <a class="dropdown-item bg-danger font-weight-bold" href="{{url('admin/cancel/'.$data->booking_id)}}" onClick="return confirm('Are you sure you want to cancel this booking ?')">CANCEL</a>
                        <a class="dropdown-item font-weight-bold" href="{{url('more')}}">MORE</a>
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
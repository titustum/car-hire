<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="images/car.jpg" type="text/css">
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
    <title>Clients bookings page</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg col-md-12 navbar-dark bg-dark sticky-top">
        <img src="images/cruiser.jpg" class="img-fluid" width="150px"  style="">
         <a class="navbar-brand font-weight-bold" id="index" href="#">SIMPSONS RENTS</a>
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
            <div class="collapse navbar-collapse" id="navbarNav">
           <ul class="navbar-nav mx-5">
               <li class="nav-item active">
                    <a class="nav-link" href="{{url('/')}}" style="font-size: 20px">HOME</a>
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
<?php 
if (($bookings)<=0) {
    ?>
<div class="container col-md-6">

        <div class="card">
            <div class="card-header">
                <h4 class="text-center font-weight-bold">Fill the form</h4>
            </div>
            <div class="card-body">
            <form action="{{url('client/search')}}" method="post">
                <label class="font-weight-bold">Enter the booking id :</label>
            <input type="text" name="booking_id" class="form-control" placeholder="Enter the booking id" id="">
            <input type="submit" value="LOAD SEARCH" class="font-weight-bold form-control btn btn-primary mt-2">
            </form>
            </div>
        </div>
</div>
<?php }else{
?>

<div class="container-fluid">
    <div class="table-responsive">
       <table class="table table-bordered table-dark table-hover" id="sample">
           <thead>
               <tr>
                   <th>#</th>
                   <th>Booking id</th>
                   <th>Car Name</th>
                   <th>Duration</th>
                   <th>Total Price</th>
                   <th>Action</th>
               </tr>
           </thead>
           <tbody>
               @foreach($bookings as $item)
               <tr>
                <td>{{$item->id}}</td>
                   <td>{{$item->booking_id}}</td>
                   <td>{{$item->car_name}}</td>
                   <td>{{$item->hire_duration}}</td>
                   <td>{{$item->total_price}}</td>
                   <td><a href="{{url('cancel/bookings/'.$item->booking_id)}}" class="btn btn-warning mt-1 font-weight-bold mx-5">CANCEL BOOKING</a></td>
               </tr>
               @endforeach
           </tbody>
       </table>
   </div>
</div>
<?php }
?>
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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut-icon" href="images/car.jpg" type="text/css">
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
    <title>Hire::a car here</title>
    <style type="text/css">
        .progressbar {
	counter-reset: step;
}
.progressbar li {
	list-style-type: none;
	width: 25%;
	float: left;
	font-size: 12px;
	position: relative;
	text-align: center;
	text-transform: uppercase;
	color: #7d7d7d;
}
.progressbar li:before {
	width: 30px;
	height: 30px;
	content: counter(step);
	counter-increment: step;
	line-height: 30px;
	border: 2px solid #7d7d7d;
	display: block;
	text-align: center;
	margin: 0 auto 10px auto;
	border-radius: 50%;
	background-color: white;
}
.progressbar li:after {
	width: 78%;
	height: 2px;
	content: '';
	position: absolute;
	background-color: #7d7d7d;
	top: 15px;
	left: -39%;
	z-index: 1;
}
.progressbar li:first-child:after {
	content: none;
}
.progressbar li.active {
	color: green;
}
.progressbar li.active:before {
	border-color: #55b776;
	content: '✓';
	font-size: 18px;
}
.progressbar li.active + li:after {
	background-color: #55b776;
	z-index: 1;
}
body{
    background-attachment: fixed;
    background: url(../images/nissan.jpg);
    background-repeat: no-repeat;
    background-position: center;
    background-size: cover;
}
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg col-md-12 navbar-dark bg-dark sticky-top">
        <img src="../images/cruiser.jpg" class="img-fluid" width="150px"  style="">
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
<div class="container-fluid">
    <div class="row">
		<div class="col-md-12 bg-light mt-5  py-2">
		<ul class="progressbar">
          <li class="active">Car Details</li>
          <li>Personal details</li>
          <li>Pay</li>
          <li>Summary</li>
        </ul>
		</div>
	</div>
</div>
        <div class="container-fluid">
         <div class="table-responsive">
            <table class="table table-bordered table-dark table-hover" id="sample">
                <thead>
                    <tr>
                        <th>Car Image</th>
                        <th>Car Brand</th>
                        <th>Car Name</th>
                        <th>Car Price</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($cars as $item)
                    <tr>
                        <td scope="row"><img src="../images/nissan.jpg" class="img-fluid" height="100px" width="100px" alt=""></td>
                        <td>{{$item->car_brand}}</td>
                        <td>{{$item->car_name}}</td>
                        <td>32,000</td>
                        <td><a href="{{url('proceed')}}" class="btn btn-success mt-3 mx-5">PROCEED</a></td>
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
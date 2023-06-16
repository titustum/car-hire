<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="../../images/car.jpg" type="text/css">
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
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg col-md-12 navbar-dark bg-dark sticky-top">
        <img src="../../images/car.jpg" class="img-fluid" width="150px"  style="">
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
          <li class="active">Personal details</li>
          <li>Summary</li>
          <li>Pay</li>
        </ul>
		</div>
	</div>
</div>
<div class="container col-md-6 mt-5">
    <div class="card">
     <div class="card-header">
        <h4 class="text-center font-weight-bold">Your Personal Details</h4>
     </div>
      <div class="card-body">
        {{-- @if(session('details'))--}}
        @foreach($cars as $item) 
       <form action="{{url('user/register/'.$item->id)}}" method="post">
    @csrf
    <label for="" class="font-weight-bold">Fullname :</label>
    <input type="text" name="fullname" class="form-control" placeholder="Enter your fullname" id="" value="">
    @if ($errors->has('fullname'))
    <span class="text-danger">{{ $errors->first('fullname') }}</span><br>
    @endif
    <label for="" class="font-weight-bold">Number :</label>
    <input type="number" name="phone" class="form-control" placeholder="Enter your number" id="">
    @if ($errors->has('phone'))
    <span class="text-danger">{{ $errors->first('phone') }}</span><br>
    @endif
    <label for="" class="font-weight-bold">Email :</label>
    <input type="email" name="email" class="form-control" placeholder="Enter your email" id="">
    @if ($errors->has('email'))
    <span class="text-danger">{{ $errors->first('email') }}</span><br>
    @endif
    <label for="" class="font-weight-bold">Location :</label>
    <input type="text" name="location" class="form-control" placeholder="Where are you from..." id="">
    @if ($errors->has('location'))
    <span class="text-danger">{{ $errors->first('location') }}</span><br>
    @endif
    <label for="" class="font-weight-bold">Booking Duration :</label>
    <input type="number" name="days" class="form-control" placeholder="Days..." id="">
    <span>In day(s)</span>
    @if ($errors->has('days'))
    <span class="text-danger">{{ $errors->first('days') }}</span><br>
    @endif
    <input type="submit" value="S U B M I T" class="btn btn-primary form-control text-center mt-4 font-weight-bold">
    </form>
     @endforeach
    {{--@endif --}}
      </div>
    </div>
</div>
</body>
<script src="{{asset('bootstrap/jquery/jquery-3.5.1.min.js')}}"></script>
    <script src="{{asset('bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('bootstrap/popper/popper.min.js')}}"></script>
</html>
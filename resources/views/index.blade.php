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
    <title>Clients::index::page</title>
    <style type="text/css">
    .carousel{
        height: 60vh;
    }
        .carousel-inner{
            height: 100vh;
        }
        .carousel-item{
            height: 100vh;
        }
        #link{
            color: grey;
        }
        #Link:active{
            color: red;
            background-color: green;
        }
        </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg col-md-12 navbar-dark bg-dark sticky-top">
        <img src="images/car.jpg" class="img-fluid" width="150px"  style="">
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
@if(session()->has('success'))
<p class="font-weight-bold text-success">{{session()->get('success')}}</p>
@endif
<div class="container-fluid mt-2" style="border-bottom-left-radius: .3em">
    <div class="row">
    <div id="carouselId" class="carousel slide col-md-6" style="" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselId" data-slide-to="0" class="active"></li>
            <li data-target="#carouselId" data-slide-to="1"></li>
            <li data-target="#carouselId" data-slide-to="2"></li>
            <li data-target="#carouselId" data-slide-to="3"></li>
        </ol>
        <div class="carousel-inner col-md-12" role="listbox" style="height: 60vh;">
            <div class="carousel-item active" style="height: 60vh">
                <img class="w-100 img-fluid"  src="images/cruiser.jpg" alt="First slide">
                <div class="carousel-caption d-none d-md-block">
                    <h3 class="text-warning font-weight-bold">4X4s</h3>
                    <a href="{{url('4X4s')}}" class="btn btn-secondary" style="text-decoration: none;color:white">View More</a>
                </div>
            </div>
            <div class="carousel-item" style="height: 60vh">
                <img class="w-100 img-fluid" src="images/saloon.jpg" alt="Second slide">
                <div class="carousel-caption d-none d-md-block">
                    <h3 class="text-warning font-weight-bold">Saloon cars</h3>
                    <a href="{{url('saloons')}}" class="btn btn-secondary" style="text-decoration: none;color:white">View More</a>
                </div>
            </div>
            <div class="carousel-item" style="height: 60vh">
                <img class="w-100 img-fluid" src="images/truck.jpg" alt="Third slide">
                <div class="carousel-caption d-none d-md-block">
                    <h3 class="text-warning font-weight-bold">Trucks</h3>
                    <a href="{{url('trucks')}}" class="btn btn-secondary" style="text-decoration: none;color:white">View More</a>
                </div>
            </div>
            <div class="carousel-item" style="height: 60vh">
                <img class="w-100" src="images/bike.jpg" alt="Third slide">
                <div class="carousel-caption d-none d-md-block">
                    <h3 class="text-warning font-weight-bold">Bikes</h3>
                    <a href="{{url('bikes')}}" class="btn btn-secondary" style="text-decoration: none;color:white">View More</a>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselId" role="button"  data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselId" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <div class="col-md-6">
        <h4 class="font-weight-bold text-center" style="color: forestgreen">OTHER CARS IN OUR LIST....</h4>
    </div>
    </div>
</div>
<div class="container-fluid">
    <h4 class="font-weight-bold text-center" style="text-decoration: underline">CATEGORIES</h4>
    <div class="container-fluid">
        <div class="row justify-content-around">
            <a href="{{url('4X4s')}}" class="" style="font-size: 17px;text-decoration:none">4 X 4 s</a>
            <a href="{{url('trucks')}}" style="font-size: 17px;text-decoration:none">Trucks</a>
            <a href="{{url('saloons')}}" id="Link" style="font-size: 17px;text-decoration:none">Saloons</a>
            <a href="{{url('bikes')}}" style="font-size: 17px;text-decoration:none">Bikes</a>
        </div>
        
        <div class="row">
            @foreach ($cars as $item)
          <div class="col-md-3" >
            <div class="card" style="height: 52vh">
                {{-- <div class="card-header"> --}}
                    <img src="images/{{$item->car_image}}" class="img-fluid" alt="" style="height: 30vh">
                {{-- </div> --}}
              <div class="card-body">
                <h3 class="card-title">{{$item->car_name}}</h3>
                <p class="card-text">Price per Hr <span class="font-weight-bold" style="font-size: 20px"> :15</span><span style="color: green;font-size: 20px">$</span></p>
              </div>
              <div class="card-footer">
                <a href="{{url('bookings/'.$item->car_name)}}" class="btn btn-success font-weight-bold col-md-12">BOOK NOW</a>
            </div>
            </div>
          </div>
          @endforeach
          <div class="col-md-3">
            <div class="card" style="height: 52vh">
                {{-- <div class="card-header"> --}}
                    <img src="images/car.jpg" class="img-fluid" style="height: 31vh">
                {{-- </div> --}}
              <div class="card-body">
                <h3 class="card-title">Landcruiser 79 series</h3>
                <p class="card-text">Price per Hr <span class="font-weight-bold" style="font-size: 20px"> :15</span><span style="color: green;font-size: 20px">$</span></p>
              </div>
              <div class="card-footer">
                <button type="button" class="btn btn-primary">BOOK NOW</button>
            </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="card" style="height: 52vh">
                {{-- <div class="card-header"> --}}
                    <img src="images/nissan.jpg" class="img-fluid" alt="" style="height:28vh">
                {{-- </div> --}}
              <div class="card-body">
                <h3 class="card-title">Nissan Y62</h3>
                <p class="card-text">Price per Hr <span class="font-weight-bold" style="font-size: 20px"> :15</span><span style="color: green;font-size: 20px">$</span></p>
              </div>
              <div class="card-footer">
                <button type="button" class="btn btn-primary">BOOK NOW</button>
            </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="card" style="height: 52vh">
                {{-- <div class="card-header"> --}}
                    <img src="images/gq.jpg" class="img-fluid" alt="" style="height: 30vh">
                {{-- </div> --}}
              <div class="card-body">
                <h3 class="card-title">Nissan GQ Patrol</h3>
                <p class="card-text">Price per Hr <span class="font-weight-bold" style="font-size: 20px"> :15</span><span style="color: green;font-size: 20px">$</span></p>
              </div>
              <div class="card-footer">
                <button type="button" class="btn btn-primary">BOOK NOW</button>
            </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="card">
                {{-- <div class="card-header"> --}}
                    <img src="images/isuzu.jpg" class="img-fluid" alt="">
                {{-- </div> --}}
              <div class="card-body">
                <h3 class="card-title">Isuzu D-Max</h3>
                <p class="card-text">Price per Hr <span class="font-weight-bold" style="font-size: 20px"> :15</span><span style="color: green;font-size: 20px">$</span></p>
              </div>
              <div class="card-footer">
                <button type="button" class="btn btn-primary">BOOK NOW</button>
              </div>
            </div>
          </div>
        </div>
    </div>
</div>
<div class="container-fluid">
    <h4 class="text-center font-weight-bold" style="text-decoration: underline;">About Us</h4>
    <div class="row">
        <div class="col-md-5">
            <div class="card">
            <img src="images/nissan.jpg" style="float: left" class="img-fluid" alt="about_us">
    </div>
        </div>
    <div class="content text-center col-md-7">
        <p class="text-center mt-4">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Numquam maiores ea quod repellat. 
            Consectetur reprehenderit quibusdam quidem optio ad, accusamus voluptates ratione! Quod 
            beatae sapiente magni architecto recusandae, accusamus enim!
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Numquam maiores ea quod repellat. 
            Consectetur reprehenderit quibusdam quidem optio ad, accusamus voluptates ratione! Quod 
            beatae sapiente magni architecto recusandae, accusamus enim!
        </p>
    </div>
</div>
</div>
<div class="container-fluid" style="background-color:rgb(76, 79, 79);border-top-left-radius: 2em;border-top-right-radius:2em">
    <div style="border-bottom: .1px solid black">
    <div class="row" style="">
        
        <div class="column col-md-3">
            <h4 class="text-white">SIMPSONS HIRE</h4>
            <p style="color: rgb(196, 190, 12)">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nostrum dolorum,
                 illum rem odio vero quidem nemo officiis sed atque quisquam deserunt 
                 reiciendis sapiente velit cumque sint unde quaerat, illo eligendi?</p>
        </div>
        <div class="column col-md-3">
            <h4 class="text-white">PRODUCTS</h4>
            <p><a href="{{url('luxury')}}">Luxurious</a></p>
            <p><a href="{{url('power')}}">Power</a></p>
            <p><a href="{{url('fuel-economy')}}"> Fuel economy</a></p>
            <p> <a href="{{url('pocket-friendly')}}">Pocket friendly</a></p>
        </div>
        <div class="column col-md-3">
            <h4 class="text-white">LINKS</h4>
            <p>My Bookings</p>
            <p>Talk to us</p>
            <p>Faqs</p>
            <p>Help</p>
        </div>
        <div class="column col-md-3">
            <h4 class="text-white">CONTACTS</h4>
            <p>Location</p>
            <p>simpsonshire@gmail.com</p>
            <p>+254700000000</p>
            <p>+10808988777</p>
        </div>
        </div>
    </div>
    <div class="row justify-content-between mx-2">
        <span>&copy Copyrights {{Date('Y')}} Dantech.dev.</span>
        <span><i class="fa fa-facebook"></i></span>
        <span><i class="fa fa-twitter"></i></span>
        <span><i class="fa fa-linkedin"></i></span>
        <span><i class="fa fa-gmail"></i></span>
    </div>
</div>
</body>
<script src="{{asset('bootstrap/jquery/jquery-3.5.1.min.js')}}"></script>
    <script src="{{asset('bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('bootstrap/popper/popper.min.js')}}"></script>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="images/car.jpg" type="text/css">
    <link rel="stylesheet" type="text/css" href="{{asset('DataTables/DataTables-1.13.4/css/jquery.dataTables.css')}}" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/fontawesome.min.css">
<script type="text/javascript" src="{{asset('DataTables/DataTables-1.13.4/js/jquery.dataTables.js')}}"></script>
    <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.min.css')}}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Transaction page</title>
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
                    <a class="nav-link" href="{{url('/admin/index')}}" style="font-size: 20px">HOME</a>
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
<div class="container-fluid mt-4">
    <h4 class="text-center font-weight-bold">Active Clients</h4>
    <div class="table-responsive">
        <table class="table table-dark table-bordered table-hover" id="sample">
            <thead>
                <tr>
                    <td>#</td>
                    <td>Booking Id</td>
                    <td>FullName</td>
                    <td>Phone</td>
                    <td>Hire Duration </td>
                    <td>Location</td>
                    <td class="text-center font-weight-bold">Actions</td>
                </tr>
            </thead>
            <tbody>
                @foreach($clients as $data)
                <tr>
                    <td>{{$data->id}}</td>
                    <td>{{$data->booking_id}}</td>
                    <td>{{$data->fullname}}</td>
                    <td>{{$data->phone}}</td>
                    <td>{{$data->hire_duration.' days
                    (s)'}}</td>
                    <td>{{$data->total_price}}</td>
                    <td class="text-center font-weight-bold"><a href="{{url('modal/'.$data->booking_id)}}" data-toggle="modal" data-target="#exampleModal{{$data->booking_id}}" class="text-white text-center btn btn-primary">View Status</a></td>
                </tr>
                {{-- view status modal --}}
                <div class="modal fade" id="exampleModal{{$data->booking_id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title text-dark" id="exampleModalLabel">Client Status</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                            <form method="post" action="">
                                <input type="number" name="id" class="form-control" value="{{$data->id}}" hidden>
                                <label class="font-weight-bold">FullName :</label>
                                <input type="text" name="fullname" class="form-control" value="{{$data->fullname}}" readonly>
                                <label class="font-weight-bold">STATUS :</label>
                                <input type="text" name="status" class="badge-pill bg-success text-center font-weight-bold text-white form-control" value="{{$data->status}}" readonly>
                            </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                       
                          <a href="" name="edit"><input type="submit" name="edit" value="Edit" class="btn btn-primary"></a>
                        </form>

                      </div>
                  </div>
              </div>
          </div>
          {{--  --}}
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
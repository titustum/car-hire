<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Car;
use App\Models\Client;
use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Symfony\Component\HttpFoundation\Session\Session;
use Carbon\Carbon;
use DateTime;

class CarsController extends Controller
{

    public function pesa(){
        $mpesa= new \Safaricom\Mpesa\Mpesa();
        $BusinessShortCode=174379;
        $Timestamp=date('YmdHis');
        $PartyA='254726585782';
        $CallBackURL='here.php';
        $AccountReference='carhire';
        $TransactionDesc='testing';
        $LipaNaMpesaPasskey='bfb279f9aa9bdbcf158e97dd71a467cd2e0c893059b10f78e6b72ada1ed2c919';//your passkey
        $Password=base64_encode($BusinessShortCode.$LipaNaMpesaPasskey.$Timestamp);
        $Amount=4;
        $Remarks = "success";
        $PartyB = 174379;
        $TransactionType="Online";

        $stkPushSimulation = $mpesa->STKPushSimulation(
            $BusinessShortCode, 
            $LipaNaMpesaPasskey, 
            $Amount,
            $PartyA,
            $CallBackURL,
            $AccountReference,
            $TransactionDesc,
            $Remarks,
            $Amount,
            $PartyB,
            $TransactionType
                );
                dd($stkPushSimulation);
                return redirect()->back();
    }
    //
    public function power(Request $request){
        // $cars = Car::where('car_type', '4X4');
        $cars = DB::select("SELECT * FROM cars WHERE car_type = '4X4'");
        return view('index',compact('cars'));
    }
    public function saloon(Request $request){
        // $cars = Car::where('car_type', '4X4');
        $cars = DB::select("SELECT * FROM cars WHERE car_type = 'saloon'");
        return view('index',compact('cars'));
    }
    public function truck(Request $request){
        // $cars = Car::where('car_type', '4X4');
        $cars = DB::select("SELECT * FROM cars WHERE car_type = 'truck'");
        return view('index',compact('cars'));
    }
    public function bike(Request $request){
        // $cars = Car::where('car_type', '4X4');
        $cars = DB::select("SELECT * FROM cars WHERE car_type = 'bike'");
        return view('index',compact('cars'));
    }
    public function bookings(Request $request, $car_name){
        // $cars = Car::findorFail($id);
        // $id = session()->get($id,[]);
        $cars = DB::select("SELECT * FROM cars WHERE car_name = '$car_name'");

        // session()->put('id',$id);
        return view('hire',compact('cars'));
    }

    //my_bookings
    public function my_bookings(Request $request){
        $bookings = DB::select("SELECT * FROM bookings WHERE booking_id = '$request->booking_id'");
        return view('bookings', compact('bookings'));
    }
    public function Types(){
        return view('types');
    }
    public function Brand(){
        return view('brands');
    }
    public function Listing(){
        return view('listings');
    }
    public function Clients(){
        $clients = DB::select("SELECT * FROM bookings");

            return view('/admin/clients',compact('clients'));
    }
    public function modal($booking_id){
        $bookings = DB::select("SELECT * FROM bookings WHERE booking_id = '$booking_id'");
        return view('/admin/clients',compact('bookings'));

    }
    //all bokings
    public function all_bookings(){
        $bookings = Booking::all();
        return view('admin.bookings',compact('bookings'));
    }
    //charts
    public function charts(){
        return view('admin.charts');
    }
    public function Setting(){
        if(Auth::check()){
            return view('setting');
        }
  
        return redirect("login")->withSuccess('You are not allowed to access..Login first');
    }
    public function Profile(){
        if(Auth::check()){
            return view('profile');
        }
  
        return redirect("login")->withSuccess('You are not allowed to access..Login first');
    }
    public function Transaction(){
            return view('/admin/transactions');
    }

    public function details(Request $request,$id){
        $cars = DB::select("SELECT * FROM cars WHERE id = '$id'");
        return view('personal_details',compact('cars'));
    }
    //capture details
    public function client_gister(Request $request, $id){
        $data = session()->get('data',[]);
        $booking_id = 'SIMP'. random_int('10000','99999');

        $request->validate(
           [
           "fullname"=>'Required',
           "phone"=>'required|unique:clients,phone',
           "email"=>'required|unique:clients,email',
           "location"=>'required',
           "days"=>'required',
        ],
        [
           "fullname.required"=>"Fill your name",
           "phone.required"=>"Enter your number",
           "email.required"=>"Fill your email address",
           "location.required"=>"Fill your location",
           "days.required"=>"Fill the duration of hire",
        ]);
        $cars = DB::select("SELECT * FROM cars WHERE id = '$id'");
        foreach($cars as $item){
            
            
        }
        $data=[
            $id=>[
                "car_id"=>$item->car_id,
                "booking_id"=>$booking_id,
                "fullname"=>$request->fullname,
                "phone"=>$request->phone,
                "email"=>$request->email,
                "location"=>$request->location,
                "days"=>$request->days,
                "car_image"=>$item->car_image,
                "car_name"=>$item->car_name,
                "car_price"=>$item->car_price,
                "hire_duration"=>$request->days,
                "total_price"=>$request->days * $item->car_price,
                "booking_status"=>'Active'

            ]
            ];
        session()->put('data',$data);
        return view('summary');

    }
    //payment
    public function payment(Request $request, $id){
        $data=[
            $id=>[
                "car_id"=>$request->car_id,
                "booking_id"=>$request->booking_id,
                "fullname"=>$request->fullname,
                "phone"=>$request->phone,
                "email"=>$request->email,
                "location"=>$request->location,
                "days"=>$request->days,
                "car_name"=>$request->car_name,
                "car_price"=>$request->car_price,
                "hire_duration"=>$request->days,
                "total_price"=>$request->days * $request->car_price,
                "booking_status"=>'Active'

            ]
            ];
        session()->put('data',$data);
        return view('payment');

    }
    //pay
    public function submit(Request $request){
        date_default_timezone_set('Africa/Nairobi');
        // if(session('data')){
        // foreach(session('data') as $id =>$items){
            $car_id = $request['car_id'];
            $fullname = $request['fullname'];
            $phone = $request['phone'];
            $email = $request['email'];
            $car_name = $request['car_name'];
            $car_price = $request['car_price'];
            $location = $request['location'];
            $days = $request['days'];
            $hire_duration = $request['hire_duration'];
            $booking_id = $request['booking_id'];
            $total_price = $request['total_price'];
            $booking_status = $request['booking_status'];
        // }
    // }

        $client=new Client;
        $client->booking_id = $booking_id;
        $client->fullname = $fullname;
        $client->phone = $phone;
        $client->email = $email;
        $client->location = $location;
        $client->days = $days .'day(s)';
        $client->save();


       $booked_time=strtotime("current");
       $booked_time = date('Y-m-d  H:i:s');

         $return = Carbon::now();
         $date = $return->addDays($days);

          $booking = new Booking;
          $booking->booking_id = $booking_id;
          $booking->car_id = $car_id;
          $booking->fullname = $fullname;
          $booking->phone = $phone;
          $booking->car_name = $car_name;
          $booking->car_price = $car_price;
          $booking->hire_duration = $days;
          $booking->total_price = $total_price;
          $booking->status = $booking_status;
          $booking->status_state = 'Pending approval..';
          $booking->booked_to = $date;
          $booking->save();

          DB::update("UPDATE cars SET car_status = 'Booked' WHERE car_id = '$car_id'");
          
          
          session()->forget('data');
          return redirect('/')->with('success', 'Your booking has been received successfully');

    }


    //register clients
    public function client_register(Request $request,$id){
        $booking_id = 'SIMP'. random_int('10000','99999');

         $request->validate(
            [
            "fullname"=>'Required',
            "phone"=>'required|unique:clients,phone',
            "email"=>'required|unique:clients,email',
            "location"=>'required',
            "days"=>'required',
         ],
         [
            "fullname.required"=>"Fill your name",
            "phone.required"=>"Enter your number",
            "email.required"=>"Fill your email address",
            "location.required"=>"Fill your location",
            "days.required"=>"Fill the duration of hire",
         ]);
          $client=new Client;
          $client->booking_id = $booking_id;
          $client->fullname = $request->fullname;
          $client->phone = $request->phone;
          $client->email = $request->email;
          $client->location = $request->location;
          $client->days = $request->days .'day(s)';
          $client->save();

         date_default_timezone_set('Africa/Nairobi');
         $booked_time=strtotime("current");
         $booked_time = date('Y-m-d');
         $time = time();

         $return = Carbon::createFromFormat('Y-m-d', $booked_time);
         $date = $return->addDays($request->days);

         $cars = DB::select("SELECT * FROM cars WHERE id = '$id'");
         foreach($cars as $item){
            $booking = new Booking;
            $booking->booking_id = $booking_id;
            $booking->fullname = $request->fullname;
            $booking->phone = $request->phone;
            $booking->car_name = $item->car_name;
            $booking->car_price =$item->car_price;
            $booking->hire_duration = $request->days;
            $booking->total_price = $request->days * $item->car_price;
            $booking->status = "Active";
            $booking->booked_to = $date;
            $booking->created_at = $time;
            $booking->save();

         }
         return redirect("summary")->with('message', 'User details recorded.');

    }
    public function Login(Request $request)
    {
        $request->validate([
            'phone' => 'required',
            'password' => 'required',
        ]);
   
        $credentials = $request->only('phone', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('/admin/index')
                        ->withSuccess('Signed in');
        }
  
        return redirect("login")->withSuccess('Login details are not valid');
    }

    public function registration()
    {
        return view('auth.registration');
    }
      
    public function register(Request $request)
    {  
        $request->validate([
            'firstname' => 'required',
            'secondname' => 'required',
            'phone' => 'required',
            'id_no' => 'required|unique:users',
            'password' => 'required|min:6',
            're_password' => 'required',

        ]);
        if($request->re_password != $request->password){
            return redirect('/admin/register')->with('error','The password doesnt match');
        }else{
           
        $data = $request->all();
        // $check = $this->create($data);
        
        $user = new User;
        $user->user_type = 'Admin';
        $user->firstname = $request->firstname;
        $user->secondname = $request->secondname;
        $user->phone = $request->phone;
        $user->id_no = $request->id_no;
        $user->password = Hash::make($request->password);
        $user->save();

        return redirect("/admin/index")->withSuccess('You have signed-in');
        }
    }

    //not used for now
    public function create(array $data)
    {
      return User::create([
        'firstname' => $data['firstname'],
        'secondname' => $data['secondname'],
        'phone' => $data['phone'],
        'id_no' => $data['id_no'],
        'password' => Hash::make($data['password'])
      ]);
    }    
    
    public function index()
    {
        //was like this
        // if(Auth::check()){
        //     return view('/');
        // }
        if(Auth::check()){
            $clients = DB::table("clients")->count();
            $cars = DB::table("cars")->count();
            $rented_cars = DB::table("bookings")->count();
            $notifications = Booking::where('status_state','Pending approval..')->count();
            $bookings = DB::table('bookings')->orderBy('id','ASC')->limit(5)->get();

            //updating booking status
            $today = date("Y-m-d");
            $rented_cars_today = DB::table("bookings")->where('updated_at','=',$today)->count();

            date_default_timezone_set('Africa/Nairobi');
            $today =date_create(Date('Y-m-d'));
            $booked_time=strtotime("current");
            $booked_time = date('Y-m-d  H:i:sa');
            $dates = DB::select("SELECT status,car_id,id,DATEDIFF( booked_to,now()) AS diff FROM bookings");
            foreach ($dates as $item){
                $book_id = $item->id;
                $date_diff = $item->diff;
                $cars_id = $item->car_id;
                $b_status = $item->status;

                // $today =date_create(Date('Y-m-d'));
                // $booked_to =date_create($item->booked_to);
                // $diff = date_diff($booked_to, $today);
                // $diff_format = $diff->format("%R%a days");
                // DB::update("UPDATE bookings SET diff='$diff_format'");

                DB::table('bookings')->where('id', $book_id)->update(['diff' => $date_diff. ' day(s)']);
                if($date_diff <= 0){
                DB::table('bookings')->where('id', $book_id)->update(['status' => 'Inactive', 'status_state' =>'Inactive']);
                if($b_status == 'Inactive'){
                    $Cars = DB::select("SELECT car_id FROM bookings WHERE status='Inactive'");
                    foreach($Cars as $details){
                        $id = $details->car_id;
                        //also working
                        // DB::update("UPDATE cars SET car_status='Available' WHERE car_id='$id'");
                        DB::table('cars')->where('car_id', $details->car_id)->update(['car_status' => 'Available']);
                    }
                }
                }
            }

            // for adding days to date

            // foreach($bookings as $d){
            //     $return = Carbon::createFromFormat('Y-m-d H:m:s', $d->created_at);
            //     $date = $return->addDays($d->hire_duration);
            // }


            return view('/admin/index', compact('clients','cars','rented_cars','bookings','rented_cars_today','notifications','Cars'));
        }
  
        return redirect("login")->withSuccess('You are not allowed to access this page..Login first');
    }
    //filter bookings
    public function filter(Request $request){
        $request->validate([
            "from"=>'required',
            "to"=>'required']
        );
        $clients = DB::table("clients")->count();
        $cars = DB::table("cars")->count();
        $notifications = Booking::where('status_state','Pending approval..')->count();
        $rented_cars = DB::table("bookings")->count();

        $today = date("Y-m-d");
            $rented_cars_today = DB::table("bookings")->where('updated_at','=',$today)->count();

        $from =$request->from;
        $to =$request->to;
        //also working well but has issues with displaying the updated_at column
        // $bookings = Booking::where('updated_at','>=',$from)->where('booked_to','<=',$to)->get();
        $bookings = DB::select("SELECT * FROM bookings WHERE updated_at >='$from' AND booked_to<='$to'");

        return view('admin/index',compact('bookings','clients','cars','rented_cars','rented_cars_today','notifications'));
    }
    //add new cars
    public function add(Request $request){

        $random = substr(($request->car_brand),0,3). random_int(10000,99999);
        $request->validate(
            [
                "car_image"=>"required|image|mimes:jpeg,png,jpg,gif,svg",
                "car_name"=>"required",
                "car_brand"=>"required",
                "car_type"=>"required",
                "car_price"=>"required",
            ],
            [
                "car_image.required"=>"Please select an image",
                "car_name.required"=>"Provide the car name",
                "car_brand.required"=>"Select the car brand",
                "car_type.required"=>"Select the car type",
                "car_price.required"=>"Enter the car price",
            ]
            );
            $file = $request->file('car_image');
        $fileName = date('YmdHi').$file->getClientOriginalName();
        $file-> move(public_path('/images'), $fileName);
        // $request->_car_image->storeAs('public/images', $fileName);
        date_default_timezone_set('Africa/Nairobi');
        $cars = new Car();
        $cars->car_id = $random;
        $cars->car_brand = $request->car_brand;
        $cars->car_type = $request->car_type;
        $cars->car_name = $request->car_name;
        $cars->car_image = $fileName;
        $cars->car_status = "Available";
        $cars->car_price = $request->car_price;
        $cars->save();

        return redirect('/admin/index')->with('success',"Car added successfully");
    }
    //approve booking
    public function approve($booking_id){
        $row = DB::select("SELECT * FROM bookings WHERE booking_id='$booking_id'");
        foreach($row as $rows){
            if($rows->status_state == 'Approved'){
                $message = "Booking already approved ";
                return redirect('admin/index')->with('message',$message);
            }elseif($rows->status_state == 'Cancelled'){
                $message = "Sorry!!...Cannot approve a cancelled booking";
                return redirect('admin/index')->with('message',$message);
            }else{
                DB::update("UPDATE bookings SET status_state='Approved' WHERE booking_id='$booking_id'");
                return redirect('admin/index');
            }
        }
    }
    //cancel booking
    public function cancel($booking_id){
        DB::update("UPDATE bookings SET status='Inactive',status_state='Cancelled' WHERE booking_id='$booking_id'");
        $book = DB::select("SELECT * FROM bookings WHERE booking_id='$booking_id'");
        foreach($book as $data){
       
           DB::update("UPDATE cars SET car_status='Available' WHERE car_id='$data->car_id'");
        }
        return redirect('admin/index');
    }
    public function Logout() {
        //made some changes here it was Session::flush();
        Session()->flush();
        Auth::logout();
  
        return Redirect('login');
    }
}

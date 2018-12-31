<?php

namespace App\Http\Controllers;

use App\Biodata;
use App\Mail\UserMail;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use Carbon\Carbon;

class BioDataController extends Controller
{
    public function index(){

    }
    public function create(){
        return view('Upload');
    }
    public  function store(Request $request){

        //validate the data
        $this->validate($request,[
            'email' =>'required|string|max:191|unique:users',
            'first_name'=>'required|string|max:191',
            'last_name'=>'required|string|max:191',
            'last_name'=>'required|string|max:191',
            'address'=>'required|string|max:191',
            'phone'=>'required|string|max:191',
            'email'=>'required|string|max:191',
        ]);

        $user_id = $this->UserCreate($request);
        //created a user
        if($user_id){
            //after user is created
            $biodata = Biodata::create([
               'first_name' => $request->input('first_name'),
               'middle_name' => $request->input('middle_name'),
               'last_name' => $request->input('last_name'),
               'highest_degree' => $request->input('highest_degree'),
               'completed_date' => $request->input('completed_date'),
               'organization' => $request->input('organization'),
               'address' => $request->input('address'),
               'phone' => $request->input('phone'),
               'email' => $request->input('email'),
               'skills' => $request->input('skills'),
               'rating' => $request->input('rating'),
               'interest' => json_encode($request->input('interest')),
               'github' => $request->input('github'),
               'linkedIn' => $request->input('linkedIn'),
               'experience' => $request->input('experience'),
               'awards_title' => $request->input('awards_title'),
               'awards_year' => $request->input('awards_year'),
               'awards_organization' => $request->input('awards_organization'),
               'reference_name' => $request->input('reference_name'),
               'reference_contact' => $request->input('reference_contact'),
               'reference_associated' => $request->input('reference_associated'),
                'user_id' => $user_id
            ]);
        };
        return redirect()->route('login')->with('verified', true);

    }
    public function UserCreate($request){
        $pass = Str::random();
        $user = User::create([
            'name' => $request->input('first_name') . ' ' . $request->input('middle_name') . ' ' . $request->input('last_name'),
            'email' => $request->input('email'),
            'password' => Hash::make($pass),
            'email_verified_at'=> Carbon::now()->toDateTimeString()
        ]);
        $email = new UserMail($user,$pass);
        Mail::send($email);
        return $user->id;
    }
}

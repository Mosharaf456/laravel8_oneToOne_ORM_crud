<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Rules\MaxValue100;
use App\Models\Profile;
use Illuminate\Support\Facades\Validator;

class UsersController extends Controller
{
    
    public function index()
    {
    //   $users= User::paginate(1);
    //   return view('users.index', compact('users') );
      
        return view('users.index', [
            'users' => User::all()
            // 'users' => User::paginate(1)
        ]);
    }
    public function create()
    {
        return view('users.create');
    }
    public function store(Request $request)
    {
        //form  validation
        // https://laravel.com/docs/8.x/validation#using-rule-objects
        // https://vee-validate.logaretm.com/v3/guide/rules.html#rules

        $rules = [
            'firstname' => ['required' , 'min:3', 'max:20'] ,
            'lastname' => 'required |min:3 |max:20' ,
            'email' => 'required | email|unique:users' ,
            // laravel convention of custom validation
            'phone' => ['required' ,'numeric' ,new MaxValue100] ,
            'date_of_birth' => 'required |date' ,
            'user_name' => 'required | alpha_num|unique:users' ,
            'password' => 'required |confirmed:password_confirmation' ,
            'peofile_pic' =>  'required',
            'bio'=> 'required',
            'address' => 'required'
        ];
        $messages = [
            'firstname.required' => 'Enter your first name :(',
            'firstname.min' => 'First name should be minimum length 3 !!'

        ];
        //From  validations ways

        // $this->validate($request,$rules ,$messages );
        // request()->validate($rules ,$messages);
        // $request->validate($rules ,$messages);
        // 
        $validator= Validator::validate($request->all(),$rules,$messages);

        // Another way
        // $validator= Validator::make($request->all(),$rules,$messages);
        // if( $validator->fails())
        // {
        //     return back()->withErrors($validator)->withInput();
        // }

      
       $user= User::create([
           'firstname' => request('firstname'),
           'lastname' => request('lastname'),
           'email' => request('email'),
           'phone' => request('phone'),
           'date_of_birth' => request('date_of_birth'),
           'user_name' => request('user_name'),
       ]);

       $user->profile()->create([
        'peofile_pic' => request('peofile_pic'),
        'bio' => request('bio'),
        'address' => request('address')
       ]);

       //to check errors
        // dd(request()->all());
        // return back();

        return redirect('/users');
    }

    public function show($id)
    {
        $user = User::find($id);
        return view('users.show' , compact('user'));
    }

    public function edit($id)
    {
        $user = User::find($id);
        return view('users.edit',compact('user'));
    }
        
    public function update($id)
    {
        $user = User::find($id);
        // firstname lastname email phone date_of_birth user_name
            // peofile_pic  bio  address
            
        $rules = [
            'firstname' => ['required' , 'min:3', 'max:20'] ,
            'lastname' => 'required |min:3 |max:20' ,
            'email' => 'required | email|unique:users,id,{$id}' ,
            // laravel convention of custom validation
            'phone' => ['required' ,'numeric' ,new MaxValue100] ,
            'date_of_birth' => 'required |date' ,
            'user_name' => 'required | alpha_num|unique:users,id,{$id}' ,
            'password' => 'required |confirmed:password_confirmation' ,
            'peofile_pic' =>  'required',
            'bio'=> 'required',
            'address' => 'required'
        ];
        request()->validate($rules);

        // $country_code = request('code'); //+880
        // $phone = request('phone');//74569298
        // $final_phone = $country_code . $phone;

        $user->update([
            'firstname' =>  request('firstname'),
            'lastname' => request('lastname'),
            'email' => request('email'),
            'phone' => request('phone'),
            'date_of_birth' =>request('date_of_birth') ,
            'user_name' =>  request('user_name'),
            

        ]);
        $user->profile->update([
            'peofile_pic' => request('peofile_pic'),
            'bio' => request('bio'),
            'address' => request('address')
        ]);


        return redirect('/users');
    }
    public function destroy($id)
    {
        $user = User::find($id);
        $user->profile->delete();
        $user->delete();
        return redirect('/users');
    }
}

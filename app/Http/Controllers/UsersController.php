<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Profile;

class UsersController extends Controller
{
    
    public function index()
    {
        return view('users.index', [
            'users' => User::all()
        ]);
    }
    public function create()
    {
        return view('users.create');
    }
    public function store(Request $request)
    {
        //form  validation
        // https://laravel.com/docs/5.8/validation
        // https://vee-validate.logaretm.com/v3/guide/rules.html#rules
        $this->validate($request, [
            'firstname' => ['required' , 'min:3', 'max:20'] ,
            'lastname' => 'required |min:3 |max:20' ,
            'email' => 'required | email ' ,
            'phone' => 'required |numeric' ,
            'date_of_birth' => 'required |date' ,
            'user_name' => 'required | alpha_num' ,
            'password' => 'required |confirmed:password_confirmation' ,
            'peofile_pic' =>  'required',
            'bio'=> 'required',
            'address' => 'required'


        ]);
        // ['Fno' => 'numeric|min:2|max:5', 'Lno' => 'numeric|min:2']
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
    //    dd(request()->all());

    //    Profile::create([
    //        'peofile_pic' => request('peofile_pic'),
    //        'bio' => request('bio'),
    //        'address' => request('address'),
    //        'owner_id' => $user->id

    //    ]);
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

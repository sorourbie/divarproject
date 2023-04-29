<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
namespace App\Http\Controllers;
//use App\Http\Controllers\validator;

use App\Models\Users;
class HomeController extends Controller
{
    public function register()
    {

        Users::create([


            'UserName'=> request('UserName'),
            'Password'=> request('Password'),
            'FirstName'=> request('FirstName'),
            'LastName'=> request('LastName'),
        ]);







        $validator=validator::make(request()->all() ,
            [
                'UserName'=>'required|min:5|max:15',
                'Password'=>'required',


            ]);


        if($validator->fails())
        {

            return redirect()->back()->withErrors($validator);
        }

    }
}

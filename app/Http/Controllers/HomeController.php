<?php

namespace App\Http\Controllers;
use App\Http\Requests\RegisterRequest;
use Illuminate\Http\Request;
// namespace App\Http\Controllers;
//use App\Http\Controllers\validator;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;
use App\Models\Users;
class HomeController extends Controller
{
    public function register()
    {
        


        $validator=validator::make(request()->all() ,
            [
                'UserName'=>'required|min:5|max:15',
                'Password'=>'required',
                'FirstName'=>'required|min:5|max:15',
                'LastName'=>'required|min:5|max:15',
            ]);


        if($validator->fails())
        {

            return redirect()->back()
                             ->withErrors($validator)
                             ->withInpt(request()->all());
        }


        $user= Users::create([


            'UserName'=> request('UserName'),
            'Password'=> request('Password'),
            'FirstName'=> request('FirstName'),
            'LastName'=> request('LastName'),
        ]);

    if ($user){
        Session::flush(['message','اطلاعات با موفقیت ثبت شد ']);
        return redirect('/ulist');
    }

    }

}

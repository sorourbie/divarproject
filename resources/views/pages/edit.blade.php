@extends('layouts.master')

@section('title')
    DivarEdit
    @endsection

    @section('content')

<!DOCTYPE html>
    <html>
    <head>
        <title>Registration Form</title>
        <style type="text/css">
            body {
                background-color: #f2f2f2;
            }
            form {
                background-color: #ff0000;
                padding: 20px;
                width: 400px;
                margin: 0 auto;
                border-radius: 10px;
                box-shadow: 0px 0px 10px #888888;
            }
            label {
                display: block;
                margin-bottom: 10px;
                color: #fff;
                font-weight: bold;
            }
            input[type="text"], input[type="password"] {
                padding: 5px;
                width: 100%;
                border-radius: 5px;
                border: none;
                margin-bottom: 20px;
            }
            input[type="submit"]{
                background-color:#fff ;
                color:#ff0000 ;
                border:none ;
                padding :5px ;
                border-radius :5px ;
            }
            input[type="submit"]:hover{
                background-color:#ff0000 ;
                color:#fff ;
            }

        </style>
    </head>
    <body>
    @if($errors->all())
            <div class="alert alert-danger" role="alert">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif


<main id="main">
    <section id="featured" class="featured">
        <div class="container">
            <form style="margin-top:100px" method="POST" action="/admin/users/update/{{$user->UserID}}">

                @csrf
                @method('put')
                <div class="form-group">
                    <label for="UserName">UserName</label>
                    <input type="text" class="form-control" id="text" name="UserName" value="{{old('UserName')}}">
                    @error('UserName')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>


                <div class="form-group">
                    <label for="password">Password </label>
                    <input type="password" class="form-control" id="Password" name="Password" >
                    @error('Password')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>


                <div class="form-group"  style="margin-top:5px">
                    <label for="confirm"> Repassword </label>
                    <input type="password" class="form-control" id="confirm" name="confirm">
                    @error('confirm')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>



                <div class="form-group"  style="margin-top:20px">
                    <label for="FirstName">Name </label>
                    <input type="text" class="form-control" id="text" name="FirstName"value="{{old('FirstName')}}">
                    @error('FirstName')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>



                <div class="form-group"  style="margin-top:20px">
                    <label for="LastName"> LastName </label>
                    <input type="text" class="form-control" id="text" name="LastName" value="{{old('LastName')}}">
                    @error('LastName')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>


                <button type="submit"   style="margin-top:20px" >Register</button>
            </form>

        </div>
    </section>
</main>
    </body>
    <br>
    <br>
    <br>
    <br>
    <br>
@endsection
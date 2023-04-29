@extends('layouts.master')

@section('title')
    DivarRegister
    @endsection

    @section('content')
{{--        <br>--}}
{{--        <br>--}}
{{--        <br>--}}
{{--        <br>--}}
{{--        <br>--}}
{{--<!DOCTYPE html>--}}
{{--<html>--}}
{{--<head>--}}
{{--    <title>Registration Form</title>--}}
{{--    <style type="text/css">--}}
{{--        body {--}}
{{--            background-color: #f2f2f2;--}}
{{--        }--}}
{{--        form {--}}
{{--            background-color: #ff0000;--}}
{{--            padding: 20px;--}}
{{--            width: 400px;--}}
{{--            margin: 0 auto;--}}
{{--            border-radius: 10px;--}}
{{--            box-shadow: 0px 0px 10px #888888;--}}
{{--        }--}}
{{--        label {--}}
{{--            display: block;--}}
{{--            margin-bottom: 10px;--}}
{{--            color: #fff;--}}
{{--            font-weight: bold;--}}
{{--        }--}}
{{--        input[type="text"], input[type="password"] {--}}
{{--            padding: 5px;--}}
{{--            width: 100%;--}}
{{--            border-radius: 5px;--}}
{{--            border: none;--}}
{{--            margin-bottom: 20px;--}}
{{--        }--}}
{{--        input[type="submit"]{--}}
{{--            background-color:#fff ;--}}
{{--            color:#ff0000 ;--}}
{{--            border:none ;--}}
{{--            padding :5px ;--}}
{{--            border-radius :5px ;--}}
{{--        }--}}
{{--        input[type="submit"]:hover{--}}
{{--            background-color:#ff0000 ;--}}
{{--            color:#fff ;--}}
{{--        }--}}

{{--    </style>--}}
{{--</head>--}}
{{--<body>--}}

{{--<form action="#" method="post">--}}
{{--    <label for="username">UserName:</label>--}}
{{--    <input type="text" id="username" name="username" required>--}}

{{--    <label for="password">Password:</label>--}}
{{--    <input type="password" id="password" name="password" required>--}}

{{--    <label for="firstname">FirstName:</label>--}}
{{--    <input type="text" id="firstname" name="firstname" required>--}}

{{--    <label for="lastname">LastName:</label>--}}
{{--    <input type="text" id="lastname" name="lastname" required>--}}

{{--    <input type ="submit"value ="Submit">--}}
{{--</form>--}}

{{--</body>--}}
{{--</html>--}}
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
@if ($errors->any())
    <div class="alert allert_danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>
                    {{ $error}};
                </li>

            @endforeach
        </ul>
    </div>
@endif



<main id="main">
    <section id="featured" class="featured">
        <div class="container">
            <form style="margin-top:100px" method="POST" action="/admin/users/register">

                @csrf
                <div class="form-group">
                    <label for="UserName">نام کاربری</label>
                    <input type="text" class="form-control" id="text" name="UserName" value="{{old('UserName')}}">
                    @error('UserName')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>


                <div class="form-group">
                    <label for="password">کلمه عبور</label>
                    <input type="password" class="form-control" id="Password" name="Password" >
                    @error('Password')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>


                <div class="form-group"  style="margin-top:5px">
                    <label for="confirm">تکرار کلمه عبور</label>
                    <input type="password" class="form-control" id="confirm" name="confirm">
                    @error('confirm')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>



                <div class="form-group"  style="margin-top:20px">
                    <label for="FirstName">نام </label>
                    <input type="text" class="form-control" id="text" name="FirstName"value="{{old('FirstName')}}">
                    @error('FirstName')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>



                <div class="form-group"  style="margin-top:20px">
                    <label for="LastName">نام خانوادگی </label>
                    <input type="text" class="form-control" id="text" name="LastName" value="{{old('LastName')}}">
                    @error('LastName')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>


                <button type="submit"   style="margin-top:20px" >ثبت نام</button>
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

@extends('layouts.master')

@section('title')
    DivaList
@endsection

@section('content')
    <br>
    <br>
    @if(Session::has('message'))
    <div style="direction:rtl" >
    {{Session::get('message')}}
    <div>
        @endif
    <br>
    <br>
    <table border="6" bgcolor="#b22222" class="table table-striped ">
        <thead>
        <tr>
            <th scope="col">user_id</th>
            <th scope="col">role_id</th>
            <th scope="col">UserName</th>
            <th scope="col">Delete</th>

        </tr>
        </thead>
        <tbody>


        </tr>
        @if(count($users))
            @foreach($users as $user)
                <tr>
                <tr>
                    <td>{{$user->UserID}}</td>
                    <td>{{$user->Role_ID}}</td>
                    <td>{{$user->UserName}}</td>
                    <td>
                    <form action="/admin/users/delete/{{$user->UserID}}" method="POST">
                        @csrf
                        @method('delete')
                    <button style="btn btn-danger btn-sm">Delete</button>
</form></td>
                </tr>
            @endforeach
        @endif

        </tbody>
    </table>

<!-- {{--    @if(count($users))--}}
{{--        {{$users->links()}}--}}
{{--        @endif--}} -->

    <br>
    <br>
    <br>
    <br>
    <br>






    @endsection

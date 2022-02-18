@extends('layouts.app')<br>
@section('content')<br><br>


    <form action="{{route('login')}}" method="post" >
        
        {{csrf_field()}}
        <h2>Log In</h2>
        
        <form class="row g-3">
        <div class="col-md-5 form-group">
            <span><b>Name</b></span>
            <input type="text" name="username" value="{{old('username')}}"class="form-control" placeholder="name">
            @error('username')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="col-md-5 form-group">
            <span><b>Password</b></span>
            <input type="password" name="password" value="{{old('password')}}"class="form-control" placeholder="password">
            @error('password')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

        <br>
        <input type="submit" class="btn btn-success" value="Submit" >
    </form>

@endsection

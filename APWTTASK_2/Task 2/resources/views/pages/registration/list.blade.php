@extends('layouts.app')<br>
@section('content')<br><br>
    <form action="{{route('registration')}}" method="post" >
        {{csrf_field()}}
        <h2>Registration</h2>
        
        <div class="col-md-5 form-group">
            <span><b>Name</b></span>
            <input type="text" name="name" value="{{old('name')}}" class="form-control" placeholder="name">
            @error('name')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="col-md-5 form-group">
            <span><b>Email</b></span>
            <input type="text" name="email" value="{{old('email')}}"class="form-control" placeholder="email">
            @error('email')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="col-md-5 form-group">
            <span><b>Phone</b></span>
            <input type="text" name="phone" value="{{old('phone')}}"class="form-control" placeholder="phone">
            @error('phone')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

        <div class="col-md-5 form-group">
            <span><b>Date of Birth</b></span>
            <input type="date" name="dob" value="{{old('dob')}}" class="form-control" placeholder="Date of Birth">
            @error('dob')
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
        <div class="col-md-5 form-group">
            <span><b>Confirm Password</b></span>
            <input type="password" name="cpassword" value="{{old('confirm password')}}" class="form-control" placeholder="Confirm Password">
            @error('confirm password')
            <span class="text-danger">{{$message}}</span>
             @enderror
        </div>
        <br>
        <input type="submit" class="btn btn-success" value="Submit" >
    </form>
@endsection

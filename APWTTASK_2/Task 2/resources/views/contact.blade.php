
@extends('layouts.app')
@section('content')
<h2>To Contact us</h2>
<h6> You can contact any of the team members via this form </h6>

<form action="{{route('contact')}}"  method="post" >
        {{csrf_field()}}
        
        <div class="col-md-4 form-group">
            <span><b>Name</b></span>
            <input type="text" name="name" value="{{old('name')}}" class="form-control" placeholder="name">
            @error('name')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="col-md-4 form-group">
            <span><b>Email</b></span>
            <input type="text" name="email" value="{{old('email')}}"class="form-control" placeholder="email">
            @error('email')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="col-md-4 form-group">
            <span><b>Phone</b></span>
            <input type="text" name="phone" value="{{old('phone')}}"class="form-control" placeholder="phone">
            @error('phone')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div><br>
        <div class="col-md-4 form-group">
            <span><b>Message</b></span>
            <input type="text" name="message" value="{{old('message')}}"class="form-control" placeholder="message">
            @error('message')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <br>
        <input type="submit" class="btn btn-success" value="Submit" >
    </form>

    <h4> Otherwise-</h4>
<h6> Address: Bashundhara R/A,Dhaka</h6>
<h6>Phone Number : 01827439742</h6>

@endsection

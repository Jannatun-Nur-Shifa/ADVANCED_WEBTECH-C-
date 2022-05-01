@extends('layouts.adminapp')
@section('sells')


<h2>CREATE ORDER</h2>
<form action="{{route('orderCreate')}}" class="form-group" method="post">
    <!-- Cross Site Request Forgery-->
    {{csrf_field()}}
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="col-md-4 form-group">
        <span>Id</span>
        <input type="text" name="id" value="{{old('id')}}"class="form-control">
        @error('id')
            <span class="text-danger">{{$message}}</span>
        @enderror
    </div>
    <div class="col-md-4 form-group">
        <span>Price</span>
        <input type="text" name="price" value="{{old('price')}}" class="form-control">
    </div>
    <div class="col-md-4 form-group">
        <span>Quantity</span>
        <input type="text" name="quantity" value="{{old('quantity')}}" class="form-control">
    </div>
    <div class="col-md-4 form-group">
        <span>Customer Name</span>
        <input type="text" name="cname" value="{{old('cname')}}" class="form-control">
        @error('phone')
            <span class="text-danger">{{$message}}</span>
        @enderror
    </div>
    <div class="col-md-4 form-group">
        <span>Phone</span>
        <input type="text" name="phone" value="{{old('phone')}}" class="form-control">
        @error('phone')
            <span class="text-danger">{{$message}}</span>
        @enderror
    </div>
    <div class="col-md-4 form-group">
        <span>Address</span>
        <input type="text" name="address" value="{{old('address')}}" class="form-control">
        @error('phone')
            <span class="text-danger">{{$message}}</span>
        @enderror
    </div>
    <input type="submit" class="btn btn-success" value="Add" >                  
</form>
@endsection
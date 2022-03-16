@extends('layouts.sells_manapp')
@section('man')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    

</head>
<body>
<div class="container">
  <div class="row">
    <div class="col-2">
          
      <div class="sidebar">
        <a  href="#home">Home</a>
        <a href="{{route('productList')}}">PRODUCT LIST</a>
        <a href="">CUSTOMER'S ORDER</a>
        <a href="{{route('orderCreate')}}">ORDER'S DELIVERY</a>
      </div>
    </div>
    <div class="col-sm">
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="{{URL('image/S-1.png')}}" alt="First slide" height="400" width="20">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="{{URL('image/S-2.png')}}" alt="Second slide" height="400" width="20">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="{{URL('image/S-3.png')}}" alt="Third slide" height="400" width="20">
    </div>
  </div>
</div>
    </div>
  </div>
</div><br>

	
</body>
</html>
@endsection

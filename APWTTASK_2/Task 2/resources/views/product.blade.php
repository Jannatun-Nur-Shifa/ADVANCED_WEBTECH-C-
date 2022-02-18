@extends('layouts.app')
@section('content')

<br>

<div class="container">
  <div class="row">
    <div class="col-sm">
    <div class="card" style="width: 18rem; background-color: #FCBB00">
  <img class="card-img-top" src="{{URL('image/A.jpg')}}" alt="Card image cap" height="250" width="100">
  <div class="card-body">
    <h5 class="card-title"></h5>
    <p class="card-text"><h3>{{$p1}}</h3>
                        <ul>
                        @foreach($info1 as $n1)
                        <li><h4>{{$n1}}</h4></li>
                        @endforeach
                        </ul>
                      </p>
    
  </div>
</div><br>
    </div>


    <div class="col-sm">
    <div class="card" style="width: 18rem; background-color:  #FCBB00">
  <img class="card-img-top" src="{{URL('image/B.jpg')}}" alt="Card image cap" height="250" width="100">
  <div class="card-body">
    <h5 class="card-title"></h5>
    <p class="card-text"><h3>{{$p2}}</h3>
                        <ul>
                        @foreach($info2 as $n2)
                        <li><h4>{{$n2}}</h4></li>
                        @endforeach
                        </ul> 
                      </p>

  </div>
</div>
    </div>


    <div class="col-sm">
      <div class="card" style="width: 18rem; background-color:  #FCBB00">
  <img class="card-img-top" src="{{URL('image/C.jpg')}}" alt="Card image cap" height="250" width="100">
  <div class="card-body">
    <h5 class="card-title"></h5>
    <p class="card-text"><h3>{{$p3}}</h3>
                        <ul>
                        @foreach($info3 as $n3)
                        <li><h4>{{$n3}}</h4></li>
                        @endforeach
                      </ul>
                    </p>
    
  </div>
</div>
    </div>
    </div>
  </div>
</div>
<br>

@endsection 

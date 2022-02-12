@extends('layouts.app')
@section('content')
<h1>This is our Team</h1>
<div>
<h3>{{$t1}}</h3>
    <ul>
      @foreach($perinfo1 as $per1)
      <li><h7>{{$per1}}</h7></li>
      @endforeach
      </ul>

</div>
<div>
<h3>{{$t2}}</h3>
    <ul>
      @foreach($perinfo2 as $per2)
      <li><h7>{{$per2}}</h7></li>
      @endforeach
      </ul>

</div>
<div>
<h3>{{$t3}}</h3>
    <ul>
      @foreach($perinfo3 as $per3)
      <li><h7>{{$per3}}</h7></li>
      @endforeach
      </ul>
</div
<div>
<h3>{{$t4}}</h3>
    <ul>
      @foreach($perinfo4 as $per4)
      <li><h7>{{$per4}}</h7></li>
      @endforeach
      </ul>
</div>



@endsection


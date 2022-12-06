@extends('layout')

@section('content')
<!-- @if (session('islogin'))
        <div class="alert alert-success">
            {{ session('islogin') }}
        </div>
    @endif -->
@if (session('notAllowed'))
        <div class="alert alert-danger">
            {{ session('notAllowed') }}
        </div>
    @endif
    <div id="runningtext">
              <marquee behavio="scroll" scrollamount="2" onmouseover="this.stop() ;" onmouseout="this.start() ;" direction="right">NEURO`FAMILY</marquee> 
              </div>
<h1 class='text-white mt-5'>Welcome To Neuro | Official</h1>





@endsection

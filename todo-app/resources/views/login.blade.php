@extends('layout')

@section('content')
<form action="{{route('login.post')}}" method='POST' class="io">
  @csrf
<div class="screen-1">
    <img class="logo" src="{{asset('assets/img/nvrd.jpg')}}" alt="" srcset="">
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    @if (session('failedlogin'))
        <div class="alert alert-danger">
            {{ session('failedlogin') }}
        </div>
    @endif
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    @if (session('notAllowed'))
        <div class="alert alert-danger">
            {{ session('notAllowed') }}
        </div>
    @endif
  <div class="password">
    <label for="username">Username</label>
    <div class="sec-2" >
      <ion-icon name="mail-outline"></ion-icon>
      <input class="pas" type="text" name="username" placeholder="" style="border-radius:8px; width: 200px; height: 30px border: black;" />
    </div>
  </div>
  <div class="password">
    <label for="password">Password</label>
    <div class="sec-2">
      <ion-icon name="mail-outline"></ion-icon>
      <input class="pas" type="password" name="password" placeholder=""style="border-radius:8px; width: 200px; height: 30px"/>
      <ion-icon class="show-hide" name="eye-outline"></ion-icon>
    </div>
  </div>
  <button type="submit" class="login">Login</button>
  <div class="footer"><a href="/register">Sign up</a><span>Forgot Password?</span></div>
</div>
</form>
@endsection
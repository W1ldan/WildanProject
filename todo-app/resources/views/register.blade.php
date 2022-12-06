@extends('layout')

@section('content')
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form action="{{route('register.post')}}" method="POST">
  @csrf
<div class="screen-1">
<img class="logo" src="{{asset('assets/img/nvrd.jpg')}}" alt="" srcset="">
  <div class="email">
    <label for="email">Name/your email</label>
    <div class="sec-2">
      <ion-icon name="mail-outline"></ion-icon>
      <input type="email" name="email" placeholder=""style="border-radius:8px; width: 200px; height: 30px"/>
    </div>
  </div>
  <div class="username">
    <label for="username">Username</label>
    <div class="sec-2">
      <ion-icon name="lock-closed-outline"></ion-icon>
      <input class="pas" type="text" name="username" placeholder=""style="border-radius:8px; width: 200px; height: 30px"/>
      <ion-icon class="show-hide" name="eye-outline"></ion-icon>
    </div>
  </div>
  <div class="name">
    <label for="name">Nama Lengkap</label>
    <div class="sec-2">
      <ion-icon name="lock-closed-outline"></ion-icon>
      <input class="pas" type="text" name="name" placeholder=""style="border-radius:8px; width: 200px; height: 30px"/>
      <ion-icon class="show-hide" name="eye-outline"></ion-icon>
    </div>
  </div>
  <div class="password">
    <label for="password">Password</label>
    <div class="sec-2">
      <ion-icon name="lock-closed-outline"></ion-icon>
      <input class="pas" type="password" name="password" placeholder=""style="border-radius:8px; width: 200px; height: 30px"/>
      <ion-icon class="show-hide" name="eye-outline"></ion-icon>
    </div>
  </div>
  <button class="login">Submit</button>
  <div class="footer"><a href="/">Sign in</a><span>Forgot Password?</span></div>
</div>
</form>
@endsection

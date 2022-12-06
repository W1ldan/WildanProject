@extends('layout')

@section('content')
    <form action="/store" method="post" style="max-width: 500px; margin: auto;">
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
</ul>
</div>
@endif
    @csrf
     <div class="d-flex flex-column">
        <label class="text-white">Title</label>
        <input type="text" name="tittle">
</div>
     <div class="d-flex flex-column">
        <label class="text-white">Date</label>
        <input type="date" name="date">
</div>
     <div class="d-flex flex-column">
        <label class="text-white">Description</label>
        <textarea name="description" cols="30" rows="10"></textarea>
</div>
        <button type="submit" class="btn btn-primary" style="margin-top: 5px;">Kirim <i class="fa-sharp fa-solid fa-paper-plane"></i></button>
        
</form>
@endsection
        

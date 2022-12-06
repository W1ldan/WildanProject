@extends('layout')

@section('content')
    <form action="/update/{{$todo['id']}}" method="post" style="max-width: 500px; margin: auto;">
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
    @method('PATCH')
     <div class="d-flex flex-column">
        <label>Title</label>
        <input type="text" name="tittle" value="{{$todo['tittle']}}">
</div>
     <div class="d-flex flex-column">
        <label>Date</label>
        <input type="date" name="date"value="{{$todo['date']}}">
</div>
     <div class="d-flex flex-column">
        <label>Description</label>
        <textarea name="description" cols="30" rows="10">{{$todo['description']}}</textarea>
</div>
        <button type="submit" class="btn btn-primary" style="margin-top: 5px;">Kirim</button>
        
</form>
@endsection
        
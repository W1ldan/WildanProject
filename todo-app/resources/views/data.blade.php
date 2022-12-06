@extends('layout')

@section('content')
@if (session('successUpdate'))
<div class="alert alert-success">
    {{session('successUpdate')}}
</div>
@endif  
@if (session('successDelete'))
<div class="alert alert-success">
    {{session('successDelete')}}
</div>
@endif 
@if (session('done'))
<div class="alert alert-success">
    {{session('done')}}
</div>
@endif 
<div class="container mb-5 pb-3">
    <table class="table table-success table-striped table-bordered">
        <tr>
            <td>No.</td>
            <td>Squad Tag</td>
            <td>Squad Name</td>
            <td>History</td>
            <td>Status</td>
            <td>Settings</td>
</tr>
@php 
    $no = 1;
@endphp

@foreach ($todos as $todo)
<tr>
            <td>{{ $no++ }}</td>
            <td>{{ $todo['tittle'] }}</td>
            <td>{{ $todo['description'] }}</td>
            <td>{{ \Carbon\Carbon::parse($todo['date'])->format('j F, Y') }}</td>
            <td>{{ $todo['status'] == 1 ? 'Complated' : 'On-Process' }}</td>
            <td class="d-flex"><a href="/edit/{{$todo['id']}}" class="btn btn-primary me-2">Edit</a> 
        <form action="/destroy/{{$todo['id']}}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger me-2"> Hapus </button>
    </form>
    @if ($todo['status'] == 0)
    <form action="/complated/{{$todo['id']}}" method="POST">
    @csrf
    @method('PATCH')
    <button type="submit" class=" btn btn-success"><i class="fa-solid fa-circle-check"></i></button>
    </form>
    </td>

     @endif     
</tr>
@endforeach
</table>
</div>

@endsection
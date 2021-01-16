@extends('layouts.app')
@section('content')
<div class ="w-100 h-100 d-flex justify-content-center align-items-center">
    <div class="text center" style="width: 40%">
<h1 class = "display-1 text-white">Change your task {{$todo->title}}</h1>

<form action="{{route('todo.update', $todo->id)}}" method="POST"> 
@csrf
@method('PUT')
<div class="input-group mb-3 w-100">
    <input type="text" class ="form-control form-control-lg" name="title" value="{{$todo->title}}" aria-labels="Recipient's username" araia-describedby="button-addon2">
    <div class ="input-group-append">
        <button class = "btn btn-success" type="submit">DONE</button>
</div>
</div>
</form>


</div>
    </div>



@endsection

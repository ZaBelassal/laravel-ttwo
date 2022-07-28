@extends('layouts.app')
@section('title','welcome')

@section('content')
<div class="container">
    <form method="POST" action="{{route('traitement')}}">
        <div class="form-control">
            <input type="text" id="name" name="name" placeholder="Enter your Name">
            @error('name')
                <div class="text-danger">{{$message}}</div>
            @enderror
        </div>

        <div class="form-control">
            <input type="number" id="number" name="number"placeholder="Enter your number">
            @error('number')
                <div class="text-danger">{{$message}}</div>
            @enderror
        </div>
        <div class="form-control btn btn-primary">
            Validate your form 
        </div>
    </form>
</div>
@endsection

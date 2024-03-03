@extends('template.ui')

@section('content')
    <h1>About</h1>

    <h6>{{ auth()->user()->name }}</h6>
@endsection
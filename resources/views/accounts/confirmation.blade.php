@extends('master')

@section('content')
    <h1>Congrats! You made your account</h1>
    <h3>See details</h3>
    {{ $data['email'] }}
    <a href="{{ url('login') }}">Login</a>
@endsection

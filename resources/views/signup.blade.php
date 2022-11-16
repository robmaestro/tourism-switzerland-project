@extends('master')

@section('title', 'Home')
@section('content')
    <p>Sign Up</p>
    @if (session('status'))
        <div class="alert alert-danger">
            {{ session('status') }}
        </div>
    @endif

    <form method="post" action="/signup" style="display:flex; flex-direction:column; width:200px; gap:10px;">
        @csrf
        <input type="text" name="name" id="name" placeholder="Name">
        <input type="text" name="email" id="email" placeholder="Email">
        <input type="password" name="password" id="password" placeholder="Password">
        <button type="submit">Submit</button>
    </form>
    <div>
        <p>Already have an account? <a href="{{ url('login') }}">Login</a>
    </div>
@endsection

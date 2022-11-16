@extends('master')

@section('title', 'Login')
@section('content')
    <p>Sign In</p>
    @if (session('status'))
        <div class="alert alert-danger">
            {{ session('status') }}
        </div>
    @endif

    <form method="post" action="/login" style="display:flex; flex-direction:column; width:200px; gap:10px;">
        @csrf

        <input type="text" name="email" id="email" placeholder="Email">
        <input type="password" name="password" id="password" placeholder="Password">
        <button type="submit">Submit</button>
    </form>
    <div>
        <p>Don't have an account? <a href="{{ url('signup') }}">Sign up</a></p>
    </div>
@endsection

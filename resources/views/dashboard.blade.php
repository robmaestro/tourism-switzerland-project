@extends('master')

@section('title', 'Home')
@section('content')
    <div>
        <h1>This is the dashboard</h1>

    </div>
    @php
        $user = Auth::user();
    @endphp

    <ul>
        <li>Name: {{ $user->name }}</li>
        <li>Email: {{ $user->email }}</li>
    </ul>

    <form action="/update" method="post">
        @csrf
        <input type="text" name="name" value={{ $user->name }} />
        <input type="text" name="email" value={{ $user->email }} />
        <button type="submit">Submit</button>
    </form>
@endsection

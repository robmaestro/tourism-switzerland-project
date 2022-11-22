<?php 
use Illuminate\Support\Facades\Auth;

@php
    $destinations = Auth::getData();
@endphp

<h1>test{{$data['dest_name']}}</h1>


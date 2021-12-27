@extends('layouts.auth')

@section('content')
<h1>Login</h1>
<form action="{{ route('login.store') }}" method="POST">
    <input type="email" name="email" placeholder="Email"/>
    <input type="password" name="password" placeholder="Password"/>
    @csrf
    <button>Login</button>
</form>

@endsection

@extends('layouts.auth')

@section('content')
<h1>Register</h1>
<form action="{{ route('register.store') }}" method="POST">
    <input type="text" name="name" placeholder="Name"/>
    <input type="email" name="email" placeholder="Email"/>
    <input type="password" name="password" placeholder="Password"/>
    @csrf
    <button>Register</button>
</form>
@endsection

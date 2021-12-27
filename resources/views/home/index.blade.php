@extends('layouts.app')

@section('content')
<div> Halo {{ auth()->user()->name }}</h1>

<div>
    <form method="post" action="{{ route('logout') }}">
        @csrf
        @method('POST')
        <button>Logout</button>
    </form>

</div>
<form method="post" action="{{ route('home.broadcaster') }}">
        @csrf
        @method('POST')
        <button>Send Private Message to user by [id]: 1</button>
</form>
<a href="{{ route('home.event') }}">Subscribe: Broadcaster private channel</a>
@endsection

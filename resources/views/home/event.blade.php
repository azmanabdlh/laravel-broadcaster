@extends('layouts.app')

@section('content')
@php
    $user = auth()->user();
@endphp
<h1> Halo {{ $user->name }} | Broadcaster</h1>
<a href="{{ route('home.index') }}">Home</a>

<div x-data="{
    messages: [],
    init() {
        window.Echo.private('message.{{ $user->id }}')
            .listen('PrivateMessageCreated', (e) => {
                console.log('Event trigger');
                this.messages.push(e.message);
            });
    }
}">
    <ul>
        <template x-for="message in messages">
            <li> Event: <span x-text="message"></span></li>
        </template>
    </ul>
</div>
@endsection

@extends('layouts.app')


@section('content')
<h1>Broadcaster</h1>
<div x-data="{
    messages: [],
    init() {
        console.log('DOMLoaded');

        window.Echo.channel('message')
            .listen('MessageCreated', (res) => {
                this.messages.push(res.message);
            });
    }
}">
<ul>
    <template x-for="message in messages">
        <li>Event: <span x-text="message"></span></li>
    </template>
</ul>
</div>
@endsection


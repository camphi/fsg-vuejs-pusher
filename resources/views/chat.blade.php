@extends('layouts.app')

@section('content')
    <div id="app" class="container">
        <notification-log :messages="messages"></notification-log>
        <notification-composer v-on:messagesent="addMessage"></notification-composer>
    </div>
@endsection


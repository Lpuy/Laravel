@extends('layouts.app')

@section('content')
    <h1>Всі повідомлення</h1>
        @foreach($data as $message)
        <div class="alert alert-info">
            <h3>{{$message->subject}}</h3>
            <p>From: {{$message->name}}</p>
            <p>{{$message->created_at}}</p>
            <a href="{{route('contact-id', $message->id)}}">
                <button class="btn btn-warning">Детальніше</button></a>
        </div>
    @endforeach
@endsection

@section('title')
    Всі повідомлення
@endsection


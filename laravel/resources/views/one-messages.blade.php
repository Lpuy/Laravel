@extends('layouts.app')

@section('content')
    <h1> {{$data->subject}}</h1>

    <div class="alert alert-info">
        <p> {{$data->message}}</p>
        <p>From: {{$data->name}}</p>
        <p>Email: {{$data->email}}</p>
        <p>{{$data->created_at}}</p>
        <a href="{{route('contact-update', $data->id)}}">
            <button class="btn btn-primary">Редагувати</button>
        </a>
        <a href="{{route('contact-delete', $data->id)}}">
            <button class="btn btn-danger">Видалити</button>
        </a>
    </div>

@endsection

@section('title')
{{$data->subject}}
@endsection


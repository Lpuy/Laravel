@extends('layouts.app')

@section('content')
    <h1>  Обновлення запису</h1>

    <form action="{{ route('contact-update-submit', $data->id) }}" method="post">
        @csrf
        <div class="form-group">
            <label for="name">Ваше ім'я</label>
            <input type="text" name="name" value="{{ $data->name }}" placeholder="Ваше ім'я" id="name" class="form-control">
        </div>
        <div class="form-group">
            <label for="email">Ваш емеіл</label>
            <input type="text" name="email" value="{{ $data->email }}" placeholder="Ваш емеіл" id="email" class="form-control">
        </div>
        <div class="form-group">
            <label for="subject">Тема повідомлення</label>
            <input type="text" name="subject" value="{{ $data->subject }}" placeholder="Тема повідомлення" id="subject" class="form-control">
        </div>
        <div class="form-group">
            <label for="message">Повідомлення</label>
            <textarea rows="3" name="message" class="form-control" id="message"
                      placeholder="Ваше повідомлення">{{ $data->message }}</textarea>
        </div>
        <div class="button mt-2">
            <button type="submit" class="btn btn-success">Обновити</button>
        </div>
    </form>
@endsection

@section('title')
  Обновлення запису
@endsection


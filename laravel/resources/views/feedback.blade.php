@extends('layouts.app')

@section('content')
    <h2>Ваше повідомлення : </h2>

    <form action="{{route('feedback-form')}}" method="post">
        @csrf
        <div class="form-group">
            <label for="name">Ваше ім'я*</label>
            <input type="text" name="name" placeholder="Ваше ім'я" id="name" class="form-control">
        </div>
        <div class="form-group">
            <label for="email">Ваш емеіл</label>
            <input type="text" name="email" placeholder="Ваш емеіл" id="email" class="form-control">
        </div>
        <div class="form-group">
            <label for="subject">Номер телефону</label>
            <input type="text" name="number" placeholder="Номер телефону" id="number" class="form-control" pattern="([+][3][8]){0,1}[0][0-9]{9}">
        </div>
        <div class="form-group">
            <label for="text">Повідомлення*</label>
            <textarea rows="3" name="text" class="form-control" id="text"
                      placeholder="Ваше повідомлення"></textarea>
        </div>
        <div class="button mt-2">
            <button type="submit" class="btn btn-success">Відправити</button>
        </div>
    </form>

@endsection

@section('title')
    Залишити повідомлення
@endsection


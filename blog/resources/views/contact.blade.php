@extends('layouts.app')

@section('content')
    <h1>Контакти :</h1>
    <p>Why do we use it?
        It is a long established fact that a reader will be distracted by the readable content of a page when looking at
        its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as
        opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing
        packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum'
        will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by
        accident, sometimes on purpose (injected humour and the like).</p>

    <form action="/contact/submit" method="post">
        @csrf
        <div class="form-group">
            <label for="name">Ваше ім'я</label>
            <input type="text" name="name" placeholder="Ваше ім'я" id="name" class="form-control">
        </div>
        <div class="form-group">
            <label for="email">Ваш емеіл</label>
            <input type="text" name="email" placeholder="Ваш емеіл" id="email" class="form-control">
        </div>
        <div class="form-group">
            <label for="subject">Тема повідомлення</label>
            <input type="text" name="subject" placeholder="Тема повідомлення" id="subject" class="form-control">
        </div>
        <div class="form-group">
            <label for="message">Повідомлення</label>
            <textarea rows="3" name="message" class="form-control" id="message"
                      placeholder="Ваше повідомлення"></textarea>
        </div>
        <div class="button mt-2">
            <button type="submit" class="btn btn-success">Відправити</button>
        </div>
    </form>
@endsection

@section('title')
    Контактu
@endsection


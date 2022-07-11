@extends('layouts.app')

@section('content')
    <style>
        #formGroupExampleInput {
            @error('numberPhone')
             border-color: red;
        @enderror
}
        #formGroupExampleInput2 {
            @error('password')
            border-color: red;
        @enderror
}
    </style>

    <div id="login_form">
        <form method="post" action="{{route('submit-login')}}">
           @csrf
            <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label">Номер телефону</label>
                <input type="text" name="numberPhone" class="form-control" id="formGroupExampleInput"
                       placeholder="0123456789 or +380123456789"
                       pattern="([+][3][8]){0,1}[0][0-9]{9}">
                @error('numberPhone')
                {{$message}}
                @enderror
            </div>
            <div class="mb-3">
                <label for="formGroupExampleInput2" class="form-label">Парль</label>
                <input type="password" name="password" class="form-control" id="formGroupExampleInput2"
                       placeholder="8-20 символів">
            </div>
            @error('password')
            {{$message}}
            @enderror

            <button type="submit" class="btn btn-primary">Вхід</button>
        </form>
        <br>
        <a href="{{route('register')}}">Реєстрація</a>
 </div>
@endsection

@section('title')
    Логін
@endsection

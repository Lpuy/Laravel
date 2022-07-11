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
        <form action="{{route('submit-register')}}" method="post">
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
            <div class="mb-3">
                <label for="formGroupExampleInput2" class="form-label">Повторіть парль</label>
                <input type="password" name="password_confirmation" class="form-control" id="formGroupExampleInput2"
                       placeholder="8-20 символів">
            </div>
            @error('password_confirmation')
            {{$message}}
            @enderror
            <div class="mb-3">
                <label for="formGroupExampleInput3" class="form-label">Ім'я</label>
                <input type="text" name="name" class="form-control" id="formGroupExampleInput2"
                       placeholder="Необ'язкове поле">
            </div>
            <div class="mb-3">
                <label for="formGroupExampleInput3" class="form-label">Email</label>
                <input type="email" name="email" class="form-control" id="formGroupExampleInput2"
                       placeholder="Необ'язкове поле">
            </div>
            <button type="submit" class="btn btn-primary">Заєструватися</button>

        </form>
        <br>
        <a href="{{route('login')}}">Ви вже зареєстровані?</a>
    </div>
@endsection

@section('title')
    Реєстрація
@endsection

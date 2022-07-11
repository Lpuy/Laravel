@extends('admin.layouts.admin_app')

@section('content')
    <style>
        #formGroupExampleInput {
            @error('email')
                border-color: red;
        @enderror



        }

        #formGroupExampleInput2 {
            @error('password')
               border-color: red;
        @enderror



        }
    </style>
    <h2>Вхід в адмінку : </h2>
    <div id="admin_login_form">
        <form method="post" action="{{route('admin_login_submit')}}">
            @csrf
            <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label">Login</label>
                <input type="text" name="email" class="form-control" id="formGroupExampleInput"
                       placeholder="Email?">
                @error('email')
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
    </div>
@endsection

@section('title')
    Логін Адміністратора
@endsection

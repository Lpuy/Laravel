@extends('layouts.app')

@section('content')
    <style>
        #formGroupExampleInput {
            @error('email')
             border-color: red;
        @enderror
}
        #formGroupExampleInput2 {
            @error('text')
            border-color: red;
        @enderror
}
    </style>

    <div id="login_form">
        <form action="{{route('submit-contact-mail')}}" method="post">
            @csrf
            <div class="mb-3">
                <label for="formGroupExampleInput3" class="form-label">Email</label>
                <input type="email" name="email" class="form-control" id="formGroupExampleInput2"
                       placeholder="example@mail.com">
           @error('email')
                {{$message}}
                @enderror
            </div>
            <div class="mb-3">
                <div class="form-group">
                    <label for="text">Повідомлення</label>
                    <textarea rows="3" name="text" class="form-control" id="text"
                              placeholder="Ваше повідомлення"></textarea>
                </div>
                @error('text')
                {{$message}}
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Залишити повідомлення на емеіл</button>

        </form>
        <br>
    </div>
@endsection

@section('title')
   Залишити повідомлення
@endsection

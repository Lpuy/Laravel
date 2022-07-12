@extends('admin.layouts.admin_app')

@section('content')

    @if(isset($goods))
        <h3>Редагувати товар #{{$goods->id}}:</h3>
    @else
        <h3>Добавити товар : </h3>
    @endif

    <form class="form-floating" action="{{isset($goods) ? route('goods.update', $goods->id) : route('goods.store')}}"
          method="POST" enctype="multipart/form-data">

        @csrf

        @if(isset($goods))
            @method('PUT')
        @endif

        <div class="form-floating mb-3">
            <input name="name" type="text" class="form-control" id="floatingInputValue" placeholder="Назва товару"
                   @error('name')style="border-color: red" @enderror value="{{$goods->name}}">
            <label for="floatingInputValue">Назва товару</label>
        </div>
        @error('name')
        {{$message}}
        @enderror
        <div class="form-floating mb-3">
            <textarea name="object" class="form-control" id="floatingTextarea2"
                      style="height: 75px ;@error('object') border-color: red @enderror">{{$goods->object}}</textarea>
            <label for="floatingTextarea2">Опис</label>
        </div>
        @error('object')
        {{$message}}
        @enderror
        <div class="form-floating mb-3">
            <textarea name="text" class="form-control" id="floatingTextarea2"
                      style="height: 125px ; @error('text') border-color: red @enderror">{{$goods->text}}</textarea>
            <label for="floatingTextarea2">Основний текс</label>
        </div>
        @error('text')
        {{$message}}
        @enderror
        <div class="form-floating mb-3">
            <input name="price" type="number" class="form-control" id="floatingInput" value="{{$goods->price}}"
                   style="@error('price') border-color: red @enderror">
            <label for="floatingInput">Ціна</label>
        </div>
        @error('price')
        {{$message}}
        @enderror
        <div class="form-floating mb-3">
            <input name="amount" type="number" class="form-control" id="floatingInput" value="{{$goods->amount}}"
                   style="@error('amount') border-color: red @enderror">
            <label for="floatingInput">Залишок</label>
        </div>
        @error('amount')
        {{$message}}
        @enderror
        <div class="mb-3">
            <label for="formFile" class="form-label">Default file input example</label>
            <input name="image" class="form-control" type="file" id="formFile">
            @error('image')
            {{$message}}
            @enderror
        </div>
        <div class="d-grid gap-2 col-6 mx-auto">
            <button class="btn btn-primary" type="submit">Підтвердити зміни</button>
        </div>
    </form>
@endsection

@section('title')
    @if(isset($goods))
        Редагувати товар {{$goods->id}}
    @else
        Добавити товар
    @endif
@endsection

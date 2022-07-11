@extends('admin.layouts.admin_app')

@section('content')
    <style>
        #formGroupExampleInput1 {
            @error('name')
             border-color: red;
                @enderror
            @error('object')
             border-color: red;
                 @enderror
            @error('text')
             border-color: red;
                 @enderror
             @error('price')
             border-color: red;
                 @enderror
             @error('amount')
             border-color: red;
                 @enderror
        }
    </style>
    <form action="{{route('goods.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Name</label>
            <input name="name" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Name">
            @error('name')
            {{$message}}
            @enderror
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Object</label>
            <input name="object" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Object">
            @error('object')
            {{$message}}
            @enderror
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
            <textarea name="text" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            @error('text')
            {{$message}}
            @enderror
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Price</label>
            <input name="price" type="number" class="form-control" id="exampleFormControlInput1" placeholder="Price">
            @error('price')
            {{$message}}
            @enderror
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Amount</label>
            <input name="amount" type="number" class="form-control" id="exampleFormControlInput1" placeholder="Amount">
            @error('amount')
            {{$message}}
            @enderror
        </div>
        <div class="mb-3">
            <label for="formFile" class="form-label">Default file input example</label>
            <input name="image" class="form-control" type="file" id="formFile">
            @error('image')
            {{$message}}
            @enderror
        </div>
        <div class="d-grid gap-2 col-6 mx-auto">
            <button class="btn btn-primary" type="submit">Добавити</button>
        </div>
    </form>

@endsection

@section('title')
    Добавити пост
@endsection

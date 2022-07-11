@extends('admin.layouts.admin_app')

@section('content')
  <div>
    <h1>Всі товари</h1>
    <div><h1><a href="{{route('goods.create')}}">Add</a></h1></div>
    <hr>
    @foreach($goods as $good)
        <div>Name:........{{$good->name}} <br>
            Object:..........{{$good->object}} <br>
            Text:..........{{$good->text}} <br>
            Price:..........{{$good->price}} $<br>
            Amount:..........{{$good->amount}} <br>
            Created_at:..........{{$good->created_at}}</div>
        <div>
            <a href="{{route('goods.edit', $good->id)}}">Edit</a>
        </div>
        <div>
            <form action="{{route('goods.destroy', $good->id)}}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit">Delete</button>
            </form>
        </div>
        <hr>
    @endforeach
{{$goods->links()}}
    </div>
@endsection

@section('title')
    Всі товари
@endsection

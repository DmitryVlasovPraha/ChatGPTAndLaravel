@extends('layouts.app')

@section('content')
<div class="card-columns">

    @foreach($brands as $brand)
    <div class="card">
        <img class="card-img-top" src="..." alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title">{{$brand->title}}</h5>
            <p class="card-text">{{$brand->content}}</p>
            <button><a href="{{ route('brand.edit', ['brand' => $brand->id]) }}">Перейти</a></button>
        </div>
    </div>
    @endforeach

</div>
@endsection
